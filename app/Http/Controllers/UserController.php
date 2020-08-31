<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::latest()->get();
        $users = User::all();

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function show($id) {
        $data = []; //to be sent to the view

        $user = User::findOrFail($id);
        
        $data["title"] = $user->getName();
        $data["user"] = $user;
        
        return view('user.show')->with("data",$data);
    }

    public function create() {
        return view('user.create');
    }


    public function store(Request $request) {
        $request->validate([
            'name'      => ['required'],
            'email'     => ['required', 'email', 'unique:users'],
            'password'  => ['required', 'min:9'],
            'city'      => ['required'],
            'phone'      => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'city' => $request->city,
            'phone' => $request->phone,
            'icon' => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png"
        ]);

        return back()->with('success','Item created successfully!');
    }

    public function destroy(User $user) {
        $user->delete();

        // return back();
        return redirect()->route('user.index');

    }
}
