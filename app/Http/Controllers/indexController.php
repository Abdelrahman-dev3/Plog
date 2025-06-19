<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{



    public function index() {
        $posts = Post::all();
        return view("posts",["posts" => $posts ]);
    }




    function show(Post $post){
        return view("view",['post' => $post]);
    }




    function create(){
        $users = User::all();
        return view("create" , [ 'users' => $users ]);
    }




    function edit(Post $posts){
        $users = User::all();
        return view("edit" , ['posts' => $posts , 'users' => $users]);
    }





    function update($id){
        request()->validate([
            'title' => 'required|min:4',
            'description' => 'required',
            'creator' => 'required|exists:users,id',
        ], [
            'title.required' => 'العنوان لا يمكن أن يكون فارغًا',
            'description.required' => 'الوصف مطلوب، من فضلك أدخله',
        ]);
        
        Post::where('id' , $id)->update([
            'title' => request()->title , 
            'description' => request()->description , 
            'created_by' => request()->creator
        ]);
        // redirection to /posts
        return to_route("post.show",$id);
    }





    function store(){
        request()->validate([
            'title' => 'required|min:4',
            'description' => 'required',
            'creator' => 'required|exists:users,id',
        ], [
            'title.required' => 'العنوان لا يمكن أن يكون فارغًا',
            'description.required' => 'الوصف مطلوب، من فضلك أدخله',
        ]);
            Post::create([
                'title' => request()->title , 
                'description' => request()->description , 
                'created_by' => request()->creator
            ]);
        // redirection to /posts
        return to_route("post.index");
    }




    function destroy($id){
        Post::destroy($id);
        return to_route("post.index");
    }




}


