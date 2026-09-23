<?php

namespace App\Notifications;

use App\Models\Skill;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SkillApproved extends Notification
{
    public function __construct(public Skill $skill) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Tu skill ya está publicada: '.$this->skill->title)
            ->greeting('¡Enhorabuena, '.$notifiable->name.'!')
            ->line('Hemos revisado y publicado tu skill «'.$this->skill->title.'». Ya aparece en el catálogo y cualquiera puede copiarla, votarla y guardarla.')
            ->action('Ver mi skill', route('skills.show', ['skill' => $this->skill->slug]))
            ->line('Compártela con quien le pueda servir: los primeros votos son los que la hacen subir en el ranking.')
            ->salutation('El equipo de ia-skills')
            ->line('¿No quieres recibir estos avisos? Desactívalos en tu perfil: '.route('profile.edit'));
    }
}
