<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\offer;
use App\Models\images;
use DB;
class MyListController extends Controller
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
        ->where('id_user','=',Auth()->User()->id)
        ->get();
        $offers->transform(function($i){
        return (array)$i;
        });
        $array = $offers->toArray();
        return view('mylist', ['oferty' => $offers]);
    }
}
