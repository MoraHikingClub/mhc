<?php

namespace App\Http\Controllers;

use App\Mail\Resetpassword;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Mail;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function SignIn(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('account.account');
        }else{
            Session::flash('error', 'Invalid credintials, Try again');
            return redirect()->back();
        }
    }

    public function SignUp(Request $request)
    {
        $this->validate($request, [
            'fname'                 => 'required|max:255',
            'lname'                 => 'required|max:255',
            'fullname'              => 'required|max:255',
            'dob'                   => 'required|date',
            'nic_no'                => 'required|unique:users,nic_no',
            'gender'                => 'required|max:6',
            'contact_no'            => 'required',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|max:60|same:confirm',
            'uni_reg_no'            => 'required|unique:users,uni_reg_no|regex:/^(([1][5-9]|[2][0])([0-9]{4}[A-Z]|([\/][I][T][\/][E][T][\/][0-9]{3})))$/gi',
            'faculty'               => 'required|max:255',
            'degree'                => 'required|max:255',
            'level'                 => 'required|max:6',
            'kin_name'              => 'required|max:255',
            'kin_no'                => 'required',
            'kin_address'           => 'required|max:255',
            'blood'                 => 'required|max:3',
            'first_aid'             => 'required|max:255',
            'injury'                => 'required|max:255',
            'longterm_med_issue'    => 'required|max:255',
            'medicine'              => 'required|max:255'
        ]);

        $user = new User();

        //personal details
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->fullname = $request->fullname;
        $user->dob =date('Y-m-d', strtotime($request->dob));
        $user->nic_no = $request->nic_no;
        $user->gender = $request->gender;
        $user->contact_no = $request->contact_no;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        //university details
        $user->uni_reg_no = $request->uni_reg_no;
        $user->faculty = $request->faculty;
        $user->degree = $request->degree;
        $user->level = $request->level;

        //club details
        //$user->mem_cat = $request->mem_cat;
        //$user->join_date = $request->join_date_m.'/'.$request->join_date_y;
        if($request->skills){
            $user->skills = join('/', $request->skills);
        }else{
            $user->skills = '';
        }
        $user->bio = $request->bio;
        $user->fb_url = $request->fb_url;
        $user->insta_url = $request->insta_url;

        //kinship details
        $user->kin_name = $request->kin_name;
        if($request->kinship === 'Other'){
            $user->kinship = $request->kinship1;
        }else{
            $user->kinship = $request->kinship;
        }
        $user->kin_no = $request->kin_no;
        $user->kin_no1 = $request->kin_no1;
        $user->kin_address = $request->kin_address;

        //medical details
        $user->blood = $request->blood;
        $user->first_aid = $request->first_aid;
        // $user->med_allergy = $request->med_allergy;
        // $user->food_allergy = $request->food_allergy;
        // $user->other_allergy = $request->other_allergy;
        $user->injury = $request->injury;
        $user->longterm_med_issue = $request->longterm_med_issue;
        $user->medicine = $request->medicine;
        $user->api_token = sha1(time());

        $user->save();

        Session::flash('success', 'Account have been created successfully');
        Auth::login($user);
        return redirect()->route('account.account');
    }

    public function SignOut(){
        Auth::logout();
        Session::flash('success', 'You have logged out successfully.');

        return redirect()->route('signin');
    }

    public function updateUser(Request $request){
        $this->validate($request, [
            'fname'                 => 'required|max:255',
            'lname'                 => 'required|max:255',
            'fullname'              => 'required|max:255',
            'dob'                   => 'required|date',
            'nic_no'                => 'required',
            'gender'                => 'required|max:6',
            'contact_no'            => 'required',
            'email'                 => 'required|email',
            'uni_reg_no'            => 'required|max:7',
            'faculty'               => 'required|max:255',
            'degree'                => 'required|max:255',
            'level'                 => 'required|max:6',
            'kin_name'              => 'required|max:255',
            'kin_no'                => 'required',
            'kin_address'           => 'required|max:255',
            'blood'                 => 'required|max:3',
            'first_aid'             => 'required|max:255',
            'injury'                => 'required|max:255',
            'longterm_med_issue'    => 'required|max:255',
            'medicine'              => 'required|max:255'
        ]);

        $user = User::find(Auth::user()->id);
        //personal details
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->fullname = $request->fullname;
        $user->dob = date('Y-m-d', strtotime($request->dob));
        $user->nic_no = $request->nic_no;
        $user->gender = $request->gender;
        $user->contact_no = $request->contact_no;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        //university details
        $user->uni_reg_no = $request->uni_reg_no;
        $user->faculty = $request->faculty;
        $user->degree = $request->degree;
        $user->level = $request->level;

        //club details
        //$user->mem_cat = $request->mem_cat;
        //$user->join_date = $request->join_date_m.'/'.$request->join_date_y;
        if($request->skills){
            $user->skills = join('/', $request->skills);
        }else{
            $user->skills = '';
        }
        $user->bio = $request->bio;
        $user->fb_url = $request->fb_url;
        $user->insta_url = $request->insta_url;

        //kinship details
        $user->kin_name = $request->kin_name;
        if($request->kinship === 'Other'){
            $user->kinship = $request->kinship1;
        }else{
            $user->kinship = $request->kinship;
        }
        $user->kin_no = $request->kin_no;
        $user->kin_no1 = $request->kin_no1;
        $user->kin_address = $request->kin_address;

        //medical details
        $user->blood = $request->blood;
        $user->first_aid = $request->first_aid;
        // $user->med_allergy = $request->med_allergy;
        // $user->food_allergy = $request->food_allergy;
        // $user->other_allergy = $request->other_allergy;
        $user->injury = $request->injury;
        $user->longterm_med_issue = $request->longterm_med_issue;
        $user->medicine = $request->medicine;
        $user->api_token = sha1(time());

        $user->save();

        return redirect()->route('account.account');
        
    }

    public function changePassword(){
        return view('account.password');
    }

    public function updatePassword(Request $request){
        $this->validate($request, [
            'password' => 'required|max:60|same:confirm'
            ]);

        if(Hash::check($request->old_password,Auth::user()->password)){
            $user = Auth::user();
            $user->password = bcrypt($request->password);
            $user->save();
            Session::flash('success', 'You have changed your password successfully.');
            return redirect()->route('account.account');
        }else{
            Session::flash('error', 'Older password do not match, Try again!');
            return redirect()->back();
        }
    }

    public function resetPasswordView(){
        return view('account.resetpasswordview');
    }

    public function resetPasswordPost(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            Mail::to($user->email)->send(new Resetpassword($user));
            Session::flash('success', 'Email has been sent to your email address.');
            return redirect()->back();
        }else{
            Session::flash('error', 'Account not found');
            return redirect()->back();
        }
        
    }

    public function resetPasswordChange($api){
        $user = User::where('api_token','=',$api)->first();

        if($user){
            return view('account.resetpasswordchange')->with('user',$user);
        }else{
            return redirect()->route('signin');
        }
    }

    public function resetPasswordUpdate(Request $request,$api){
        $this->validate($request, [
            'password' => 'required|max:60|same:confirm'
        ]);
            
        $user = User::where('api_token','=',$api)->first();
        $user->password = bcrypt($request->password);
        $user->api_token = sha1(time());
        $user->save();
        Session::flash('success', 'You have changed your password successfully.');
        Auth::login($user);
        return redirect()->route('account.account');

    }

    //api functions

    public function api_SignIn(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json([
                'user' => Auth::user(),
                'api_token' => Auth::user()->api_token
            ], 200);
        }else{
            return response()->json('Unauthorized',401);
        }
    }

    public function api_SignUp(Request $request)
    {
        $this->validate($request, [
            'fname'                 => 'required|max:255',
            'lname'                 => 'required|max:255',
            'fullname'              => 'required|max:255',
            'dob'                   => 'required|date',
            'nic_no'                => 'required|unique:users,nic_no',
            'gender'                => 'required|max:6',
            'contact_no'            => 'required',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|max:60|same:confirm',
            'uni_reg_no'            => 'required|unique:users,uni_reg_no|max:7',
            'faculty'               => 'required|max:255',
            'degree'                => 'required|max:255',
            'level'                 => 'required|max:6',
            'kin_name'              => 'required|max:255',
            'kin_no'                => 'required',
            'kin_address'           => 'required|max:255',
            'blood'                 => 'required|max:3',
            'first_aid'             => 'required|max:255',
            'injury'                => 'required|max:255',
            'longterm_med_issue'    => 'required|max:255',
            'medicine'              => 'required|max:255'
        ]);

        $user = new User();

        //personal details
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->fullname = $request->fullname;
        $user->dob = date('Y-m-d', strtotime($request->dob));
        $user->nic_no = $request->nic_no;
        $user->gender = $request->gender;
        $user->contact_no = $request->contact_no;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        //university details
        $user->uni_reg_no = $request->uni_reg_no;
        $user->faculty = $request->faculty;
        $user->degree = $request->degree;
        $user->level = $request->level;

        //club details
        $user->mem_cat = $request->mem_cat;
        $user->join_date = $request->join_date_m.'-'.$request->join_date_y;
        if($request->skills){
            $user->skills = join('/', $request->skills);
        }else{
            $user->skills = '';
        }
        $user->bio = $request->bio;
        $user->fb_url = $request->fb_url;
        $user->insta_url = $request->insta_url;

        //kinship details
        $user->kin_name = $request->kin_name;
        if($request->kinship === 'Other'){
            $user->kinship = $request->kinship1;
        }else{
            $user->kinship = $request->kinship;
        }
        $user->kin_no = $request->kin_no;
        $user->kin_no1 = $request->kin_no1;
        $user->kin_address = $request->kin_address;

        //medical details
        $user->blood = $request->blood;
        $user->first_aid = $request->first_aid;
        $user->med_allergy = $request->med_allergy;
        $user->food_allergy = $request->food_allergy;
        $user->other_allergy = $request->other_allergy;
        $user->injury = $request->injury;
        $user->longterm_med_issue = $request->longterm_med_issue;
        $user->medicine = $request->medicine;
        $user->api_token = sha1(time());

        $user->save();

        Auth::login($user);
        return response()->json([
            'user' => $user,
            'api_token' => $user->api_token
        ], 200);
    }

    public function api_SignOut(){
        Auth::logout();
        return response()->json('true', 200);
    }

    public function api_User(Request $request){
        if($request->header('api_token')){
            $api_token = $request->header('api_token');
        }else{
            $api_token = $request->api_token;
        }

        if($api_token){
            $user = User::where('api_token','=',$api_token)->first();
            return response()->json([
                'user' => $user,
                'api_token' => $user->api_token
            ], 200);
        }else{
            return response()->json('Unathorized', 401);
        }
    }

    public function api_Refresh(Request $request){
        if($request->header('api_token')){
            $api_token = $request->header('api_token');
        }else{
            $api_token = $request->api_token;
        }

        if($api_token){
            $user = User::where('api_token','=',$api_token)->first();
            $user->api_token =  sha1(time());
            $user->save();
            
            return response()->json([
                'user' => $user,
                'api_token' => $user->api_token
            ], 200);
        }else{
            return response()->json('Unathorized', 401);
        }
    }
}

