<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewContactForm extends Notification implements ShouldQueue
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
         $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return $this->getMessage();
    }

    public function getMessage()
    {
        return (new MailMessage)
            ->subject('Nuevo formulario de contacto')
            ->greeting('Se ha recibido un nuevo formulario de contacto desde el sitio web')
            ->line('Nombre: '.$this->data["name"])
            ->line('Email: '.$this->data["email"])
            ->line('Teléfono: '.$this->data["phone"])
            ->line('Mensaje: '.$this->data["comments"])
            ->salutation('Saludos,');
    }
}
