<?php

namespace App\Mail;

use App\Support\ProfessionPack;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Str;

/**
 * Enlace al pack (de una profesión o de un tema, ver App\Support\Packs) para
 * quien ya estaba suscrito: no hace falta volver a confirmar, así que se le
 * manda directamente.
 */
class ProfessionPackMail extends Mailable
{
    use Queueable;

    /** @param  array{name: string, title: string, url: string}  $pack */
    public function __construct(public array $pack) {}

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Tu pack: '.$this->pack['title']);
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.profession-pack',
            with: [
                'packUrl' => $this->pack['url'],
                'packName' => $this->pack['name'],
                'packTitle' => Str::ucfirst($this->pack['title']),
                'days' => ProfessionPack::LINK_DAYS,
            ],
        );
    }
}
