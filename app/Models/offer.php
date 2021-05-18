<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
