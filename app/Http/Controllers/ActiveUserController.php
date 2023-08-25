<?php

namespace App\Http\Controllers;

use App\Models\active_user;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\setting_plan;
use App\Models\history;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use DataTables;
use App\Models\Activities;

class ActiveUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $customer = User::all();
        $users = active_user::where('status', 1)->get();
        $modifiedUsers = [];
        $includedUserIds = [];

        foreach ($users as $user) {
            foreach ($customer as $item) {
                if ($item->id == $user->user_id && !in_array($item->id, $includedUserIds)) {
                    $modifiedUsers[] = [
                        'customer' => $item,
                        'active' => $user,
                    ];
                    $includedUserIds[] = $item->id; // Add the included user ID to the list
                    break; // No need to continue checking for this active user
                }
            }
        }



        return response()->json($modifiedUsers);
    }

    public function getuserentry(Request $request)
    {
        // dd($request->all());
        $users = active_user::where('user_id', $request->id)->get();
        // dd($request->all());
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $apiKey = '03ErNxUXRtN0U1XnJ68JmzrUUEJq7wMS';
        $country = 'IN'; // Country code for India

        $response = Http::get("https://calendarific.com/api/v2/holidays", [
            'api_key' => $apiKey,
            'country' => $country,
            'year' => date('Y'),
        ]);

        $holidays = $response->json()['response']['holidays'];

        $upcomingHolidays = [];
        $currentDate = date('Y-m-d'); // Get the current system date automatically

        foreach ($holidays as $holiday) {
            if ($holiday['date']['iso'] >= $currentDate) {
                $upcomingHolidays[] = $holiday;
            }
        }

        return response()->json($upcomingHolidays);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->entryid) {


            $count = active_user::where('user_id', $request->entryid)
                ->whereNull('solarium')
                ->count();
            if ($count > 0) {
                $customer1 = setting_plan::where('user_id', $request->entryid)->first();
                // dd($customer1->id);
                if ($customer1->no_entries == 0) {
                    return response()->json([
                        'status' => 400,
                        'message' => $customer1,
                    ]);
                }
                $total = $customer1->no_entries - 1;

                if ($total < 0) {

                    $update = setting_plan::where('id', $customer1->id)->update(['no_entries' => 0,]);
                } else {
                    $update = setting_plan::where('id', $customer1->id)->update(['no_entries' => $total,]);
                }
            }
            // dd($count);
            $data = active_user::create([
                'user_id' => $request->entryid,
                'key_locker' => $request->key,
                'status' => 1,
            ]);

            $customer = User::find($data->user_id);
            Activities::create([
                'msg' => 'Entrance of ' . $customer->name . ' ' . $customer->surname . ' with Key ' . $request->key,
                'user_id' => $customer->id,
            ]);
            return response()->json([
                'status' => 200,
                'message' => $customer,
            ]);
            // dd($request->all());
        } elseif ($request->exitid) {
            $emp =  active_user::where('id', $request->exitid)->first();
            // dd($emp->user_id);
            if ($request->key == $emp->key_locker) {
                // dd('hi');
                $empData = [
                    'key_locker' => $request->key,
                    'status' => 0,
                ];
                $count = active_user::where('user_id', $emp->user_id)
                    ->whereNull('solarium')
                    ->count();
                // dd($count);
                if ($count == 1) {
                    $get_data = active_user::where('user_id', $emp->user_id)
                        ->whereNull('key_locker')
                        ->get();

                    foreach ($get_data as $item) {
                        $update = active_user::where('id', $item->id)->update(['status' => 0,]);
                        if ($update == true) {
                            $get1 =  active_user::where('id', $item->id)->first();
                        }
                        $user = User::find($emp->user_id);
                        Activities::create([
                            'msg' => 'Solarium was destoryed of ' . $user->name . ' ' . $user->surname . ' for ' . $item->solarium . ' minutes',
                            'user_id' => $user->id,
                        ]);
                        history::create([
                            'user_id' => $user->id,
                            'solarium' => $item->solarium,
                            'status' => 0,
                            'start_time' => $get1->created_at,
                            'end_time' => $get1->updated_at,
                        ]);
                        active_user::destroy($get1->id);
                    }
                }
                $check = active_user::where('id', $request->exitid)->update($empData);
                if ($check == true) {
                    $get =  active_user::where('id', $request->exitid)->first();
                }


                // dd($get);
                $data = history::create([
                    'user_id' => $get->user_id,
                    'key_locker' => $get->key_locker,
                    'status' => $get->status,
                    'start_time' => $get->created_at,
                    'end_time' => $get->updated_at,
                ]);
                active_user::destroy($get->id);
                $customer = User::find($data->user_id);
                $setting = setting_plan::where('user_id', $data->user_id)->get();
                //
                // dd();
                Activities::create([
                    'msg' => 'Departure of ' . $customer->name . ' ' . $customer->surname . ' with Key ' . $request->key,
                    'user_id' => $customer->id,
                ]);
                return response()->json([
                    'status' => 200,
                    'message' => $customer,
                ]);
            } else {
                // dd('hierorrr');
                return response()->json([
                    'status' => 400, // You can use any appropriate HTTP status code for errors
                    'message' => 'Validation failed',
                ]);
            }
        }
        // $emp = User::find($request->id);


    }

    /**
     * Display the specified resource.
     */
    public function entryshow(Request $request)
    {
        //

        $id = $request->id;
        // dd($id);
        $customer = User::find($id);
        $orders = setting_plan::where('user_id', $id)->first();
        $last = history::where('user_id', $id)->orderBy('created_at', 'desc')->first();


        // dd($last);
        $data = [
            'user' => $customer,
            'plans' => $orders,
            'last' => $last,
        ];
        // dd($data);
        return response()->json($data);
        // dd($request->all());
    }
    public function exitshow(Request $request)
    {
        $active_user = active_user::find($request->id);
        $id =  $active_user->user_id;
        $last = history::where('user_id', $id)->orderBy('created_at', 'desc')->first();


        $customer = User::find($id);
        $orders = setting_plan::where('user_id', $id)->first();
        $data = [
            'user' => $customer,
            'plans' => $orders,
            'active' => $active_user,
            'last' => $last,
        ];
        // dd($data);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function birthday()
    {

        $currentDate = Carbon::now();

        $upcomingBirthdays = DB::table('users')
            ->select('id', 'name', 'dob', 'surname')
            ->whereRaw("DATE_FORMAT(dob, '%m-%d') >= DATE_FORMAT('$currentDate', '%m-%d')")
            ->orderByRaw("DATE_FORMAT(dob, '%m-%d')")
            ->get();

        // dd($upcomingBirthdays);
        return Datatables::of($upcomingBirthdays)
            ->addIndexColumn()

            ->make(true);
        return view('admin.dashboard', compact('post'));
    }

    public function activity()
    {
        $data = Activities::orderBy('id', 'desc')->get();
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function addsolarium(Request $request)
    {
 
        $emp = setting_plan::where('user_id', $request->id)->get();
        $solarium = $request->solarium;
        $user = User::find($request->id);
        foreach ($emp as $item) {
            $total = $item->solarium_min - $request->solarium;

            if ($item->solarium_min == 0) {
                return response()->json([
                    'message' => $user,
                    'solarium' => $emp,
                    'status' => 400,
                ]);
            }
            else if($solarium > $item->solarium_min){
                return response()->json([
                    'message' => $user,
                    'solarium' => $emp,
                    'status' => 100,
                ]);
            }
        }
        if ($total < 0) {
            $total = 0;
            setting_plan::where('user_id', $request->id)->update(['solarium_min' => $total]);
        } else {
            setting_plan::where('user_id', $request->id)->update(['solarium_min' => $total]);
            active_user::create([
                'user_id' => $user->id,
                'solarium' => $solarium,
                'status' => 1,
            ]);
            Activities::create([
                'msg' => 'Solarium was Created  of ' . $user->name . ' ' . $user->surname . ' for ' . $solarium . ' minutes',
                'user_id' => $user->id,
            ]);
        }
        $emp = setting_plan::where('user_id', $request->id)->get();
        return response()->json([
            'message' => $user,
            'solarium1' => $emp,
            'solarium' => $solarium,
            'status' => 200,
        ]);
        // $emp->update($empdata);


        // dd('hi');

        // dd($total);


        // dd('ssfdsfsdfs');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function exitsolarium(Request $request)
    {
        // dd($request->all());

        $emp=active_user::find($request->id);
        // dd($emp->id);

        $user=User::find($emp->user_id);
        // dd($user->id);
        Activities::create([
            'msg' => 'Solarium was destoryed of ' . $user->name . ' ' . $user->surname . ' for ' . $emp->solarium . ' minutes',
            'user_id' => $user->id,
        ]);
        history::create([
            'user_id' => $user->id,
            'solarium' => $emp->solarium,
            'status' => 0,
            'start_time' => $emp->created_at,
            'end_time' => $emp->updated_at,
        ]);
        active_user::destroy($request->id);

        return response()->json([
            'status' => 200,
            'message' => $user,
            'solarium'=>$emp->solarium,
        ]);
        //
    }

    public function paste(Request $req){
        // dd($req->all());

        // $id = $request->id;
        // dd($id);
        $customer = User::where("card_number", $req->id)->first();
        
        if($customer!=null){
              // dd($customer->id);
        $orders = setting_plan::where('user_id', $customer->id)->first();

        // dd($orders);
        $last = history::where('user_id', $customer->id)->orderBy('created_at', 'desc')->first();
        $data = [
            'user' => $customer,
            'plans' => $orders,
            'last' => $last,
        ];
        // dd($data);
        return response()->json($data);
        }
        else{
            return response()->json([
                'status' => 200,
                
            ]);
        }
      
        
    }
}
