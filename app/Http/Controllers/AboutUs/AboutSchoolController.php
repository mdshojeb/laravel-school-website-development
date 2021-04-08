<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutSchoolController extends Controller
{
    //about page backend
    public function show(){
        $data = DB::table('about_school')->get();
        return view('backend.about-us.our-school',compact('data'));
    }

    public function insert(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'mimes:jpg,png,jpeg|max:2048'
        ]);
       
        // if there is an image then store this 
        if($request->file('image')){
            $file=$request->file('image')->extension();
            $imageName=time().'.'.$file;
        
            //storing image
            $request->image->storeAs('/public/images',$imageName);
            //storing data with image
            $insert=DB::table('about_school')->where('id',$request->id)->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$imageName,
            ]);
            if($insert){
                $request->session()->flash('msg','Your Data Updated Successfully');
                return redirect('/about-school-add');
            }else{
                $request->session()->flash('err','Sorry Something wrong!');
                return redirect('/about-school-add');
            }
        }

        //inserting data to database without Image
        $insert=DB::table('about_school')->where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        if($insert){
            $request->session()->flash('msg','Your Data Updated Successfully');
            return redirect('/about-school-add');
        }else{
            $request->session()->flash('err','Sorry Something wrong!');
            return redirect('/about-school-add');
        }
    }

    //aboutpage view function frontend
    public function aboutschool(){
        //contact data sending from database
        $contact_data=DB::table('contacts')->get();
        //social media address from db
        $social=DB::table('socials')->get();
        //taking data form about-school db
        $about=DB::table('about_school')->get();
        $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $notices=DB::table('notices')->orderby('id','desc')->limit(12)->get();

        return view('frontend.about.about',compact('contact_data','social','about','br_news','notices'));

    }

}
