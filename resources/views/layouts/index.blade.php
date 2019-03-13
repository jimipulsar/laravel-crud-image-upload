@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="contenitore">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel Crud </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> <i class="fas fa-plus"> </i>  Crea nuovo prodotto</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
      <div class="row">
        <table class="table table-striped table-light table-hover table-responsive">
            <tr>
                <th>ID</th>
                <th class="justify-content-center" >Immagine</th>
                <th width="200px" >Nome Prodotto</th>
                <th>Descrizione</th>
                <th>Categoria</th>
                <th class="justify-content-center" width="160px">Azioni</th>
            </tr>
            <tr>
              @foreach ($posts as $post)
                <td>{{ $post->id }}</td>
                <td><img src="{{asset('storage/' . $post->cover)}}" height="80px" class="img-fluid img-thumbnail"></td>
                <td>{{ $post->title }}</td>
                <td>{{ substr($post->description, 0, 200)}}{{ strlen($post->description) > 200 ? '...' : ""}}</td>
                <td>{{ $post->category_id }}</td>
                <td>
                        <form action="{{ route('posts.destroy' ,$post->id) }}" method="post">

                        <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}"><i class="fas fa-eye"></i></a>

                        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}"><i class="fas fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
