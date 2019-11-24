<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Album;
use App\Knowledge;
use App\Launch;
use App\User;
use Mail;
use Session;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function getIndex(){
        $launch = Launch::find(1);
        if($launch->launch){
            $post = Post::latest()->first();

            return view('index')->with('post', $post)->with('launch', 0);
        }else{
            return view('launch');
        }
    }

    public function launch(){
        $launch = Launch::find(1);
        $launch->launch = 1;
        $launch->save();

        $post = Post::latest()->first();

        return view('index')->with('post', $post)->with('launch',$launch);
    }

    public function getSingle($slug){
        $post = Post::where('slug', '=', $slug)->first();
        $post->visit_count += 1;
        $post->save();
        return view('blog.single')->with('post',$post);
    }

    public function getSingleNews($slug){
        $news = Post::where('slug', '=', $slug)->first();
        $news->visit_count += 1;
        $news->save();
        return view('news.single')->with('news', $news);
    }

    public function getHome(){
        return view('account.home');
    }

    public function getDashboard(){
        return view('account.dashboard')->with('user',Auth::user());
    }

    public function getSingleTag($name){
        $tag = Tag::where('name', '=', $name)->first();

        return view('tags.view')->with('tag', $tag);
    }

    public function postMail(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use($data){
            $message->from($data['email'], $data['name']);
            $message->to('admin@morahiking.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was sent successfully!');

        return redirect()->back();
    }

    public function gallery(){
        $albums = Album::orderBy('id','desc')->paginate(10);

        return view('gallery')->with('albums',$albums);
    }

    public function overview(){
        $posts = Post::where('post_type','=','blog')->orderBy('id','desc')->take(5)->get();
        $albums = Album::orderBy('id','desc')->take(5)->get();
        $tags = Tag::orderBy('id','desc')->take(5)->get();
        $news = Post::where('post_type','=','news')->orderBy('id','desc')->take(5)->get();
        $knowledges = Knowledge::orderBy('id','desc')->take(5)->get();

        if(Auth::user()->role_id == 1){
            $users = User::orderBy('id','desc')->take(10)->get();
            return view('account.overview')->with('posts',$posts)->with('albums',$albums)->with('tags',$tags)->with('news',$news)->with('knowledges',$knowledges)->with('users',$users);
        }else{
            return view('account.overview')->with('posts',$posts)->with('albums',$albums)->with('tags',$tags)->with('news',$news)->with('knowledges',$knowledges);
        }
    }
}




