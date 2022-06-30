@extends('layout.app')

@section('main')

<div class="container">
  <h1>Comics List:</h1>
    <ul>
      @foreach ($comics as $comic)
      <li class="ms-comic">
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
          <div class="img-container">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
          </div>
          <h2 class="ms-title">{{ $comic->title }}</>
        </a>
      </li>          
      @endforeach
    </ul>
</div>

@endsection