<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<title>UTENTI</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark" id="navbarmenu">
  <a class="navbar-brand" href="#">Laravel Crud</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li>
        <a href="{{ route('index')}}">Home </a>
      </li>
      <li>
        <a href="{{ route('posts.index')}}">Articoli</a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')
@include('partials.footer')
	</body>
</html>
