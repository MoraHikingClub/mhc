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
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    public function getIndex(){
    //     $launch = Launch::find(1);
    //     if($launch->launch){
    //         $post = Post::latest()->first();

    //         return view('index')->with('post', $post)->with('launch', 0);
    //     }else{
    //         return view('launch');
    //     }
    // }

    // public function launch(){
    //     $launch = Launch::find(1);
    //     $launch->launch = 1;
    //     $launch->save();

        $post = Post::latest()->first();

        return view('index')->with('post', $post);
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

    public function getAccount(){
        return view('account.account');
    }

    public function getAccountEdit(){
        return view('account.edit');
    }

    public function getDashboard(){
        if(Auth::user()->role_id!=3)
            return view('admin.dashboard')->with('user',Auth::user());
        else
            return redirect()->route('account.account');
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
            'email' => 'admin@morahiking.com',
            'name' => 'Mora Hiking Club',
            'subject' => $request->subject,
            'bodyMessage' => 'From: '.$request->name.'<'.$request->email.'>\n\n'.$request->message
        );

        Mail::send('emails.contact', $data, function($message) use($data){
            $message->from('admin@morahiking.com', 'Mora Hiking Club');
            $message->to('info@morahiking.com');
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
            return view('admin.overview')->with('posts',$posts)->with('albums',$albums)->with('tags',$tags)->with('news',$news)->with('knowledges',$knowledges)->with('users',$users);
        }else{
            return view('admin.overview')->with('posts',$posts)->with('albums',$albums)->with('tags',$tags)->with('news',$news)->with('knowledges',$knowledges);
        }
    }

    public function pdf(){
        $pdf = App::make('dompdf.wrapper');
        $user = Auth::user();
        if($user->kin_no1){
            $kin_number = '<tr><td>Contact no.</td><td>: <span style="border-bottom: 1px dotted;">'.$user->kin_no.'</span></td><td>Contact no.(Optional)</td><td>: <span style="border-bottom: 1px dotted;">'.$user->kin_no1.'</span></td></tr>';
        }else{
            $kin_number = '<tr><td>Contact no.</td><td colspan="3">: <span style="border-bottom: 1px dotted;">'.$user->kin_no.'</span></td></tr>';
        }
        
        $pdf->loadHTML('
        
            <div style="font-family: \'Helvetica\', \'Arial\', sans-serif;"><center><h1>MORA Hiking Club</h1>
            <h3>University of Moratuwa</h3>
            <h2>Membership Form</h2></center>
        
            For office use only<br>
            '.str_pad($user->id, 4, '0', STR_PAD_LEFT).'
            
            <hr>
            <div class="col" style="background: #000;color:#fff;"><h4>Personal information</h4></div>
                <table width="100%">
                    <tr><td width="150px">Firstname</td><td >: <span style="border-bottom: 1px dotted;">'.$user->fname.'</span></td><td width="150px">Lastname</td><td>: <span style="border-bottom: 1px dotted;">'.$user->lname.'</span></td></tr>
                    <tr><td>Fullname</td><td colspan="3">: <span style="border-bottom: 1px dotted;">'.$user->fullname.'</span></td></tr>
                    <tr><td>Date of birth</td><td>: <span style="border-bottom: 1px dotted;">'.$user->dob.'</span></td><td>NIC No</td><td>: <span style="border-bottom: 1px dotted;">'.$user->nic_no.'</span></td></tr>
                    <tr><td>Gender</td><td colspan="3">: <span style="border-bottom: 1px dotted;">'.$user->gender.'</span></td></tr>
                    <tr><td>Contact no.</td><td>: <span style="border-bottom: 1px dotted;">'.$user->contact_no.'</span></td><td>Email address</td><td>: <span style="border-bottom: 1px dotted;">'.$user->email.'</span></td>
                </table>
            <div class="col" style="background: #000;color:#fff;"><h4>University details</h4></div>
                <table>
                    <tr><td>University registration no.</td><td>: <span style="border-bottom: 1px dotted;">'.$user->uni_reg_no.'</td></tr>
                    <tr><td>Faculty</td><td>: <span style="border-bottom: 1px dotted;">'.$user->faculty.'</span></td></tr>
                    <tr><td>Department</td><td>: <span style="border-bottom: 1px dotted;">'.$user->degree.'</span></td></tr>
                    <tr><td>Level</td><td>: <span style="border-bottom: 1px dotted;">Level'.$user->level.'</span></td></tr>
                </table>
            <div class="col" style="background: #000;color:#fff;"><h4>Additional details</h4></div>
                <table>
                    <tr><td>Next of Kin</td><td colspan="3">: <span style="border-bottom: 1px dotted;">'.$user->kin_name.'</span></td></tr>
                    <tr><td>Kinship</td><td colspan="3">: <span style="border-bottom: 1px dotted;">'.$user->kinship.'</span></td></tr>'.$kin_number.'
                    <tr><td>Address</td><td colspan="3">: <span style="border-bottom: 1px dotted;">'.$user->kin_address.'</span></td><tr>
                </table>
            
            <div class="col" style="background: #000;color:#fff;"><h4>Termination of Membership</h4></div>
            <p>No-confidence motion; If the trust of the members on a certain official or a law abiding person
            or the office bearers is breached, a no-confidence motion should be brought forward at the
            general meeting which is to be held after one week and if approved by the majority of votes
            of total registered members, it is considered that the office bearer/s is/are terminated.</p>
            <p>Resignation from the Association; if any member needs to resign from the Association, he/she
            can do so after informing the Secretary through a letter.</p>
            <hr>
            <div class="page-break"></div>
            <p>I hereby agree to the Conditions and Terms of the club and certify that all information
            provided above are true and correct.</p>
            
            <table width="100%">
                <tr><td style="text-align:center;">..................................................</td><td style="text-align:center;">..................................................</td></tr>
                <tr><td style="text-align:center;">Date</td><td style="text-align:center;">Signature</td></tr>
            </table></div><style>
            .page-break {
                page-break-after: always;
            }
            </style>
           ');
        return $pdf->download('Registration form.pdf');

    }
}




