<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $foreginKey ='id_offer';
    protected $table="images";
    protected $fillable = [
        'img_code',
    ];
    public $timestamps=false;

    public function offer()
    {
        return $this->belongsTo(offer::class);
    }
}
