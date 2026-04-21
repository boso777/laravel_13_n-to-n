<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Pest\Support\View;

class TagController extends Controller
{
    public function create(){
        return view('tags.create');
    }

    public function store(Request $request){
        Tag::create(['id'=>$request->id, 'tag'=>$request->tag]);
        return redirect(route('article.index'));
    
    }
}

