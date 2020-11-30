<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //DEFINED DATABASE TABLE
    protected $table = "category";
    protected $primaryKey = "cat_id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;

    public function book()
    {
        return $this->hasMany("App\Models\Book","book_id","book_id");
    }
}
