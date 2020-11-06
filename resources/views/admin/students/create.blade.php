@extends('admin.layout')

@section('content')

<div class="container p-5 m-5">
<div class="d-flex justify-content-between mb-3">
<h6>Students / Add new</h6>
<a class="btn btn-sm btn-primary" href="{{route('admin.students.index')}}">Back</a>
</div>


<form method="POST" action="{{route('admin.students.store')}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="form-group">
<label>email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
<label>speciality</label>
<input type="text" name="speciality" class="form-control">
</div>



<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection