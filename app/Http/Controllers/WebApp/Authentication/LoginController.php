<?php

namespace App\Http\Controllers\WebApp\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Authentication\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('webapp.authentications.login');
    }

    public function store(LoginRequest $request)
    {
        if (
            !auth()->attempt([
                'email' => $request->email_address,
                'password' => $request->password
            ], $request->remember_me)
        ) {
            return back()->with('status', 'Invalid login credentials');
        }

        return redirect()->route('webapp.dashboards.index');
    }
}
