<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    public function fromContact()
    {
        return $this->hasOne(User::class, 'id', 'users_list');
    }

    protected $table = 'contacts';

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
