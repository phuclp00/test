<?php

namespace App\Http\Controllers;

use App\Models\Show_info_user;
use App\Models\UserModel;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class LoginController extends Controller
{
    use  HasFactory;
    private $pathViewController = 'public.page.my-account';

    public function show_login()
    {
        if (\session()->has('user_info')) {
            return view('public.index');
        }
        return view('public.page.my-account');
    }
    public function Login(Request $request)
    {
        $username = $request->username;
        $password = $request->userpassword;
        if (session()->has('user_info')) {
            return view('public.index');
        }
        try {

            $check_user = UserModel::where('user_name', $username)->first();
            if (Hash::check($password, $check_user->password)) {
                $show_info = Show_info_user::where('user_name', $check_user->user_name)->first();
                $request->session()->push('user_info', $show_info);
                return \redirect('/');
            } else {
                $request->session()->flash('login_status', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"> Đăng nhập thất bại, vui lòng thử lại </div>');
                return \redirect()->back();
            }
        } catch (Exception $e) {
            $request->session()->flash('login_status', '<div class="alert alert-danger"style="text-align: center;font-size: x-large;font-family: fangsong;">
                    Đăng nhập thất bại, vui lòng thử lại !!!!!
            </div>');
            return \redirect()->back();
        }
    }
    public function log_out()
    {
        session()->flush();
        return \redirect()->back();
    }
    public function Register(Request $request)
    {
        $data = new UserModel();
        $data_detail = new UserDetail();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        try {

            $data->user_name = $request->username_register;
            $data->password = $request->password_register;
            $data->email = $request->email_register;
            $data->level = "user";
            $data->status = "active";
            $data->save();
            $data->refresh();
            $request->session()->flash('logout_status', '<div class="alert alert-success">"Tạo tài khoản thành công , tiếp tục mua sắm nào !!"</div>');
            return \redirect()->back();
        } catch (Exception $e) {
            $request->session()->flash('logout_status', '<div class="alert alert-danger">"Tạo tài khoản thát bại, vui lòng thử lại" </div>');
            return \redirect()->back();
        }
    }
}
