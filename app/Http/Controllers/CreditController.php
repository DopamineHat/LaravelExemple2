<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class CreditController extends Controller
{
    public function updateCredit(Request $request)
    {
    	$user = Auth::user();
    	$user->credit -= 10;
 //   	dd($user->credit);
    	$user->update($request->all());
    	return "credit updated";
    }
}