<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leti modas</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Leti Modas compras online">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		     @yield('estilos')
</head>
<body>
		<div class="super_container">
			 @yield('header')
             @yield('conteudo')
             @yield('footer')
		</div>
		     @yield('scripts')
</body>
</html>