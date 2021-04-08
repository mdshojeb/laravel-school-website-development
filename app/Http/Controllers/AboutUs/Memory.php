<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Memory extends Controller
{
    //show all memoryable day blog in frontend
    public function show(){
         //contact data sending from database
         $contact_data=DB::table('contacts')->get();
         //social media address from db
         $social=DB::table('socials')->get();
         $notices=DB::table('notices')->orderby('id','desc')->limit(12)->get();
         $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
         $memorylist=DB::table('memory')->orderby('id','desc')->limit(8)->get();

        return view('frontend.memory.all-memory',compact('contact_data','social','notices','br_news','memorylist'));
    }

    //backend CRUD for Memory
    public function ShowMemorylist(){
        $memorylist=DB::table('memory')->orderby('id','desc')->get();
        return view('backend.memory.list',compact('memorylist'));
    }

    /*================inserting data==================== */
    public function insert(Request $request){
        //validating data
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'mimes:jpg,png,jpeg|max:2048'
        ]);
        //making slug
        $title=explode(' ',$request->title);
        $slug=time().'-'.implode('-',$title);
        //renaming image with time method
        if($request->file('image')){
            $file=$request->file('image')->extension();
            $imageName=time().'.'.$file;
        
            //storing image
            $request->image->storeAs('/public/memory-img',$imageName);
            //storing data with image
            $insert=DB::table('memory')->insert([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$imageName,
                'slug'=>$slug,
            ]);
            if($insert){
                $request->session()->flash('msg','Your Data Saved Successfully');
                return redirect('/create-memory');
            }else{
                $request->session()->flash('err','Sorry Something wrong!');
                return redirect('/create-memory');
            }
        }

        //inserting data to database without Image
        $insert=DB::table('memory')->insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'slug'=>$slug,
        ]);
        if($insert){
            $request->session()->flash('msg','Your Data Saved Successfully');
            return redirect('/create-memory');
        }else{
            $request->session()->flash('err','Sorry Something wrong!');
            return redirect('/create-memory');
        }
    }

    //deleting memory post
    public function delete(Request $request,$id){
        $delete=DB::table('memory')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Notice Deleted Successfully');
            return redirect('/show-all-memory');
          }
        
    }
    //show memory edit page
    public function edit(Request $request,$id){
        $data=DB::table('memory')->where('id',$request->id)->get();
        return view('backend.memory.edit',compact('data'));
    }


    //update memery data
    public function update(Request $request,$id){
        //validating data
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'mimes:jpg,png,jpeg|max:2048'
        ]);
        $title=explode(' ',$request->title);
        $slug=time().'-'.implode('-',$title);

        //if there is an image then update with image
        if($request->file('image')){
            $file=$request->file('image')->extension();
            $imageName=time().'.'.$file;
        
            //storing image
            $request->image->storeAs('/public/memory-img',$imageName);
            $update=DB::table('memory')->where('id',$request->id)->update([
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=>$imageName,
                'slug'=>$slug
            ]);
            if($update){
                $request->session()->flash('msg','Your Data Updated Successfully');
                return redirect('/show-all-memory');
            }else{
                $request->session()->flash('err','Sorry Something wrong!');
                return redirect('/edit-memory');
            }
        }
        //form update without image
         //inserting data to database 
         $update=DB::table('memory')->where('id',$request->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'slug'=>$slug,
        ]);
        if($update){
            $request->session()->flash('msg','Your Data Updated Successfully');
            return redirect('/show-all-memory');
        }else{
            $request->session()->flash('err','Sorry Something wrong!');
            return redirect('/edit-memory');
        }


       
    }
    //==================================
    //show single memory post frontend
    //==================================
    public function showmemory(Request $request,$id){
        $contact_data=DB::table('contacts')->get();
         //social media address from db
         $social=DB::table('socials')->get();
         $notices=DB::table('notices')->orderby('id','desc')->limit(12)->get();
         $br_news=DB::table('notices')->orderby('id','desc')->limit(4)->get();
        $single_post=DB::table('memory')->where('id',$request->id)->get();

        return view('frontend.memory.single',compact('contact_data','social','notices','br_news','single_post'));
    }


}
