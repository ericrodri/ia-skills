<?php

namespace App\Notifications;

use App\Models\Skill;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SkillRejected extends Notification
{
    public function __construct(public Skill $skill, public string $reason) {}

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
            ->subject('Tu skill necesita cambios: '.$this->skill->title)
            ->greeting('Hola, '.$notifiable->name)
            ->line('Hemos revisado tu skill «'.$this->skill->title.'» y de momento no podemos publicarla.')
            ->line('Motivo: '.$this->reason)
            ->line('Puedes editarla y volver a enviarla: en cuanto la corrijas la revisaremos de nuevo.')
            ->action('Editar mi skill', route('skills.edit', ['skill' => $this->skill->slug]))
            ->salutation('El equipo de ia-skills')
            ->line('¿No quieres recibir estos avisos? Desactívalos en tu perfil: '.route('profile.edit'));
    }
}
