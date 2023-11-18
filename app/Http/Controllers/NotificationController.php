<?php

// app/Http/Controllers/NotificationController.php

namespace App\Http\Controllers;

use App\Events\NotificationEvent;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification()
    {
        $message = 'Hello, this is a push notification!';
        event(new NotificationEvent('DDX'));

        return response()->json(['message' => 'Notification sent!']);
    }
}
