<?php

namespace App\Notifications\User;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordChangedNotification extends Notification
{
    public function __construct(public array $data)
    {
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(__('notifications.passwordChanged.subject'))
            ->line(__('notifications.passwordChanged.intro'))
            ->line(__('notifications.passwordChanged.note'));
    }

    public function via(): array
    {
        return ['mail'];
    }
}
