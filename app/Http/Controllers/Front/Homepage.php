<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;//
use App\Models\Article;
use App\Models\Page;
use App\Models\Contact;
class Homepage extends Controller
{
    public function __construct(){
        view()->share('pages',Page::orderBy('order','desc')->get());

    }
    public function index(){
        //print_r(Category::all()); die;//tüm kategori tablosundaki verileri ekrana basıyoruz..
        $data['categories']=Category::orderBy('id','desc')->get();//category tablosundan id sıralamasına göre çektik veriyi
        $data['articles']=Article::orderBy('id','desc')->paginate(1);
        $data['pages']=Page::orderBy('order','desc')->get();
        return view('front.homepage',$data);//$data'yı önyüze göndereceğimizi belirttik...
    }

    public function single($title){
        $articles=Article::where('title',$title)->first() ?? abort(403,'not found');
        $articles->increment('hit');
        $data['articles']=$articles;
        $data['categories']=Category::orderBy('id','desc')->get();
        return view('front.single',$data);
    }
    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403,'not found');
        $data['category']=$category;
        $data['articles']=Article::orderBy('id','desc')->paginate(1);
        return view('front.category',$data);

    }
    public function page($slug){
        $page=Page::whereSlug($slug)->first() ?? abort(403,'not found');
        $data['page']= $page;
        $data['pages']=Page::orderBy('order','desc')->get();
        return view('front.page',$data);
    }
    public function contact(){
        return view('front.contact');
    }
    public function contactPost(Request $request){
        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->topic=$request->topic;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->route('contact')->with('success','Mesaj iletildi');

    }
}

