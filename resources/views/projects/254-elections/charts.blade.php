@extends('layouts.main')
@section('importcss')
@endsection

@section('navigation')
@endsection

@section('content')
<div class="container topSpace">   
	<div class="row">
		<div class="col-md-12 col-md-offset-0">          
			<div class="panel panel-success">                 
				<div class="panel-heading">Candidate Analysis</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-0 ">
							<center><h3></h3></center>
							<div class="well well-sm">
								Sentiment analysis graph


								Nullam tempor malesuada purus, ut lobortis nisi hendrerit quis. Pellentesque nisi massa, tristique a lorem at, venenatis interdum nulla. Proin condimentum interdum lorem nec elementum. Morbi sem lectus, tempor vel orci vel, laoreet aliquam metus. Integer maximus pellentesque elit, et molestie orci consequat non. Duis lorem justo, convallis vitae tellus non, pellentesque ullamcorper tellus. Vestibulum eu euismod dui, a porttitor ligula. In accumsan justo eu tellus aliquam, in fermentum sem consectetur. Pellentesque sollicitudin, risus vel sollicitudin euismod, sem mauris venenatis mauris, et euismod mi augue quis elit. Cras vulputate turpis a aliquam rhoncus. Integer sed elit in quam pulvinar suscipit. Maecenas dolor ipsum, sollicitudin in metus sed, faucibus ullamcorper enim. Integer interdum iaculis purus vitae fermentum.
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-md-offset-0 "">
							<div class="well well-sm">
								word cloud 

								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

							</div>
						</div>
						<div class="row ">
							<div class="col-md-12 col-sm-12">
								<a href="{{ url('/projects/Kenyan-elections-2017') }}" class="btn btn-primary ">View Candidates <i class="fa fa-angle-right"></i></a>
								<form class="form-inline pull-right" action="/compare-candidates">
									<div class="form-group">
										<label for="email"></label>
										<select class="form-control" id="candidate_1" name="candidaie_1">
											<option value="9">Uhuru Kenyatta</option>
											<option value="10">Raila Odinga</option>
										</select>
									</div>
									<div class="form-group">
										<label for="pwd"></label>
										<select class="form-control success" id="candidaie_2" name="candidate_2">
											<option value="9">Uhuru Kenyatta</option>
											<option value="10">Raila Odinga</option>
										</select>
									</div>

									<button type="submit" class="btn btn-success">Compare candidates</button>
								</form>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-0 ">
							<center><h3></h3></center>
							<div class="well well-sm">
								Sentiment analysis graph


								Nullam tempor malesuada purus, ut lobortis nisi hendrerit quis. Pellentesque nisi massa, tristique a lorem at, venenatis interdum nulla. Proin condimentum interdum lorem nec elementum. Morbi sem lectus, tempor vel orci vel, laoreet aliquam metus. Integer maximus pellentesque elit, et molestie orci consequat non. Duis lorem justo, convallis vitae tellus non, pellentesque ullamcorper tellus. Vestibulum eu euismod dui, a porttitor ligula. In accumsan justo eu tellus aliquam, in fermentum sem consectetur. Pellentesque sollicitudin, risus vel sollicitudin euismod, sem mauris venenatis mauris, et euismod mi augue quis elit. Cras vulputate turpis a aliquam rhoncus. Integer sed elit in quam pulvinar suscipit. Maecenas dolor ipsum, sollicitudin in metus sed, faucibus ullamcorper enim. Integer interdum iaculis purus vitae fermentum.
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-md-offset-0 "">
							<div class="well well-sm">
								word cloud 

								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

							</div>
						</div>
						<div class="row ">
							<div class="col-md-12 col-sm-12">
								<a href="{{ url('/projects/Kenyan-elections-2017') }}" class="btn btn-primary ">View Candidates <i class="fa fa-angle-right"></i></a>
								<form class="form-inline pull-right" action="/compare-candidates">
									<div class="form-group">
										<label for="email"></label>
										<select class="form-control" id="candidate_1" name="candidate_1">
											<option value="1">Evans Kidero</option>
											<option value="2">Esther Passaris</option>
											<option value="3">Miguna Miguna</option>
											<option value="4">Mike Sonko</option>
											<option value="5">Margaret Wanjiru</option>
											<option value="6">Dennis Waweru</option>
										</select>
									</div>
									<div class="form-group">
										<label for="pwd"></label>
										<select class="form-control success" id="candidate_2" name="candidate_2">
											<option value="1">Evans Kidero</option>
											<option value="2">Esther Passaris</option>
											<option value="3">Miguna Miguna</option>
											<option value="4">Mike Sonko</option>
											<option value="5">Margaret Wanjiru</option>
											<option value="6">Dennis Waweru</option>
										</select>
									</div>
									<button type="submit" class="btn btn-success">Compare candidates</button>
								</form>

							</div>
						</div>
					</div>


				</div>                  

			</div>    
		</div>
	</div>   
</div>

@endsection
@section('footer')
@endsection
@section('extrajs')