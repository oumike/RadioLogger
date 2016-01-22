<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class FrontController extends BaseController
{

    public function index()
    {
        return view('front');
    }

}
