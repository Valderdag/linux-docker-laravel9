<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $about = 'Voha Kubanskiy';
        return view('about.index', compact('about'));
    }
}
