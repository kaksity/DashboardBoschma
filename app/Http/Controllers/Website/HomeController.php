<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\NumberOfImpactRepositoryInterface;

class HomeController extends Controller
{
    public function __construct(
        private NumberOfImpactRepositoryInterface $numberOfImpactRepositoryInterface
    )
    {}

    public function index()
    {
        $numberOfImpacts = $this->numberOfImpactRepositoryInterface->getNumberOfImpacts();

        $numberOfImpacts = $numberOfImpacts[0] ?? null;
     
        if (is_null($numberOfImpacts)) {
            $numberOfImpacts = $this->numberOfImpactRepositoryInterface->createNumberOfImpactRecord([
                'formal_sector_beneficiaries' => 0,
                'bhcpf_Beneficiaries' => 0,
                'health_care_providers' => 0,
                'impacted_lives' => 0,
            ]);
        }

        return view('website.home.index', [
            'numberOfImpacts' => $numberOfImpacts
        ]);
    }
}
