<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
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
        return $this->hasMany("App\Models\Book", "book_id", "book_id");
    }
    public function listItems($params, $options,$stament=null,$number_stament=null)
    {
        //Tat debugbar
        //\Debugbar::disable();
        $result = null;
        if ($options['task'] == "admin-list-items") {
            $result          =   CategoryModel::all();
            return $result;
        }
        if ($options['task'] == "frontend-list-items") {
            $result          = CategoryModel::all();
            return $result;
        }
        if ($options['task'] == "top-list-items") {
            $result =
                CategoryModel::orderBy('total','DESC')
                ->limit($number_stament)
                ->get();
                return $result ;
        }
    }
    public function Destination($local, $options)
    {
        $result = null;

        return CategoryModel::orderByDesc(
            CategoryModel::select('arrived_at')

        )->get();
    }
}
