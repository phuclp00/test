<?php

namespace App\Http\Controllers;

use App\Http\Resources\User;
use Illuminate\Http\Request;
use App\Models\UserModel as MainModel;
use App\Models\UserModel;
use Exception;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    private $pathViewController = 'public.login';
    public function signin_view()
    {
        return view($this->pathViewController . '.sign-in');
    }
    
    public function signup_view()
    {
        $mainModel = new MainModel();
        $items = $mainModel::find(1);
        
        return view($this->pathViewController . '.sign-up',['item'=>$items]);
    }
    public function Login(Request $request)
    {   
        $username=$request->username;
        $password=$request->userpassword;
       
        try{    
          
            $check_user=UserModel::where('user_name',$username)->first();
            $check_password=UserModel::where('passwrod',$password)->first();        
            if($check_password->user_password==$check_user->user_password && $check_user->user_name==$check_password->user_name){
                $request->session()->put('user_name', $request->user_name);
                return \redirect()->back()->with('success');           
            }
            else
            {
                return \redirect()->back()->with('fail');
            }
        }
        catch(Exception $e){
            return \redirect()->back()->with('register_fail',$e->getMessage());
        }
    }   
    public function Register(Request $request)
    {
        $data=[];
        date_default_timezone_set('Asia/Ho_Chi_Minh');   
        $date = date('y-m-d h:i:s');
        $data['user_name']=$request->username_register;
        $data['full_name']=$request->username_register;
        $data['email']=$request->email_register;
        $data['passwrod']=$request->password_register;
        $data['modiffer']=$date;
        $data['level']="user";
        $data['status']="active";
      try{
        $register_user=DB::table('user_account')->insertGetId($data);
       
        return \redirect()->back()->with('register_success');

      }
      catch(Exception $e){   
            
          return \redirect()->back()->with('register_fail',$e->getMessage());
           
      }
    }

}
