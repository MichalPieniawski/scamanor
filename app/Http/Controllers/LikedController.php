<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\offer;
use App\Models\images;
use DB;

class LikedController extends Controller
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
        $id_autora=Auth::user()->id;
        $offers = DB::table('offers')
        ->join('images', 'offers.id', '=', 'id_offer')
        ->select('offers.*', 'img_code' )
        ->where('liked','=','1')
        ->where('wholiked','=',Auth()->User()->name)
        ->get();
        $offers->transform(function($f){
        return (array)$f;
        });
        $array = $offers->toArray();
        return view('liked', ['oferty' => $offers]);
    }
}
