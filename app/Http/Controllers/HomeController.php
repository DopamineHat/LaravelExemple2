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
        $cntpoor = 0;
        $richuser = 0;
        $users = User::all();
        $usercount = User::all()->count();
        $admincount = User::all()->where('type', '=', 'admin')->count();
        $membercount = User::all()->where('type', '=', 'member')->count();
        foreach ($users as $user)
        {
            $total += $user->credit;
            if ($richuser < $user->credit)
            {
                $richuser = $user->credit;
            }
            if ($user->credit < 10)
                $cntpoor++;
        }
        $avgcredit = intval($total / $usercount);
        $peradmin = round(($admincount / $usercount * 100), 2);
        return view('home', compact('users','usercount','total','admincount','membercount', 'avgcredit', 'peradmin', 'richuser', 'cntpoor'));
    }
}