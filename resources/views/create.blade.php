@extends('./templates/html')

@section('title','Create')

@section('h1','Create Page')

@section('main')
  <form action="{{route('exStore')}}" method="post" class="dFlex flexColumn gap1h container960">
    @csrf
    @include('./templates/formCrud')
  </form>
@endsection