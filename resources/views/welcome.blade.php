@extends('./templates/html')

@section('title','Home')

@section('h1','Home page')

@section('main')
  <section class="dGrid gap1 gridCol2x1fr container1140">
    @foreach ($ex as $user)
      <div class="dFlex flexColumnWrap gap0h card">
        <figure class="userImg">
          <img alt="userImg">
        </figure>
        <div class="dFlex jcEvenly aiCenter infoUser">
          <p>
            {{$user->name}} | {{$user->birthday}}  
          </p>
          <a href={{route('exEdit',$user->id)}} class="btn btnSec">Actualizar</a>
        </div>
        <div class="dFlex jcCenter aiCenter gap1 bioUser">
          <p>
            {{$user->bio}}
          </p>
          <a href={{route('exGetById',$user->id)}} class="btn btnSec">Ver más</a>
        </div>
      </div>
    @endforeach
  </section>
@endsection
