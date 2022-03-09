<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function create()
    {
        $articles = Article::all();
        return view('pages.createArticle', compact('articles'));
    }
    public function store(Request $request)
    {
        $store = new Article();
        $store->titre = $request->titre;
        $store->soustitre = $request->soustitre;
        $store->auteur = $request->auteur;
        $store->source = $request->source;
        $store->texte = $request->texte;
        $store->url = $request->url;
        $store->save();
        return redirect('/');
    }
    public function article(){
        $articles = Article::all();
        return view('pages.article', compact('articles'));
    }
    public function show($id){
        $show = Article::find($id);
        return view('pages.show', compact('show'));
    }
    public function destroy($id){
        $delete = Article::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
