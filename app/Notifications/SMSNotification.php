<?php
use App\Interface;

class SMSNotification implements NotificationInterface {
    public function send($message){
        echo "SMS sent: $message\n";
    }
}