@extends('layouts.master')

@section('title')
	Mora Hiking Club | Blog
@endsection

@section('content')
<!--content-->
<!-- 40 word from each blog post will be shown here -->
@include('layouts.social')

<div class="blog-contain">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Our latest blogs</h1>
			</div>
		</div>
		<ul class="timeline">
			@php
				$i = 1;
			@endphp
			@foreach($posts as $post)
				@include('layouts.blog-card' , [ 'side' => (($i%2)===0 ? 'right' : 'left') , 'title' => $post->title , 'content' => substr(strip_tags($post->body), 0, 300) , 'link' => 'blog/'.$post->slug , 'date' => date('M j, Y h:ia', strtotime($post->created_at)) , 'header' => $post->featured_img ])
				@php
					$i++;
				@endphp
			@endforeach
			<li class="clearfix no-float"></li>
		</ul>
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					@if(!count($posts)>0)
						<h3>No any blog post yet. Stay tuned!</h3>
					@else
					{!! $posts->links(); !!}
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection