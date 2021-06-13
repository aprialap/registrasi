
@if($errors->any())
<div class="alert alert-danger alert-dismissable" role="alert">
 
    {!! implode('', $errors->all(':message<br />')) !!}
</div>
@endif
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissable" role="alert">
  
    {!! \Session::get('success') !!}
</div>
@endif
@if (\Session::has('danger'))
<div class="alert alert-danger alert-dismissable" role="alert">
  
    {!! \Session::get('danger') !!}
</div>
@endif
@if (\Session::has('warning'))
<div class="alert alert-warning alert-dismissable" role="alert">
  
    {!! \Session::get('warning') !!}
</div>
@endif


