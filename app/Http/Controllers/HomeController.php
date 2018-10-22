<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = 0;
        $users = User::all();
        $usercount = User::all()->count();
        $admincount = User::all()->where('type', '=', 'admin')->count();
        $membercount = User::all()->where('type', '=', 'member')->count();
        foreach ($users as $user)
        {
            $total += $user->credit;
        }
        return view('home', compact('users','usercount','total','admincount','membercount'));
    }
}