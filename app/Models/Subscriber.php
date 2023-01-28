<?php

namespace App\Models;
class Subscriber {
    protected $id;
    protected $name;
    protected $email;
    protected $phoneNumber;
    protected $subscribedCategories;
    protected $notificationChannels;

    public function __construct($id, $name, $email, $phoneNumber, $subscribedCategories, $notificationChannels) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->subscribedCategories = $subscribedCategories;
        $this->notificationChannels = $notificationChannels;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getSubscribedCategories() {
        return $this->subscribedCategories;
    }

    public function getNotificationChannels() {
        return $this->notificationChannels;
    }
}
