@extends('./templates/html')

@section('title','Create')

@section('h1','Create Page')

@section('main')
  <form action="" method="post" class="dFlex flexColumn gap1 formContainer">
    @include('./templates/formCrud')
  </form>
@endsection