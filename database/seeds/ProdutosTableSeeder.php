<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$factory->define(App\Produto::class, function (Faker $faker) {
            return [

	            'titulo' => Str::random(10),
	            'descricao' => $faker->text,
	            'tamanho' => bcrypt('secret'),
	            'cor' => Str::random(10),
	            'preco' => Str::random(10).'@gmail.com',
	            'custo' => bcrypt('secret'),
	            'desconto' => Str::random(10),
	            'created_at' => Str::random(10).'@gmail.com',
	            'updated_at' => bcrypt('secret'),
	            'categoria' => Str::random(10),
	            'image' => Str::random(10).'@gmail.com',
	            'tamanho' => bcrypt('secret'),

            ];
        
        });
    }
 }
