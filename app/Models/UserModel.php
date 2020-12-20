<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
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
    protected $keyType="int";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_name',
        'email',
        'password',
        'password',
        'remember_token',
        'email_verified_at',
        'level',
        'created',
        'created_by	',
        'modiffer',
        'modiffer_by',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function user_detail()
    {
        return $this->hasOne('App\Models\UserDetail','user_name','user_id');
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    public function listItems($params, $options, $stament = null, $number_stament = null)
    {
        //Tat debugbar
        //\Debugbar::disable();
        $result = null;
        if ($options['task'] == "admin-list-items") {
            $result          =   UserModel::where($params, $stament, $number_stament)->get();
        }
        if ($options['task'] == "frontend-list-items") {
            $result          = UserModel::all();
        }
        return $result;
    }
}
