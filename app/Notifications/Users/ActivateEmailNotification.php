<?php

namespace App\Notifications\Users;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;

class ActivateEmailNotification extends Notification
{
    use Queueable;

    /**
     * User Object
     *
     * @var User
     */
    public $user;

    /**
     * Create a new notification instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
        $url = URL::signedRoute('activate-email', [
            'user' => $this->user->id
        ]);

        // the url will be valid for just 30 minutes after creation
        $url = URL::temporarySignedRoute(
            'activate-email',
            now()->addMinutes(30), [
                'user' => $this->user->id
            ]);

        return (new MailMessage)
                    ->subject('Activate your email address')
                    ->line('In order to use the application, please verify your email address.')
                    ->action('Activate your account', $url)
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
