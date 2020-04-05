<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

#Para  ExpenseReportController.php
use App\Mail\SummaryReport;
use Illuminate\Support\Facades\Mail;

#Para  SummaryReport.php
use App\ExpenseReport;

class SummaryReport extends Mailable
{
    use Queueable, SerializesModels;
    private $expenseReport;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ExpenseReport $expenseReport)
    {
        $this->expenseReport = $expenseReport;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.expenseReport',[
            'report' => $this->expenseReport
        ]);
    }
}
