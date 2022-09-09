@extends('./templates/html')

@section('title','Components')

@section('h1','Components')

@section('main')
  <x-alert type="danger">Se produjo un error</x-alert>
  <br>
  <x-alert type="success">Se tuvo éxto</x-alert>
@endsection