<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('modules.article.index',['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.article.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $this->validate($request,[
            'title_en' => 'required',
            'source_en' => 'required',
            'content_en' => 'required',
            'title_cn' => 'required',
            'source_cn' => 'required',
            'content_cn' => 'required'
            ]);
        $articles=Article::all();

        if($articles->isEmpty()){
            $articleID = 100000;
        }
        else{
            $articleID = Article::orderBy('id', 'desc')->first()->article_code;
        }
        $article = new Article();
        $article->article_code=$articleID+1;
        $article->title_en = $request->title_en;
        $article->source_en = $request->source_en;
        $article->content_en = $request->content_en;
        $article->note_en = $request->note_en;
        $article->title_cn = $request->title_cn;
        $article->source_cn = $request->source_cn;
        $article->content_cn = $request->content_cn;
        $article->note_cn = $request->note_cn;
        $article->save();
        return redirect()->route('article.index');

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
