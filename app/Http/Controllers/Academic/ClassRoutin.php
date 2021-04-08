<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassRoutin extends Controller
{
    //
    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'link'=>'required',
            'date'=>'required'
        ]); 
            
        // inserting class routin data
            $insert=DB::table('routin')->insert([
                'classname'=>$request->name,
                'link'=>$request->link,
                'uploaded_at'=>$request->date
            ]);
            if($insert){
                $request->session()->flash('msg','Your Data Inserted Successfully');
                return redirect('/routin-list');
            }else{
                $request->session()->flash('msg','Sorry Something wrong!');
                return redirect('/class-routin-add');
            }
       
    }

    //teahcer list show backend
    public function list(){
        $data = DB::table('routin')->get();
        return view('backend.academic.class-routin.list',compact('data'));
    }

    //deleting teacher's Information
    public function delete(Request $request,$id){
        $delete=DB::table('routin')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Routin Deleted Successfully');
            return redirect('/routin-list');
          }
        
    }

    //showing data to frontend page with all data
    public function classroutin(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $notices=DB::table('notices')->orderby('id','desc')->get();
        $routin=DB::table('routin')->orderby('id','desc')->simplePaginate(15);

        return view('frontend.academic.class-routin',compact('notices','br_news','contact_data','social','routin'));
    }
}
