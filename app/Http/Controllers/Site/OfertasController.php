<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class OfertasController extends Controller
{
    public function index()
    {
    	$produtos = Produto::paginate(10);
    	return view('site.ofertas',['produtos'=>$produtos]);
    }
}
