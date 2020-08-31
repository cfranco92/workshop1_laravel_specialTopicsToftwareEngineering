<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

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
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return back();
    }

    public function destroy(User $user) {
        $user->delete();

        // return back();
        return redirect()->route('user.index');

    }
}
