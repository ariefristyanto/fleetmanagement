<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {

        return redirect('dashboard');
    }

}
