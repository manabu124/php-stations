<?php

namespace Src\Station17\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        // ここにサンプルコードを記述
        $mailNotifier = new MailNotification();
        $this->sendNotification($mailNotifier);
    }
    
    public function sendNotification(NotificationInterface $notification): void
    {
        $notification->setMessage('新年のご挨拶', 'あけましておめでとうございます');
        $notification->sendMessage();
    }
}

(new Practice)->main();
