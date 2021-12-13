<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;

class DefaultController extends Controller
{
    public function home(){
        
        $events = Event::take(5)->latest()->get();
        return view('homepage', [
            'events'=>$events
            ]);
        
        }
}
