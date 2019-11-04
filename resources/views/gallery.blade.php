@extends('layouts.master')

@section('title')
Mora Hiking Club | Gallery
@endsection

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('gallery/css/unite-gallery.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('gallery/themes/default/ug-theme-default.css') }}" type="text/css" />
@endsection

@section('content')

@include('layouts.social')

<div class="gallery">
	<div class="container">
		@if(!Session::has('success'))
		<div class="post-contain">
			@endif
			@php
				$i=0;
			@endphp
			
			@foreach($albums as $album)
				@if($i%2==0)
					<div class="card mb-3 gallery-card" >
						<div class="row no-gutters">
							<div class="col-md-4">
								<div class="gallery-item">
									<a href="{{ $album->album_url }}" target="_blank"><img src="{{ $album->album_img }}" class="card-img gallery-img" alt="{{ $album->album_title }}"></a>
								</div>
							</div>
							<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">{{ $album->album_title }}</h5>
								<p class="card-text">{{ substr(strip_tags($album->album_text), 0, 300) }}</p>
								<p class="card-text"><small class="text-muted">Last updated {{ date('M j, Y h:ia', strtotime($album->updated_at)) }}</small></p>
								{{ Html::link($album->album_url, 'View album', ['class' => 'btn btn-success', 'target' => '_blank'])}}
							</div>
							</div>
						</div>
					</div>
				@else
					<div class="card mb-3 gallery-card" >
						<div class="row no-gutters">
							<div class="col-md-8">
								<div class="card-body" style="text-align:right;">
									<h5 class="card-title">{{ $album->album_title }}</h5>
									<p class="card-text">{{ substr(strip_tags($album->album_text), 0, 300) }}</p>
									<p class="card-text"><small class="text-muted">Last updated {{ date('M j, Y h:ia', strtotime($album->updated_at)) }}</small></p>
									{{ Html::link($album->album_url, 'View album', ['class' => 'btn btn-success', 'target' => '_blank'])}}
								</div>
							</div>
							<div class="col-md-4 gallery-item">
								<a href="{{ $album->album_url }}" target="_blank"><img src="{{ $album->album_img }}" class="card-img gallery-img" alt="{{ $album->album_title }}"></a>
							</div>
						</div>
					</div>
				@endif
				@php
					$i++;
				@endphp
			@endforeach
			@if(!count($albums)>0)
				<div class="news-text-bg">
					<h3 class="text-center text-white">No any album yet.</h3>
					<h5 class="text-center text-white">If you have any memory or photo album or a video to share with us <a href="{{ route('contact') }}">Let us know</a></h5>
				</div>
        	@endif
			@if(!Session::has('success'))
		</div>
		@endif
	</div>
</div>
@endsection

@section('script')
<style>
	.card{
		box-shadow: 0px 0px 10px #0000005c;
	}
</style>
@endsection

