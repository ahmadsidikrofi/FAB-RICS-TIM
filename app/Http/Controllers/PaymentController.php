<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentTransaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function show_page()
    {
        $user = auth()->user();
        $riwayat = PaymentTransaction::with('BajuWanita')->where('user_id', $user->id)->latest()->get();
        return view('admin.baju.riwayat', compact(['riwayat']));
    }

    public function admin_check()
    {
        $admin_check = PaymentTransaction::latest()->get();
        return view('admin.baju.adminCheck', compact(['admin_check']));
    }

    public function status_check($id,Request $request)
    {

        $status = $request->input('status');
        DB::table('payment')
        ->where('id', '=', $id)
        ->update([
            'status' => $request->status
        ]);

        return redirect('/adminCheck');
    }
}
