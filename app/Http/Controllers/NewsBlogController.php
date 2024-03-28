<?php

namespace App\Http\Controllers;

use App\Models\NewsBlog;
use Illuminate\Http\Request;

class NewsBlogController extends Controller
{
    public function index(){
       $news = NewsBlog::query()->orderBy('created_at')->paginate('10');
       return view('news', compact('news'));
    }
}
