<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SilderController extends Controller
{

    private $pathViewController = 'admin.slider';
    private $controller_name = 'slider';
    
    public function view()
    {
        $name = \route('admin_name');

        return view($this->pathViewController . '.edit', [

            "controller_name"   => $this->controller_name

        ]);
    }
    public function form(Request $request)
    {
        $id = $request->id;

        return view($this->pathViewController . '.form', [

            'id'                => $id,
            "controller_name"   => $this->controller_name
        ]);
    }
    public function delete(Request $request)
    {
        $id = $request->id;

        return view('public.test', [

            'id'                => $id
        ]);
    }
    public function status(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        return \redirect()->route('silder_view');
        //return view($this->pathViewController . '.delete', ['id' => $id,'status'=>$status]);
    }
}
