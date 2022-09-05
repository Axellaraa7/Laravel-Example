@extends('./templates/html')

@section('title','Example - '.$ex->name)

@section('h1','Example Page | '.$ex->name)

@section('main')
  <form action="{{route('exDelete',$ex->id)}}" method="post">
    @csrf
    @method('delete')
    <button>DELETE</button>
  </form>
@endsection