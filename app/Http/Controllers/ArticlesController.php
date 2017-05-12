<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Tag;
use App\Article;
use App\User;
use App\Image;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('articles')->get();
        $images = DB::table('images')->get(); 
        $articles->each(function($articles){
            // $articles->category;
            // $articles->user;
        });
        return view('admin.articles.index',['articles'=>$articles],['images'=>$images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::orderBy('name','ASC')->get();
        $tags=Tag::orderBy('name','ASC')->get();
        return view('admin.articles.create',['categories'=>$categories],['tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        if($request->file('image')){
        //manipulacion de archivos
        $file = $request->file('image'); //nombre del input para subir archivos
        $name ='BlogTeach_'.time().'.'.$file->getClientOriginalExtension(); //asigna nombre para almacenar el doc
        $path = public_path().'/images/articles/';//ruta para almacenar las imgs
        $file->move($path, $name);//guardar imagenes lugar, nombre
        
        }// dd($path);
        
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        // dd($request->input('tags[]'));
        // dd( $article->tags());
        $article->save();
        // $article->tags()->sync($request->tags);//NO FUNCIONA POR AHORA
        //rellenamos la table pivote
        
        
        $image = new Image();
        $image->name=$name;
        $image->Article()->associate($article);
        
        $image->save();
        
        return redirect('admin/articles');
        
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
    // private function syncTags(App\Article $article, array $tags=[]){
        
        
    //     $article->tags()->sync($tags);    
    // }
}
