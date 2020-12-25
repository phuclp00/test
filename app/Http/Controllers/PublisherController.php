<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublisherModel as MainModel;
use App\Models\ProductModel;
use App\Models\PublisherModel;
use Exception;

class PublisherController extends Controller
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
    
    public function edit_publisher(Request $request){
        return view('');

    }
    public function delete_publisher(Request $request)
    {
        # code...
    }
    public function add_publisher(Request $request)
    {

        try {
            $data= new PublisherModel();
            $data_file = new FileuploadController();
            $data->pub_id=$request->pub_id;
            $data->pub_name=$request->pub_name;
            $temp_file=$request->img;
            $data->pub_img=$temp_file->getClientOriginalName();
            $data->description=$request->content;
            $data_file->store($request->img,'publisher');
            $data->save();
            $request->session()->flash('info_warning', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"">
                  Thanh cong </div>');
             return \redirect()->back();
        } catch (\Throwable $th) {
            $request->session()->flash('info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"">
                  Cập nhật ảnh thất bại </div>');
             return \redirect()->back();
        }
    }
    public function admin_pub_delete(Request $request)
    {
        try {
            MainModel::destroy($request->cat_id);

            $request->session()->flash('cat_status', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"> Xoá danh mục' . $request->cat_id . ' thành công </div>');
        } catch (Exception $e) {
            $request->session()->flash('cat_status', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"> Xoá danh mục ' . $request->cat_id . 'thất bại, vui lòng thử lại </div>');
        }
        return \redirect()->back();
    }
}
