<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;
Use Carbon\Carbon;
class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allmail()
    {
        $mails = Mail::paginate(10);
  
        return view('backend.inbox.inbox',compact('mails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mail::insert([

          'name' => $request->name,
          'email' => $request->email,
          'message' => $request->message,
            'created_at' => Carbon::now(),
         ]);
      
         $notification = array(
            'message' => 'message send Successfully',
            'alert-type' => 'success',
        );
      return redirect()->back()->with($notification);
      }
   
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletemail($id){
    	
		Mail::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }
}
