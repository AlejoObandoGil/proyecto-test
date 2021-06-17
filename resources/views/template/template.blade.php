<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	@yield('css')
</head>
<body>

	@include('template._header')

	<div class="container" id="app">
		@yield('content')
	</div>

	<script src="{{ mix('/js/app.js') }}"></script>
	@yield('js')

</body>
</html>
