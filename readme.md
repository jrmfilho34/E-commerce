# Jrmfilho23: E-commerce com painel adm voyager

Guia básico para criar E-commerce, em conjunto com: voyager e laravel 5.7. 

## Início

O ambiente de desenvolvimento utilizado é homestead, desta forma, todos os requisitos para uma aplicação laravel estão presentes. 
É instalado o Laravel Mix, uma ferramenta que facilita o desenvolvimento de aplicações

### Pré-requisitos

Para replicar está aplicação, é necessário um ambiente que esteja de acordo com os requisitos do Laravel 5.7.

### Instalação

Passo a passo para criação da aplicação

1 primeiro comando

09/03/2019-15:48: Comando: Instânciar laravel
```
composer create-project --prefer-dist laravel/laravel LetiModas "5.7.*"
```   
09/03/2019-19:54: Comandos: Mudar linguagem
•   cd resources/lang/;
•   git clone https://github.com/lucascudo/laravel-5.7-pt-BR-localization.git ./pt-BR;
•   Alterar config/app.php: 'locale' => 'pt-BR'.
09/03/2019-22:20: Comandos: Instância Voyager
•   composer require tcg/voyager
•   Configurar Database no arquivo .env
•   php artisan voyager:install --with-dummy
ERRO: SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table `users` add unique `users_email_unique`(`email`))
Solução: Pasta App\Providers;
use Illuminate\Support\Facades\Schema
Schema::defaultStringLength(191)

10/03/2019-21:17: Comandos: Criar tabela produtos no voyager

Titulo – varchar
Descricao – text
Tamanho – varchar
Cor – varchar
Preco – integer
Custo – integer
Desconto – float
Categoria - varchar
Image1 – varchar
Image2 – varchar
Image3 – varchar
Image4 – varchar
timestamps
ERRO: gd library extension not installation windows
      Solução: Pasta php.ini
Retirar coma, ;php_gd2.dll

11/03/2019-09:16: Comandos: Configurar Linguage voyager

```
    'multilingual' => [
        'enabled' => true,
        'default' => 'pt-BR',
        'locales' => [
            'pt-BR',
        ], ]
```
ERRO: não deu certo

11/03/2019-18:18: Comandos: Integrar layout

```
php artisan make:controller InicioController 
Route::get('inicio','InicioController@index')->name('inicio');
Php artisan make:controller OfertasController
Route::get('ofertas','Site\OfertasController@index')->name('ofertas');
php artisan make:controller ProdutoController
Route::get('produto/{id}','Site\ProdutoController@index')->name('produto');
```

17/03/2019-07:19: Comandos: Integrar botões das categorias
```
Route::get('categoria/{categoria}','InicioController@categoria')->name('categoria');
public function categoria($categoria){
         $produtos = Produto::where('categoria', $categoria);
         $total = $produtos->count();
         $produtos = $produtos->paginate(2);        
         return view('site.ofertas',['produtos'=>$produtos,'total'=>$total]);
    }
```


### Exemplo


```
Aplicação e desenvolvimento.
```

## Desenvolvido com

* [Laravel](https://laravel.com/docs/5.7) - Framework
* [Voyager](https://laravelvoyager.com/) - voyager



## Authors

* **Miliano Fernandes de Oliveira Junior** - *Initial work* - [jrmfilho34](https://github.com/jrmfilho34)


## Agradecimentos

* Toda equipe do Laravel, voyager..
