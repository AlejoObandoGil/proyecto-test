
@extends('template.template')

@section('content')
	<div class="text-right mr-auto">
		<a href="{{ route('home') }}" class="btn btn-primary mr-auto">Atras</a>
	</div>

	<div>
		<form-people :new_people="{{ $new_people }}" />
	</div>
	<div>
		<list-son :sons="{{ $person->sons }}" />
	</div>
@endsection
