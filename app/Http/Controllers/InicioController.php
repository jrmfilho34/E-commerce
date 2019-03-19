<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class InicioController extends Controller
{
    public function index()
    {
        
    	$produtos = Produto::all();
    	$banner = Produto::where('componente','banner')->get()->last();
        $ofertasS= Produto::where('componente','Ofertas_da_semana')->orderBy('id', 'desc')->get();
        $destaque = Produto::where('componente','destaque')->orderBy('id', 'asc')->get(); 
        $liquidacao = Produto::where('componente','liquidacao')->orderBy('id', 'asc')->get(); 
        $banner_1 = Produto::where('componente','banner_1')->orderBy('id', 'asc')->get(); 
        $novidades = Produto::where('componente','novidades')->orderBy('id', 'asc')->get();
        $i =0; $b=0; $c=0;
        foreach ($novidades as $key) {
                   
            if ($key->categoria == 'Feminino') {
                $novF[$i++]= $key;
            }
            if ($key->categoria == 'Masculino') {
                $novM[$b++] = $key;
            }
            if ($key->categoria == 'Infantil' or $key->categoria == 'Bebê' ) {
                $novI[$c++] = $key;
            }
        }
    	return view('site.inicio',[
    		'produtos'=> $produtos,
    		'banner' => $banner,
    		'ofertasS' => $ofertasS,
            'destaque' => $destaque,
            'liquidacao'=> $liquidacao,
            'banner_1' => $banner_1,
            'novF' => $novF,
            'novM' => $novM,
            'novI' => $novI,
    	]);

    }

    public function categoria($categoria){
        
         $produtos = Produto::where('categoria', $categoria);
         $total = $produtos->count();
         $produtos = $produtos->paginate(2);        
         return view('site.ofertas',['produtos'=>$produtos,'total'=>$total]);

    }

        
}

