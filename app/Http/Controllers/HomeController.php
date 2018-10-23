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
        $totalcredit = 0;
        $cntpoor = 0;
        $veryrichuser = 0;
        $richcredit = 0;
        $totalrichcredit = 0;
        $richcreditcnt = 0;
        $totalpoorcredit = 0;
        $poorcreditcnt = 0;
        $users = User::all();
        $usercount = User::all()->count();
        $admincount = User::all()->where('type', '=', 'admin')->count();
        $membercount = User::all()->where('type', '=', 'member')->count();
        $userscredit = User::all()->pluck('credit')->toArray();
        foreach ($users as $user)
        {
            $totalcredit += $user->credit;
            if ($veryrichuser < $user->credit)
                $veryrichuser = $user->credit;
            if ($user->credit < 10)
                $cntpoor++;
        }
        sort($userscredit);        
        foreach ($userscredit as $usercredit)
            if ($totalpoorcredit < ($totalcredit / 20))
            {
                $totalpoorcredit += $usercredit;
                $poorcreditcnt++;
            }
        rsort($userscredit);
        foreach ($userscredit as $usercredit)
            if ($totalrichcredit < ($totalcredit / 20))
            {
                $totalrichcredit += $usercredit;
                $richcreditcnt++;
            }
        $richcreditcntpct = round($richcreditcnt / $usercount * 100, 2);
        $poorcreditcntpct = round($poorcreditcnt / $usercount * 100, 2);
        $avgcredit = intval($totalcredit / $usercount);
        $peradmin = round($admincount / $usercount * 100, 2);
        return view('home', compact('users','usercount','totalcredit','admincount','membercount', 'avgcredit', 'peradmin', 'veryrichuser', 'cntpoor', 'cntrich', 'richcredit', 'totalrichcredit', 'richcreditcntpct', 'poorcreditcntpct'));
    }
}