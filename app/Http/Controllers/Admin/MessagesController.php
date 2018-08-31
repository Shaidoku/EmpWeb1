<?php

namespace App\Http\Controllers\Admin;

use App\MessagesWeb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function index()
    {
    	$messages = MessagesWeb::all();
    	return view('admin.messages.index', compact('messages'));
    }

    public function destroy(MessagesWeb $message)
    {

      $message->delete();

      return back()->withFlash('El mensaje ha sido eliminada');
    }

    public function show(MessagesWeb $message)
    {
        return view('admin.messages.show', compact('message'));
    }
}
