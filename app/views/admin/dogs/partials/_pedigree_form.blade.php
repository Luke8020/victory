<div class="widget-box">
	<div class="widget-header">
		<h4 class="widget-title">Pedigree</h4>
	</div>
	<div class="widget-body">

		<div class="row">
			<table class="col-sm-12">
				<tbody>
					<?php
						$countFirst = 0;
						$countSecond = 0;
						$countThird = 0;
						$countFourth = 0;
					?>
					@foreach(range(0,15) as $index)

						@if ($index == 0 || $index == 8)

							<tr>
								<td rowspan='8'>
									{{ Form::text( $pedigree[0][$countFirst], null, ['class' => 'col-sm-12']) }}
								</td>

								<td rowspan='4'>
									{{ Form::text( $pedigree[1][$countSecond], null, ['class' => 'col-sm-12']) }}
								</td>

								<td rowspan='2'>
									{{ Form::text( $pedigree[2][$countThird], null, ['class' => 'col-sm-12']) }}
								</td>

								<td>
									{{ Form::text( $pedigree[3][$countFourth], null, ['class' => 'col-sm-12']) }}
								</td>
							</tr>

							<?php
								$countFirst++;
								$countSecond++;
								$countThird++;
								$countFourth++;
							?>

						@elseif ($index%4 == 0)

							<tr>

								<td rowspan='4'>
									{{ Form::text( $pedigree[1][$countSecond], null, ['class' => 'col-sm-12']) }}
								</td>

								<td rowspan='2'>
									{{ Form::text( $pedigree[2][$countThird], null, ['class' => 'col-sm-12']) }}
								</td>

								<td>
									{{ Form::text( $pedigree[3][$countFourth], null, ['class' => 'col-sm-12']) }}
								</td>
							</tr>

							<?php
								$countSecond++;
								$countThird++;
								$countFourth++;
							?>

						@elseif ($index%2 == 0)

							<tr>
								<td rowspan='2'>
									{{ Form::text( $pedigree[2][$countThird], null, ['class' => 'col-sm-12']) }}
								</td>

								<td>
									{{ Form::text( $pedigree[3][$countFourth], null, ['class' => 'col-sm-12']) }}
								</td>
							</tr>

							<?php
								$countThird++;
								$countFourth++;
							?>

						@elseif ($index%2 != 0)

							<tr>
								<td>
									{{ Form::text( $pedigree[3][$countFourth], null, ['class' => 'col-sm-12']) }}
								</td>
							</tr>

							<?php
								$countFourth++;
							?>

						@endif

					@endforeach

					
				</tbody>
			</table>
		</div>
	</div>
</div>