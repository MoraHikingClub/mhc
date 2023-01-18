@extends('layouts.master')

@section('title', 'Mora Hiking Club | Fellow Membership')

@section('content')
	<!--header image-->
	<img class="header-image" src="{{ asset('images/Untitled.jpg') }}" srcset="{{ asset('images/Untitled.jpg') }} 764w, {{ asset('images/Untitled.jpg') }} 1920w" />

	@include('layouts.social')

	<!--about us content-->
	<div class="content text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-entrance="from-bottom">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe9QoZPEbcWEPDmM7H8RycexHwNUXaiE3Uhh8YDlW1z-Iksvw/viewform?embedded=true" width="100%" height="720" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
				</div>
			</div>
		</div>
	</div>
@endsection