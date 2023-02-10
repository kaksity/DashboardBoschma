<?php

namespace App\Jobs;

use App\Mail\FailedJobMail;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception as PhpSpreadSheetException;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

class EnrollmentUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        private EnrollmentRepositoryInterface $enrollmentRepositoryInterface,
        private $path
        
    )
    {
        //
    }
    public $failOnTimeout = false;
    public $timeout = 120000;
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $spreadsheet = IOFactory::load($this->path);
            $sheet        = $spreadsheet->getActiveSheet();
            $rowLimit    = $sheet->getHighestDataRow();
            $columnLimit = $sheet->getHighestDataColumn();
            $rowRange    = range(2, $rowLimit);
            $columnRange = range('F', $columnLimit);

            $data = array();

            DB::beginTransaction();
            foreach ($rowRange as $row) {
                $this->enrollmentRepositoryInterface->createEnrollmentRecord([
                    'full_name' => $sheet->getCell('A' . $row)->getValue(),
                    'date_of_birth' => $sheet->getCell('B' . $row)->getValue(),
                    'lga' => $sheet->getCell('C' . $row)->getValue(),
                    'ward' => $sheet->getCell('D' . $row)->getValue(),
                    'marital_status' => $sheet->getCell('E' . $row)->getValue(),
                    'gender' => $sheet->getCell('F' . $row)->getValue(),
                    'facility' => $sheet->getCell('G' . $row)->getValue(),
                    'category' => $sheet->getCell('H' . $row)->getValue(),
                    'phone_number' => $sheet->getCell('I' . $row)->getValue(),
                ]);
            }
            DB::commit();
        } catch (PhpSpreadSheetException $e) {
            DB::rollBack();
            $user = auth()->user();
            Mail::to($user->email)->later(now()->addSeconds(5), new FailedJobMail([
                'user' => $user
            ]));
            echo $e;
        }
    }
}
