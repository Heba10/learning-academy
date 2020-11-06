@extends('admin.layout')

@section('content')

<div class="container p-5 m-5">
<div class="d-flex justify-content-between mb-3">
<h6>Students / Edit / {{ $student->name}}</h6>
<a class="btn btn-sm btn-primary" href="{{route('admin.students.index')}}">Back</a>
</div>


<form method="POST" action="{{route('admin.students.update')}}" enctype="multpart/form-data">
@csrf
<input type="hidden" name="id" value="{{$student->id}}">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{$student->name}}">
</div>
<div class="form-group">
<label>email</label>
<input type="email" name="email" class="form-control" value="{{$student->email}}">
</div>

<div class="form-group">
<label>speciality</label>
<input type="text" name="speciality" class="form-control" value="{{$student->speciality}}">
</div>




<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection