<?php

namespace App\Notifications;

use App\Models\Comment;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

/**
 * Al autor de una skill cuando alguien la comenta.
 */
class NewCommentOnSkill extends Notification
{
    public function __construct(public Comment $comment) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $skill = $this->comment->skill;

        return (new MailMessage)
            ->subject('Nuevo comentario en «'.Str::limit($skill->title, 60).'»')
            ->greeting('Hola, '.$notifiable->name)
            ->line($this->comment->user->name.' ha comentado tu skill «'.$skill->title.'»:')
            ->line('«'.Str::limit($this->comment->content, 400).'»')
            ->action('Ver el comentario', route('skills.show', ['skill' => $skill->slug]).'#comentarios')
            ->salutation('El equipo de ia-skills')
            ->line('¿No quieres recibir estos avisos? Desactívalos en tu perfil: '.route('profile.edit'));
    }
}
