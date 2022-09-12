<div class="dFlex flexColumnWrap gap0h card">
  <figure class="userImg">
    <img alt="userImg">
  </figure>
  <div class="dFlex jcEvenly aiCenter infoUser">
    <p> {{$ex1->name . " | " . $ex1->birthday}} </p>
    <a href={{route('exEdit',$ex1->id)}} class="btn btnSec">Actualizar</a>
  </div>
  <div class="dFlex jcCenter aiCenter gap1 bioUser">
    <p> {{$ex1->bio}} </p>
    <a href={{route('exShow',$ex1)}} class="btn btnSec">Ver más</a>
  </div>
</div>