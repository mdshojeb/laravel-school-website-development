<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Suggestion extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'subject_name'=>'required',
            'link'=>'required',
            'date'=>'required'
        ]); 
            
        // inserting class routin data
            $insert=DB::table('suggestion')->insert([
                'classname'=>$request->name,
                'subject_name'=>$request->subject_name,
                'link'=>$request->link,
                'uploaded_at'=>$request->date
            ]);
            if($insert){
                $request->session()->flash('msg','Your Data Inserted Successfully');
                return redirect('/suggestion-list');
            }else{
                $request->session()->flash('msg','Sorry Something wrong!');
                return redirect('/suggestion-add');
            }
       
    }

    //teahcer list show backend
    public function list(){
        $data = DB::table('suggestion')->get();
        return view('backend.academic.suggestion.list',compact('data'));
    }

    //deleting teacher's Information
    public function delete(Request $request,$id){
        $delete=DB::table('suggestion')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Suggestion Deleted Successfully');
            return redirect('/suggestion-list');
          }
        
    }

    //showing data to frontend page with all data
    public function suggestions(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $notices=DB::table('notices')->orderby('id','desc')->get();
        $suggestion=DB::table('suggestion')->orderby('id','desc')->simplePaginate(15);

        return view('frontend.academic.suggestion',compact('notices','br_news','contact_data','social','suggestion'));
    }
}
