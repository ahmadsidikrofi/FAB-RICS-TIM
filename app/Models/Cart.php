<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $guarded = [];

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    public function BajuWanita()
    {
        return $this->belongsTo(BajuWanita::class);
    }

    public function BajuPria()
    {
        return $this->belongsTo(BajuPria::class);
    }

    public function BajuAnak()
    {
        return $this->belongsTo(BajuAnak::class);
    }

    // public function items()
    // {
    //     return $this->hasMany(BajuWanita::class);
    // }
}
