@extends('./templates/html')

@section('title','Home')

@section('h1','Home page')

@section('main')
  <section class="dGrid gap1 cardContainer">
    @foreach ($ex as $user)
      <div class="dFlex flexColumnWrap gap0h card">
        <figure class="userImg">
          <img alt="userImg">
        </figure>
        <div class="dFlex jcEvenly aiCenter infoUser">
          <p>
            {{$user->name}} | {{$user->birthday}}  
          </p>
          <a href={{route('exUpdate',$user->id)}} class="btn btnSec">Actualizar</a>
        </div>
        <div class="bioUser">
          <p>
            {{$user->bio}} - 
          </p>
          <a href={{route('exGetById',$user->id)}} class="btn btnSec">Ver más</a>
        </div>
      </div>
    @endforeach
  </section>
@endsection
