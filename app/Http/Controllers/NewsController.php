<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{   
    public function index()
    { 
        $noticias = News::all();
        return response()->json($noticias);
    }
}
 