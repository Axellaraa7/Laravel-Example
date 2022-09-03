@extends('./templates/html')

@section('title','Home')

@section('main')
  <h1>Home Page</h1>
  <section class="cardContainer">
    @foreach ($ex as $user)
      <div class="card">
        <figure class="userImg">
          <img alt="userImg">
        </figure>
        <div class="infoUser">
          <p>
            {{$user->name}} | {{$user->birthday}}  
          </p>
          <a href={{route('exUpdate',$user->id)}} class="secLink">Actualizar</a>
        </div>
        <div class="bioUser">
          <p>
            {{$user->bio}} - <a href={{route('exGetById',$user->id)}} class="secLink">Ver más</a>
          </p>
        </div>
      </div>
    @endforeach
  </section>
@endsection
