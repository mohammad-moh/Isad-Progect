<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreateNoti extends Notification
{
    use Queueable;

    public $incoming_requests;
    public $other_notifications;
    public function __construct($incoming_requests, $other_notifications)
    {
        $this->incoming_requests = $incoming_requests;
        $this->other_notifications = $other_notifications;
    }
   

    
    public function via($notifiable)
    {
        return ['database'];
    }
    
   
    public function toArray($notifiable)
    {
        return [
            'incoming_requests' => $this->incoming_requests,
            'other_notifications' => $this->other_notifications,
        ];
    }
}