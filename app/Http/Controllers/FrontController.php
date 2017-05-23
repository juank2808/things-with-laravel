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
            $array = $article->images->toJson();  
        // for($i=0;$i<count($array);$i++){
        //     $id_image       =  $array[$i]->id;
        //     // $id_image       =   $array[$i]->id;
        //     $img_name       =   $array[$i]->name;
        //     $id_article     =   $array[$i]->article_id;
            
        //     dd($id_image.$img_name.$id_article);
        // }
        // dd($array['article_id']);
        return view('view.article') ->with('article', $article)
                                    // ->with('image', $image)
        ;
    }


}
