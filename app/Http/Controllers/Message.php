<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Message extends Controller
{
    //
    //backend CRUD for Memory
    public function list(){
        $data=DB::table('message')->get();
        return view('backend.message.list',compact('data'));
    }

    /*================inserting data==================== */
    public function insert(Request $request){
        //validating data
        $request->validate([
            'name'=>'required',
            'message'=>'required',
            'image'=>'mimes:jpg,png,jpeg|max:2048'
        ]);
        //renaming image with time method
        if($request->file('image')){
            $file=$request->file('image')->extension();
            $imageName=time().'.'.$file;
        
            //storing image
            $request->image->storeAs('/public/images',$imageName);
            //storing data with image
            $insert=DB::table('message')->insert([
                'name'=>$request->name,
                'message'=>$request->message,
                'image'=>$imageName,
            ]);
            if($insert){
                $request->session()->flash('msg','Your Data Saved Successfully');
                return redirect('/see-all-message');
            }else{
                $request->session()->flash('msg','Sorry Something wrong!');
                return redirect('/create-message');
            }
        }

        //inserting data to database without Image
        $insert=DB::table('message')->insert([
            'name'=>$request->name,
            'message'=>$request->message,
        ]);
        if($insert){
            $request->session()->flash('msg','Your Data Saved Successfully');
            return redirect('/see-all-message');
        }else{
            $request->session()->flash('err','Sorry Something wrong!');
            return redirect('/create-message');
        }
    }

    //deleting memory post
    public function delete(Request $request,$id){
        $delete=DB::table('message')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Message Deleted Successfully');
            return redirect('/see-all-message');
          }
        
    }
    //show memory edit page
    public function edit(Request $request,$id){
        $data=DB::table('message')->where('id',$request->id)->get();
        return view('backend.message.edit',compact('data'));
    }


    //update memery data
    public function update(Request $request,$id){
        //validating data
        $request->validate([
            'name'=>'required',
            'message'=>'required',
            'image'=>'mimes:jpg,png,jpeg|max:2048'
        ]);
      
        //if there is an image then update with image
        if($request->file('image')){
            $file=$request->file('image')->extension();
            $imageName=time().'.'.$file;
        
            //storing image
            $request->image->storeAs('/public/images',$imageName);
            $update=DB::table('message')->where('id',$request->id)->update([
                'name'=>$request->name,
                'message'=>$request->message,
                'image'=>$imageName,
            ]);
            if($update){
                $request->session()->flash('msg','Your Data Updated Successfully');
                return redirect('/see-all-message');
            }else{
                $request->session()->flash('msg','Sorry Something wrong!');
                return redirect('/edit-message');
            }
        }
        //form update without image
         //inserting data to database 
         $update=DB::table('message')->where('id',$request->id)->update([
            'name'=>$request->name,
            'message'=>$request->message,
        ]);
        if($update){
            $request->session()->flash('msg','Your Data Updated Successfully');
            return redirect('/see-all-message');
        }else{
            $request->session()->flash('msg','Sorry Something wrong!');
            return redirect('/edit-message');
        }


       
    }
}
