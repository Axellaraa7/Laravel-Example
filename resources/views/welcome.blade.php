@extends('./templates/html')

@section('title','Home')

@section('h1','Home page')

@section('main')
  @if(session('mail'))
    @if(session('mail')[0])
      <div class="alert alertSuccess">{{ session('mail')[1] }}</div>
    @else
      <div class="alert alertDanger">{{ session('mail')[1] }}</div>
    @endif
  @endif
  <section class="container1140 dGrid gap1 gridCol2x1fr lg-gridCol1fr md-gridCol2x1fr sm-gridCol1fr ">
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
          <a href={{route('exShow',$user)}} class="btn btnSec">Ver más</a>
        </div>
      </div>
    @endforeach
  </section>
@endsection
