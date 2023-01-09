<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BajuAnak extends Model
{
    use HasFactory;
    protected $table = "baju_anak";
    protected $guarded = [];

    public function scopeFilter( $query, array $filters )
    {

        $query->when($filters["search"] ?? false, function($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
            ->orWhere('brand', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });

    }
}
