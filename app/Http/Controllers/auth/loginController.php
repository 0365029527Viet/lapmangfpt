<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //
    public function index()
    {
            return view('auth.login');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password], true)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Đăng nhập thành công');
            
        }
        return redirect()->intended('/')->with('error', 'Số điện thoại hoặc mật khẩu không chính sác');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('trangchu');

    }

    public function signUp(Request $request) {
        
        $data = new User();

        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = 0;

        $data->save();

        return redirect()->route('auth.login')->with('success', 'Đăng kí thành công, mời bạn đăng nhập.');
    }

    // dangky
    public function DangKy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('trangchu');

    }

}
