<?php

namespace App\Models;

use App\interfaces\Imesage;
use App\Models\Subscriber;

class SMSNotification implements Imesage {

    public function send (Subscriber $subscriber, $message, $category) {
        echo "<br />Hi, {$subscriber->getName()}! Here's some information about {$category} via SMS: {$message}<br />";
    }
}
