<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideModel as MainModel;

class SignupController extends Controller
{
    private $pathViewController = 'public.login';
    private $controller_name    = 'sign-up';

    public function __construct()
    {
        view()->share('controller_name', $this->controller_name);
    }
    public function view()
    {
        return view($this->pathViewController . '.sign-up');
    }
}
