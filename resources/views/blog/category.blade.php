@extends('layouts.app')

@section('content')

  <head>
    <link rel="stylesheet" href="{{ asset('css/blog/category.css')}}">
  </head>

  <main>
      <h1>{{$category}}</h1>
      <div class="posts-container">
        @foreach ($posts as $post)
        <div class="post-content">
          <img src="{{ url('images/' . $post->image_path) }}" alt="">
          <div class="detail">
            <span>by {{ $post->user->name }} | {{ date('jS M Y', strtotime($post->updated_at)) }}</span>
            <a href="{{ 'blog/' . $post->category }}">
              <h2>{{ $post->title }}</h2>
            </a>
            <p class="desc">{{ $post->description }}</p>
          </div>
        </div>
        @endforeach
        
        
      </div>
  </main>

  <footer>
    <p>created </p>
  </footer>

  <script>
    function myFunction() {
      var element = document.getElementById("myDIV");
      element.classList.toggle("mystyle");
    }
  </script>
@endsection