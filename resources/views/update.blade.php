@extends('./templates/html')

@section('title','Update - '.$ex->name)

@section('h1','Updating - '.$ex->name)

@section('main')
  <form action="{{route('exUpdate',$ex->id)}}" method="post" class="dFlex flexColumn gap1h container960">
    @csrf
    @method('put')
    @include('./templates/formCrud')
  </form>
@endsection

