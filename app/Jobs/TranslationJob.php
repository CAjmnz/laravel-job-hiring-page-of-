<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Job;

class TranslationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Job $jobListing; // ✅ no conflict

    /**
     * Create a new job instance.
     *
     * @param \App\Models\Job $job
     */
    public function __construct(Job $jobListing)
    {
        $this->jobListing = $jobListing;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        logger('Translating ' . $this->jobListing->title . ' to Filipino...');
    }
}
