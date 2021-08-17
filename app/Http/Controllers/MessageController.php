<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Hello;
use App\Models\Chat;

class MessageController extends Controller
{
    public function broadcast(Request $request) {

        // TODO: Sanitize input

        $guest1 = new Chat;
        $guest1->message = $request->input('message');
        $guest1->timestamps = false;
        $guest1->save();
        // event(new Hello());
        return $guest1;

    }

    public function broadcastget(Request $request) {

        // TODO: Sanitize input
        $test = event(new Hello());
        return response($test);

    }
}
