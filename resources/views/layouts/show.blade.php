@extends('layouts.app')

@section('content')
  <div class="colonna2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="secondo-titolo">
                <h2>{{ $post->title }}</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">

          <div class="left-form">
              <img src="{{asset('storage/' . $post->cover)}}" height="300px">
          </div>

              <div class="right-form">
              <strong>Descrizione:</strong>
              {{ $post->description }}
              <hr>

              <strong>Categoria:</strong>
              {{ $post->category_id }}
              <br>
                <hr>
          <a class="btn btn-primary" href="{{ route('posts.index') }}"> Torna indietro</a>
        </div>

@endsection
