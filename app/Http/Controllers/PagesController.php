<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PagesController extends Controller
{
    //Membuat method pada extends kelas parent
    public function home()
    {
        return view('index');
    }


    public function about()
    {
        return view('about', ['nama' => 'Rizky Putra ']);
    }
}
