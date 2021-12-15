<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index(){
        
        $events = Event::with('user', 'category')->latest()->paginate(20);
        return view('admin.index', [
            'events'=>$events
            ]);
        }
        
        public function create(){
        
        // $response = Http::get('https://api-adresse.data.gouv.fr/search/?q=20%20avenue%20de%20S%C3%A9gur%2C%20Paris&type=housenumber&autocomplete=1');
        // $response->json();
        $categories = Category::all();
        return view('admin.create', [
            'categories'=>$categories
            ]);
        }
        
         public function store(Request $request){
        
         $request->validate([
            'name' => 'required|min:3',
            'address' => 'required',
            'duration' => 'required',
            'day' => 'date|required',
            'content' => 'required',
        ]);
        
        // Enregistrement de l'article (si la requête a été validée)
        $event = new Event();
        $event->name = $request->input('name');
        $event->content = $request->input('content');
        $event->address = $request->input('address');
        $event->day = $request->input('day');
        $event->duration = $request->input('duration');
        $event->category_id = $request->input('category');
        $event->longitude = $request->input('longitude');
        $event->latitude = $request->input('latitude');
        
        // Mettre $event->user_id = auth()->user()->id;
        $event->user_id = auth()->user()->id;
        
        // Ajoute l'article en base de données
        $event->save();
        
        return redirect()->route('admin');
        }
        
        public function edit(int $id)
        {
        $event = Event::findOrFail($id);
        $categories = Category::all();
        
        return view('admin.edit', [
            'categories'=>$categories,
            'event'=>$event
            ]);
        }
        
         public function update(Request $request, int $id){
        
         $request->validate([
            'name' => 'required|min:3',
            'address' => 'required',
            'duration' => 'required',
            'day' => 'date|required',
            'content' => 'required',
        ]);
        
        // Enregistrement de l'article (si la requête a été validée)
        $event = Event::findOrFail($id);
        $event->name = $request->input('name');
        $event->content = $request->input('content');
        $event->address = $request->input('address');
        $event->day = $request->input('day');
        $event->duration = $request->input('duration');
        $event->category_id = $request->input('category');
        
        
        // Ajoute l'article en base de données
        $event->save();
        
        return redirect()->route('admin');
        }
        
        
        public function delete(int $id)
        {
        $event = Event::where('id', $id)->delete();
        
        return redirect()->route('admin');
        }
}
