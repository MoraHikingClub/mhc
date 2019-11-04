<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index(){
        $members = Member::orderBy('name','asc')->get();
        return view('members')->with('members',$members);
    }
}
