<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MemberController extends Controller
{
    public function index(){
        $members = User::where('activated','=','1')->orderBy('fname','asc')->get();
        return view('members')->with('members',$members);
    }
}
