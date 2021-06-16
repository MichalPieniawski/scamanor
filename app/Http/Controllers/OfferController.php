<?php

namespace App\Http\Controllers;
use App\Models\offer;
use App\Models\images;
use Illuminate\Http\Request;

use DB;

class OfferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('offer');
    }

    function save(Request $req)
    {
	$this->validate($req, [
	    'itemTitle'=>'required',
	    'description'=>'required',
        'photo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	]);
	$offer= new offer;
	$offer->itemTitle=$req->itemTitle;
	$offer->description=$req->description;
	$offer->id_user=$req->id_user;
    $offer->autor=$req->autor;
    $offer->save();

    $images=new images;
    $images->img_code = base64_encode(file_get_contents($req->file('photo'))); 
    $images->id_offer=$offer->id;
    $images->save();
	return redirect('/offer')->with('success', 'Pomyślnie utworzono nową ofertę wymiany!');
    }

    function Like($id_usterki)
    {  
         $user_name=Auth::user()->name;
        $usterkimodel=usterkimodel::find($id_usterki);
        $usterki=usterkimodel::where('id_usterki', $id_usterki)->update(array('status'=> "Wykonane"));
        $usterki=usterkimodel::where('id_usterki', $id_usterki)->update(array('finisher'=> $user_name));
        return redirect('/report');
    }
    
}
