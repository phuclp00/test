<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel as MainModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Exception;

class CategoryController extends Controller
{
    private $subpatchViewController = '.page';
    private $pathViewController = 'public.';

    public function __construct()
    {
    }
    public function list_category()
    {
        $mainModel =  new MainModel();
        $items = $mainModel->listItems(null, ['task' => "frontend-list-items"]);

        view()->share('list_category', $items);
    }
    public function top_list_category()
    {
        $mainModel =  new MainModel();
        $top_items = $mainModel->listItems(null, ['task' => "top-list-items"], null, 5);

        view()->share('top_list_category', $top_items);
    }
    public function find_product(Request $request)
    {

        $key_find = $request->key_word;


        $list_search = ProductModel::Where('book_id', '=', $key_find)
            ->orwhere('book_name', 'like', '%' . $key_find . '%')
            ->orWhere('description', 'like', '%' . $key_find . '%')
            ->paginate(6);

        if ($list_search != "") {
            return view($this->pathViewController . $this->subpatchViewController . '.shop', [
                "list_search" => $list_search,
                "get_cat_items" => $get_cat_items = null,
                "pagi_list_items" => $pagi_list_items = null
            ]);
        } else {

            return view('errors.error404');
        }
    }
    public function cat_delete(Request $request)
    {
        try {
            CategoryModel::destroy($request->cat_id);

            $request->session()->flash('cat_status', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"> Xoá danh mục' . $request->cat_id . ' thành công </div>');
        } catch (Exception $e) {
            $request->session()->flash('cat_status', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"> Xoá danh mục ' . $request->cat_id . 'thất bại, vui lòng thử lại </div>');
        }
        return \redirect()->back();
    }
}
