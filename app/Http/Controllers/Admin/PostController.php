<?php

namespace App\Http\Controllers\Admin;

use Image;
use Auth;
use App\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //Only Logged In user can access this
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = post::where('status', 1)->orderBy('created_at','DESC')->get();
        $counts = post::where('status', 0)->count();
        return view('admin.post.list', compact('posts','counts'));
    }

    //Method to create a new post
    public function create()
    {
        $counts = post::where('status', 0)->count();
        return view('admin.post.create', compact('counts'));
    }

    //Method to store post into the database
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required',
            'image' => 'required',
            'body' => 'required',
        ]);

        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);            
        }

        $post = new post;
        $post->title = $request->title;
        $post->slug = str_slug($post->title, "-");
        $post->body = $request->body;
       // $post->excerpt = str_limit(strip_tags($post->body), 400); 
        $post->excerpt = $request->excerpt;
        $post->status = $request->status;
        $post->image = $filename;
        $post->description = $request->description;
        $post->author = $request->author;
        $post->bio = $request->bio;
        $post->authorDescription = $request->authorDescription;
        $post->save();

        return redirect()->route('post.index')->with('message','Post successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    //Method to edit a post
    public function edit($id)
    {
        $post = post::where('id', $id)->first();
        $counts = post::where('status', 0)->count();
        return view('admin.post.edit', compact('post','counts'));
    }

    //Method to update a post
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'title' => 'required',
            //'slug' => 'required',
            'body' => 'required',
        ]);

        $post = post::find($id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);
            $post->image = $filename;
        }
        
        $post->title = $request->title;
        $post->body = $request->body;
        $post->excerpt = $request->excerpt;
        $post->slug = str_slug($post->title, "-");
        $post->description = $request->description;
        
        $post->status = 1;
        $post ->save();

        return redirect(route('post.index'))->with('message','Post updated successfully');
    }

    //Method to delete a post
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Post deleted successfully');
    }
}
