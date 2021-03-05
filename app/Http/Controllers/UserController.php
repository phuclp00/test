<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;
use App\Models\Show_info_user as MainModel;
use App\Models\Show_info_user;
use App\Models\User;
use App\Models\UserModel;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Validator;
use League\Flysystem\Cached\Storage\Memcached;
use DB;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{

    public function account_view(Request $request)
    {
        if (session()->has('user_info')) {
            $key_find = $request->user_name;
            $data = MainModel::find($key_find);
            if ($data->address == null || $data->phone == null) {
                session()->flash('account_info_warning', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;">
                Xin chào  ' . $data->user_name . '</div>');
            } else {
                session()->flash('account_info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"">
                    Hãy cập nhật thông tin của bạn để dễ dàng thanh toán hơn </div>');
            }
            return view('public.page.account-info')->with('data', $data);
        } else {
            return \redirect('/');
        }
    }
    public function notifications()
    {
        return auth()->user()->unreadNotifications->limit(5)->get()->toArray();
    }
    public function update_img(Request $request)
    {
        $request->validate([
            'upload_file' => 'required',
        ]);
        try {
            $file = $request->upload_file;
            $data = UserDetail::find($request->user_name);
            $data->img = $file->getClientOriginalName();
            $data->save();
            $path = $file->storeAs('user_profile', $file->getClientOriginalName(), 'images');
            //Update lai thong tin nguoi dung 
            \session()->forget('user_info');
            $show_info = Show_info_user::where('user_name', $data->user_name)->first();
            \session()->push('user_info', $show_info);
            $data->refresh();
            return \redirect()->back();
        } catch (Exception $e) {
            session()->flash('account_info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"">
                  Cập nhật ảnh thất bại </div>');
        }
    }
    public function account_update(Request $request)
    {

        $key_find = $request->user_name;
        $data_user = UserModel::where('user_name', $key_find)->first();
        $data_account = UserDetail::find($key_find);
        try {
            if ($request->email_register != $data_user->email && $request->email_register != "") {
                $data_user->email = $request->email_register;

                $data_user->save();

                $data_user->refresh();
            }
            if ($request->password_register != "11111122333") {
                if ($request->password_register == $request->re_password) {
                    $new_pass = $request->password_register;
                    $data_user->password = $new_pass;
                    $data_user->save();
                    $data_user->refresh();
                    $request->session()->flash('update_info', '<div class="alert alert-success">"Cập nhật mật khẩu thành công !!!"</div>');
                    return \redirect()->route('account_view', [$data_account->user_name]);
                }
            }
            $data_account->full_name = $request->fullname;
            $data_account->phone = $request->phone;
            $data_account->street = $request->street;
            $data_account->district = $request->district;
            $data_account->city = $request->city;
            $data_account->save();

            $request->session()->flash('update_info', '<div class="alert alert-success">"Cập nhật khoản thành công , tiếp tục mua sắm nào !!"</div>');
            return \redirect()->route('account_view', [$data_account->user_name]);
        } catch (Exception $e) {

            $request->session()->flash('update_info', '<div class="alert alert-danger">"Cập nhật tài khoản thất bại, vui lòng thử lại!!"</div>');
            return \redirect()->route('account_view', [$data_account->user_name]);
        }
    }
    public function delete_user(Request $request)
    {
        try {
            UserModel::where('user_name', $request->user_name)->delete();
            $request->session()->flash('info_warning', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"> Delete' . $request->user_id . ' Successfully !! </div>');
        } catch (Exception $e) {
            $request->session()->flash('info_warning', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"> Delete ' . $request->user_id . ' Fail,Try Again !!</div>');
        }
        return \redirect()->back();
    }
    public function search_user(Request $request)
    {
        $output = "";
        $key_find = $request->search_user;
        if ($key_find != " ") {
            try {
                $list_search = Show_info_user::where('level', '=', $key_find)
                    ->orwhere('user_name', 'like', '%' . $key_find . '%')
                    ->orWhere('full_name', 'like', '%' . $key_find . '%')
                    ->orwhere('status', '=', $key_find)
                    ->get();
                if ($list_search != "") {
                    foreach ($list_search as $data => $user) {
                        $output .= "<tr id='show_user_list'>
                       <td class='text-center'><img class='rounded img-fluid avatar-40'
                             src='../images/users/$user->user_id/$user->img' alt='profile'></td>
                       <td>$user->user_name</td>
                       <td>$user->full_name</td>
                       <td><a href='https://iqonic.design/cdn-cgi/l/email-protection' class='__cf_email__'
                             data-cfemail='$user->email'>[email&#160;protected]</a>
                       </td>
                       <td>$user->street-$user->district-$user->city</td>
                       <td>$user->phone</td>";
                        if ($user->level == 'admin')
                            $output .= "<td><span class='badge iq-bg-warning'>$user->level</span></td>";
                        else
                            $output .= "<td><span class='badge iq-bg-info'>$user->level</span></td>";
                        if ($user->status == 'ban')
                            $output .= "<td><span class='badge iq-bg-danger'>$user->status</span></td>";
                        else
                            $output .= "<td><span class='badge iq-bg-primary'>$user->status</span></td>";
                        $output .= "
                       <td>$user->created</td>
                       <td>
                          <div class='flex align-items-center list-user-action'>
                             <a class='iq-bg-primary' data-toggle='tooltip' data-placement='top' title=''
                                data-original-title='Add' href='#'><i class='ri-user-add-line'></i></a>
                             <a class='iq-bg-primary' data-toggle='tooltip' data-placement='top' title=''
                                data-original-title='Edit' href='#'><i class='ri-pencil-line'></i></a>
                             <a class='iq-bg-primary' data-toggle='tooltip' data-placement='top' title=''
                                data-original-title='Delete' href='" . route('admin_delete_user', [$user->user_name]) . "'><i class='ri-delete-bin-line'></i></a>
                          </div>
                       </td>
                    </tr>";
                    }
                } else {
                    $output = '
                        <tr>
                            <td align="center" colspan="5">No Data Found</td>
                        </tr>
                        ';
                }
                $data = array(
                    'result' => $output
                );
                return \json_encode($data);
            } catch (Exception $e) {
                \report($e);
            }
        } else {
            $data = null;
            return $data;
        }
    }
    public function set_status(Request $request)
    {
        try {

            $result = UserModel::where('status', $request->user_id)->update('status', $request->select_change_attr);

            $request->session()->flash('account_status', '<div class="alert alert-success" style="text-align: center;font-size: x-large;font-family: fangsong;"> Xoá người dùng' . $request->user_id . ' thành công </div>');
        } catch (Exception $e) {
            $request->session()->flash('account_status', '<div class="alert alert-danger" style="text-align: center;font-size: x-large;font-family: fangsong;"> Xoá người dùng ' . $request->user_id . 'thất bại, vui lòng thử lại </div>');
        }
        return \redirect()->back();
    }
    public function get_list_notify()
    {
        try {
            $data = Notifications::with('usermodel')->get();
            return $data;
        } catch (Exception $e) {
            \report($e);
        }
    }
public function get_id_notify(Request $request)
    {
        try {
            $id = $request->id;
            $data = Notifications::find($id)->get();
            return $data;
        } catch (Exception $e) {
            \report($e);
        }
    }
    public function markAsRead(Request $request)
    {
        $id=$request->notifyId;
        
        try{
            $user=UserModel::find($request->user);
            Notifications::where($id)->update(['read_at' => now()]);
            //return response(['message'=>'done', 'notifications'=>$user->notifications]);
        }
        catch(Exception $e){
            \report($e);
        }
    }
}
