<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $guarded = [];

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
}
