<?php

namespace App\Http\Controllers\WebApp\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('webapp.authentications.forgot-password');
    }
}
