<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function showEvent(int $id)
    {
        $event = Event::findOrFail($id);
        
        return view('event.showEvent', [
            'event' => $event
        ]);
    }
}
