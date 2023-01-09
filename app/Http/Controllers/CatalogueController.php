<?php

namespace App\Http\Controllers;

use App\Models\BajuAnak;
use App\Models\BajuPria;
use App\Models\BajuWanita;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function showCatalog()
    {
        // $bajuWanita = BajuWanita::all();
        // $bajuAnak = BajuAnak::all();
        // $bajuPria = BajuPria::all();
        return view("admin.baju.catalog", (
            ["bajuWanita" => BajuWanita::latest()->filter(request(['search']))->paginate(2),
             "bajuAnak" => BajuAnak::latest()->filter(request(['search']))->paginate(2),
             "bajuPria" => BajuPria::latest()->filter(request(['search']))->paginate(2),

             "active" => 'catalogue'

        ]));
    }

}
