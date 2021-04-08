<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homepage(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        //youtube class list
        $youtube_class=DB::table('youtube')->orderby('id','desc')->limit(9)->get();
        $notices=DB::table('notices')->orderby('id','desc')->limit(12)->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $slider=DB::table('slider')->orderby('id','desc')->get();
        $message=DB::table('message')->get();
        $head_message=DB::table('message')->where('id',1)->get();
        $links=DB::table('links')->get();
        $about=DB::table('about_school')->get();

        return view('frontend.index',compact('contact_data','social','youtube_class','notices','br_news','slider','message','head_message','links','about'));

    }
    //show particular msg frontend show message page
    public function showmsg(Request $request,$id){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        //youtube class list
        $notices=DB::table('notices')->orderby('id','desc')->limit(12)->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $message=DB::table('message')->where('id',$request->id)->get();
        return view('frontend.show-message',compact('contact_data','social','notices','br_news','message','message'));

    }
    
     //aboutcampus page view function
     public function aboutcampus(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        //taking data form about-school db
        $about=DB::table('about_campus')->get();

        return view('frontend.about.about',compact('contact_data','social','about'));

    }
    public function classRoutin(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        $notices=DB::table('notices')->orderby('id','desc')->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        return view('frontend.academic.class-routin',compact('contact_data','social','notices','br_news',));

    }


}
