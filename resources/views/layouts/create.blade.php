@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="main-head">
        <div class="left-head">
            <h2>Aggiungi nuovo prodotto</h2>
        </div>
        <div class="right-head">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Indietro</a>
        </div>
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
@if ($errors->has('name'))
    <span class="error">{{ $errors->first('sbagliato') }}</span>
@endif
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="colonna-mid">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Nome Prodotto</label>
                <input type="text" name="title" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
					    <label for="cover">Immagine:</label>
				      <input type="file" name="cover" placeholder="Inserisci un immagine" class="form-control">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label for="description">Descrizione</label>
                  <textarea class="form-control" style="height:150px" name="description" placeholder="Descrizione"></textarea>
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
          <button type="submit" class="btn btn-primary">Applica modifiche</button>
        </div>
    </div>
</div>
</form>
</div>
@endsection
