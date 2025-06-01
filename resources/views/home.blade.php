@extends('layouts.base')

@section('content')
	<div class="blank-builder">
		<div data-elementor-type="wp-page" data-elementor-id="2500" class="elementor elementor-2500"
			data-elementor-post-type="page">

			@include('partials.hero')
			@include('partials.about')
			@include('partials.services')
			@include('partials.clients')
			@include('partials.projects')

		</div>
	</div>
@endsection