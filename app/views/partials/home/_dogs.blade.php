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
								<img src="../images/danes/ashur-1.jpg" alt="" class="img-responsive" />
							</a>
						</li>

					@endforeach

					<!-- Portfolio Item 1 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/ashur-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 2 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/breeze-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 3 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/caruso-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 4 -->
					<li class="mix woman">
						<a href="#">
							<img src="../images/danes/ebonee-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 5 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/effendi-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 6 -->
					<li class="mix woman">
						<a href="#">
							<img src="../images/danes/gracie-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 7 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/legend-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 8 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/mica-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 9 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/neo-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 10 -->
					<li class="mix man">
						<a href="#">
							<img src="../images/danes/riddick-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 11 -->
					<li class="mix woman">
						<a href="#">
							<img src="../images/danes/sailor-moon-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

					<!-- Portfolio Item 12 -->
					<li class="mix woman">
						<a href="#">
							<img src="../images/danes/val-1.jpg" alt="" class="img-responsive" />
						</a>
					</li>

				</ul>

			</div>
		</div>
	</div>
</section>

<!-- ========== MODELS END ========== -->