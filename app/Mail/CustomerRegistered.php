<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerRegistered extends Mailable
{
    use Queueable, SerializesModels;

    // ini ambil dari controller validate['nama']
    public $customerName;
    public function __construct($customerName)
    {
        $this->customerName = $customerName;
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Customer Registered', // utk subject bisa di ganti sesuaikan
        );
    }
    public function content(): Content
    {
        return new Content(
            view: 'emails.customer-registered', // tempat file untuk menjadi tampilan atau pesan
            with: [
                'customerName' => $this->customerName,
            ],
        );
    }
    public function attachments(): array
    {
        return [];
    }
}
