<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Link extends Controller
{
     //inserting notice to database
     public function insert(Request $request){
        $request->validate([
            'title'=>'required',
            'url'=>'required'
        ]);

        $insert=DB::table('links')->insert([
            'title'=>$request->title,
            'url'=>$request->url,
        ]);

        if($insert){
            $request->session()->flash('msg','Link Created Successfully');
            return redirect('/create-link');
            
        }
    }
     //show all notices to notice list page
     public function list(){
        $data=DB::table('links')->orderby('id','desc')->get();
        return view('backend.link.list',compact('data'));
    }
    public function delete(Request $request,$id){
        $delete=DB::table('links')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Link Deleted Successfully');
            return redirect('/link-list');
          }
        
    }

    
}
