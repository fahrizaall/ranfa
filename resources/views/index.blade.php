@extends('layouts.app')

@section('content')

  <head>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
  </head>

  <div id="hero">
    <img src="{{url('images/stone-wang-2BZ5vmNgyb8-unsplash.jpg')}}" alt="">
    <div class="hero-content">
      <div class="center-text">
        <h1>PANDA MERAH</h1>
        <div class="line"></div>
        <h3>Hal unik tentang panda merah</h3>
      </div>
    </div>
    {{-- <div class="hero-btn">
      <button class="generate-btn">Generate Random Fact</button>
    </div> --}}
  </div>

  <main>
    <section id="category">
      <h2>Category</h2>
      <div class="category-list">
        @foreach ($posts as $post)
            
          <a href="{{'blog/category/' . $post->category}}" class="">
            <div class="category-content">
              <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
              <p>{{$post->category}}</p>
            </div>
          </a>

        @endforeach
      </div>
    </section>

    <section class="explore">
      <h2>Explore</h2>
      <div class="explore-container">
        @foreach ($posts as $post)
          <div class="explore-content">
            <a href="{{ 'blog/' . $post->slug }}">
              <img src="{{ url('images/' . $post->image_path) }}" alt="">
              <p>{{ $post->title }}</p>
              <div class="floating-detail">
                <span>by {{ $post->user->name }} | {{ date('jS M Y', strtotime($post->updated_at)) }}</span>
                <p>{{ $post->title }}</p>
              </div>
            </a>
          </div>
        @endforeach
        
        <div class="explore-content">
          <a href="/blog">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
        <div class="explore-content">
          <a href="/blog">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
        <div class="explore-content">
          <a href="/blog">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
        <div class="explore-content">
          <a href="/blog">
            <img src="{{url('images/pavan-gupta-_HzlOHmboSk-unsplash.jpg')}}" alt="">
            <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            <div class="floating-detail">
              <span>by ranfa | May 19, 2022</span>
              <p>Asal nama nusantara adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, iusto mollitia optio atque perferendis explicabo exercitationem nobis adipisci inventore accusamus illo illum? Exercitationem earum libero consectetur corrupti ullam eius cupiditate.</p>
            </div>
          </a>
        </div>
      </div>
    </section>
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