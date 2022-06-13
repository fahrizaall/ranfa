@extends('layouts.app')

@section('content')
  <head>
    <link rel="stylesheet" href="{{ asset('css/blog/post.css')}}">
  </head>
    
  <main>
    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
      <section class="postbtn">
        <a href="{{$post->slug . "/edit"}}" class="edit">Edit</a>
        <form 
          action="/blog/{{ $post->slug }}"
          method="POST">
          @csrf
          @method('delete')

          <button
              class="text-red-500 pr-3"
              type="submit">
              Delete
          </button>

        </form>
      </section>
    @endif
    <section>
      <div class="headline">
        <h1>{{ $post->title }}</h1>
        <p class="author">By {{ $post->user->name }}</p>
        <img src="{{ url('images/'. $post->image_path) }}" alt="">
      </div>
    </section>


    <section>
      <p>{{ $post->description }}</p>
    </section>
      
  </main>
@endsection