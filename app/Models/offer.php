<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NotificationChannels\Pushover\PushoverChannel;
use NotificationChannels\Pushover\PushoverMessage;
use Illuminate\Notifications\Notification;

class offer extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey ='id';
    protected $table="offers";

    public function image()
    {
        return $this->hasOne('App\Models\images');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
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
    public function routeNotificationForPushover() {
    return PushoverReceiver::withUserKey('pushover-key')
        ->toDevice('desktop')
        // or, if you prefer:
        ->toDevice(['desktop']);
    }
}
