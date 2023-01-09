<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BajuWanita extends Model
{
    use HasFactory;
    protected $table = "baju_wanita";
    protected $guarded = [];

    public function scopeFilter( $query, array $filters )
    {
        // if ( isset($filters["search"]) ? $filters["search"] : false ) {
        //     return $query->where('nama', 'like', '%' . $filters["search"] . '%')
        //                ->orWhere('brand', 'like', '%' . $filters["search"] . '%')
        //                ->orWhere('deskripsi', 'like', '%' . $filters["search"] . '%');

        // }

        $query->when($filters["search"] ?? false, function($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
            ->orWhere('brand', 'like', '%' . $search . '%')
            ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });

    }

}
