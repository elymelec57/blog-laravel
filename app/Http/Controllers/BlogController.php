<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index');
    }

    public function detalle($blog){

        $data = array('blog' => Blog::findOrFail($blog));

        return view('blogs.detalle', $data);
    }
}
