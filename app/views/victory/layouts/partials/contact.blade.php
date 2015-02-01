<!-- ========== CONTACT START ========== -->

<section id="contact">
	<div class="parallax" data-velocity=".4" data-fit="-800" style="background-image: url('../images/background/background-2.jpg')"></div>
	<div class="tint"></div>

	<div class="container">
		<div class="row wow slideInLeft" data-wow-delay="0.5s">
			<div class="col-md-12 text-center">
				<h2>STAY IN TOUCH</h2>
				<h4>DON'T HESITATE TO CONTACT US</h4>
				<div class="divider"><i class="fa fa-envelope"></i></div>
			</div>
		</div>

		{{ Form::open() }}

			<div class="row wow slideInLeft" data-wow-delay="0.5s">

				<div class="col-md-4 text-center">
					{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
				</div>

				<div class="col-md-4 text-center">
					{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
				</div>
				<div class="col-md-4 text-center">
					{{ Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Subject']) }}
				</div>
			</div>

			<div class="row wow slideInRight" data-wow-delay="0.5s">

				<div class="col-md-12 text-center">
					{{ Form::textarea('contactMessage', null, ['class' => 'form-control', 'rows' => '6', 'placeholder' => 'Message']) }}
				</div>
			</div>

			<div class="row wow slideInRight" data-wow-delay="0.5s">
				<div class="col-md-12 text-center">
					<button type="submit" class="btn btn-primary btn-lg">SUBMIT</button>
				</div>
			</div>

		{{ Form::close() }}
	</div>
</section>

<!-- ========== CONTACT END ========== -->

<!-- ========== CONTACT MODAL START ========== -->

<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Thank you for contacting us!</h4>
      </div>
      <div class="modal-body">

        @if (Session::has('message'))
        	{{{ Session::get('message')}}}
        @endif

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ========== CONTACT MODAL END ========== -->