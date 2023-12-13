<?php

namespace App\Http\Controllers\WebApp\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Website\UpdateNumberOfImpactsRequest;
use App\Repositories\Interfaces\NumberOfImpactRepositoryInterface;

class NumberOfImpactsController extends Controller
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

        return view('webapp.website.number-of-impacts', [
            'numberOfImpacts' => $numberOfImpacts
        ]);
    }

    public function store(UpdateNumberOfImpactsRequest $request)
    {
        $numberOfImpacts = $this->numberOfImpactRepositoryInterface->getNumberOfImpacts();

        $numberOfImpacts = $numberOfImpacts[0] ?? null;

        if (is_null($numberOfImpacts)) {
            $this->numberOfImpactRepositoryInterface->createNumberOfImpactRecord(
                $request->validated()
            );
        } else {
            $this->numberOfImpactRepositoryInterface->updateNumberOfImpactRecord([
                'entity_id' => $numberOfImpacts->id,
                'data' => $request->validated()
            ]);
        }

        return back()->with('success', 'Number of impacts was updated successfully');
    }
}
