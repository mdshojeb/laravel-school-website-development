<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Teacher extends Controller
{
    //creating teahcer data
    public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'designation'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png|max:2048'
        ]); 

        // if there is an image then store this 
        if($request->file('image')){
            $file=$request->file('image')->extension();
            $imageName=time().'.'.$file;
        
            //storing image
            $request->image->storeAs('/public/images',$imageName);
            //storing data with image
            $insert=DB::table('teachers')->insert([
                'name'=>$request->name,
                'designation'=>$request->designation,
                'image'=>$imageName,
                'facebook'=>$request->fb,
                'twetter'=>$request->twetter,
                'linkedin'=>$request->linkedin,
            ]);
            if($insert){
                $request->session()->flash('msg','Your Data Inserted Successfully');
                return redirect('/teacher-list');
            }else{
                $request->session()->flash('err','Sorry Something wrong!');
                return redirect('/about-teacher-add');
            }
        }

    }

    //teahcer list show backend
    public function list(){
        $data = DB::table('teachers')->get();
        return view('backend.about-us.teacher.list',compact('data'));
    }

    //deleting teacher's Information
    public function delete(Request $request,$id){
        $delete=DB::table('teachers')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Teahcer Info Deleted Successfully');
            return redirect('/teacher-list');
          }
        
    }

    //showing data to frontend page with all data
    public function teacherInfo(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $notices=DB::table('notices')->orderby('id','desc')->get();
        $teacher=DB::table('teachers')->get();

        return view('frontend.about.teachers',compact('notices','br_news','contact_data','social','teacher'));
    }
}
