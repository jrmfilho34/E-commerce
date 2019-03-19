@extends('site.partes.principal')
@section('estilos')
     @include('site.partes.produto.estilos')
@endsection

@section('header')
     @include('site.partes.home.header')
@endsection
@section('conteudo')
     @include('site.partes.produto.produto')
     @include('site.partes.home.marcas')
     @include('site.partes.home.newsletter')
@endsection

@section('footer')
  @include('site.partes.home.footer')
@endsection
@section('scripts')
     @include('site.partes.produto.scripts')
@endsection