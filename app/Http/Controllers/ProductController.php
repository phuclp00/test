<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel as MainModel;

class ProductController extends Controller
{
    private $pathViewController = 'public';
    private $controller_name    = '';

    public function paginate_list_view()
    {
        $mainModel =  new MainModel();
        $new_items = $mainModel->all_list_items(null,['task'=>"pagi-list-items"],null,6);
      
         view()->share('pagi_list_items',$new_items);    
    }

    public function get_items(Request $request)
    {
        $id = $request->id;
        $mainModel= new MainModel();
        $new_items=$mainModel->all_list_items("book_id",['task'=>"special-list-items"],'===',$id);
        
        view()->share('new_items',$new_items); 
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
