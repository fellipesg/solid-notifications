<?php

namespace App\Models;

use App\interfaces\Imesage;
use App\Models\Subscriber;
use App\Models\Log;

class Notification {
    private $subscribers = array();

    public function addSubscriber(Subscriber $subscriber) {
        $this->subscribers[] = $subscriber;
    }

    public function send($message, $category) {
        /** @var Subscriber $subscriber */
        foreach($this->subscribers as $subscriber) {
            if(!in_array($category, $subscriber->getSubscribedCategories())) {
                continue;
            }
            foreach($subscriber->getNotificationChannels() as $channel) {
                $className = "\App\\Models\\". $channel;
                $method = new $className();
                $method->send($subscriber, $message, $category);
                /** @var Log $log */
                $log = new Log;

                $log->category = $category;
                $log->subscriber = $subscriber->getName();
                $log->notification_type = $channel;
                $log->message = $message;

                $log->save();

            }
        }
    }
}
