@extends('site.partes.principal')
@section('estilos')
     @include('site.partes.contato.estilos')
@endsection
@section('header')
    @include('site.partes.home.header')
@endsection
@section('conteudo')
     @include('site.partes.contato.contato')
     @include('site.partes.home.newsletter')
@endsection

@section('footer')
  @include('site.partes.home.footer')
@endsection
@section('scripts')
     @include('site.partes.contato.scripts')
@endsection