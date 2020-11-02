@extends('admin.layout')

@section('content')

<div class="container p-5 m-5">
<div class="d-flex justify-content-between mb-3">
<h6>Trainers / Edit / {{ $trainer->name}}</h6>
<a class="btn btn-sm btn-primary" href="{{route('admin.trainers.index')}}">Back</a>
</div>


<form method="POST" action="{{route('admin.trainers.update')}}" enctype="multpart/form-data">
@csrf
<input type="hidden" name="id" value="{{$trainer->id}}">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{$trainer->name}}">
</div>
<div class="form-group">
<label>phone</label>
<input type="text" name="phone" class="form-control" value="{{$trainer->phone}}">
</div>

<div class="form-group">
<label>speciality</label>
<input type="text" name="speciality" class="form-control" value="{{$trainer->speciality}}">
</div>

<img src="{{ asset('uploads/trainers/'. $trainer->img) }}" height="100px" alt="" class="my-5">
<div class="form-group">
 
<input type="file" name="img" class="form-control-file">
</div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection