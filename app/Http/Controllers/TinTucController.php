<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinTuc;
class TinTucController extends Controller
{
    public function index()
    {
        
        $tintuc = TinTuc::all();

        return view('TinTuc.index', compact('tintuc'));
       
      
    }
}
