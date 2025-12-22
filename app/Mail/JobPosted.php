<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Job;

class JobPosted extends Mailable
{
    use Queueable, SerializesModels;

    public $job; // 👈 public so Blade can see it

    public function __construct(Job $job)
    {
        $this->job = $job;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Job Posted',
            from: 'Admin@laracasts.com'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.job-posted',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
