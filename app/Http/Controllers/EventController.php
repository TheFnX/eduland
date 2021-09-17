<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es_RB');
    }

    public function index(){
        
        $posts = Post::where('status', 2)->orderByDesc('date', '>=', 'UTC')->paginate(4);
        return view('posts.event', compact('posts'));
    }
}    
