<div class="dFlex jcAround flexRowWrap formGroup2">
  <div class="formElement2">
    <label for="name" class="label">Type a name</label>
    <input type="text" name="name" id="name" class="inputText" value="{{ isset($ex) ? old('name',$ex->name) : old('name')}}">
  </div>
  <div class="formElement2">
    <label for="birthday" class="label">Select the birthday</label>
    <input type="date" name="birthday" id="birthday" class="inputDate" value="{{ isset($ex) ? old('birthdat',$ex->birthday) : old('birthday')}}">
  </div>
</div>
<div class="dFlex jcAround flexRowWrap formGroup2">
  <div class="formElement2">
    <label for="bio" class="label">Type the bio</label>
    <textarea name="bio" id="bio" class="inputArea">{{ isset($ex) ? old('bio',$ex->bio) : old('bio')}}</textarea>
  </div>
  <div class="formElement2 jcCenter">
    <button class="btn btnSec">Submit</button>
  </div>
</div>
