<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserAuthController extends Controller
{
    //new user registration 
    public function newreg(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:30',
            'email'=>'required|unique:user_auths',
            'password'=>'required|min:8',
            'cpass'=>'required'
        ],[
            'name.required'=>'আপনার নামটি অবশ্যই দিতে হবে',
            'email.required'=>'আপনার ইমেইলটি অবশ্যই দিতে হবে',
            'email.unique'=>'দুঃখিত আপনার ইমেইলটি একবার ব্যবহার করা হয়েছে',
            'password.required'=>'অবশ্যই একটি ৮ সংখ্যার পাসওয়ার্ড দিন',
            'password.min'=>'অবশ্যই একটি ৮ সংখ্যার পাসওয়ার্ড দিন',
            'cpass.required'=>'আপনার পাসওয়ার্ডটি কনফার্ম করুন',

        ]);
        //password and confirm password checking
        if($request->password != $request->cpass){
            $request->session()->flash('msg','আপনার পাসওয়ার্ড মিলছে না!');
            return redirect('/register');
        }

        //user data inserting to the database
        $data= array([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'created_at'=>Carbon::now(),
        ]);
        //Database query
       $insert= DB::table('user_auths')->insert($data);
       if($insert){
        $name=$request->name;
        return view('frontend.congrats',compact('name'));
       }
    }


    //check login form data
    public function check(Request $request){
        //validating login form data
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'আপনার ইমেইলটি অবশ্যই দিতে হবে',
            'password.required'=>'আপনার পাসওয়ার্ডটি দিন',
        ]);
        //retriving data from database
        $userdata=DB::table('user_auths')->where('email',$request->email)
        ->where('password',$request->password)->first();

        if(empty($userdata)){
            $request->session()->flash('msg','দুঃখিত আপনার ইমেইল ও পাসওয়ার্ড মিলে নাই');
            return redirect('/login');
        }else{
          $request->session()->put([
              'name'=>$userdata->name, 
              'id'=>$userdata->id,
              'email'=>$userdata->email,
              'password'=>$userdata->password,
              'role'=>$userdata->role,
              ]);
          return redirect('/admin');
        }


        
    }

    public function logout(Request $request){
        $request->session()->forget('name');
        $request->session()->forget('role');
        $request->session()->forget('id');
        $request->session()->forget('password');
        $request->session()->forget('email');
        return redirect('/');
    }

}
