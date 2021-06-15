<?php

namespace App\Http\Controllers;
use App\Models\offer;
use App\Models\images;
use Illuminate\Http\Request;
use DB;
use Auth;


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
        ->select('offers.*', 'img_code' )
        ->get();
        $offers->transform(function($i){
        return (array)$i;
        });
        $array = $offers->toArray();
        return view('list', ['oferty' => $offers]);
    }
    public function destroy($id)
    {
        $offer = offer::find($id);

        $images = images::where('id_offer',$id)->firstOrFail();
        $images->delete();
        $offer->delete();

        return redirect('/list')->with('success','Oferta została usunięta.');
    }
    public function chatstart($id_user, $id)
    {

        $user = DB::table('contacts')->insert(['users_list' => $id, 'user_contact' => $id_user]);

        return redirect('/chat');
    }

}
