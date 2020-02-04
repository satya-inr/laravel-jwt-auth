<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt');
    }

    public function showOne(Request $request){
        
        $post = request('post');
        $posts = [
            'first' => 'This is my first post',
            'second' => 'This is my second post'
        ];

        if(!array_key_exists($post,$posts)){
            abort(404);
        }
        return ['postphp'=>$posts[$post]];
    }


    public function showAll(){
       
        $posts = [
            'first' => 'This is my first post',
            'second' => 'This is my second post'
        ];
        return $posts;
    }
}
