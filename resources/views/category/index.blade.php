@extends('layouts.ui')

@section('content')

<div class="card mb-4">
 <div class="card-header">
  <h1>Category List <span><a href="/category/create" class="btn btn-primary">+ Add New Categrory</a></span></h1>
 </div>
 <div class="card-body">
  <table class="table">
   <thead>
    <tr>
     <th>Id</th>
     <th>Category Name</th>
     <th>Created At</th>
     <th>Action</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     @foreach ($categories as $category)
     <td>{{ $category->id }}</td>
     <td>{{ $category->category_name }}</td>
     <td>{{ $category->created_at }}</td>
     <td>
      <a href="/category/edit/{{ $category->id }}" class="btn btn-primary">Edit</a>
      <a href="/category/delete/{{ $category->id }}" class="btn btn-danger">Delete</a>
     </td>
    </tr>
    @endforeach
   </tbody>
  </table>
 </div>
</div>

@endsection