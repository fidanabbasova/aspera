<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class PageController extends Controller
{
    public function getServices(){
        $services = Service::get();
        return view('layouts.services',  array('services' => $services));

    }
}