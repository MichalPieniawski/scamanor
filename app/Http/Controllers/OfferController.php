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
	    'descripton'=>'required',
        'photo'=> 'required|max:2048',
	]);
	$offer= new offer;
	$offer->itemTitle=$req->itemTitle;
	$offer->descripton=$req->descripton;
	$offer->id_user=$req->id_user;
    $offer->save();

    $images=new images;
    $images->img_code= base64_encode(request('photo'));
    $images->id_offer=$offer->id;
    $images->save();
	return redirect('/offer')->with('success', 'Pomyślnie utworzono nową ofertę wymiany!');
    }
}
