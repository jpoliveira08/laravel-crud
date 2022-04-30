<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('users.login');
    }

    function checkLogin(Request $request)
    {
        $this->validate($request, [
        'email' => 'required|max:255|email',
        'contact' => 'required|numeric|digits:9'
        ]);

        $user_data = array(
        'email'  => $request->get('email'),
        'contact' => $request->get('contact')
        );

        if (Auth::attempt($user_data)) {
            return redirect('main/successlogin');
        }

        return back()->with('error', 'Wrong Login Details');
    }

    function successLogin()
    {
        return view('users.list', [
            'users' => User::all(),
            'logged' => true
        ]);
    }
}
