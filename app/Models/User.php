<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    //DEFINED DATABASE TABLE
    protected $table = "user_account";
    protected $primaryKey = "user_name";
    protected $keyType = 'string';
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'level',
        'stats',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    public function listItems($params, $options,$stament=null,$number_stament=null)
        {
            //Tat debugbar
            //\Debugbar::disable();
            $result = null;
            if ($options['task'] == "admin-list-items") {
                $result          =   User::where($params,$stament,$number_stament)->get();
            }
            if ($options['task'] == "frontend-list-items") {
                $result          = User::all();
            }
            return $result;
        }
}
