<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Event;

class CommentController extends Controller
{
    public function store(Request $request, int $id){
        
        $event = Event::findOrFail($id);
        
    $comment = new Comment();
    $comment->pseudo = $request->input('pseudo');
    $comment->content = $request->input('content');
    
    $event->comments()->save($comment);
    
    return redirect()->route('event.showEvent', ['id' => $id ]);
    }
}
