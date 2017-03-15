<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class SendEmailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    private $some_passed_info;

    /**
     * Create a new job instance.
     *
     * @param $some_passed_info
     */
    public function __construct($some_passed_info)
    {
        $this->some_passed_info = $some_passed_info;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //do something other than log
        foreach(range(1,5) as $index) {
            sleep(2);
            Log::debug(sprintf("Sending email number %d", $index));
        }
    }
}
