<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;

class DBconnect extends Controller
{

    public function show2(REQUEST $request)
    {
        $name = $request->name;

        # Lấy dữ liệu từ database.
        //$users=array();
        $users = DB::table('book')->select('*')->get();
        $users = DB::table('book')->paginate(10);

      
            
        //return view('user.index', ['users' => $users]);

        return view('admin.slider.view',['users'=>$users]);
        
    }
}
