<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;



class OpenController extends Controller
{
    public function updateCredit(Request $request)
    {
    	$user = Auth::user();
        if ($user->type == 'member')
    	   $user->credit -= 10;
 //   	dd($user->credit);
    	$user->update($request->all());
    	return "credit updated";
    }

    public function edit_own()
    {
        $user = Auth()->user();
        return view('edit_own', compact('user'));
    }
    public function openUpdate(Request $request)
    {
    	//dd($request->all())
    	$user = Auth::user();
        //
        $user->update($request->all());
        return view('edit_own', compact('user'));
    }
}