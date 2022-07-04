@extends('layout.app')

@section('main')

<div class="container">
  <h1>Comics Details Editor</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('comics.update', ['comic' => $this_comic->id]) }}" method="post">
    @csrf
    @method('put')

    <div class="mb-2">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $this_comic->title }}">
    </div>
    <div class="mb-2">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" class="form-control" id="description" name="description">{{ old('description') ? old('description') : $this_comic->description }}</textarea>
    </div>
    <div class="mb-2">
      <label for="thumb" class="form-label">URL Image</label>
      <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $this_comic->thumb }}">
    </div>
    <div class="mb-2">
      <label for="price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ? old('price') : $this_comic->price }}">
    </div>
    <div class="mb-2">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ? old('series') : $this_comic->series }}">
    </div>
    <div class="mb-2">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $this_comic->sale_date }}">
    </div>
    <div class="mb-2">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ old('type') ? old('type') : $this_comic->type }}">
    </div>
    <button type="submit" class="btn btn-secondary">Edit</button>
  </form>
</div>

@endsection