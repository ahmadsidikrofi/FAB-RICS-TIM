<?php

namespace App\Http\Controllers;

use App\Models\BajuAnak;
use Illuminate\Http\Request;
// Perubahan 5
class AnakController extends Controller
{
    public function show()
    {
        // $bajuAnak = BajuAnak::latest();
        return view('admin.baju.anak.showAnak', (["bajuAnak" => BajuAnak::latest()->paginate(6)]));
    }

    public function create_page()
    {
        return view('admin.baju.anak.createBaju-Anak');
    }

    public function create_store( Request $request )
    {
        $bajuAnak = BajuAnak::create($request->except("_token", "add"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/items/", $request->file("image")->getClientOriginalName());
            $bajuAnak -> image = $request -> file("image")->getClientOriginalName();
            $bajuAnak -> save();
        }

        return redirect('/baju/kids')->with('tambah', "Berhasil di tambah");
    }

    public function detail_page($id)
    {
        $detail_bajuAnak = BajuAnak::find($id);
        $bajuAnak = BajuAnak::all();
        return view('admin.baju.anak.detailAnak', compact(["bajuAnak", "detail_bajuAnak"]));
    }

    public function update_page( $id )
    {
        $bajuAnak = BajuAnak::find( $id );
        return view('admin.baju.anak.updateBaju-Anak', compact(["bajuAnak"]));
    }

    public function update_store( $id, Request $request )
    {
        $bajuAnak = BajuAnak::find($id);
        $bajuAnak -> update($request->except("_token", "update"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/items/", $request->file("image")->getClientOriginalName());
            $bajuAnak -> image = $request -> file("image")->getClientOriginalName();
            $bajuAnak -> save();
        }

        if ( $request -> hasFile("image2") ) {
            $request -> file("image2")->move("image/items/", $request->file("image2")->getClientOriginalName());
            $bajuAnak -> image2 = $request -> file("image2")->getClientOriginalName();
            $bajuAnak -> save();
        }

        if ( $request -> hasFile("image3") ) {
            $request -> file("image3")->move("image/items/", $request->file("image3")->getClientOriginalName());
            $bajuAnak -> image3 = $request -> file("image3")->getClientOriginalName();
            $bajuAnak -> save();
        }


        return redirect('/baju/kids')->with('edit', "Berhasil di Edit");
    }

    public function destroy_kids( $id )
    {
        $bajuAnak = BajuAnak::find($id)->delete();
        return redirect('/baju/kids')->with('hapus', "Berhasil di Hapus");
    }
}
