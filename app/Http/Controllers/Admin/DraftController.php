<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\post;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DraftController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $drafts = post::where('status', 0)->orderBy('created_at','DESC')->get();
        $counts = post::where('status', 0)->count();
        return view('admin.draft.list', compact('drafts', 'counts'));
    }

    //
    public function create()
    {
        //
    }

    //
    public function store(Request $request)
    {
        //
    }

    //
    public function show($id)
    {
        //
    }

    //Edit draft
    public function edit($id)
    {
        $draft = post::where('id', $id)->first();
        $counts = post::where('status', 0)->count();
        return view('admin.draft.edit', compact('categories','draft','counts'));
    }

    //Update draft
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]); 

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);
        }

        $draft = post::find($id);
        //$draft->excerpt = strlen(strip_tags($draft->body), 300);
        $draft->title = $request->title;
        $post->excerpt = $request->excerpt;
        $draft->body = $request->body;
        $draft->slug = str_slug($draft->title, "-");
        $draft->status = 1;
        $draft->author = $request->author;
        $draft->bio = $request->bio;
        $draft->authorDescription = $request->authorDescription;
        $draft ->save();

        return redirect(route('draft.index'));
    }

    //Delete draft
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
