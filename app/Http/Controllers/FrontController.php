<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class FrontController extends BaseController
{

    public function show()
    {
        return view('views.front');
    }

}
