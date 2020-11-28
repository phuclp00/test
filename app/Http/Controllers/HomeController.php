<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;

class HomeController extends Controller
{
    public function view()
    {
        return view('public.index');
    }

}
