<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\setting_plan;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeMail;
use App\Models\active_user;
use DataTables;
use App\Notifications\InactiveUserNotification;
use Illuminate\Support\Facades\Mail;
use App\Notifications\NewUserRegisterNotification;
use App\Models\Activities;
use Carbon\Carbon;

use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    //
    public function index()
    {

        $emps = User::all()->where('role', 'user');
        $notifications = auth()->user()->unreadNotifications;
        return view('admin.userdetails', compact('notifications'))->with('user', $emps);
    }

    public function fetchAll(Request $request)
    {

        $post = User::where('role', 'user')
        ->where('active', '1')
        ->get();
        $emp = setting_plan::all();

        return Datatables::of($post)
            ->addIndexColumn()
            ->addColumn('check', function () {

                $check = '<div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck2">
                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                </div>';



                return $check;
            })
            ->addColumn('solarium', function ($row) {

                $user = setting_plan::where('user_id', $row->id)->first();


                return $user->solarium_min.' min';
            })
            ->addColumn('entry', function ($row) {
                $entry='';
                  $entry = $entry.' <button type="button" class="btn btn-soft-primary rounded-pill btn-sm entryicon" id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#entry-details">start</button>';
                // }



                return $entry;
            })
            ->addColumn('action', function ($row) {

                $btn ='  <a href="javascript:void(0);" class="action-icon viewicon" id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#user-details"> <i class="uil-eye"></i></a>';
                $btn = $btn.' <a href="javascript:void(0);" class="action-icon editIcon " id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#user-modal"> <i class="mdi mdi-square-edit-outline"></i></a>';

                $btn = $btn . '  <a href="javascript:void(0);" class="action-icon deleteIcon" id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#danger-header-modal"> <i class="mdi mdi-delete"></i></a>';


                return $btn;
            })
            ->addColumn('active', function ($row) {
                if ($row->active == "1") {
                    $status = '  <span class="badge badge-success-lighten">Active</span>';
                } else {
                    $status = '  <span class="badge badge-danger-lighten">Inactive</span>';
                }


                return $status;
            })
            ->addColumn('days', function ($row) use ($emp) {

                $anotherData = $emp->where('user_id', $row->id)->first();
                

                    return $anotherData->no_entries." Tickets";
               
              
            })
            ->addColumn('time', function ($row) use ($emp) {
                $anotherData = $emp->where('user_id', $row->id)->first();
            
                if ($anotherData) {
                    $today = now()->startOfDay(); // Start of today (00:00:00)
                    $end_date = Carbon::parse($anotherData->end_date)->startOfDay(); // Start of end_date
                    
                    $daysDifference = $today->diffInDays($end_date, false); // Exclude the current day
            
                    if ($daysDifference < 0) {
                        $daysDifference = 0;
                    }
                    else if($daysDifference == 0) {
                        $daysDifference=1;

                    }
            
                    return $daysDifference . " days";
                }
            
                return " ";
            })
            ->rawColumns(['action', 'check', 'active','entry','days','solarium'])
            ->make(true);

        return view('admin.userdetails', compact('post'));
    }



    public function delete(Request $request)
    {
        $id = $request->id;
        // $emp = User::find($id);

        User::destroy($id);
        return response()->json([
            'status' => 200,
        ]);
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $emp = User::find($id);
        return response()->json($emp);
    }
    public function editnoti(Request $request)
    {
        $id = $request->id;
        if(is_numeric($id)){
            $emp = setting_plan::where('user_id', $id)->first();
        }
        else{
            $user = User::where('email', $id)->first();
            $emp = setting_plan::where('user_id', $user->id)->first();
        }

        return response()->json($emp);
    }
    public function notiedit(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $user = User::where('email', $id)->first();

        return response()->json($user);
    }




    public function showNotifications()
    {

        $notifications = auth()->user()->unreadNotifications;
        // dd($notifications);
        $user=User::where('role', 'user')
        ->where('active', '0')
        ->get();

        return [
            'user' => $user,
            'notifications' => $notifications,
        ];
    }
    public function markNotification(Request $request)
    {
        // {   dd($request->all());
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
    public function add_plans(Request $request)
    {
        // dd($request->all());
        if ($request->user_id == null) {
            $yourArray = $request->fitness;
            $arrayAsString = implode(',', $yourArray);
            if ($request->active == "0" || $request->active == "on") {
                $active = "1";
            } else {
                $active = "0";
            }
            if ($request->mark == "0" || $request->mark=="on") {
                $mark = "1";
            } else {
                $mark = "0";
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'surname' => $request->sname,
                'city' => $request->city,
                'student' => $request->student,
                'gender' => $request->gender,
                'telephone' => $request->telephone,
                'fitness' => $arrayAsString,
                'card_number' => $request->card_number,
                'card_code' => $request->card_code,
                'dob' => $request->dob,
                'note_internal' => $request->internal,
                'note_visible' => $request->visible,
                'active' => $active,
                'wallet_account_status' => $request->wallet,
                'mark_note' => $mark,
            ]);
            // dd($user->id);

            setting_plan::create([
                'user_id' => $user->id,
                'start_date' => $request->start,
                'end_date' => $request->end,
                'price' => $request->price,
                'no_entries' => $request->entries,
                'solarium_min' => $request->solarium,


            ]);

            Activities::create([
                'msg'=> 'Order Created  with '.$user->name.' '.$user->surname,
                'user_id'=>$user->id,
            ]);
            // $user->sendNewUserRegisteredNotification();
            $notification = User::first();
            $notification->notify(new NewUserRegisterNotification($user));
            Mail::to($request->email)->send(new WelcomeMail($user, $request));


            return response()->json([
                'status' => 200,
                'message'=> 'new_user',
            ]);
        } else {
            $emp = User::find($request->user_id);

            $yourArray = $request->fitness;
            $arrayAsString = implode(',', $yourArray);

            if ($request->active == "0" || $request->active == "on") {
                // dd($request->active);
                $active = "1";
            } else {
                $active = "0";
            }
            if ($request->mark == "on") {
                $mark = "1";
            } else {
                $mark = "0";
            }
            $empData = [
                'name' => $request->name,
                'email' => $request->email,
                'surname' => $request->sname,
                'city' => $request->city,
                'student' => $request->student,
                'gender' => $request->gender,
                'telephone' => $request->telephone,
                'fitness' => $arrayAsString,
                'card_number' => $request->card_number,
                'card_code' => $request->card_code,
                'dob' => $request->dob,
                'note_internal' => $request->internal,
                'note_visible' => $request->visible,
                'active' => $active,
                'wallet_account_status' => $request->wallet,
                'mark_note' => $mark,

            ];

            $emp->update($empData);

            $user = setting_plan::where('user_id', $request->user_id)->first();
            if ($user) {
                $empData1 = [

                    'start_date' => $request->start,
                    'end_date' => $request->end,
                    'price' => $request->price,
                    'no_entries' => $request->entries,
                    'solarium_min' => $request->solarium,

                ];
                $user->update($empData1);
            } else {

                setting_plan::create([
                    'user_id' => $request->user_id,

                    'start_date' => $request->start,
                    'end_date' => $request->end,
                    'price' => $request->price,
                    'no_entries' => $request->entries,
                    'solarium_min' => $request->solarium,

                ]);
                Activities::create([
                    'msg'=> 'Order Created  with '.$request->name.' '.$request->surname,
                    'user_id'=>$request->user_id,
                ]);
            }
            return response()->json([
                'status' => 200,
                'message'=> 'edit_user',
            ]);
        }


        // $emp->update($empData);

    }
    public function get_customer_details(Request $request){
        $id = $request->id;
        $customer = User::find($id);
        $orders = setting_plan::where('user_id', $id)->first();
        $data = [
            'user' => $customer,
            'plans' => $orders
        ];
        // dd($data);
        return response()->json($data);
    }
}
