<?php

namespace App\Http\Controllers;

use App\Models\AuthAdmin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AuthAdmin as ModelsAuthAdmin;
use Illuminate\Validation\ValidationException;

class AuthAdminController extends Controller
{
    public function regist_page()
    {
        return view("admin.auth.regist");
    }

    public function regist_store( Request $request )
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:5'
        ]);

        $checkEmail = ModelsAuthAdmin::where('email', $request->email)->first();
        if ( $checkEmail ) {
            return redirect()->back()->with('error', 'Email Sudah Terdaftar');
        }

        ModelsAuthAdmin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect("/")->with('berhasilDaftar', 'Akunmu Berhasil Di Buat :D');
    }

    // Login
    public function login_page()
    {
        return view('admin.auth.login');
    }

    public function login_store( Request $request )
    {
        if ( Auth::attempt($request->only("email", "password")) ) {

            $second = 1;
            $response = new Response(redirect("/afterLogin")->with('berhasilLogin', 'Login Berhasil Di Lakukan'));
            if ( $request->has("remember") ) {
                $response->withCookie(cookie('1202204108', 'Rofi', $second));
                return $response;

            } else {
                return redirect("/afterLogin")->with('berhasilLogin', 'Login Berhasil Di Lakukan');
            }

        } else {
            return redirect("/account/login/buyer")->with("wrongLogin","Email dan Password ada yang Salah");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/")->with("logout","Terimakasih Telah Berkunjung. Kita sudah Rindu");
    }


    public function profile_page( )
    {
        return view("admin.auth.profile");
    }

    public function profileUpdate_store( $id, Request $request )
    {
        $name = $request->input('name');
        $no_hp = $request->input('no_hp');
        $gender = $request->input('gender');
        $alamat = $request->input('alamat');

        DB::table('users')
        ->where('id', '=', Auth::user()->id)
        ->update([
            'name' => $name,
            'no_hp' => $no_hp,
            'gender' => $gender,
            'alamat' => $alamat,
        ]);

        return redirect("/account/profile")->with('profileUpdate', 'Profile Kamu Sukses Di Update');
    }

    public function password_page()
    {
        return view("admin.auth.password");
    }

    public function password_store( $id, Request $request )
    {
        $this->validate($request, [
            'current_password' => ['required'],
            'password' => '|confirmed|min:5'
        ]);

        $password = $request->input('password');
        $password = Hash::make($request->password);

        if( Hash::check($request->current_password, auth()->user()->password) ) {

            DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->update([
                'password' => $password,
            ]);

            return redirect("/account/create")->with('passwordUpdate', 'Password Kamu Sukses Di Update');

        }

        return redirect("/account/login/buyer")->with('passwordUpdate', 'Password Kamu Sukses Di Update');

        throw ValidationException::withMessages([
            'current_password' => "Password Invalid"
        ]);

    }

    public function upload_image(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png,jfif',
        ]);

        $profile = AuthAdmin::find($id);
        $profile -> update($request->except("_token", "update_foto"));

        if ( $request -> hasFile("image") ) {
            $request -> file("image")->move("image/profile/", $request->file("image")->getClientOriginalName());
            $profile -> image = $request -> file("image")->getClientOriginalName();
            $profile -> save();
        }

        return redirect("/account/profile")->with('profileUpdate', 'Profile Kamu Sukses Di Update');
    }

    public function delete_account($id)
    {
        AuthAdmin::find($id)->delete();
        return redirect('/')->with('delete', 'Yakin ingin menghapus akunmu?');
    }

    public function all_account()
    {
        $accounts = AuthAdmin::all();
        return view('admin.auth.allAccount', compact(['accounts']));
    }

    public function delete_member($id)
    {
        AuthAdmin::find($id)->delete();
        return redirect('/accounts/members')->with('delete', 'Yakin ingin menghapus akunmu?');
    }
}
