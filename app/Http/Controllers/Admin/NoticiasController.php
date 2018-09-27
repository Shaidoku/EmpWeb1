<?php

namespace App\Http\Controllers\Admin;

use App\Noticia;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Noticia::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
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
            'title' => 'required',
            'category_id' => 'required',
            'excerpt' => 'required',
            'link' => 'required'

        ]);
        $new = new Noticia;
        $new->category_id = $request->get('category_id');
        $new->title = $request->get('title');
        $new->excerpt = $request->get('excerpt');
        $new->link = $request->get('link');
        $new->fecha = now();
        $new->user_id = auth()->id();
        $new->save();
        return redirect()->route('admin.news.index', $new)->with('flash', 'Noticia publicada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $new)
    {
        return view('admin.news.show', compact('new'));
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
    public function destroy(News $new)
    {

      $new->delete();

      return back()->withFlash('La noticia ha sido eliminada');
    }
}
