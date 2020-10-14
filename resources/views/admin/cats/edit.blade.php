@extends('admin.layout')

@section('content')

<div class="container p-5 m-5">
<div class="d-flex justify-content-between mb-3">
<h6>Categories / Edit / {{ $cat->name}}</h6>
<a class="btn btn-sm btn-primary" href="{{route('admin.cats.index')}}">Back</a>
</div>


<form method="POST" action="{{route('admin.cats.update')}}">
@csrf
<input type="hidden" name="id" value="{{$cat->id}}">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{$cat->name}}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection