<?php

namespace App\Models;

use App\interfaces\Imesage;
use App\models\Subscriber;

class EmailNotification implements Imesage {
    public function send (Subscriber $subscriber, $message, $category) {
        echo "<br />Hi, {$subscriber->getName()}! Here's some information about {$category} via EMAIL: {$message}<br />";
    }
}
