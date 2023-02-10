<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\MaritalStatusRepositoryInterface;
use App\Repositories\Interfaces\LgaRepositoryInterface;
use App\Repositories\Interfaces\FacilityRepositoryInterface;
use App\Repositories\Interfaces\WardRepositoryInterface;

class ReportsController extends Controller
{
    public function __construct(
        private FacilityRepositoryInterface $facilityRepositoryInterface,
        private MaritalStatusRepositoryInterface $maritalStatusRepositoryInterface,
        private CategoryRepositoryInterface $categoryRepositoryInterface,
        private LgaRepositoryInterface $lgaRepositoryInterface,
        private WardRepositoryInterface $wardRepositoryInterface
    )
    {}

    public function index()
    {
        $facilities = $this->facilityRepositoryInterface->getFacilities();
        $maritalStatuses = $this->maritalStatusRepositoryInterface->getMaritalStatuses();
        $categories = $this->categoryRepositoryInterface->getCategories();
        $lgas = $this->lgaRepositoryInterface->getLgas();
        $wards = $this->wardRepositoryInterface->getWards();

        return view('web.reports.view', [
            'facilities' => $facilities,
            'maritalStatuses' => $maritalStatuses,
            'categories' => $categories,
            'lgas' => $lgas,
            'wards' => $wards,
        ]);
    }
}
