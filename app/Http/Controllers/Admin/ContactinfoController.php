<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contactinfo;
use Illuminate\Http\Request;

class ContactinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_contact = Contactinfo::paginate(10);
  
        return view('backend.contact.contact_list',compact('all_contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts=Contactinfo::all();
        return view('backend.contact.add_contact', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'phone_number' => 'required',
        'email' => 'required',
        'factory_address' => 'required',
        ]);
        $contact = Contactinfo::create([
            'phone_number' => $request->phone_number,
            'email'=>$request->email,
            'factory_address'=>$request->factory_address,
        ]);
        return redirect()->back()->with('success','contact added successfully');
    }

    /**
     * Display the specified resource.
     *
     */
    
    /**
     * Show the form for editing the specified resource.
   
     */
    public function edit($id)
    {
        $contact=Contactinfo::find($id);
      
        
        return view('backend.contact.contact_edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategroy  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
    
        $request->validate([
            'phone_number' => 'required',
            'email' => 'required',
            'factory_address' => 'required',
        ]);
    
        Contactinfo::find($id)->update($request->all());
    
        return redirect()->route('contact.index')
                        ->with('success','Sub-contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactinfo $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')
                        ->with('success','contact deleted successfully');
    }
}