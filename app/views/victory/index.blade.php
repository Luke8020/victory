@extends('victory.layouts.main')

@section('content')

	<!-- ========== BANNER START ========== -->
	<div id="banner">
		<div class="slider">
			<div class="slides-container">
				@foreach(range(1,7) as $index)
					<img src="/images/slider/slider-{{ $index }}.jpg" alt="Victory Great Danes Puppies and Breeding Dogs" />
				@endforeach
			</div>
		</div>
		<div class="tint">
			<div class="welcome text-center">
				<h1><span>WELCOME TO</span> VICTORY</h1>
				<h3>GREAT DANES</h3>
				<p><a href="#about" class="btn btn-default btn-lg">ENTER HERE</a></p>
			</div>
		</div>
	</div><div id="home"></div>
	<!-- ========== BANNER END ========== -->

	<!-- ========== PUPPIES START ========== -->
	<section id="about">
		<div class="container text-center">
			<div class="row wow bounceInUp" data-wow-delay="0.5s">
				<div class="col-md-12">
					<h2>AVAILABLE PUPPIES</h2>
					<h4>HOME OF QUALITY BLUES AND BLACKS</h4>
					<div class="divider"><i class="fa fa-bookmark"></i></div>
					<p>
						We may have a few select pups available. All puppies are placed with a 6 year health coverage and lifetime of professional consulting support. We welcome your inquires. Pictured are examples of the pups more pictures and information about the specific information of available pups, color & sexes upon request. We may have plans in place for future litters so feel free to contact us, serious inquiries are always welcome. We accept non-refundable deposits. We look forward to hearing from you.
					</p>
				</div>
			</div>
			<div class="row wow bounceInUp" data-wow-delay="0.5s">
				<div class="col-md-12">
					<div class="owl-carousel">
						@foreach ($puppies as $puppy)
							<div class="item">
								<div>
									<a href="/puppies/{{ $puppy->id }}">
										<img src="{{ $puppy->present()->mainPicture() }}" alt="" class="img-responsive" />
										<img src="../images/mask.png" alt="" class="mask img-responsive" />
									</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ========== PUPPIES END ========== -->

	<!-- ========== DOGS START ========== -->
	<section id="models">
		<div class="tint"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="wow fadeInLeftBig" data-wow-delay="0.3s">OUR GREAT DANE FAMILY</h2>
					<h4 class="wow fadeInRightBig" data-wow-delay="0.5s">MEET THE PEDIGREE</h4>
					<div class="divider"><i class="fa fa-paw"></i></div>
					<p>
						We are a small hobby breeding program with many years of experience. We welcome inquiries and encourage you to contact us to about Dane ownership and raising a Dane or if you have interest in future plans, and possible availability. Due to our non-refundable deposit waiting list and selective breeding process, we don't always have litter announcements or specific puppies mentioned as available on the web site. We are happy to try and help direct you to other litters from other breeders or older pups or Adults, if we don't have availability so feel free to inquire. Please feel free to email me I am always happy to answer any questions you may have, I am available for professional consulting in dog ownership and dog behavior modification. I answer every email, and always return calls. We do ask for your patience in replying as our family, both 2 and 4 legged, along with our primary boarding, behavior, animal care and consulting business keep us very busy.
					</p>
				</div>
			</div>
			<div class="row wow fadeInUpBig" data-wow-delay="0.5s">
				<div class="col-md-12 text-center">

					<ul class="filter-menu">
						<li class="filter btn btn-default active" data-filter="mix">ALL DANES</li>
						<li class="filter btn btn-default" data-filter="man">OUR BOYS</li>
						<li class="filter btn btn-default" data-filter="woman">OUR GIRLS</li>
					</ul>

					<ul class="models">
						@foreach($dogs as $dog)
							<li class="mix {{ $dog->present()->genderClass }}">
								<a href="/dogs/{{ $dog->id }}"><img src="{{ $dog->present()->mainPicture() }}" alt="Victory Great Danes Breeding Dogs" class="img-responsive" /></a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- ========== DOGS END ========== -->

	<!-- ========== BLOG START ========== -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="wow fadeInLeftBig" data-wow-delay="0.3s">HOLIDAY FUN WITH VICTORY DANES</h2>
					<h4 class="wow fadeInRightBig" data-wow-delay="0.5s">LATEST ENTRIES</h4>
					<div class="divider"><i class="fa fa-book"></i></div>
				</div>
			</div>
			<div class="row-margin owl-carousel blog-carousel">
				@foreach ($blogPosts as $blogPost)
					<div class="item">
						<div class="post-thumb col-sm-4"><img src="{{ $blogPost->present()->mainPicture() }}" alt="Banner" class="img-responsive" /></div>
						<div class="post col-sm-8">
							<h3 class="entry-title">{{ $blogPost->title }}</h3>
							<div class="entry-meta">
								<span class="date">{{ $blogPost->updated_at->toFormattedDateString() }}</span>
							</div>
							<div class="entry-content blog-preview">{{ $blogPost->body }}</div>
							<div class="post-more"><a href="/blogposts/{{ $blogPost->id }}" class="btn btn-default">READ MORE</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- ========== BLOG END ========== -->

	@include('victory.layouts.partials.contact')

@stop