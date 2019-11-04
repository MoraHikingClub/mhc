@extends('layouts.master')

@section('title')
	Mora Hiking Club | About us
@endsection

@section('content')
	<!--header image-->
	<img class="header-image" src="{{ asset('images/header-about-lg.jpg') }}" srcset="{{ asset('images/header-about.jpg') }} 764w, {{ asset('images/header-about-lg.jpg') }} 1920w" />

	@include('layouts.social')

	<!--about us content-->
	<div class="content text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-entrance="from-bottom">
					<h1 class="title text-center about-title">About us</h1>
					<p style="text-align:left;">Mora Hiking Club is the officially recognised dedicated body in University of Moratuwa for organising Hiking, Trekking, Mountaineering, and other related outdoor recreational activities. Mora Hiking Club is a brain child of a group of adrenaline addicts who kept looking for ways to escape the burden of education.<br><br>

						The Club was registered in August 2016 as an approve society in the University. Yet the enthusiastic group had gone on many hikes before this. It was at the top of Uthuwankanda in April 2016 we had started thinking of registering the club formally.<br><br>

						Studying the history, heritage, skills and safe conduct of climbing, hill walking and mountaineering and the environments in which these activities take place will be a secondary objective of the club.<br><br>

						To inculcate in members the spirit of healthy competition the club wishes to organise competitions, championships and tournaments on outdoor activities.<br><br>

						Ultimately, we hope to enhance the awareness of members on diverse cultural and traditional values of Sri Lanka and promote scrupulousness among members on natural and ecological conservation.<br><br>

						The club is led and administrated by a committee appointed by the membership.<br><br>
					</P>
				</div>
			</div>
		</div>
	</div>
@endsection