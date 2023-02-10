<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Enrollments\ListEnrollmentRequest;
use App\Http\Requests\Web\Enrollments\UploadEnrollmentRequest;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
use App\Repositories\Interfaces\FacilityRepositoryInterface;
use App\Repositories\Interfaces\LgaRepositoryInterface;
use App\Repositories\Interfaces\MaritalStatusRepositoryInterface;
use App\Repositories\Interfaces\WardRepositoryInterface;
use App\Jobs\EnrollmentUploadJob;

class EnrollmentsController extends Controller
{
    public function __construct(
        private FacilityRepositoryInterface $facilityRepositoryInterface,
        private MaritalStatusRepositoryInterface $maritalStatusRepositoryInterface,
        private CategoryRepositoryInterface $categoryRepositoryInterface,
        private LgaRepositoryInterface $lgaRepositoryInterface,
        private WardRepositoryInterface $wardRepositoryInterface,
        private EnrollmentRepositoryInterface $enrollmentRepositoryInterface
    ) {
    }

    public function index(ListEnrollmentRequest $request)
    {

        $enrollments = $this->enrollmentRepositoryInterface->getEnrollmentsFiltered($request->safe()->all());

        return view('web.enrollments.view', [
            'enrollments' => $enrollments
        ]);
    }

    public function create()
    {
        return view('web.enrollments.upload');
    }
    public function store(UploadEnrollmentRequest $request)
    {
        $extension = $request->file->getClientOriginalExtension();
        $fileNameToStore = time() . uniqid() . '.' . $extension;

        $path = $request->file->storeAs('public/uploads', $fileNameToStore);

        $path = storage_path("app/{$path}");
        dispatch(new EnrollmentUploadJob($this->enrollmentRepositoryInterface, $path));


        return back()->with(
            'success',
            'Great! Data has been successfully uploaded. Please wait as it might take some time'
        );
    }
}
