<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function submitMessage(Request $request)
    {

        $validatedData = $request->validate([
            'message' => 'required',
            'category' => 'required'
        ]);

        $message = $validatedData['message'];
        $category = $validatedData['category'];

        /** @var Notification $notification */
        $notification = new Notification();
        $subscriber1 = new Subscriber(1, 'John Doe', 'johndoe@example.com', '+1234567890', ['Sports','Finance'], ['SMSNotification','EmailNotification','PushNotification']);
        $notification->addSubscriber($subscriber1);
        $subscriber2 = new Subscriber(2, 'Anne Doe', 'annedoe@example.com', '+1234543210', ['Sports','Finance', 'Movies'], ['SMSNotification','EmailNotification']);
        $notification->addSubscriber($subscriber2);
        $subscriber3 = new Subscriber(3, 'Mari Doe', 'maridoe@example.com', '+12345684445', ['Movies'], ['SMSNotification']);
        $notification->addSubscriber($subscriber3);

        $notification->send($message, $category);
        return redirect()->back()->with('message', 'Notification sent!');
    }
}
