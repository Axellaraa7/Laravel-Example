@extends('./templates/html')

@section('title','Contact')

@section('h1','Contact us')

@section('main')
  <form action="{{route('mailStore')}}" method="post" class="dFlex flexColumn gap1 container960">
    @csrf
    @include('./templates/formContact')
  </form>
@endsection