<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel as MainModel;

class CategoryController extends Controller
{
    private $subpatchViewController='.page';
    private $pathViewController = 'public.';

    public function __construct()
    {
       
    }
    public function list_category()
    {
        $mainModel =  new MainModel();
        $items = $mainModel->listItems(null,['task'=>"frontend-list-items"]);
       
          view()->share('list_category', $items);
          
    }
    public function top_list_category()
    {
        $mainModel =  new MainModel();
        $top_items = $mainModel->listItems(null,['task'=>"top-list-items"],null,5);
       
          view()->share('top_list_category', $top_items);
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
