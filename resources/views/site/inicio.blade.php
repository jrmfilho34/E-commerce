@extends('site.partes.principal')
@section('estilos')
     @include('site.partes.home.estilos')
@endsection
@section('header')
    @include('site.partes.home.header')
@endsection
@section('conteudo')
     @include('site.partes.home.banner_1')
     @include('site.partes.home.caracteristicas')
     @include('site.partes.home.ofertas')
     @include('site.partes.home.destaque')
     @include('site.partes.home.popular')
     
     @include('site.partes.home.novidades')
     @include('site.partes.home.recentevistos')
     @include('site.partes.home.marcas')
     @include('site.partes.home.newsletter')
@endsection

@section('footer')
  @include('site.partes.home.footer')
@endsection
@section('scripts')
     @include('site.partes.home.scripts')
@endsection




                