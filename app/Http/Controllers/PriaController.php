<?php

namespace App\Http\Controllers;

use App\Models\BajuPria;
use App\Models\BajuWanita;
use Illuminate\Http\Request;

class PriaController extends Controller
{
    public function show( Request $request )
    {
        // $bajuPria = BajuPria::latest();
        return view("admin.baju.pria.showPria", (["bajuPria" => BajuPria::latest()->paginate(6)]));
    }

    public function create_page()
    {
        return view('admin.baju.pria.createBaju-Pria');
    }

    public function create_store( Request $request )
    {
        $bajuPria = BajuPria::create($request->except("_token", "add"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/items/", $request->file("image")->getClientOriginalName());
            $bajuPria -> image = $request -> file("image")->getClientOriginalName();
            $bajuPria -> save();
        }

        return redirect('/baju/mens')->with('tambah', "Berhasil di tambah");
    }

    public function detail_page($id)
    {
        $detail_bajuPria = BajuPria::find($id);
        $bajuPria = BajuPria::all();
        return view('admin.baju.pria.detailPria', compact(["bajuPria", "detail_bajuPria"]));
    }

    public function update_page( $id )
    {
        $bajuPria = BajuPria::find($id);
        return view("admin.baju.pria.updateBaju-Pria", compact(["bajuPria"]));
    }

    public function update_store( $id, Request $request )
    {
        $bajuPria = BajuPria::find($id);
        $bajuPria -> update($request->except("_token", "update"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/items/", $request->file("image")->getClientOriginalName());
            $bajuPria -> image = $request -> file("image")->getClientOriginalName();
            $bajuPria -> save();
        }

        if ( $request -> hasFile("image2") ) {
            $request -> file("image2")->move("image/items/", $request->file("image2")->getClientOriginalName());
            $bajuPria -> image2 = $request -> file("image2")->getClientOriginalName();
            $bajuPria -> save();
        }

        if ( $request -> hasFile("image3") ) {
            $request -> file("image3")->move("image/items/", $request->file("image3")->getClientOriginalName());
            $bajuPria -> image3 = $request -> file("image3")->getClientOriginalName();
            $bajuPria -> save();
        }

        return redirect('/baju/mens')->with('edit', "Berhasil di Edit");
    }

    public function destroy($id)
    {
        $bajuPria = BajuPria::find($id);
        $bajuPria -> delete();
        return redirect('/baju/mens')->with('hapus', "Berhasil di Hapus");
    }
}
