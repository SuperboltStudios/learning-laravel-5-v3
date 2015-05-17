@extends('app')

@section('content')



	<h1>About</h1>

	@if (count($people))

		<h3>People I like:</h3>
		<ul>
			@foreach ($people as $person)
				<li>{{ $person }}</li>
			@endforeach
		</ul>
	@endif

	<p>
		asdasd ssd sdaad asds dasd asdasd ssd sdaad asdsd asd sd sd ssd sdaad asds da sda sdasd ssd sdaad asdsdasd
	</p>

	<p>
		asdasd ssd sdaad asds dasd asdasd ssd sdaad asdsd asd sd sd ssd sdaad asds da sda sdasd ssd sdaad asdsdasd
	</p>

@stop