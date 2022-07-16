<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contactinfo;
use App\Models\Gallary;
use App\Models\Sisterconcurn;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
        $banners=Banner::where('status', 1)->get();
        $sliders=Slider::where('status', 1)->get();
        return view('frontend.index',compact('sliders','banners'));
    }
    public function career()
    {
        //
    }

    public function gallery()
    {

        $gallerys=Gallary::all();
        return view('frontend.gallery',compact('gallerys'));
    }

    public function contact()
    {
        $contacts=Contactinfo::latest()->first();
        return view('frontend.contact-us',compact('contacts'));
    }
    public function sisterList()
    {
        $sisterlists=Sisterconcurn::with('slider')->get();
        // dd($sisterlists);
        return view('frontend.sisterconcurnlist',compact('sisterlists'));
    }
    public function sisterDetails($id)
    {
        $sisterdetails=Sisterconcurn::find($id);
        return view('frontend.sisterconcurn', compact('sisterdetails'));
    }

    public function Sponsordirectors()
    {
        $teams=Team::with('names')->paginate(4);
      
        return view('frontend.Sponsor-Directors',compact('teams'));
    }





}
