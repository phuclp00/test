<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //DEFINED DATABASE TABLE
    protected $table = "book";
    protected $primaryKey = "book_id";
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modiffed';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo("App\Models\Category","cat_id","cat_id");
    }
    public function publisher()
    {
        return $this->belongsTo("App\Models\Publisher","pub_id","pub_id");
    }
}
