@extends('layouts.master')

@section('title', 'Mora Hiking Club | Home')

@section('content')
	<!--content-->
	<!-- slideshow -->
	<main class="main-content">
		<section class="slideshow">
			<div class="slideshow-inner">
				<div class="slides">
					<div class="slide is-active">
						<div class="slide-content">
							<div class="caption">
								<div class="title">
									Mora Hiking Club
								</div>
								<div class="text">
									<p>"It’s not the mountain we conquer, but ourselves."</p>
								</div>
								<a href="#" class="slide-btn">
									<span class="slide-btn-inner">Learn More</span>
								</a>
							</div>
						</div>
						<div class="image-container">
							{{-- <img src="{{ asset('images/banner1.jpg') }}" alt="" class="image" /> --}}
							<img src="{{ asset('images/4th-anniversary.jpg') }}" alt="" class="image" />
						</div>
					</div>
					<!-- <div class="slide">
						<div class="slide-content">
							<div class="caption">
								<div class="title">Installation of New Fellow Members</div>
								<div class="text">
									<p>"If you've followed the trail so far. This is your opportunity!"</p>
								</div>
								<a href="{{ route('fellow') }}" class="slide-btn">
									<span class="slide-btn-inner">Apply</span>
								</a>
							</div>
						</div>
						<div class="image-container">
							<img src="{{ asset('images/banner4.jpg') }}" alt="" class="image" />
						</div>
					</div> -->
					<div class="slide">
						<div class="slide-content">
							<div class="caption">
								<div class="title">Make your first move</div>
								<div class="text">
									<p>"Carry as little as possible, but choose that little with care."</p>
								</div>
								<a href="{{ url('/about/aboutus') }}" class="slide-btn">
									<span class="slide-btn-inner">About us</span>
								</a>
							</div>
						</div>
						<div class="image-container">
							<img src="{{ asset('images/banner2.jpg') }}" alt="" class="image" />
						</div>
					</div>
					<div class="slide">
						<div class="slide-content">
							<div class="caption">
								<div class="title">Memories won't die</div>
								<div class="text">
									<p>"To walk in nature is to witness a thousand miracles."</p>
								</div>
								<a href="{{ route('gallery') }}" class="slide-btn">
									<span class="slide-btn-inner">Gallery</span>
								</a>
							</div>
						</div>
						<div class="image-container">
							<img src="{{ asset('images/banner3.jpg') }}" alt="" class="image" />
						</div>
					</div>
					<div class="slide">
						<div class="slide-content">
							<div class="caption">
								<div class="title">Membership registration for year 2023/24 is now Open!</div>
								<div class="text">
									<p>"There are no shortcuts to any place worth going."</p>
									<!-- <p>Membership registration for year 2022 is now CLOSED!</p> -->
								</div>
								<a href="{{ route('signup') }}" class="slide-btn">
									<span class="slide-btn-inner">Apply now</span>
								</a>
								<!-- div class="title">Make the convo</div> -->
								<!-- <div class="text">
									<p>"There are no shortcuts to any place worth going."</p>
								</div>
								<a href="{{ route('contact') }}" class="slide-btn">
									<span class="slide-btn-inner">Contact Us</span>
								</a -->
							</div>
						</div>
						<div class="image-container">
							<img src="{{ asset('images/banner4.jpg') }}" alt="" class="image" />
						</div>
					</div>
				</div>
				<div class="pagi">
					<div class="pagi-item is-active" id="slide1">
						<span class="icon">1</span>
					</div>
					<div class="pagi-item">
						<span class="icon">2</span>
					</div>
					<div class="pagi-item">
						<span class="icon">3</span>
					</div>
					<div class="pagi-item">
						<span class="icon">4</span>
					</div>
				</div>
				<div class="arrows">
					<div class="arrow prev">
						<span class="svg svg-arrow-left">
							<svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
								<path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" /> </svg>
							<span class="alt sr-only"></span>
						</span>
					</div>
					<div class="arrow next">
						<span class="svg svg-arrow-right">
							<svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
								<path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" /> </svg>
							<span class="alt sr-only"></span>
						</span>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- extra styles for social icons-->
	@include('layouts.social')

	<!-- Main title / Link to -> about us -->
	<section id="main-title">
		<div class="container">
			<div class="main-title" data-entrance="from-bottom">
				<h1 class="text-center">Mora Hiking Club</h1>
				<h5 class="text-center" style="padding-bottom:30px;">Where Hiking meets its passion</h5>
				<p>Walking miles and miles for no other reason than to witness the accumulation of trees and meadows, mountains and waterfalls, streams and rocks, rivers and grasses, sunrises and sunsets. Yeah that’s what we call “Hiking”. And that’s what we hikers are proud of. The experience is powerful and fundamental.</p>
			</div>
		</div>
	</section>

	@if(!empty($post))
	<!-- Recent blog post / Link to -> blog -->
	<!-- parallax background = blog post header image -->
	<section id="recent" class="parallax" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('{{ ($post->featured_img == '') ? asset('images/recent.jpg') : $post->featured_img }}');">
		<div class="container">
			<div class="row">
				<div class="col-md-4" data-entrance="from-bottom">
					<img src="{{ ($post->featured_img == '') ? asset('images/recent.jpg') : $post->featured_img }}" class="img-thumbnail" alt="{{ $post->title }}" />
				</div>
				<div class="col-md-8" data-entrance="from-bottom">
					<div class="row">
						<div class="col-md-12">
							<h3>{{ $post->title }}</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<p>{!! substr(strip_tags($post->body), 0, 500) !!}{{ strlen(strip_tags($post->body))>500 ? '...' : '' }}</p>
							<a href="{{ route('blog') }}" class="slide-btn">
								<span class="slide-btn-inner">Learn more</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@else
	<section id="recent" class="parallax" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('{{ asset('images/recent.jpg') }}');">
		<div class="container">
			<div class="row">
				<div class="col-md-12" data-entrance="from-bottom">
					<h3 class="text-center">No any blog post yet. Stay tuned!</h3>
				</div>
			</div>
		</div>
	</section>
	@endif

	<!-- Hikes counter section -->
	<section id="hike-counter" class="hike-counter">
		<div class="container">
			<div class="main-title">
				<h1 class="text-center">Our Hikes</h1>
				<p class="text-center" style="font-size:larger;">Here are some hikes we completed during last years.</p>
			</div>


			<div class="row">
				<div class="col-sm-4 counter-border-right" style="text-align: center;">
					<span class="counter count">50</span><span class="count">+</span><br>
					<span class="count-desc">Hikes</span>
				</div>
				<div class="col-sm-4 counter-border-right" style="text-align: center;">
					<span class="counter count">400</span><span class="count">+</span><br>
					<span class="count-desc">Members</span>
				</div>
				<div class="col-sm-4" style="text-align: center;">
					<span class="counter count">1,000,000</span><span class="count">+</span><br>
					<span class="count-desc">Steps</span>
				</div>
			</div>
		</div>
	</section>

	<!-- Join us section / Link to -> signup -->
	<section id="join" class="parallax" style="background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.2)),url('{{ asset('images/join.jpg') }}');">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="title text-center">Do it now</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Sometimes 'Later' becomes 'Never'</h2>
				</div>
			</div>
			<div class="row" style="padding-top:50px;padding-bottom:100px;">
				<div class="col-md-12" style="text-align:center;">
					<a href="{{ route('contact') }}" class="slide-btn"> 
						<span class="slide-btn-inner">Contact us now</span> <!-- This is for join us. For the first update this will be the contact us btn -->
					</a>
					<div>
					</div>
				</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 margin-bottom">
					<h5 class="related-links">Related links</h5>
					<p class="related-links"><a class="related-content" href="http://mrt.ac.lk">University of Moratuwa</a></p>
					<div class="divider"></div>
					<p class="related-links"><a class="related-content" href="https://www.youtube.com/results?search_query=mora+hiking+club">Youtube</a></p>
					<div class="divider"></div>
					<p class="related-links"><a class="related-content" href="https://www.facebook.com/morahikingclub">Facebook page</a></p>
					<div class="divider"></div>
				</div>
				<div class="col-md-4 margin-bottom">
					<h5  class="related-content">"The journey of a thousand miles begins with a single step"</h5>
					<p class="related-content">-LAO TZU-</p>
				</div>
				<div class="col-md-4 margin-bottom">
				<div class="twitter-container"><a class="twitter-timeline" data-theme="dark" data-height="200" href="https://twitter.com/morahikingclub?ref_src=twsrc%5Etfw">Tweets by morahikingclub</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center footer-text">Copyright &copy Mora Hiking Club, University of Moratuwa, Sri Lanka. 2019 - 2020</div>
			</div>
		</div>
	</footer>

	<!--fb widget js-->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=396861897128131&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<!--slideshow js-->
	<script type="text/javascript">
        window.addEventListener("load", function(){
			var a = document.getElementById('slide1');
			a.click();
		});
	</script>
	<script>
		var slideshowDuration = 4000;
		var slideshow = $('.main-content .slideshow');

		function slideshowSwitch(slideshow, index, auto) {
			if (slideshow.data('wait')) return;

			var slides = slideshow.find('.slide');
			var pages = slideshow.find('.pagi');
			var activeSlide = slides.filter('.is-active');
			var activeSlideImage = activeSlide.find('.image-container');
			var newSlide = slides.eq(index);
			var newSlideImage = newSlide.find('.image-container');
			var newSlideContent = newSlide.find('.slide-content');
			var newSlideElements = newSlide.find('.caption > *');
			if (newSlide.is(activeSlide)) return;

			newSlide.addClass('is-new');
			var timeout = slideshow.data('timeout');
			clearTimeout(timeout);
			slideshow.data('wait', true);
			var transition = slideshow.attr('data-transition');
			if (transition == 'fade') {
				newSlide.css({
					display: 'block',
					zIndex: 2
				});
				newSlideImage.css({
					opacity: 0
				});

				TweenMax.to(newSlideImage, 1, {
					alpha: 1,
					onComplete: function() {
						newSlide.addClass('is-active').removeClass('is-new');
						activeSlide.removeClass('is-active');
						newSlide.css({
							display: '',
							zIndex: ''
						});
						newSlideImage.css({
							opacity: ''
						});
						slideshow.find('.pagi').trigger('check');
						slideshow.data('wait', false);
						if (auto) {
							timeout = setTimeout(function() {
								slideshowNext(slideshow, false, true);
							}, slideshowDuration);
							slideshow.data('timeout', timeout);
						}
					}
				});
			} else {
				if (newSlide.index() > activeSlide.index()) {
					var newSlideRight = 0;
					var newSlideLeft = 'auto';
					var newSlideImageRight = -slideshow.width() / 8;
					var newSlideImageLeft = 'auto';
					var newSlideImageToRight = 0;
					var newSlideImageToLeft = 'auto';
					var newSlideContentLeft = 'auto';
					var newSlideContentRight = 0;
					var activeSlideImageLeft = -slideshow.width() / 4;
				} else {
					var newSlideRight = '';
					var newSlideLeft = 0;
					var newSlideImageRight = 'auto';
					var newSlideImageLeft = -slideshow.width() / 8;
					var newSlideImageToRight = '';
					var newSlideImageToLeft = 0;
					var newSlideContentLeft = 0;
					var newSlideContentRight = 'auto';
					var activeSlideImageLeft = slideshow.width() / 4;
				}

				newSlide.css({
					display: 'block',
					width: 0,
					right: newSlideRight,
					left: newSlideLeft,
					zIndex: 2
				});

				newSlideImage.css({
					width: slideshow.width(),
					right: newSlideImageRight,
					left: newSlideImageLeft
				});

				newSlideContent.css({
					width: slideshow.width(),
					left: newSlideContentLeft,
					right: newSlideContentRight
				});

				activeSlideImage.css({
					left: 0
				});

				TweenMax.set(newSlideElements, {
					y: 20,
					force3D: true
				});
				TweenMax.to(activeSlideImage, 1, {
					left: activeSlideImageLeft,
					ease: Power3.easeInOut
				});

				TweenMax.to(newSlide, 1, {
					width: slideshow.width(),
					ease: Power3.easeInOut
				});

				TweenMax.to(newSlideImage, 1, {
					right: newSlideImageToRight,
					left: newSlideImageToLeft,
					ease: Power3.easeInOut
				});

				TweenMax.staggerFromTo(newSlideElements, 0.8, {
					alpha: 0,
					y: 60
				}, {
					alpha: 1,
					y: 0,
					ease: Power3.easeOut,
					force3D: true,
					delay: 0.6
				}, 0.1, function() {
					newSlide.addClass('is-active').removeClass('is-new');
					activeSlide.removeClass('is-active');
					newSlide.css({
						display: '',
						width: '',
						left: '',
						zIndex: ''
					});

					newSlideImage.css({
						width: '',
						right: '',
						left: ''
					});

					newSlideContent.css({
						width: '',
						left: ''
					});

					newSlideElements.css({
						opacity: '',
						transform: ''
					});

					activeSlideImage.css({
						left: ''
					});

					slideshow.find('.pagi').trigger('check');
					slideshow.data('wait', false);
					if (auto) {
						timeout = setTimeout(function() {
							slideshowNext(slideshow, false, true);
						}, slideshowDuration);
						slideshow.data('timeout', timeout);
					}
				});
			}
		}

		function slideshowNext(slideshow, previous, auto) {
			var slides = slideshow.find('.slide');
			var activeSlide = slides.filter('.is-active');
			var newSlide = null;
			if (previous) {
				newSlide = activeSlide.prev('.slide');
				if (newSlide.length === 0) {
					newSlide = slides.last();
				}
			} else {
				newSlide = activeSlide.next('.slide');
				if (newSlide.length == 0)
					newSlide = slides.filter('.slide').first();
			}

			slideshowSwitch(slideshow, newSlide.index(), auto);
		}

		function homeSlideshowParallax() {
			var scrollTop = $(window).scrollTop();
			if (scrollTop > windowHeight) return;
			var inner = slideshow.find('.slideshow-inner');
			var newHeight = windowHeight - (scrollTop / 2);
			var newTop = scrollTop * 0.8;

			inner.css({
				transform: 'translateY(' + newTop + 'px)',
				height: newHeight
			});
		}

		$(document).ready(function() {
			$('.slide').addClass('is-loaded');

			$('.slideshow .arrows .arrow').on('click', function() {
				slideshowNext($(this).closest('.slideshow'), $(this).hasClass('prev'));
			});

			$('.slideshow .pagi .pagi-item').on('click', function() {
				slideshowSwitch($(this).closest('.slideshow'), $(this).index());
			});

			$('.slideshow .pagi').on('check', function() {
				var slideshow = $(this).closest('.slideshow');
				var pages = $(this).find('.pagi-item');
				var index = slideshow.find('.slides .is-active').index();
				pages.removeClass('is-active');
				pages.eq(index).addClass('is-active');
			});

			var timeout = setTimeout(function() {
				slideshowNext(slideshow, false, true);
			}, slideshowDuration);

			slideshow.data('timeout', timeout);
		});

		if ($('.main-content .slideshow').length > 1) {
			$(window).on('scroll', homeSlideshowParallax);
		}
	</script>

	<!-- Hike counter js -->
	<script>
		jQuery(document).ready(function($) {
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});
		});
	</script>
	
@endsection

