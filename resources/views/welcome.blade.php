@extends('./templates/html')

@section('title','Home')

@section('h1','Home page')

@section('main')
  @if(session('mail'))
    @if(session('mail')[0])
      <x-alert type="success">{{session('mail')[1]}}</x-alert>
    @else
      <x-alert type="danger">{{session('mail')[1]}}</x-alert>
    @endif
  @endif
  <section class="container1140 dGrid gap1 gridCol2x1fr lg-gridCol1fr md-gridCol2x1fr sm-gridCol1fr jiCenter">
    @foreach ($ex as $ex1)
      <x-card1 :ex1="$ex1"></x-card1>
    @endforeach
  </section>
@endsection
