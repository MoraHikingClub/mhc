@extends('layouts.master')

@section('title', 'Mora Hiking Club | Contact us')

@section('content')
<div class="header-contact"><img src="{{ asset('images/header-contact.jpg') }}" class="header-contact-img" alt="Contact us" /></div>
<div class="container contact-content">
	<h1 class="title text-center">Contact us</h1>
	<div class="row">

		<div class="col-md-2">
			<div class="row">
				<div class="col contact-title">Follow Us</div>
			</div>
			<div class="row margin-bottom">
				<div class="col">
					<a class="social-icons" target="_blank" href="https://www.facebook.com/MoraHikingClub"><i class="fa fa-facebook-f"></i></a>
					<a class="social-icons" target="_blank" href="https://twitter.com/morahikingclub"><i class="fa fa-twitter"></i></a>
					<a class="social-icons" target="_blank" href="https://www.flickr.com/people/morahikingclub/"><i class="fa fa-flickr"></i></a>
					<a class="social-icons" target="_blank" href="https://www.instagram.com/morahiking/"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col contact-title">Address</div>
			</div>
			<div class="row margin-bottom">
				<div class="col">
					Mora Hiking Club<br>
					University of Moratuwa,<br>
					Katubedda 10400,<br>
					Sri Lanka.
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col contact-title">Contact us</div>
			</div>
			<div class="row margin-bottom">
				<div class="col">
					Harshana Wijesekara(President): <br><a href="tel:+94 76 560 9006">+94 76 560 9006</a><br>
					Tharindi Heenkenda(Secretary): <br><a href="tel:+94 76 734 2490">+94 76 734 2490</a><br>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col contact-title">Email us</div>
			</div>
			<div class="row margin-bottom">
				<div class="col">
					<a href="mailto:morahikingclub@gmail.com">morahikingclub@gmail.com</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row margin-bottom">
		<div class="col">
			Don't hesitate to make your feedback
		</div>
	</div>
	<form action="{{ url('contact') }}" method="POST">
		<div class="form-row">
			{{ csrf_field() }}
			<div class="col-md-4 margin-bottom">
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>
			<div class="col-md-4 margin-bottom">
				<input type="text" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="col-md-4 margin-bottom">
				<input type="text" name="subject" class="form-control" placeholder="Subject">
			</div>
		</div>
		<div class="form-row margin-bottom">
			<textarea class="form-control message-area" name="message" placeholder="Message" rows="7"></textarea>
		</div>
		<div class="form-row margin-bottom">
			<button type="submit" class="btn btn-success margin-bottom">Submit</button>
		</div>
	</form>
</div>
@endsection