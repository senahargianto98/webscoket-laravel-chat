<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Hello;

class MessageController extends Controller
{
    public function broadcast(Request $request) {

        // TODO: Sanitize input

        event(new Hello($request->message));

        return response()->json([], 200);

    }
}
