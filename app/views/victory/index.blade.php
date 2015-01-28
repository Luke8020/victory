@extends('victory.layouts.main')

@section('content')

<body data-spy="scroll" data-target=".navbar-collapse">

	<!-- ========== BANNER START ========== -->

	<div id="banner">
		<div class="slider">
			<div class="slides-container">
				<img src="../images/slider/slider-1.jpg" alt="" />
				<img src="../images/slider/slider-2.jpg" alt="" />
				<img src="../images/slider/slider-3.jpg" alt="" />
				<img src="../images/slider/slider-4.jpg" alt="" />
				<img src="../images/slider/slider-5.jpg" alt="" />
				<img src="../images/slider/slider-6.jpg" alt="" />
				<img src="../images/slider/slider-7.jpg" alt="" />
				<img src="../images/slider/slider-8.jpg" alt="" />
			</div>
		</div>
		<div class="tint">
			<div class="welcome text-center">
				<h1><span>WELCOME TO</span> VICTORY</h1>
				<h3>GREAT DANES</h3>
				<p><a href="#about" class="btn btn-default btn-lg">ENTER HERE</a></p>
			</div>
		</div>
	</div>

	<div id="home"></div>

	<!-- ========== BANNER END ========== -->

	<!-- ========== PUPPIES START ========== -->

	<section id="about">
		<div class="container text-center">
			<div class="row wow bounceInUp" data-wow-delay="0.5s">
				<div class="col-md-12">
					<h2>AVAILABLE PUPPIES</h2>
					<h4>HOME OF QUALITY BLUES AND BLACKS</h4>
					<div class="divider"><i class="fa fa-bookmark"></i></div>
					<p>Welcome to Victory Danes. Swipe left or right to see our gallery of available pups! If you are
					interested in adopting a Great Dane, give us a call or fill out our contact form below.</p>
				</div>
			</div>
			<div class="row wow bounceInUp" data-wow-delay="0.5s">
				<div class="col-md-12">
					<div class="owl-carousel">
						<div class="item">
							<div>
								<a href="../images/puppies/full/puppy-1.jpg" class="fancybox" data-fancybox-group="group" title="">
									<img src="../images/puppies/puppy-1.jpg" alt="" class="img-responsive" />
									<img src="../images/mask.png" alt="" class="mask img-responsive" />
									<h5>Puppy</h5>
									<p>Puppy Description</p>
								</a>
							</div>
						</div>
						<div class="item">
							<div>
								<a href="../images/puppies/full/puppy-2.jpg" class="fancybox" data-fancybox-group="group" title="">
									<img src="../images/puppies/puppy-2.jpg" alt="" class="img-responsive" />
									<img src="../images/mask.png" alt="" class="mask img-responsive" />
									<h5>Puppy</h5>
									<p>Puppy Description</p>
								</a>
							</div>
						</div>
						<div class="item">
							<div>
								<a href="../images/puppies/full/puppy-3.jpg" class="fancybox" data-fancybox-group="group" title="">
									<img src="../images/puppies/puppy-3.jpg" alt="" class="img-responsive" />
									<img src="../images/mask.png" alt="" class="mask img-responsive" />
									<h5>Puppy</h5>
									<p>Puppy Description</p>
								</a>
							</div>
						</div>
						<div class="item">
							<div>
								<a href="../images/puppies/full/puppy-4.jpg" class="fancybox" data-fancybox-group="group" title="">
									<img src="../images/puppies/puppy-4.jpg" alt="" class="img-responsive" />
									<img src="../images/mask.png" alt="" class="mask img-responsive" />
									<h5>Puppy</h5>
									<p>Puppy Description</p>
								</a>
							</div>
	                    </div>
	                    <div class="item">
							<div>
								<a href="../images/puppies/full/puppy-5.jpg" class="fancybox" data-fancybox-group="group" title="">
									<img src="../images/puppies/puppy-5.jpg" alt="" class="img-responsive" />
									<img src="../images/mask.png" alt="" class="mask img-responsive" />
									<h5>Puppy</h5>
									<p>Puppy Description</p>
								</a>
							</div>
	                    </div>
	                    <div class="item">
							<div>
								<a href="../images/puppies/full/puppy-6.jpg" class="fancybox" data-fancybox-group="group" title="">
									<img src="../images/puppies/puppy-6.jpg" alt="" class="img-responsive" />
									<img src="../images/mask.png" alt="" class="mask img-responsive" />
									<h5>Puppy</h5>
									<p>Puppy Description</p>
								</a>
							</div>
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ========== PUPPIES END ========== -->

	<!-- ========== DOGS START ========== -->

	<section id="models">
		<div class="parallax" data-velocity=".4" data-fit="-400" style="background-image: url('../images/background/background-3.jpg')"></div>
		<div class="tint"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="wow fadeInLeftBig" data-wow-delay="0.3s">
						OUR GREAT DANE FAMILY
					</h2>
					<h4 class="wow fadeInRightBig" data-wow-delay="0.5s">
						MEET THE PEDIGREE
					</h4>
					<div class="divider">
						<i class="fa fa-paw"></i>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia elementum velit, nec viverra nisi. Morbi gravida, massa sed dictum consectetur, turpis mi euismod elit, sit amet feugiat orci dui in felis. Duis purus ligula, consequat sit amet justo et, congue consectetur massa.
					</p>
				</div>
			</div>
			<div class="row wow fadeInUpBig" data-wow-delay="0.5s">
				<div class="col-md-12 text-center">

					<ul class="filter-menu">
						<li class="filter btn btn-default active" data-filter="mix">
							ALL DANES
						</li>
						<li class="filter btn btn-default" data-filter="man">
							OUR BOYS
						</li>
						<li class="filter btn btn-default" data-filter="woman">
							OUR GIRLS
						</li>
					</ul>

					<ul class="models">

						@foreach($dogs as $dog)

							<li class="mix man">
								<a href="/dogs/{{ $dog->id }}">
									<img src="{{ asset('images/dogs/' . $dog->id . '.jpg') }}" alt="" class="img-responsive" />
								</a>
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
					<h2 class="wow fadeInLeftBig" data-wow-delay="0.3s">
						BLOG
					</h2>
					<h4 class="wow fadeInRightBig" data-wow-delay="0.5s">
						LATEST ENTRIES
					</h4>
					<div class="divider">
						<i class="fa fa-book"></i>
					</div>
				</div>
			</div>

			<div class="row-margin owl-carousel">

				<div class="item">
					<div class="post-thumb col-sm-4">
						<img src="../images/blog/blog-1.jpg" alt="Banner" class="img-responsive" />
					</div>
					<div class="post col-sm-8">
						<h3 class="entry-title">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia elementum velit, nec viverra nisi
						</h3>
						<div class="entry-meta">
							<span class="date">December 7, 2013</span>
							<span class="author">by admin</span>
						</div>
						<div class="entry-content">
							<p>
								Morbi gravida, massa sed dictum consectetur, turpis mi euismod elit, sit amet feugiat orci dui in felis. Duis purus ligula, consequat sit amet justo et, congue consectetur massa. Nullam adipiscing felis a sapien hendrerit ultrices. Curabitur fringilla sed odio eget tincidunt. Etiam quis sem ultrices, tincidunt leo sed, facilisis nunc. Proin vitae lectus diam. Nullam ut euismod tellus. Aliquam erat volutpat. Integer non elementum magna, eu tincidunt ante.
							</p>
						</div>
						<div class="post-more">
							<a href="#" class="btn btn-default">
								READ MORE
							</a>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="post-thumb col-sm-4">
						<img src="../images/blog/blog-2.jpg" alt="Banner" class="img-responsive" />
					</div>
					<div class="post col-sm-8">
						<h3 class="entry-title">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia elementum velit, nec viverra nisi
						</h3>
						<div class="entry-meta">
							<span class="date">December 7, 2013</span>
							<span class="author">by admin</span>
						</div>
						<div class="entry-content">
							<p>
								Morbi gravida, massa sed dictum consectetur, turpis mi euismod elit, sit amet feugiat orci dui in felis. Duis purus ligula, consequat sit amet justo et, congue consectetur massa. Nullam adipiscing felis a sapien hendrerit ultrices. Curabitur fringilla sed odio eget tincidunt. Etiam quis sem ultrices, tincidunt leo sed, facilisis nunc. Proin vitae lectus diam. Nullam ut euismod tellus. Aliquam erat volutpat. Integer non elementum magna, eu tincidunt ante.
							</p>
						</div>
						<div class="post-more">
							<a href="#" class="btn btn-default">
								READ MORE
							</a>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="post-thumb col-sm-4">
						<img src="../images/blog/blog-3.jpg" alt="Banner" class="img-responsive" />
					</div>
					<div class="post col-sm-8">
						<h3 class="entry-title">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia elementum velit, nec viverra nisi
						</h3>
						<div class="entry-meta">
							<span class="date">December 7, 2013</span>
							<span class="author">by admin</span>
						</div>
						<div class="entry-content">
							<p>
								Morbi gravida, massa sed dictum consectetur, turpis mi euismod elit, sit amet feugiat orci dui in felis. Duis purus ligula, consequat sit amet justo et, congue consectetur massa. Nullam adipiscing felis a sapien hendrerit ultrices. Curabitur fringilla sed odio eget tincidunt. Etiam quis sem ultrices, tincidunt leo sed, facilisis nunc. Proin vitae lectus diam. Nullam ut euismod tellus. Aliquam erat volutpat. Integer non elementum magna, eu tincidunt ante.
							</p>
						</div>
						<div class="post-more">
							<a href="#" class="btn btn-default">
								READ MORE
							</a>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="post-thumb col-sm-4">
						<img src="../images/blog/blog-4.jpg" alt="Banner" class="img-responsive" />
					</div>
					<div class="post col-sm-8">
						<h3 class="entry-title">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia elementum velit, nec viverra nisi
						</h3>
						<div class="entry-meta">
							<span class="date">December 7, 2013</span>
							<span class="author">by admin</span>
						</div>
						<div class="entry-content">
							<p>
								Morbi gravida, massa sed dictum consectetur, turpis mi euismod elit, sit amet feugiat orci dui in felis. Duis purus ligula, consequat sit amet justo et, congue consectetur massa. Nullam adipiscing felis a sapien hendrerit ultrices. Curabitur fringilla sed odio eget tincidunt. Etiam quis sem ultrices, tincidunt leo sed, facilisis nunc. Proin vitae lectus diam. Nullam ut euismod tellus. Aliquam erat volutpat. Integer non elementum magna, eu tincidunt ante.
							</p>
						</div>
						<div class="post-more">
							<a href="#" class="btn btn-default">
								READ MORE
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ========== BLOG END ========== -->

	@include('victory.layouts.partials.contact')

@stop