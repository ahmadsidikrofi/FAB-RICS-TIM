<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthAdmin extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $guarded = [];

    // public function getProfile()
    // {
    //     if (!$this->image) {
    //         return asset('/image/profile/cowo.png');
    //     }

    //     return asset('/image/profile', $this->image);
    // }
}
