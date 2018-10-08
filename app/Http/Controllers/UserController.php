<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $admins = User::where('type', 'member')->get()->all();
    $users = User::all();
    foreach ($users as $user) {
        echo $user->name . '<br />';
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
    
        return "Utilisateur créé !";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        echo 'Nom :' . $user->name . '<br />';
        echo 'Email :' . $user->email . '<br />';
        echo 'id :' . $user->id . '<br />';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
     //   dd($user);
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        //
        $user->update($request->all());

        $users = User::all();
        return view('edit_byid', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $tmp = new User;
       // $user = $tmp->findOrFail($id);

        $user = User::findOrFail($id);

        $user->delete();
        $users = User::all();
        return view('delete_byid', compact('users'));
    }

    public function destroyForm(User $user)
    {
        return view('destroy', compact('user'));
    }
    public function all()
    {
        $users = User::all();
        return view('users_all', compact('users'));
    }
    public function own()
    {
        $user = Auth()->user();
        return view('profile', compact('user'));
    }
    public function list()
    {
        $users = User::all();
        return view('users_list', compact('users'));
    }
    public function delbyid()
    {
        $users = User::all();
        return view('delete_byid', compact('users'));
    }
    public function edibyid()
    {
        $users = User::all();
        return view('edit_byid', compact('users'));
    }
}
