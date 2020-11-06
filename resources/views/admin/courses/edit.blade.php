@extends('admin.layout')

@section('content')

<div class="container p-5 m-5">
<div class="d-flex justify-content-between mb-3">
<h6>Trainers / Edit / {{ $course->name}}</h6>
<a class="btn btn-sm btn-primary" href="{{route('admin.courses.index')}}">Back</a>
</div>


<form method="POST" action="{{route('admin.courses.update')}}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ $course->id}}">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{ $course->name}}">
</div>
<div class="form-group">
<select class="form-control" name="category_id" >
@foreach ($cats as $cat)
<option value="{{$cat->id}}" @if($course->category_id == $cat->id) selected @endif > {{$cat->name}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<select class="form-control" name="trainer_id" >
@foreach ($trainers as $t)
<option value="{{$t->id}}"@if($course->trainer_id == $t->id) selected @endif >{{$t->name}}</option>
@endforeach
</select>
</div>



<div class="form-group">
<label>price</label>
<input type="number" name="price" class="form-control" value="{{ $course->price}}">
</div>

<div class="form-group">
<label>Small desc</label>
<input type="text" name="small_desc" class="form-control" value="{{ $course->small_desc}}" >
</div>

<div class="form-group">
<label>Desc</label>
<textarea name="desc" class="form-control" id="" cols="30" rows="10"> {{ $course->desc}}</textarea>
</div>


<div class="form-group">

<input type="file" name="img" class="form-control-file"  value="{{ $course->img}}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection