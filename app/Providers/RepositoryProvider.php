<?php

namespace App\Providers;

use App\Repositories\Implementations\CategoryRepositoryImplementation;
use App\Repositories\Implementations\EnrollmentRepositoryImplementation;
use App\Repositories\Implementations\FacilityRepositoryImplementation;
use App\Repositories\Implementations\LgaRepositoryImplementation;
use App\Repositories\Implementations\MaritalStatusRepositoryImplementation;
use App\Repositories\Implementations\MessageRepositoryImplementation;
use App\Repositories\Implementations\NewsRepositoryImplementation;
use App\Repositories\Implementations\WardRepositoryImplementation;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
use App\Repositories\Interfaces\FacilityRepositoryInterface;
use App\Repositories\Interfaces\LgaRepositoryInterface;
use App\Repositories\Interfaces\MaritalStatusRepositoryInterface;
use App\Repositories\Interfaces\MessageRepositoryInterface;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use App\Repositories\Interfaces\WardRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LgaRepositoryInterface::class, LgaRepositoryImplementation::class);
        $this->app->bind(WardRepositoryInterface::class, WardRepositoryImplementation::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepositoryImplementation::class);
        $this->app->bind(FacilityRepositoryInterface::class, FacilityRepositoryImplementation::class);
        $this->app->bind(EnrollmentRepositoryInterface::class, EnrollmentRepositoryImplementation::class);
        $this->app->bind(MaritalStatusRepositoryInterface::class, MaritalStatusRepositoryImplementation::class);
        $this->app->bind(MessageRepositoryInterface::class, MessageRepositoryImplementation::class);
        $this->app->bind(NewsRepositoryInterface::class, NewsRepositoryImplementation::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
