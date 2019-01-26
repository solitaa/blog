<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        if($categories->count() == 0 || $tags->count() == 0)
        {
            Session::flash('info', 'You must have some categories and tags before attempting to create a post.');
            return redirect()->back();
        }
        return view('admin.posts.create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());    
        $this->validate($request,[
            'title' => 'required',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
        ]);

        $image = $request->featured;
        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/post', $image_new_name);




        $post = new Post();
        $post->title = $request->title;
        $post->featured = 'uploads/post/'. $image_new_name;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);



        $post->save();
        $post->tags()->attach($request->tags);




        Session::flash('success', 'You created a post');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::withTrashed()->where('id', $id)->first();

        return view('admin.posts.edit')->with('post', $post)->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'featured' => 'image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
        ]);

        $post = Post::withTrashed()->where('id', $id)->first();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);

        if($request->hasFile('featured')){
            $image = $request->featured;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/post', $image_new_name);


            $post->featured = 'uploads/post/'. $image_new_name;
        }
        $post->save();


        $post->tags()->sync($request->tags);



        Session::flash('success', 'You updated the post');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'You trashed the post');
        return redirect()->back();
    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.trashed')->with('posts', $posts);
    }

    public function deleteForever($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();

        Session::flash('success', 'You deleted the post permanently');
        return redirect()->back();
    }
    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();

        Session::flash('success', 'Post restores successfully');
        return redirect()->back();
    }
}
