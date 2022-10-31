<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teams = Team::all();
        $users = User::all();
        return view('dashboards.user.show')->with(compact('users','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $naam = $request->get('name');
        $email = $request->get('email');
        $wachtwoord = bcrypt($request->get('password'));
        $afdelingsid = $request->get('afdelingsid');

        $request->validate([
            'name' => ['required', 'string', 'max:50', 'unique:users,name'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'afdelingsid' => ['required'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);

        $newuser = new User();
        $newuser->name = $naam;
        $newuser->email = $email;
        $newuser->password = $wachtwoord;
        $newuser->current_team_id = $afdelingsid;
        $newuser->save();

        return redirect('dashboard/user/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('dashboard.user.create');
    }
}
