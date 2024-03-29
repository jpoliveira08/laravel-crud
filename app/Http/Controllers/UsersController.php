<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\FieldRequest;

class UsersController extends Controller
{
    public function list()
    {
        return view('users.list', [
            'users' => User::all()
        ]);
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(FieldRequest $request)
    {
        $validateData = $request->validated();
        User::create($validateData);

        return view('users.list', [
            'users' => User::all()
        ]);
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(FieldRequest $request, int $id)
    {
        $user = User::findOrFail($id);
        $validateData = $request->validated();
        $user->update($validateData);

        return view('users.list', [
            'users' => User::all()
        ]);
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

        return view('users.list', [
            'users' => User::all()
        ]);
    }
}
