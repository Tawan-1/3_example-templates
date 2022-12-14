<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class Employeecontrollers extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $read = User::all();

        // return view('home');
         return view('adminpage.adminemployee' , compact('read'));
    }
}
