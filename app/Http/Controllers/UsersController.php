<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {

        return view('index', [
            'users' => User::all()
        ]);
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email
        ]);

        return "User successfully registered";
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email
        ]);

        return "User successfully updated";
    }

    public function delete(int $id)
    {
        $user = User::findOrFail($id);
        return view('users.delete', [
            'user' => $user
        ]);
    }

    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return "User successfully deleted";
    }
}
