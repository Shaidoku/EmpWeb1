<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
    	$news = News::all();
    	return view('admin.news.index', compact('news'));
    }

    public function destroy(News $new)
    {

      $new->delete();

      return back()->withFlash('La noticia ha sido eliminada');
    }

    public function show(News $new)
    {
        return view('admin.news.show', compact('new'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'excerpt' => 'required',
            'link' => 'required'

        ]);
        $new = new News;
        $new->category_id = $request->get('category_id');
        $new->title = $request->get('title');
        $new->excerpt = $request->get('excerpt');
        $new->link = $request->get('link');
        $new->fecha = now();
        $new->user_id = auth()->id();
        $new->save();
        return redirect()->route('admin.news.index', $new)->with('flash', 'Noticia publicada');
    }
}
