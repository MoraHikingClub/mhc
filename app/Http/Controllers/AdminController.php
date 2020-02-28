<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function activeUsers(){
        $users = User::where('activated','=',1)->orderBy('m_id','desc')->get();

        if(Auth::user()->role_id==4 || Auth::user()->role_id==1){
            return view('admin.activeusers')->with('users',$users);
        }else{
            return redirect()->route('account.account');
        }
    }

    public function pendingUsers(){
        $users = User::where('activated','=',0)->orderBy('m_id','desc')->get();
        $m_id = User::max('m_id');

        if($m_id){
            $m_id = $m_id+1;
        }else{
            $m_id = 200001;
        }
        if(Auth::user()->role_id==5 || Auth::user()->role_id==1){
            return view('admin.pendingusers')->with('users',$users)->with('m_id',$m_id);
        }else{
            return redirect()->route('account.account');
        }
    }

    public function searchPendingUsers(Request $request){
        if($request->ajax()){
            $output='';
            $i=0;
            $users = User::where('id','LIKE','%'.$request->q.'%')->where('activated','=',0)->get();
            if($users){
                foreach($users as $user){
                    if($user->email != 'webadmin@morahiking.com'){
                        $i++;
                        $output .= '<tr>
                        <td>
                                            <form method="post" action="'.route('admin.activateuser').'">';
                        $output .= csrf_field();
                        $output .= '<input type="hidden" name="id" value="'.$user->id.'" />
                                                <button class="btn btn-primary btn-round btn-sm" type="submit">Activate</button>
                                            </form>
                                        </td>
                        <td>'.$i.'</td>
                        <td>'.str_pad($user->id, 4, '0', STR_PAD_LEFT).'</td>
                        <td>'.$user->fname.'</td>
                        <td>'.$user->lname.'</td>
                        <td>'.$user->fullname.'</td>
                        <td>'.$user->dob.'</td>
                        <td>'.$user->nic_no.'</td>
                        <td>'.$user->gender.'</td>
                        <td>'.$user->contact_no.'</td>
                        <td>'.$user->email.'</td>
                        <td>'.$user->uni_reg_no.'</td>
                        <td>'.$user->faculty.'</td>
                        <td>'.$user->degree.'</td>
                        <td>Level '.$user->level.'</td>
                        <td>'.$user->skills.'</td>
                        <td>'.$user->bio.'</td>
                        <td>'.$user->fb_url.'</td>
                        <td>'.$user->insta_url.'</td>
                        <td>'.$user->kin_name.'</td>
                        <td>'.$user->kinship.'</td>
                        <td>'.$user->kin_no.'</td>
                        <td>'.$user->kin_no1.'</td>
                        <td>'.$user->kin_address.'</td>
                        <td>'.$user->blood.'</td>
                        <td>'.$user->first_aid.'</td>
                        <td>'.$user->injury.'</td>
                        <td>'.$user->longterm_med_issue.'</td>
                        <td>'.$user->medicine.'</td>
                        <td>'.$user->acc_activated_at.'</td>
                    </tr>';
                    }
                }

                return response($output);
            }
        }
    }

    public function searchActiveUsers(Request $request){
        if($request->ajax()){
            $output='';
            $i=0;
            $users = User::where([['m_id','LIKE','%'.$request->q.'%'],['activated','=',1]])
                            ->orWhere([['fullname','LIKE','%'.$request->q.'%'],['activated','=',1]])
                            ->get();

            if($users){
                foreach($users as $user){
                    if($user->email != 'webadmin@morahiking.com'){
                        $i++;
                        $output .= '<tr>
                        <td>'.$i.'</td>
                        <td>'.$user->m_id.'</td>
                        <td>'.$user->fname.'</td>
                        <td>'.$user->lname.'</td>
                        <td>'.$user->fullname.'</td>
                        <td>'.$user->dob.'</td>
                        <td>'.$user->nic_no.'</td>
                        <td>'.$user->gender.'</td>
                        <td>'.$user->contact_no.'</td>
                        <td>'.$user->email.'</td>
                        <td>'.$user->uni_reg_no.'</td>
                        <td>'.$user->faculty.'</td>
                        <td>'.$user->degree.'</td>
                        <td>Level '.$user->level.'</td>
                        <td>'.$user->skills.'</td>
                        <td>'.$user->bio.'</td>
                        <td>'.$user->fb_url.'</td>
                        <td>'.$user->insta_url.'</td>
                        <td>'.$user->kin_name.'</td>
                        <td>'.$user->kinship.'</td>
                        <td>'.$user->kin_no.'</td>
                        <td>'.$user->kin_no1.'</td>
                        <td>'.$user->kin_address.'</td>
                        <td>'.$user->blood.'</td>
                        <td>'.$user->first_aid.'</td>
                        <td>'.$user->injury.'</td>
                        <td>'.$user->longterm_med_issue.'</td>
                        <td>'.$user->medicine.'</td>
                        <td>'.$user->acc_activated_at.'</td>
                    </tr>';
                    }
                }

                return response($output);
            }
        }
    }

    public function activateUser(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $m_id = User::max('m_id');
        if($m_id){
            $user->m_id = $m_id+1;
        }else{
            $user->m_id = 200001;
        }
        $user->activated = 1;
        $user->acc_activated_at = now();
        $user->save();
        return redirect()->back();
    }
}
