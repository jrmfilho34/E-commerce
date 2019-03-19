@extends('site.partes.principal')
@section('estilos')
     @include('site.partes.carinho.estilos')
@endsection
@section('header')
    @include('site.partes.home.header')
@endsection
@section('conteudo')
     @include('site.partes.carinho.carinho')
     @include('site.partes.home.newsletter')
@endsection

@section('footer')
  @include('site.partes.home.footer')
@endsection
@section('scripts')
     @include('site.partes.carinho.scripts')
@endsection
