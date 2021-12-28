<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('account.login_admin');
    }
    public function login_admin(Request $request){
        if(Auth::attempt(['email'=> $request->input('email'), 'password'=> $request->input('password')])){
            return redirect("/Categories");
        }
        $request->session()->flash('error', 'Đăng nhập thất bại!'); //tương tự giống tạo 1 session['message] rồi unset khi load lại trang
        return redirect("/login_admin");
    } 
    public function ShowRegisterForm(){
        return view('account.register');
    }
    public function register(Request $request){
        $user = User::create($request->input());
        Auth::login($user); //tuong duong voi viec cap 1 session cho no, chay xuyen suot cac trang
    }
    public function logout(){
        Auth::logout();
        return redirect('/login_admin');
    }
    public function showAccountForm(){
        return view('account.account');
    }
    public function account(Request $request){
        if(Auth::attempt(['email'=> $request->input('email'), 'password'=> $request->input('password')])){
            return redirect("/");
        }
        $request->session()->flash('error', 'Đăng nhập thất bại!'); //tương tự giống tạo 1 session['message] rồi unset khi load lại trang
        return redirect("/account");
    } 
}