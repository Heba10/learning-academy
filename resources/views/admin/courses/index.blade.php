@extends('admin.layout')

@section('content')

<div class="container p-5 m-5">
<div class="d-flex justify-content-between mb-3">
<h6>Courses</h6>
<a class="btn btn-sm btn-primary" href="{{route('admin.courses.create')}}">Add Category</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $t)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>
      <img src="{{ asset('uploads/courses/'. $t->img)}}"height="50px" alt="">
      </td>
      <td>{{ $t->name}}</td>
      <td>
       ${{ $t->price}}
      
        </td>
      
      <td>
      
      <a class="btn btn-sm btn-info" href="{{ route('admin.courses.edit',$t->id)}}">Edit</a>
      <a class="btn btn-sm btn-danger"  href="{{ route('admin.courses.delete',$t->id)}}">Delete</a>
      
      
      </td>
      
    </tr>
  
  @endforeach
  </tbody>
</table>


</div>

@endsection