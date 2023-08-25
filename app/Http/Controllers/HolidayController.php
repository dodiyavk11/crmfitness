<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;
use DataTables;

class HolidayController extends Controller
{
    //
    public function index(){
        return view('admin.holiday');
    }
    public function fetchAll(Request $request)
    {

        $post = Holiday::all();
        
        // dd($post);
        return Datatables::of($post)
            ->addIndexColumn()
            ->addColumn('check', function () {

                $check = '<div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck2">
                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                </div>';



                return $check;
            })
            
            ->addColumn('action', function ($row) {

                $btn="";
                $btn = $btn.' <a href="javascript:void(0);" class="action-icon holieditIcon " id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#Add_holidays"> <i class="mdi mdi-square-edit-outline"></i></a>';

                $btn = $btn . '  <a href="javascript:void(0);" class="action-icon holideleteIcon" id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#danger-holiday"> <i class="mdi mdi-delete"></i></a>';


                return $btn;
            })
            
            
            
            ->rawColumns(['action', 'check'])
            ->make(true);

        return view('admin.userdetails', compact('post'));
    }
    public function add_holiday(Request $request){
        // dd($request->all());
        $formattedDate = \Carbon\Carbon::createFromFormat('m/d/Y', $request->holiday_date)->format('Y-m-d');
        // dd($formattedDate);
        Holiday::create([
            'holiday_name'=> $request->holiday_name,
            'holiday_date'=> $formattedDate,
            
        ]);
        return response()->json([
            'status' => 200,
            'message'=> 'add_created',
        ]);
        // return view('admin.holiday');
    }
    public function edit_holiday(Request $request){
        // dd($request->all());
        $id = $request->id;
        $emp = Holiday::where('id', $id)->first();
        return response()->json($emp);

    }
}
