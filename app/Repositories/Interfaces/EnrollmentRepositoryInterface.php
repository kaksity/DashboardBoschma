<?php

namespace App\Repositories\Interfaces;

interface EnrollmentRepositoryInterface
{
    public function getEnrollmentsFiltered($getEnrollmentFilterOptions);
    public function getEnrollmentById($id);
    public function getEnrollmentByFilterOptions($filterOptions);
    public function createEnrollmentRecord($data);
    public function updateEnrollmentRecord($updateEnrollmentRecordPayloadOptions);
    public function deleteEnrollmentRecord($deleteEnrollmentRecordPayloadOptions);
}
