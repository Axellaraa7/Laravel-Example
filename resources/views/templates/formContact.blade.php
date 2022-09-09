<section class="dFlex flexRowWrap gap1 formGroup ">
  <div class="dFlex flexColumn gap0h flexAuto">
    <div class="dFlex flexColumn gap0h">
      <label for="name" class="label">Type your name</label>
      <input type="text" name="name" id="name" class="inputTextColumn" value="{{old('name')}}">
    </div>
    @error('name')
        <div class="alert alertDanger">* {{$message}}</div>
    @enderror
  </div>
  <div class="dFlex flexColumnWrap gap0h flexAuto">
    <div class="dFlex flexColumn gap0h">
      <label for="email" class="label">Type your email</label>
      <input type="email" name="email" id="email" class="inputTextColumn" value="{{old('email')}}">  
    </div>
    @error('email')
        <div class="alert alertDanger">* {{$message}}</div>
    @enderror
  </div>
</section>
<section class="formGroup">
  <div class="dFlex flexColumnWrap gap0h">
    <div class="dFlex flexColumn gap0h">
      <label for="message" class="label">Type your message</label>
      <textarea name="message" id="message" column="20" class="inputAreaColumn">{{old('message')}}</textarea>
    </div>
    @error('message')
        <div class="alert alertDanger">* {{$message}}</div>
    @enderror
  </div>
</section>
<section class="dFlex jcBetween flexRowWrap formGroup gap1" >
  <div class="dFlex flexColumn gap0h ">
    <div class="dFlex aiCenter flexRow gap0h" >
      <input type="checkbox" name="terms" id="terms">
      <label for="terms" class="label">Accept the terms and conditions</label>
    </div>
    @error('terms')
      <div class="alert alertDanger">* {{$message}}</div>
    @enderror
  </div>
  <div>
    <button class="btn btnSec">Enviar</button>
  </div>
</section>
