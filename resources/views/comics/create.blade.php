@extends('layout.app')

@section('main')

<div class="container">
  <h1>Add New Comic</h1>
  <form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div class="mb-2">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-2">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="mb-2">
      <label for="thumb" class="form-label">URL Image</label>
      <input type="text" class="form-control" id="thumb" name="thumb">
    </div>
    <div class="mb-2">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="mb-2">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="mb-2">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="mb-2">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>
    <button type="submit" class="btn btn-secondary">Add</button>
  </form>
</div>

@endsection