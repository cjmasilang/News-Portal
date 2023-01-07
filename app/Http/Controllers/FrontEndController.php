<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Theme;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
     // Index Page
     public function index(){
       $latest_news = News::latest()->where('status', 1)->take(3)->get();
       $news_latest = News::latest()->where('status', 1)->paginate(4);
       $theme = Theme::first();
       $categories = Category::where('status', 1)->where('parent_id', 0)->get();
       $categories_news_views = News::latest()->orderBy('view_count', 'DESC')->take(5)->get();
       $popular_posts = News::where('status', 1)->orderBy('view_count', 'DESC')->take(4)->get();
       $recent_posts = News::where('status', 1)->latest()->take(4)->get();
       return view('index', compact('latest_news', 'theme', 'news_latest', 'categories', 'categories_news_views', 'popular_posts', 'recent_posts'));
    }

    // News Single Page
    public function newsSingle($slug){
        $theme = Theme::first();
        $news_detail = News::where('slug', $slug)->first();

        $newsKey = 'news_' .$news_detail->id;
        if(!Session::has($newsKey)){
            $news_detail->increment('view_count');
            Session::put($newsKey, 1);
        }
        $related_news = News::where('category_id', '=', $news_detail->category_id)->where('id','!=', $news_detail->id)->get();

        return view ('newsSingle', compact('news_detail', 'theme', 'related_news'));
    }
}
