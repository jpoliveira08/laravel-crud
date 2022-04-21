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

    /**
     * Undocumented function
     *
     * @return void
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email
        ]);

        return "User sucessfully registered";
    }
}
