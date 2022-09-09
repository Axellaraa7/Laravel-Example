<div class="dFlex jcAround flexRowWrap formGroup gap1">
  <div class="dFlex flexColumn gap0h flexAuto">
    <div class="dFlex aiCenter gap1">
      <label for="name" class="label">Type a name</label>
      <input type="text" name="name" id="name" class="inputText" value="{{ isset($ex) ? old('name',$ex->name) : old('name')}}">
    </div>
    @error('name')
        <div class="alert alertDanger">* {{$message}}</div>
    @enderror
  </div>
  <div class="dFlex flexColumn gap0h flexAuto">
    <div class="dFlex aiCenter gap1">
      <label for="birthday" class="label">Select the birthday</label>
      <input type="date" name="birthday" id="birthday" class="inputDate" value="{{ isset($ex) ? old('birthdat',$ex->birthday) : old('birthday')}}">  
    </div>
    @error('birthday')
        <div class="alert alertDanger">* {{$message}}</div>
    @enderror
  </div>
</div>
<div class="dFlex jcAround flexRowWrap gap1 formGroup">
  <div class="dFlex flexColumn gap0h flexAuto">
    <div class="dFlex aiCenter gap1">
      <label for="bio" class="label">Type the bio</label>
      <textarea name="bio" id="bio" class="inputArea">{{ isset($ex) ? old('bio',$ex->bio) : old('bio')}}</textarea>
    </div>
    @error('bio')
        <div class="alert alertDanger">* {{$message}}</div>
    @enderror
  </div>
  <div class="dFlex flexColumn gap0h aiCenter jcCenter flexAuto">
    <button class="btn btnSec">Submit</button>
  </div>
</div>
