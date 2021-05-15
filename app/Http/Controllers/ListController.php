<?php

namespace App\Http\Controllers;
use App\Models\offer;
use App\Models\images;
use Illuminate\Http\Request;
use DB;

class ListController extends Controller
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
        ->get();
        return view('list', ['oferty' => $offers]);
    }

}
