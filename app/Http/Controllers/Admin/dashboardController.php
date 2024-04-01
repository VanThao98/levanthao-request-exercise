<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function index(){
        return "<h2> dashboard <h/2>";
    }
}
