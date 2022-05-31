<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sisterconcurndetails;
use Illuminate\Http\Request;

class SisterConcurnDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_detail = Sisterconcurndetails::paginate(10);
  
        return view('backend.sisterconcurn.details.details_list',compact('all_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $details=Sisterconcurndetails::all();
        return view('backend.sisterconcurn.details.add_details', compact('details'));
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
        'name' => 'required',
        'sisterconcurn_name' => 'required',
        'number' => 'required',
        'details' => 'required',
       
        ]);
        $detail = Sisterconcurndetails::create([
            'name' => $request->name,
            'sisterconcurn_name'=>$request->sisterconcurn_name,
            'number'=>$request->number,
            'details'=>$request->details,
        ]);
        return redirect()->route('sisterconcurn.index')
                        ->with('success','details added successfully');
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
        $detail=Sisterconcurndetails::find($id);
      
        
        return view('backend.sisterconcurn.details.details_edit',compact('detail'));
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
            'name' => 'required',
            'sisterconcurn_name' => 'required',
            'number' => 'required',
            'details' => 'required',
        ]);
    
        Sisterconcurndetails::find($id)->update($request->all());
    
        return redirect()->route('sisterconcurn.index')
                        ->with('success','details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Sisterconcurndetails::find($id)->delete();
        return redirect()->route('sisterconcurn.index')
                        ->with('success','details deleted successfully');
    }
}