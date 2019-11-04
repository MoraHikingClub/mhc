<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Album;
use Mail;
use Session;

class PagesController extends Controller
{
    public function getIndex(){
        $post = Post::latest()->first();

        return view('index')->with('post', $post);
    }

    public function getSingle($slug){
        $post = Post::where('slug', '=', $slug)->first();
        
        return view('blog.single')->with('post',$post);
    }

    public function getSingleNews($slug){
        $news = Post::where('slug', '=', $slug)->first();

        return view('news.single')->with('news', $news);
    }

    public function getHome(){
        return view('account.home');
    }

    public function getDashboard(){
        return view('account.dashboard');
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
}


