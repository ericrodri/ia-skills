<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Support\Facades\URL;

class WeeklyDigestMail extends Mailable
{
    use Queueable;

    /**
     * @param  array{since: string, skills: array<int, array<string, mixed>>, guides: array<int, array<string, mixed>>, total_new: int}  $digest
     */
    public function __construct(public User $user, public array $digest) {}

    public function envelope(): Envelope
    {
        $count = $this->digest['total_new'];

        return new Envelope(
            subject: $count > 0
                ? number_format($count, 0, ',', '.').' skills de IA nuevas esta semana'
                : 'Lo nuevo de esta semana en ia-skills',
        );
    }

    /**
     * List-Unsubscribe con un clic (RFC 8058): Gmail y Yahoo lo exigen a
     * remitentes de envíos masivos, y sin él el resumen acaba en spam.
     */
    public function headers(): Headers
    {
        return new Headers(text: [
            'List-Unsubscribe' => '<'.$this->unsubscribeUrl().'>',
            'List-Unsubscribe-Post' => 'List-Unsubscribe=One-Click',
        ]);
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.weekly-digest',
            with: [
                'user' => $this->user,
                'digest' => $this->digest,
                'unsubscribeUrl' => $this->unsubscribeUrl(),
            ],
        );
    }

    private function unsubscribeUrl(): string
    {
        return URL::signedRoute('newsletter.unsubscribe', ['user' => $this->user->id]);
    }
}
