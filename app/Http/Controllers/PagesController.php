<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\Event;
use App\MessageWeb;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('admin.inicio');
    }

    public function home()
    { 
        $news = Noticia::latest('fecha')->get();
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required'
            ]);
        $message = new MessageWeb;
        $message->fecha = now();
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->asunto = $request->get('asunto');
        $message->mensaje = $request->get('mensaje');
        $message->save();
        return redirect()->route('pages.contact')->with('flash', 'Gracias por contactarnos, tu mensaje a sido enviado espera una repuesta en tu correo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
