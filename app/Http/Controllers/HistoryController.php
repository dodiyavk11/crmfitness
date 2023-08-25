<?php

namespace App\Http\Controllers;

use App\Models\history;
use Illuminate\Http\Request;
use App\Models\Activities;
use App\Models\User;
use App\Models\active_user;




class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = now()->toDateString();

        $count = Activities::whereDate('created_at', $today)
        ->where('msg', 'like', '%Order%')
        ->count();
        // dd($count);
        return response()->json($count);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $card_number)
    {
        $users = User::where('card_number', $card_number)
        ->where('role', 'user')
        ->first();
        $message="User not found";
        if ($users) {
            return view('admin.userdetails', ['users' => $users]);
        } else {
            return view('admin.userdetails', ['message' => $message]);
            
        }
        // if ($users) {
        //     return redirect()->route('user-details')->with('users', $users);
        // } else {
        //     return redirect()->route('user-details')->with('message', $message);
        // }
    }
    public function edit(Request $request, $card_number)
    {
        $users = User::where('card_number', $card_number)
        ->where('role', 'user')
        ->first();
        $message="User not found";
   
        if ($users) {
            return view('admin.dashboard', ['users' => $users]);
        } else {
            return view('admin.dashboard', ['message' => $message]);
            
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $today = now()->toDateString();
        $count = active_user::whereDate('created_at', $today)->count();
        return response()->json($count);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $today = now()->toDateString();

        // Retrieve users with role "user" for today
        $count = User::whereDate('created_at', $today)
            ->where('role', 'user')
            ->count();

        return response()->json($count);


    }

    /**
     * Show the form for editing the specified resource.
     */
  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, history $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(history $history)
    {
        //
    }
}
