<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserDetail extends Model
{
    use HasFactory;
        //DEFINED DATABASE TABLE
        protected $table = "user_detail";
        protected $primaryKey = "user_name";
        protected $keyType = 'string';
        const UPDATED_AT = 'modiffed';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'full_name',
        'street',
        'district',
        'city',
        'phone',
        'list_favorite',
        'img',
        'modiffed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'modiffed' => 'datetime',
    ];
        public function user_account()
        {
            return $this->belongsTo('App\Models\UserModel','user_name','user_name');

        }
        public function order_detail()
        {
            return $this->hasMany('App\Models\OrderDetail','user_name','user_name');
        }
        
}
