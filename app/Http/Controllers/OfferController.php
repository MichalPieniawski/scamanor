<?php

namespace App\Http\Controllers;
use App\Models\offer;
use Illuminate\Http\Request;

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
	]);
	$offer= new offer;
	$offer->itemTitle=$req->itemTitle;
	$offer->descripton=$req->descripton;
	$offer->id_user=$req->id_user;
	$offer->save();
	return redirect('/offer')->with('success', 'Pomyślnie utworzono nową ofertę wymiany!');
    }
}
