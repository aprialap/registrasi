
@if($errors->any())

<div class="alert alert-danger alert-dismissable" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {!! implode('', $errors->all(':message<br />')) !!}
</div>
@endif
@if (\Session::has('success'))
<div class="alert alert-success alert-dismissable" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {!! \Session::get('success') !!}
</div>
@endif
@if (\Session::has('danger'))
<div class="alert alert-danger alert-dismissable" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {!! \Session::get('danger') !!}
</div>
@endif
@if (\Session::has('warning'))
<div class="alert alert-warning alert-dismissable" role="alert">
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {!! \Session::get('warning') !!}
</div>
@endif
