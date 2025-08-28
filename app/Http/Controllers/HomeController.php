<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login(Request $request)
    {
        $remember = $request->filled('remember');
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password],$remember)) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }
        $data['loginError'] = 'Tên đăng nhập hoặc mật khẩu không chính xác';
        return view('admin.login.index',$data);
    }
}
