<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserdataController extends Controller
{
    public function listing(){
        $data = DB::table('user_auths')->get();
        return view('backend.user.list',compact('data'));
    }

    //user data edit page
    public function useredit(Request $request,$id){
        $data=DB::table('user_auths')->where('id',$request->id)->get();
        return view('backend.user.edit',compact('data'));
    }

    // user data update
    public function userupdate(Request $request,$id){
            $update=DB::table('user_auths')->where('id',$request->id)
            ->update([
            'role'=>$request->selectedrole,
            ]);
            if($update){
            $request->session()->flash('msg','User Role Updated Successfully');
            return redirect('/userlist');
            }
        
    }
    //user data delete
    public function userdelete(Request $request,$id){
        $delete=DB::table('user_auths')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','User Data Deleted Successfully');
            return redirect('/userlist');
          }
    }
}
