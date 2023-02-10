<?php

namespace App\Http\Controllers\Web\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Authentication\ChangePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('web.authentications.change-password');
    }

    public function store(ChangePasswordRequest $request)
    {
        $user = auth()->user();
        
        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'Old password is not correct');
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with('success', 'Password was changed successfully');
    }
}
