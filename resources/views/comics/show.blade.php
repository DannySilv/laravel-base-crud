@extends('layout.app')

@section('main')

<div class="container">
  <h1>Comic Detail</h1>
  <ul>
    <li class="ms-comic">
      <h2 class="ms-title">{{ $this_comic->title }}</h2>
      <div class="img-container">
        <img src="{{ $this_comic->thumb }}" alt="{{ $this_comic->title }}">
      </div>
      <p>{{ $this_comic->description }}</p>
      <span>Series: {{ $this_comic->series }} | </span>
      <span>Type: {{ $this_comic->type }}</span> 
      <h5>Sale Date: {{\Carbon\Carbon::parse($this_comic->sale_date)->format('d/M/Y')}}</h5>            
      <h4>Price: {{ $this_comic->price }}$</h4>
      <a class="btn btn-secondary" href={{ route('comics.edit', ['comic' => $this_comic->id]) }}>Edit</a>
      <form class="d-inline-block" action="{{ route('comics.destroy', [ 'comic' => $this_comic->id ]) }}" method="post" onClick="return confirm('You will lose what you are deleting, are you sure?');">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>      
    </li>          
  </ul>
</div>  

@endsection