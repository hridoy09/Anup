<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Image;
Use Carbon\Carbon;

class SliderController extends Controller
{
    public function addslider(){
    	return view('backend.slider.addslider');
    }

    public function storeslider(Request $request){
    	// $validateData = $request->validate([
    	// 	'image' => 'required|image|mimes:jpg,png,jpeg',
        //     'seo_key' => 'required',
    	// ],
    	// [
    	// 	'slider.mimes' => 'slider Image must be of jpg,png,jpeg format',
        //     'seo_key.required' => 'Provide a good slider Title for SEO',
    	// ]);


		//
		if($request->hasFile('slider_image')) {
            $file = $request->file('slider_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/slider_image' ;
            $file->move($destinationPath,$fileName);
    	}
		//

    	// $image = $request->file('slider');
    	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	// Image::make($image)->resize(1017,400)->save('admin/slider/'.$name_gen);
    	// $save_url = 'admin/slider/'.$name_gen;
    Slider::insert([
      	'slider_image' => 'admin/slider_image/'.$fileName,
        'seo_key' => $request->seo_key,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'slider Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('slider.list')->with($notification);
    }

    public function sliderlist(){
    	$sliders = Slider::all();
    	return view('backend.slider.listslider',compact('sliders'));
    }

   public function changeStatus($id){
    	$status = Slider::findOrFail($id)->status;
    	if($status == 1){
    		Slider::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'slider Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Slider::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'slider Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function deleteslider($id){
    	$slider = Slider::findOrFail($id);
		unlink($slider->slider_image);
		Slider::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'slider Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }

	public function edit($id)
    {

        $slider=Slider::find($id);
        return view('backend.slider.editslider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
		
		
        $sliders = Slider::find($id);
		if($request->hasFile('slider_image')) {
            $file = $request->file('slider_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/slider_image' ;
            $file->move($destinationPath,$fileName);
    	}
        $sliders->update([
            'slider_image' => 'admin/slider_image/'.$fileName,
          'seo_key' => $request->seo_key,
          
            'created_at' => Carbon::now(),
         ]);
    	$save_url = 'admin/slider_image/'.$fileName;
          $sliders->slider_image = $save_url;
          $sliders->save();
            return redirect('slider/all-sliders');
      }

}