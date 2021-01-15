<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\Show_info_user;
use App\Models\UserModel;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Requests\LoginRequest as RequestsLoginRequest;

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
    //Admin Account Controller 

    public function admin_auth(Request $request)
    {
        if (Auth::check("admin")) {
            return \redirect()->route("admin.dash_view");
        } else
            return \redirect()->route('admin_login_view');
    }
    public function admin_register(SignupRequest $request)
    {
        try {
            $user = new UserModel();
            $user->user_name = $request->username;
            $user->password = $request->password;
            $user->email = $request->email;
            $user->level = $request->level;
            $user->status = "active";
            $user->save();
            $user->refresh();
            $request->session()->flash('info_warning', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"> Create account ' . $request->username . ' Successfully !! </div>');
            return \redirect()->route("admin_login_view");
        } catch (\Throwable $th) {
            $request->session()->flash('info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;">  Create account ' . $request->username . 'Fail,Try Again !! </div>');
            return \redirect()->back();
        }
    }
    public function admin_login(LoginRequest $loginRequest)
    {
        $result = $loginRequest->only('email', 'password');
        $option =$loginRequest->remember=="on"?true:false; 
        if (Auth::attempt([
            'email' => $result['email'],
            'password' => $result['password'],
            'level' => "admin"
        ],$remember=$option))
        {
            $loginRequest->session()->regenerate();
            return redirect()->route('admin.dash_view');
        } 
        else
            $loginRequest->session()->flash('info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;">  Login Fail,Try Again !! </div>');
            return \redirect()->back();
    }
    public function admin_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route("admin_login_view");
    }
}
