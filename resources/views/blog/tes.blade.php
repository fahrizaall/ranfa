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
      <di class="input">
        
        
      </div>

    </form>

  </div>
@endsection