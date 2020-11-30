<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideModel as MainModel;

class ListproductController extends Controller
{
    private $pathViewController = 'public.home';
    private $controller_name    = 'list-product';

    public function __construct()
    {
        view()->share('controller_name', $this->controller_name);
    }
    public function product_view()
    {
        $mainModel =  new MainModel();
        $items = $mainModel->listItems(null,['task'=>"admin-list-items"]);
        
        return view($this->pathViewController .".". $this->controller_name);
    }
    public function form(Request $request)
    {
        $id = $request->id;

        return view($this->pathViewController . '.form', ['id' => $id,]);
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        return view('public.test', ['id' => $id]);
    }
    public function status(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        return \redirect()->route('silder_view');
    }
}
