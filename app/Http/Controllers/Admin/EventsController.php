<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index()
    {
    	$events = Event::all();
    	return view('admin.events.index', compact('events'));
    }

    public function destroy(Event $event)
    {

      $event->delete();

      return back()->withFlash('El evento ha sido eliminada');
    }

    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'excerpt' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'linkmaps' => 'required',
            'costo' => 'required',
            'link' => 'required',
            'tlf' => 'required'

        ]);

        $event = new Event;
        $event->title = $request->get('title');
        $event->url= uniqid();
        $event->excerpt = $request->get('excerpt');
        $event->fecha = $request->get('fecha');
        $event->hora = $request->get('hora');
        $event->linkmaps = $request->get('linkmaps');
        $event->costo = $request->get('costo');
        $event->link = $request->get('link');
        $event->tlf = $request->get('tlf');
        $event->user_id = auth()->id();
        $event->save();
        return redirect()->route('admin.events.index')->with('flash', 'Evento creado');
    }
}
