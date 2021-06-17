<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<a href="/">home</a>
	<h1>Editando a la persona</h1>

	<form action="{{ route('people.update', $person->id) }}" method="POST">
		@csrf
		<label>Full Name</label>
		<input type="text" name="full_name" value="{{ $person->full_name }}">
		<label>Phone</label>
		<input type="text" name="phone" value="{{ $person->phone }}">
		<label>Address</label>
		<input type="text" name="address" value="{{ $person->address }}">
		<label>Email</label>
		<input type="text" name="email" value="{{ $person->email }}">		
		<button type="submit">Save</button>
	</form>
</body>
</html>
