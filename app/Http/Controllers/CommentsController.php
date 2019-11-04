<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'store']);
    }
    public function store(Request $request, $post_id)
    {
        $post = Post::find($post_id);
        $user = Auth::user();

        if( Auth::check()){
            $this->validate($request, [
                'comment' => 'required'
            ]);
        }else{
            $this->validate($request, [
                'name' => 'required|max:255'
            ]);
        }

        $comment = new Comment();
        if(Auth::check()){
            $comment->name = $user->fname.' '.$user->lname;
        }else{
            $comment->name = $request->name;
        }
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->post()->associate($post);

        $comment->save();

        Session::flash('success', 'Comment added successfully');

        return redirect()->route('blog.single', [$post->slug]);

    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        if(Auth::check()){
            $user = Auth::user();

            if($user->fname.' '.$user->lname == $comment->name || $user->fname.' '.$user->lname == 'Web Admin')
                return view('comments.edit')->with('comment', $comment);
            else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }

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
        $comment = Comment::find($id);

        $this->validate($request, [
            'comment' => 'required'
        ]);

        $comment->comment = $request->comment;
        $comment->save();

        Session::flash('success', 'Comment edited successfully');
        if(Auth::user()->fname.' '.Auth::user()->lname == 'Web Admin'){
            return redirect()->route('posts.show', $comment->post->id);
        }
        return redirect()->route('blog.single', $comment->post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        Session::flash('success', 'Comment deleted successfully.');

        return redirect()->back();
    }
}
