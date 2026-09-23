<?php

namespace App\Mail;

use App\Models\NewsletterSubscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\URL;

/**
 * Email de doble opt-in: el suscriptor no recibe nada hasta pulsar el enlace.
 */
class NewsletterConfirmationMail extends Mailable
{
    use Queueable;

    /** El enlace caduca: una suscripción no confirmada en una semana se descarta. */
    public const LINK_DAYS = 7;

    public function __construct(public NewsletterSubscriber $subscriber) {}

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Confirma tu suscripción al resumen semanal de ia-skills');
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.newsletter-confirmation',
            with: [
                'confirmUrl' => URL::temporarySignedRoute(
                    'newsletter.confirm',
                    now()->addDays(self::LINK_DAYS),
                    ['subscriber' => $this->subscriber->id],
                ),
            ],
        );
    }
}
