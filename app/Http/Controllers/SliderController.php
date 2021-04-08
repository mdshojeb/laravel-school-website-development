<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    //
    public function insert(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,jpeg,png|max:2048',
            'caption'=>'required',
        ]); 

        // if there is an image then store this 
        if($request->file('image')){
            $file=$request->file('image')->extension();
            $imageName=time().'.'.$file;
        
            //storing image
            $request->image->storeAs('/public/Slider',$imageName);
            //storing data with image
            $insert=DB::table('slider')->insert([
                'caption'=>$request->caption,
                'image'=>$imageName,
                
            ]);
            if($insert){
                $request->session()->flash('msg','Your Data Inserted Successfully');
                return redirect('/slider-image-list');
            }else{
                $request->session()->flash('msg','Sorry Something wrong!');
                return redirect('/upload-slider-image');
            }
        }

    }

    //listing slider image
    public function list(){
        $data = DB::table('slider')->orderby('id','desc')->get();
        return view('backend.slider.list',compact('data'));
    }

      //deleting slider image
      public function delete(Request $request,$id){
        $delete=DB::table('slider')->where('id',$request->id)->delete();
        if($delete){
            $request->session()->flash('msg','Selected Image Deleted Successfully');
            return redirect('/slider-image-list');
          }
        
    }
}
