@extends('layouts.app')

@section('content')

	<h1 class="text-center">Our Hosts</h1>

	@foreach($hosts->chunk(4) as $hostsSet)
		<div class="row">
			@foreach($hostsSet as $host)
				<div class="small-1 medium-3 large-3 columns">
					<img class="thumbnail" src="https://www.gravatar.com/avatar/{{ md5($host->email) }}?size=120" alt="Photo of {{ $host->name }}">
					<p>
						<strong>{{ $host->name }}</strong>
					</p>
					<p>
						{{ $host->location }}
					</p>
				</div>
			@endforeach
		</div>
	@endforeach

@endsection
