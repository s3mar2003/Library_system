<?php
use App\Interface;

class EmailNotification implements NotificationInterface {
    public function send($message){
        echo "Email sent: $message\n";
    }
}