<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class indexController extends Controller
{
    //menampilkan tampilan halaman index
    public function index(): View{
        return view('index.index');
    }
}
