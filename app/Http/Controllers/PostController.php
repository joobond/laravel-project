<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   public function showPost()
   {
       $posts = [
         0 => 'Boas Vindas!',
         1 => 'Como falar conosco?',
         2 => 'Ação social no bairro Nova União',
       ];

       return view('test.posts', compact('posts'));
   }
}
