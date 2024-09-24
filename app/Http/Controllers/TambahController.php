<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TambahController extends Controller
{
    public function tambah(): View{
        return view('Tambah.tambah');
    }
}
