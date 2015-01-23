<!-- ========== MODELS START ========== -->

<section id="models">
	<div class="parallax" data-velocity=".4" data-fit="-400" style="background-image: url('../images/background/background-3.jpg')"></div>
	<div class="tint"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="wow fadeInLeftBig" data-wow-delay="0.3s">OUR GREAT DANE FAMILY</h2>
				<h4 class="wow fadeInRightBig" data-wow-delay="0.5s">MEET THE PEDIGREE</h4>
				<div class="divider"><i class="fa fa-paw"></i></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia elementum velit, nec viverra nisi. Morbi
				gravida, massa sed dictum consectetur, turpis mi euismod elit, sit amet feugiat orci dui in felis. Duis purus ligula,
				consequat sit amet justo et, congue consectetur massa.</p>
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

						<!-- Portfolio Item 1 -->
						<li class="mix man">
							<a href="dogs/{{ $dog->id }}">
								<img src="../images/dogs/{{ $dog->id }}.jpg" alt="" class="img-responsive" />
							</a>
						</li>

					@endforeach

				</ul>

			</div>
		</div>
	</div>
</section>

<!-- ========== MODELS END ========== -->