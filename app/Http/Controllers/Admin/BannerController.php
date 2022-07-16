<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Image;
Use Carbon\Carbon;

class BannerController extends Controller
{
    public function addbanner(){
    	return view('backend.banner.addbanner');
    }

    public function storebanner(Request $request){
    	// $validateData = $request->validate([
    	// 	'image' => 'required|image|mimes:jpg,png,jpeg',
        //     'seo_key' => 'required',
    	// ],
    	// [
    	// 	'banner.mimes' => 'banner Image must be of jpg,png,jpeg format',
        //     'seo_key.required' => 'Provide a good banner Title for SEO',
    	// ]);


		//
		if($request->hasFile('banner_image')) {
            $file = $request->file('banner_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/banner_image' ;
            $file->move($destinationPath,$fileName);
    	}
		//

    	// $image = $request->file('banner');
    	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	// Image::make($image)->resize(1017,400)->save('admin/banner/'.$name_gen);
    	// $save_url = 'admin/banner/'.$name_gen;
    Banner::insert([
      	'banner_image' => 'admin/banner_image/'.$fileName,
        'seo_key' => $request->seo_key,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'banner Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('banner.list')->with($notification);
    }

    public function bannerlist(){
    	$banners = Banner::paginate(10);
    	return view('backend.banner.listbanner',compact('banners'));
    }

   public function changeStatus($id){
    	$status = Banner::findOrFail($id)->status;
    	if($status == 1){
    		Banner::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'banner Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Banner::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'banner Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function deletebanner($id){
    	$banner = Banner::findOrFail($id);
		unlink($banner->banner_image);
		Banner::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'banner Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }

	public function edit($id)
    {

        $banner=Banner::find($id);
        return view('backend.banner.editbanner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
		
		
        $banners = Banner::find($id);
		if($request->hasFile('banner_image')) {
            $file = $request->file('banner_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/banner_image' ;
            $file->move($destinationPath,$fileName);
    	}
        $banners->update([
            'banner_image' => 'admin/banner_image/'.$fileName,
          'seo_key' => $request->seo_key,
          
            'created_at' => Carbon::now(),
         ]);
    	$save_url = 'admin/banner_image/'.$fileName;
          $banners->banner_image = $save_url;
          $banners->save();
            return redirect('banner/all-banners');
      }

}