<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutoController extends Controller
{
    public function index($id)
    {
    	$elemento = Produto::find($id);
    	return view('site.produto',['elemento' => $elemento]);
    }
}
