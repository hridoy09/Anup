<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sisterconcurn;
use Illuminate\Http\Request;
use Image;
Use Carbon\Carbon;

class SisterConcurnController extends Controller
{
    public function addsisterconcurn(){
    	return view('backend.sisterconcurn.addsisterconcurn');
    }

    public function storesisterconcurn(Request $request){
    	// $validateData = $request->validate([
    	// 	'image' => 'required|image|mimes:jpg,png,jpeg',
        //     'seo_key' => 'required',
    	// ],
    	// [
    	// 	'banner.mimes' => 'banner Image must be of jpg,png,jpeg format',
        //     'seo_key.required' => 'Provide a good banner Title for SEO',
    	// ]);


		//
		if($request->hasFile('banner_img')) {
            $file = $request->file('banner_img') ;
            $fileName1 = $file->getClientOriginalName() ;
            $destinationPath1 = public_path().'/admin/sisterconcurn/banner_img' ;
            $file->move($destinationPath1,$fileName1);
    	}
        if($request->hasFile('logo_img')) {
            $file = $request->file('logo_img') ;
            $fileName2 = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/sisterconcurn/logo_img' ;
            $file->move($destinationPath2,$fileName2);
    	}
        if($request->hasFile('side_img')) {
            $file = $request->file('side_img') ;
            $fileName3 = $file->getClientOriginalName() ;
            $destinationPath3 = public_path().'/admin/sisterconcurn/side_img' ;
            $file->move($destinationPath3,$fileName3);
    	}

		//

    	// $image = $request->file('banner');
    	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	// Image::make($image)->resize(1017,400)->save('admin/banner/'.$name_gen);
    	// $save_url = 'admin/banner/'.$name_gen;
    Sisterconcurn::insert([
      	'banner_img' => 'admin/sisterconcurn/banner_img/'.$fileName1,
        'name' => $request->name,
        'logo_img' => 'admin/sisterconcurn/logo_img/'.$fileName2,
        'side_img' => 'admin/sisterconcurn/side_img/'.$fileName3,
        'about_us'=> $request->about_us,
        'phone' => $request->phone,
        'email' => $request->email,
        'factory_address' => $request->factory_address,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'sisterconcurn Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('sisterconcurn.list')->with($notification);
    }

    public function sisterconcurnlist(){
    	$sisterconcurns = Sisterconcurn::all();
    	return view('backend.sisterconcurn.listsisterconcurn',compact('sisterconcurns'));
    }

   public function changeStatus($id){
    	$status = Sisterconcurn::findOrFail($id)->status;
    	if($status == 1){
    		Sisterconcurn::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'sisterconcurn Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Sisterconcurn::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'sisterconcurn Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function deletesisterconcurn($id){
    	$sisterconcurn = Sisterconcurn::findOrFail($id);
		unlink($sisterconcurn->banner_img);
		unlink($sisterconcurn->logo_img);
		unlink($sisterconcurn->side_img);
		Sisterconcurn::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'sisterconcurn Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }

	public function edit($id)
    {

        $sisterconcurn=Sisterconcurn::find($id);
        return view('backend.sisterconcurn.editsisterconcurn', compact('sisterconcurn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
		
		
        $sisterconcurns = Sisterconcurn::find($id);
        if($request->hasFile('banner_img')) {
            $file = $request->file('banner_img') ;
            $fileName1 = $file->getClientOriginalName() ;
            $destinationPath1 = public_path().'/admin/sisterconcurn/banner_img' ;
            $file->move($destinationPath1,$fileName1);
    	}
        if($request->hasFile('logo_img')) {
            $file = $request->file('logo_img') ;
            $fileName2 = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/sisterconcurn/logo_img' ;
            $file->move($destinationPath2,$fileName2);
    	}
        if($request->hasFile('side_img')) {
            $file = $request->file('side_img') ;
            $fileName3 = $file->getClientOriginalName() ;
            $destinationPath3 = public_path().'/admin/sisterconcurn/side_img' ;
            $file->move($destinationPath3,$fileName3);
    	}
        $sisterconcurns->update([
            'banner_img' => 'admin/sisterconcurn/banner_img/'.$fileName1,
            'name' => $request->name,
            'logo_img' => 'admin/sisterconcurn/logo_img/'.$fileName2,
            'side_img' => 'admin/sisterconcurn/side_img/'.$fileName3,
            'about_us'=> $request->about_us,
            'phone' => $request->phone,
            'email' => $request->email,
            'factory_address' => $request->factory_address,
              'created_at' => Carbon::now(),
         ]);
    	$save_url1 = 'admin/sisterconcurn/banner_img/'.$fileName1;
    	$save_url2 = 'admin/sisterconcurn/logo_img/'.$fileName2;
    	$save_url3 = 'admin/sisterconcurn/side_img/'.$fileName3;
          $sisterconcurns->banner_img = $save_url1;
          $sisterconcurns->logo_img = $save_url2;
          $sisterconcurns->side_img= $save_url3;
          $sisterconcurns->save();
            return redirect('sisterconcurn/all-sisterconcurns');
      }

}