<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function show(string $view)
    {
        return view($view);
    }

    public function servicesAnchor()
    {
        return view('pages.services');
    }
}
