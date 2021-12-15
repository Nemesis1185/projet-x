<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class MapController extends Controller
{
    public function data()
    {
        $events = Event::all();
        
    return response()->json([
        $events
]);
    }
    
    public function map()
    {
        
     return view('map');   
    }
    
}
