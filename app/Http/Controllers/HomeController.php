<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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
        $offers = DB::table('offers')
        ->join('images', 'offers.id', '=', 'id_offer')
        ->select('offers.*', 'img_code')
        ->where('promoted', '=', '1')
        ->get();
        return view('home', ['ofertyprom' => $offers]);
    }
}
