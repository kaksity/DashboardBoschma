<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgrammesController extends Controller
{
    
    public function showFormal()
    {
        return view('website.programmes.formal');
    }

    public function showInformal()
    {
        return view('website.programmes.informal');
    }

    public function showBasic()
    {
        return view('website.programmes.basic');
    }
}
