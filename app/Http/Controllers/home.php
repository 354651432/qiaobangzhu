<?php

namespace App\Http\Controllers;

use App\User;
use Auth;

class home extends Controller
{
    //
    public function index()
    {
        if (!Auth::user()) {
            return redirect()->route("login");
        }
        return view("index");
    }

    public function login()
    {
        if (Auth::user()) {
            return redirect()->route("home");
        }
        return view("login");
    }

    public function postLogin()
    {
        $this->validate(request(), [
            "phone" => 'required|regex:/^1[34578][0-9]{9}$/',
            "password" => "required",
        ], [
            "phone.required" => "请输入手机号码",
            "phone.regex" => "手机号码格式错误",
            "password.required" => "请输入密码",
        ]);
        $user = User::where("phone", request("phone"))
            ->where("password", md5(request("password")))
            ->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route("home");
        }
        return redirect()->route("login")->withInput()->withErrors(["password" => "用户名或者密码错误"]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
