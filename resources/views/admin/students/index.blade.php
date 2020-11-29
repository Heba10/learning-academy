@extends('admin.layout')

@section('content')

<div class="container p-5 m-5">
<div class="d-flex justify-content-between mb-3">
<h6>Students</h6>
<a class="btn btn-sm btn-primary" href="{{route('admin.students.create')}}">Add student</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
    
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">speciality</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($students as $t)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
     
      <td>{{ $t->name}}</td>
      <td>
      
       {{ $t->email}}
     
        </td>
      <td>{{ $t->speciality}}</td>
      <td>
      
      <a class="btn btn-sm btn-info" href="{{ route('admin.students.edit',$t->id)}}">Edit</a>
      <a class="btn btn-sm btn-danger"  href="{{ route('admin.students.delete',$t->id)}}">Delete</a>
      
      
      </td>
      
    </tr>
  
  @endforeach
  </tbody>
</table>


</div>

@endsection