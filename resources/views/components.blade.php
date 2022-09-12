@extends('./templates/html')

@section('title','Components')

@section('h1','Components')

@section('main')
<div class="container1140">
  <x-alert type="danger">Danger alert</x-alert>
  <br>
  <x-alert type="success">Success alert</x-alert>
  <br>
  <x-alert type="">Info alert</x-alert>
  <br>
  <div class="dGrid gridCol2x1fr gap1">
    @php
      use App\Models\Ex1;
      $ex1 = new Ex1();
      $ex1->id = 5;
      $ex1->name = 'Axel Lara';
      $ex1->birthday = '1998-05-18';
      $ex1->bio = 'This is my biography';
      $ex1->slug = 'axel-lara';
    @endphp
    <x-card1 :ex1="$ex1"></x-card1>
    <x-card1 :ex1="$ex1"></x-card1>
  </div>
</div>
@endsection