<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;
use App\Category;
use App\Tag;
use App\Image;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __contruct(){
    }
    public function index()
    {
        $articles = Article::orderBy('id', 'DECS')->get();
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
            $articles->images;
        });
        return view('home')
                    ->with('articles',$articles);
    }
    public function searchCategory($name){
       $category = Category::SearchCategory($name)->first();
       $articles = $category->articles;
       $articles->each(function($articles){
            $articles->category;
            $articles->user;
            $articles->images;
        });
        return view('home')
                    ->with('articles',$articles);
    }
    public function viewArticle($id){
        $article = Article::where('id',$id)->first();
            $article->category;
            $article->user;
            //$article->tags;
            $article->images;  
        $image = Image::all()->first();
        // dd($article->images);
        return view('view.article') ->with('article', $article)
                                    ->with('image', $image)
        ;
    }


}
