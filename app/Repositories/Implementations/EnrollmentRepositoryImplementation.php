<?php

namespace App\Repositories\Implementations;

use App\Models\Enrollment;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;

class EnrollmentRepositoryImplementation implements EnrollmentRepositoryInterface
{
    public function __construct(private Enrollment $enrollment)
    {}

    public function getEnrollmentsFiltered($getEnrollmentFilterOptions)
    {
        $perPage = $getEnrollmentFilterOptions['per_page'] ?? 100;
        $lgaId = $getEnrollmentFilterOptions['lga_id'] ?? null;
        $wardId = $getEnrollmentFilterOptions['ward_id'] ?? null;
        $facilityId = $getEnrollmentFilterOptions['facility_id'] ?? null;
        $categoryId = $getEnrollmentFilterOptions['category_id'] ?? null;
        return $this->enrollment->with([
            'ward',
            'category',
            'maritalStatus',
            'facility'
        ])->when($facilityId, function ($model, $facilityId) {
            $model->where([
                'facility_id' => $facilityId
            ]);
        })->when($categoryId, function ($model, $categoryId) {
            $model->where([
                'category_id' => $categoryId
            ]);
        })->when($lgaId, function ($model, $lgaId) {
            $model->where([
                'lga_id' => $lgaId
            ]);
        })->when($wardId, function ($model, $wardId) {
            $model->where([
                'ward_id' => $wardId
            ]);
        })->orderBy('full_name', 'ASC')->paginate($perPage);
    }
    public function getEnrollmentById($id)
    {
        return $this->enrollment->with([
            'ward',
            'category',
            'maritalStatus',
            'facility'
        ])->where([
            'id' => $id
        ])->first();
    }
    public function getEnrollmentByFilterOptions($filterOptions)
    {
        return $this->enrollment->where($filterOptions)->get();
    }
    public function createEnrollmentRecord($data)
    {
        return $this->enrollment->create($data);
    }
    public function updateEnrollmentRecord($updateEnrollmentRecordPayloadOptions)
    {
        $entityId = $updateEnrollmentRecordPayloadOptions['entity_id'];
        $data = $updateEnrollmentRecordPayloadOptions['data'];

        return $this->enrollment->where([
            'id' => $entityId
        ])->update($data);
    }
    public function deleteEnrollmentRecord($deleteEnrollmentRecordPayloadOptions)
    {
        $entityId = $deleteEnrollmentRecordPayloadOptions['entity_id'];

        return $this->enrollment->where([
            'id' => $entityId
        ])->delete();
    }
}
