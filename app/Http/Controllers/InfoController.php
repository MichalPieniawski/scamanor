<?php

namespace App\Http\Controllers;
use App\Models\offer;
use Illuminate\Http\Request;
use App\Models\images;
use App\Models\User;
class InfoController extends Controller
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
    function appearData($id)
    {
        $offers=offer::find($id);
        return view('info',['oferty'=>$offers]);
    }
    function Like($id)
    {  
        $user_name=Auth::user()->name;
        $offer=offer::find($id);
        $offer=offer::where('id', $id)->update(array('liked'=> "1"));
        $offer=offer::where('id', $id)->update(array('wholiked'=> $user_name));
        return redirect('/info');
    }
}
