<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NetworksController extends Controller
{
    
    public function showHealthcareProviders()
    {
        return view('website.networks.health-care-providers');
    }

    public function showMDAs()
    {
        return view('website.networks.mdas');
    }
}
