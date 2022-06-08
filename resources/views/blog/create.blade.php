@extends('layouts.app')

@section('content')
  <head>
    <link rel="stylesheet" href="{{ asset('css/blog/create.css')}}">
  </head>
    
  <div class="container">
    <h1>Create Post</h1>
    @if ($errors->any())
      <div class="w-4/5 m-auto">
        <ul>
          @foreach ($errors->all() as $error)
            <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
              {{ $error }}
            </li>
          @endforeach
        </ul>
      </div>
    @endif
    <form method="POST" action="/blog" enctype="multipart/form-data">
      @csrf
      <div class="input">
        <label for="" class="title">Title</label>
        <input type="text" name="title" placeholder="title">
        <label for="" class="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
        
        <label for="category">Add Category:</label>

        <select name="category" id="category">
          <option value="budaya">Budaya</option>
          <option value="MakananDanMinuman">Makanan dan Minuman</option>
          <option value="sejarah">Sejarah</option>
          <option value="teknologi">Teknologi</option>
        </select>

        <label for="image" class="upload-btn">Select Image</label>
        <input type="file" name="image" id="image" hidden>

        {{-- <label for="">Add Category</label>
        <div class="tag">
          <input type="radio" id="budaya" name="category" value="budaya" hidden>
          <label for="budaya">Budaya</label><br>
          <input type="radio" id="sejarah" name="category" value="sejarah" hidden>
          <label for="sejarah">Sejarah</label><br>
          <input type="radio" id="teknologi" name="category" value="teknologi" hidden>
          <label for="teknologi">Teknologi</label>
        </div> --}}

        <button type="submit">upload post</button>
      </div>

    </form>
  </div>
@endsection