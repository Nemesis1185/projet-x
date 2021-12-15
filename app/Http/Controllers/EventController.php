<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Comment;

class EventController extends Controller
{
    public function showEvent(int $id)
    {
        $event = Event::findOrFail($id);
        $comments = $event->comments()->get();
        
        return view('event.showEvent', [
            'event' => $event,
            'comments' => $comments
        ]);
    }
}
