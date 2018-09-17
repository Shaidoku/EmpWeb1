<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use App\MessagesWeb;
use Illuminate\Http\Request;

class PagesController extends Controller
{   
    public function index()
    { 
        return view('admin.inicio');
    }

    public function home()
    { 
        $news = News::latest('fecha')->get();
        return view('pages.home', compact('news'));
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function event()
    {
    	$events = Event::latest('fecha')->get();
        return view('pages.event', compact('events'));
    }

    public function showevent(Event $event)
    {
        return view('pages.eventshow', compact('event'));
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required'
            ]);
        $message = new MessagesWeb;
        $message->fecha = now();
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->asunto = $request->get('asunto');
        $message->mensaje = $request->get('mensaje');
        $message->save();
        return redirect()->route('pages.contact')->with('flash', 'Gracias por contactarnos, tu mensaje a sido enviado espera una repuesta en tu correo.');
    }

}
 