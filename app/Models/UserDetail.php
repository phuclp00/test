<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class UserDetail extends Model
{
    use HasFactory;
        //DEFINED DATABASE TABLE
        protected $table = "user_detail";
        protected $primaryKey = "user_id";
        const CREATED_AT = 'created';
        const UPDATED_AT = 'modiffed';
        public $timestamps = false;
        
        public function user_account()
        {
            return $this->belongsTo('App\Models\User','user_id','user_id');

        }
        public function order_detail()
        {
            return $this->hasMany('App\Models\OrderDetail','order_id','order_id');
        }
        public function register_address(Request $request)
        {
            $data=[];
              
            $date = date('y-m-d h:i:s');
            $data['user_name']=$request->username_first;
            $data['full_name']=$request->username_last;
            $data['email']=$request->email_register;
            $data['passwrod']=$request->password_register;
            $data['modiffer']=$date;
            $data['level']="user";
            $data['status']="active";
        try{
            $register_user=DB::table('user_account')->insertGetId($data);
            $request->session()->put('user_name', $request->username_register);
            return \redirect()->back()->with('message','success');

        }
        catch(Exception $e){   
                
            return \redirect()->back()->with('fail',$e->getMessage());
            
        }
}
