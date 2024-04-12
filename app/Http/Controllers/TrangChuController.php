<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slide;
class TrangChuController extends Controller
{
    
    public function index(){
       
        return view('TrangChu.index');
    }
    public function indexx()
    {
        $slides = Slide::all();
        return view('TrangChu.index', compact('slides'));
        
    }
}
