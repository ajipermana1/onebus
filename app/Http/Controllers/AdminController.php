<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('second.admin.index', [
            'users' => User::all(),
            'title' => 'ADMIN'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('second.admin.create', [
            'title' => 'ADMIN|CREATE',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:5'],
            'username' => ['required', 'min:5', 'unique:users'],
            'email' => ['required', 'email'],


        ]);
        $validateData['password'] = Hash::make($request->password);


        User::create($validateData);

        return redirect('/admin')->with('success', 'New user has been save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('second.admin.detail', [
            'title' => 'ADMIN|DETAIL',
            'user' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('second.admin.edit', [
            'title' => 'ADMIN|EDIT',
            'user' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $rulesEmail = [];
        $rulesUsername = [];


        if ($request->username == $user->username) {
            $rulesUsername = ['required'];
        } else {
            $rulesUsername =  ['required', 'min:5', 'unique:users'];
        }

        if ($request->email == $user->email) {
            $rulesEmail = ['required', 'email'];
        } else {
            $rulesEmail = ['required', 'email', 'unique:users'];
        }

        $rules = [
            'name' => ['required', 'min:5'],
            'username' => $rulesUsername,
            'email' => $rulesEmail

        ];
        $validateData = $request->validate($rules);

        DB::table('users')
            ->where('id', $id)
            ->update($validateData);
        return redirect('/admin')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin')->with('success', 'User has been deleted!');
    }
}