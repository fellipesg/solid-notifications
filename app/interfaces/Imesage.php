<?php

namespace App\interfaces;
use App\models\Subscriber;
interface Imesage {
    public function send(Subscriber $subscriber, $message, $category);
}
