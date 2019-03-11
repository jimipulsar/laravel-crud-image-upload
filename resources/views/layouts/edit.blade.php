@extends('layouts.app')

@section('content')
  <div class="colonna">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifica prodotto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Torna indietro</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Attenzione!</strong> Mancano dei campi obbligori<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome prodotto:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="cover" ><img src="{{asset('storage/' . $post->cover)}}" height="150px"> </label>
                  <input type="file" name="cover" placeholder="Inserisci un immagine" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrizione:</strong>
                    <textarea class="form-control" style="height:120px" name="description" placeholder="Detail">{{ $post->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->title }}">{{$category->title}}</option>
                @endforeach
              </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Applica</button>
            </div>
        </div>
    </form>
  </div>
@endsection
