<?php

namespace App\Http\Controllers;

use App\Models\BajuWanita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// Perubahan 5
class WanitaController extends Controller
{
    public function show()
    {
        // $bajuWanita = BajuWanita::latest();
        // $bajuWanita = BajuWanita::orderBy("id", "desc")->get();

        return view("admin.baju.wanita.showWanita", ["bajuWanita" => BajuWanita::latest()->paginate(6)]);
    }

    public function create_page()
    {
        return view('admin.baju.wanita.createBaju');
    }

    public function create_store(Request $request)
    {
        $bajuWanita = BajuWanita::create($request->except("_token", "add"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/items/", $request->file("image")->getClientOriginalName());
            $bajuWanita -> image = $request -> file("image")->getClientOriginalName();
            $bajuWanita -> save();
        }

        return redirect('/baju/woman')->with('tambah', "Berhasil di tambah");
    }

    public function detail_page($id)
    {
        $detail_bajuWanita = BajuWanita::find($id);
        $bajuWanita = BajuWanita::all();
        return view('admin.baju.wanita.detailWanita', compact(["bajuWanita", "detail_bajuWanita"]));
    }

    public function update_page( $id )
    {
        $bajuWanita = BajuWanita::find( $id );
        return view('admin.baju.wanita.updateBaju', compact(["bajuWanita"]));
    }

    public function update_store( $id, Request $request )
    {
        $bajuWanita = BajuWanita::find($id);
        $bajuWanita -> update($request->except("_token", "update"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/items/", $request->file("image")->getClientOriginalName());
            $bajuWanita -> image = $request -> file("image")->getClientOriginalName();
            $bajuWanita -> save();
        }

        if ( $request -> hasFile("image2") ) {
            $request -> file("image2")->move("image/items/", $request->file("image2")->getClientOriginalName());
            $bajuWanita -> image2 = $request -> file("image2")->getClientOriginalName();
            $bajuWanita -> save();
        }

        if ( $request -> hasFile("image3") ) {
            $request -> file("image3")->move("image/items/", $request->file("image3")->getClientOriginalName());
            $bajuWanita -> image3 = $request -> file("image3")->getClientOriginalName();
            $bajuWanita -> save();
        }

        return redirect('/baju/woman')->with('update', "Berhasil di Update");
    }

    public function destroy($id)
    {
        BajuWanita::find($id)-> delete();
        return redirect('/baju/woman')->with('hapus', "Berhasil di Hapus");
    }
}
