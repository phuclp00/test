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
        public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'street',
        'district',
        'city',
        'phone',
        'list_favorite',
        'img',
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
            return $this->belongsTo('App\Models\User','user_id','user_id');

        }
        public function order_detail()
        {
            return $this->hasMany('App\Models\OrderDetail','order_id','order_id');
        }
       
        
}