@extends('layouts.ui')

@section('content')

<div class="card mb-4">
 <div class="card-header">
  <h1>Category Create <span><a href="/category" class="btn btn-primary">Back</a></span></h1>
 </div>
 <div class="card-body">
  <form action="/category/store" method="POST">
   @csrf
   <div class="form-group">
    <label for="name">Cateory Name</label>
    <input type="text" name="category_name" id="name" class="form-control">
   </div>

   <div class="form-group">
    <button type="submit" class="btn btn-primary">Create New Category</button>
   </div>
  </form>
 </div>
</div>

@endsection