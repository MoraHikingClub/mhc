<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Session;
use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('post_type','=','blog')->orderBy('id','desc')->paginate(10);

        return view('blog')->with('posts', $posts);
    }

    public function list()
    {
        $posts = Post::where('post_type','=','blog')->orderBy('id','desc')->paginate(10);

        return view('posts.index')->with('posts', $posts);
    }

    public function news(){
        $news = Post::where('post_type', '=', 'news')->orderBy('id','desc')->paginate(16);

        return view('news')->with('news', $news);
    }

    public function news_list(){
        $news = Post::where('post_type', '=', 'news')->orderBy('id','desc')->paginate(16);

        return view('posts.news')->with('news', $news);
    }

    public function create()
    {
        $tags = Tag::all();
        return view('posts.create')->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->directlink){
            $this->validate($request, [
                'title' => 'required|max:255'
            ]);
        }else{
            $this->validate($request, [
                'title' => 'required|max:255',
                'body'  => 'required'
            ]);
        }
        

        $post = new Post;
        $post->title = $request->title;
        $post->body = str_replace('&nbsp;',' ',$request->body);
        $post->post_type = $request->post_type;
        $post->featured_img = $request->featured_img;
        $post->save();
        
        $postLastsaved = Post::find($post->id);

        if($request->directlink){
            $postLastsaved->slug = $request->directlink;
        }else{
            $postLastsaved->slug = str_slug($post->title).'-'.$post->id;
        }
        $postLastsaved->save();

        $post->tags()->sync($request->tags, false);
         
        if($request->post_type == 'blog'){
            Session::flash('success', 'The blog post was successfully saved!');
            return redirect()->route('posts.show', $post->id);
        }else{
            Session::flash('success', 'The news post was successfully saved!');
            return redirect()->route('posts.news_list');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        $tags = Tag::all();
        $tags2 = array();
        foreach($tags as $tag){
            $tags2[$tag->id] = $tag->name;
        }

        return view('posts.edit')->with('post', $post)->with('tags',$tags2);
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
        if($request->post_type == 'news'){
            $this->validate($request, [
                'title' => 'required|max:255'
            ]);
        }else{
            $this->validate($request, [
                'title' => 'required|max:255',
                'body'  => 'required'
            ]);
        }

        $post = Post::find($id);

        if($request->directlink){
            $post->slug = $request->directlink;
        }else{
            if($post->title != $request->title){
                $post->slug = str_slug($request->title).'-'.$id;
            }
        }
                
        $post->title = $request->title;
        $post->body = str_replace('&nbsp;',' ',$request->body);
        $post->post_type = $request->post_type;
        $post->featured_img = $request->featured_img;
        
        $post->save();
        if($request->post_type == 'news'){
            $post->tags()->sync([], true);
        }else{
            $post->tags()->sync($request->tags, true);
        }

        if($request->post_type == 'blog'){
            Session::flash('success', 'The blog post was successfully updated!');
            return redirect()->route('posts.show', $post->id);
        }else{
            Session::flash('success', 'The news post was successfully updated!');
            return redirect()->route('posts.news_list');
        }
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
        $post->tags()->detach();
        $post->delete();

        Session::flash('success', 'Post deleted successfully!');
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }
}