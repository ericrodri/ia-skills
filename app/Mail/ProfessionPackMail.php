<?php

namespace App\Mail;

use App\Models\Profession;
use App\Support\ProfessionPack;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

/**
 * Enlace al pack de una profesión para quien ya estaba suscrito: no hace
 * falta volver a confirmar, así que se le manda directamente.
 */
class ProfessionPackMail extends Mailable
{
    use Queueable;

    public function __construct(public Profession $profession) {}

    public function envelope(): Envelope
    {
        return new Envelope(subject: "Tu pack: las mejores skills de IA para {$this->profession->name}");
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.profession-pack',
            with: [
                'packUrl' => ProfessionPack::url($this->profession),
                'professionName' => $this->profession->name,
                'size' => ProfessionPack::SIZE,
                'days' => ProfessionPack::LINK_DAYS,
            ],
        );
    }
}
