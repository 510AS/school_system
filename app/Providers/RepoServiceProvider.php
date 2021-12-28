<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repository\Teacher\TeacherRepositoryInterface',
            'App\Repository\Teacher\TeacherRepository');

        $this->app->bind(
            'App\Repository\Student\StudentRepositoryInterface',
            'App\Repository\Student\StudentRepository');

        $this->app->bind(
                'App\Repository\Student\Promotion\StudentPromotionRepositoryInterface',
                'App\Repository\Student\Promotion\StudentPromotionRepository');

        $this->app->bind(
                'App\Repository\Student\Graduated\StudentGraduatedRepositoryInterface',
                'App\Repository\Student\Graduated\StudentGraduatedRepository');

        $this->app->bind(
            'App\Repository\Fees\FeesRepositoryInterface',
            'App\Repository\Fees\FeesRepository');

        $this->app->bind(
            'App\Repository\FeeInvoices\FeeInvoicesRepositoryInterface',
            'App\Repository\FeeInvoices\FeeInvoicesRepository');

        $this->app->bind(
            'App\Repository\ReceiptStudents\ReceiptStudentsRepositoryInterface',
            'App\Repository\ReceiptStudents\ReceiptStudentsRepository');

        $this->app->bind(
            'App\Repository\ProcessingFee\ProcessingFeeRepositoryInterface',
            'App\Repository\ProcessingFee\ProcessingFeeRepository');

        $this->app->bind(
            'App\Repository\Payment\PaymentRepositoryInterface',
            'App\Repository\Payment\PaymentRepository');

        $this->app->bind(
            'App\Repository\Attendance\AttendanceRepositoryInterface',
            'App\Repository\Attendance\AttendanceRepository');


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
