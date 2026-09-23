<?php

namespace App\Notifications;

use App\Models\Comment;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

/**
 * A quien escribió un comentario cuando alguien le responde.
 */
class CommentReplied extends Notification
{
    public function __construct(public Comment $reply) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $skill = $this->reply->skill;

        return (new MailMessage)
            ->subject($this->reply->user->name.' ha respondido a tu comentario')
            ->greeting('Hola, '.$notifiable->name)
            ->line($this->reply->user->name.' ha respondido a tu comentario en «'.$skill->title.'»:')
            ->line('«'.Str::limit($this->reply->content, 400).'»')
            ->action('Ver la respuesta', route('skills.show', ['skill' => $skill->slug]).'#comentarios')
            ->salutation('El equipo de ia-skills')
            ->line('¿No quieres recibir estos avisos? Desactívalos en tu perfil: '.route('profile.edit'));
    }
}
