<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class LaravelCrudController extends Controller
{
    public $blog;
    public function index(){
        return view('crud.add');
    }

    public function save(Request $request){
        $this->blog = new Blog();
        $this->blog->blog_title = $request->blog_title;
        $this->blog->blog_category = $request->blog_category;
        $this->blog->author_name = $request->author_name;
        $this->blog->description = $request->description;
        $this->blog->save();
        return back();
    }

    public function manage(){
        $this->blog = Blog::all();
        return view('crud.manage',[
            'blogs'=> $this->blog,
        ]);
    }
}
