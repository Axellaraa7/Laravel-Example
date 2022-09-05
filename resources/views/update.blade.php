@extends('./templates/html')

@section('title','Update - '.$ex->name)

@section('h1','Updating - '.$ex->name)

@section('main')
  <form action="" method="post" class="dFlex flexColumn gap1 formContainer">
    @include('./templates/formCrud')
  </form>
@endsection

