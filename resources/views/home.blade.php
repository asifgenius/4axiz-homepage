@extends('layouts.base')

@section('content')
	<div class="blank-builder">
		<div data-elementor-type="wp-page" data-elementor-id="2500" class="elementor elementor-2500"
			data-elementor-post-type="page">
			@include('partials.hero')
			@include('partials.about')
			@include('partials.project-states')
			@include('partials.transformation')
			@include('partials.services')
			@include('partials.creatives')
			@include('partials.projects')
			@include('partials.clients')
			@include('partials.build')
		</div>
	</div>
@endsection