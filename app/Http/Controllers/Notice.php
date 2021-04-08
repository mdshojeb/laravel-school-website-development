<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Notice extends Controller
{
    //inserting notice to database
    public function insert(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'date'=>'required'
        ]);
        
        // $data=array([
            
        // ]);
        $insert=DB::table('notices')->insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>$request->date,
        ]);

        if($insert){
            $request->session()->flash('msg','Notice Created Successfully');
            return redirect('/notice-list');
            
        }
    }
    //show all notices to notice list page
    public function show(){
        $data=DB::table('notices')->orderby('id','desc')->get();
        return view('backend.notice.list',compact('data'));
    }
    public function delete(Request $request,$id){
        $delete=DB::table('notices')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Notice Deleted Successfully');
            return redirect('/notice-list');
          }
        
    }

    //show all notices to notice list page (frontend page)
    public function allnoticeshow(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $notices=DB::table('notices')->orderby('id','desc')->get();

        return view('frontend.notice.allnotice',compact('notices','br_news','contact_data','social'));
    }

    //show particular notice to frontend page
    public function shownotice(Request $request,$id){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $notices=DB::table('notices')->orderby('id','desc')->get();
        $show_notice=DB::table('notices')->where('id',$request->id)->get();

        return view('frontend.notice.show-notice',compact('notices','br_news','contact_data','social','show_notice'));
    }
}
