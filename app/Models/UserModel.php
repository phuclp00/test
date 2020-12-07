<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;


class UserModel extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    //DEFINED DATABASE TABLE
    protected $table = "user_account";
    protected $primaryKey = "user_id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;
  
    public function user_detail()
    {
        return $this->hasOne('App\Models\UserDetail');

    }
    public function listItems($params, $options,$stament=null,$number_stament=null)
        {
            //Tat debugbar
            //\Debugbar::disable();
            $result = null;
            if ($options['task'] == "admin-list-items") {
                $result          =   UserModel::where($params,$stament,$number_stament)->get();
            }
            if ($options['task'] == "frontend-list-items") {
                $result          = UserModel::all();
            }
            return $result;
        }
}
