<form method="post" enctype="multipart/form-data" action="{{route('storestudent')}}" style="width: 80%; margin:auto;">
  @csrf
  <label for="arabic_firstname">الاسم الاول 
    <input type="text" class="form-control" id="arabic_firstname" name="arabic_firstname" value=""></label>
<br>
<label for="arabic_lastname">الاسم الاخير
  <input type="text" class="form-control" id="arabic_lastname" name="arabic_lastname" value=""></label>
<br>
    <label for="national_number">الرقم الوطني 
      <input type="text" class="form-control" id="national_number" name="national_number" value=""></label>
<br>

<button type="submit" class="btn btn-primary">حفظ</button>
</form>