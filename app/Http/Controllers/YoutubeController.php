<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YoutubeController extends Controller
{
    //youtube class show 
    public function show(){
        $data = DB::table('youtube')->get();
        return view('backend.social.youtube.classlist',compact('data'));
    }
    public function insert(Request $request){

        $request->validate([
            'name'=>'required',
            'url'=>'required',
        ]);

        $data= array([
            'name'=>$request->name,
            'url'=>$request->url,
        ]);

        // //updating contact data to database
        $insert = DB::table('youtube')->insert($data);
        
        if($insert){
            $request->session()->flash('msg','Youtube Class Added Successfully');
            return redirect('youtube-class-list');
        }
    }
    //class delete
    public function delete(Request $request,$id){
        $delete=DB::table('youtube')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Youtube class Deleted Successfully');
            return redirect('/youtube-class-list');
          }
        
    }


}
