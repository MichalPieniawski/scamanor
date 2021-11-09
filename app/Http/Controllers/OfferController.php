<?php

namespace App\Http\Controllers;
use App\Models\offer;
use App\Models\images;
use Illuminate\Http\Request;
use NotificationChannels\Pushover\PushoverChannel;
use NotificationChannels\Pushover\PushoverMessage;
use Illuminate\Notifications\Notification;
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
    
    public function via($notifiable)
    {
        return [PushoverChannel::class];
    }

    public function toPushover($notifiable)
    {
        return PushoverMessage::create('The invoice has been paid.')
            ->title('Invoice paid')
            ->sound('incoming')
            ->lowPriority()
            ->url('http://scamanor/offer', 'Go to your invoices');
    }
}
