<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //contact information isert to database
    public function show(){
        $data = DB::table('contacts')->get();
        return view('backend.contact.add',compact('data'));
    }
    //update contact data
    public function update(Request $request){

        $request->validate([
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'map'=>'required',
        ]);

        // $data= array([
        //     'email'=>$request->email,
        //     'phone'=>$request->phone,
        //     'address'=>$request->address,
        // ]);

        // //updating contact data to database
        $update = DB::table('contacts')->update([
            'email'=>$request->email,
            'phone'=>$request->phone,
            'phone2'=>$request->phone2,
            'address'=>$request->address,
            'map'=>$request->map,

        ]);
        if($update){
            $data = DB::table('contacts')->get();
            $request->session()->flash('msg','Contact Data Updated Successfully');
            return view('backend.contact.add',compact('data'));
        }
        $data = DB::table('contacts')->get();
        return view('backend.contact.add',compact('data'));
    }

    /*==========================================*/
    //social media code 
    /*==========================================*/
    public function showsocial(){
        $data = DB::table('socials')->get();
        return view('backend.social.add',compact('data'));
    }
    //updating social media address
    public function socialupdate(Request $request){

        $request->validate([
            'facebook'=>'required',
            'youtube'=>'required',
            'twetter'=>'required',
        ]);

        $update = DB::table('socials')->update([
            'facebook'=>$request->facebook,
            'youtube'=>$request->youtube,
            'twetter'=>$request->twetter,
        ]);
        if($update){
            $data = DB::table('socials')->get();
            $request->session()->flash('msg','Social Media Adress Updated Successfully');
            return view('backend.social.add',compact('data'));
        }
        $data = DB::table('contacts')->get();
        return view('backend.social.add',compact('data'));
    }




}
