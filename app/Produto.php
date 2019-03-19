<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{
 	protected $fillable = [
        'titulo', 'descricao','tamanho','cor','preco','custo','desconto','created_at','updated_at','categoria','image1','image2','image3','image4','componente',
    ];   
}
