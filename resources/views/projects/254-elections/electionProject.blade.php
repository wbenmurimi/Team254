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
				<div class="panel-heading">Candidates</div>

				<div class="panel-body">
					<ul class="nav nav-tabs  nav-justified">
						<li class="active"><a data-toggle="tab" href="#home">Presidential Elections</a></li>
						<li><a data-toggle="tab" href="#menu1">Govenor Elections</a></li>
					</ul>

					<div class="tab-content">

						<!-- Modal -->
						<div class="modal " id="myModal" role="dialog">
							<div class="modal-dialog modal-sm">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Rate Candidate</h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal" role="form" method="POST" action="{{ url('/rate-candidate') }}">
											{{ csrf_field() }}                     
											<div class="form-group">
												<label class="col-md-4 control-label"> Corruption</label>

												<div class="col-md-8">
													<input type="text" class="form-control" name="corruption" value="">


												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6 col-md-offset-4 ">
													<button type="submit" class="btn btn-success pull-right">Submit   <i class="fa fa-btn fa-send"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<div id="home" class="tab-pane fade in active">

							<div class="row" style="margin-top:5px;">
								<div class="col-sm-12 col-md-12">
									<div class="col-lg-6 col-md-6 col-sm-12 candidateCard">
										<div class="single-event">
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h4 class="panel-title">Uhuru Muigai Kenyatta</h4>
												</div>
												<div class="panel-body" style="color: black;">
													<div class="row" style="margin-left:5px;">
														<span><b>Age   </b></span><span>51</span><br>
														<span><b>Political Party   </b></span><span>Jubelee</span><br>
														<span><b></b></span><span>Kenayan president 2012-2017</span><br>
														<span><b>Corruption  </b></span><span>2</span><br>
														<span><b>Development  </b></span><span>3</span><br>
														<span><b>Transparency  </b></span><span>4.5</span><br>
														<p></p>
													</div>
													<span> <a href="{{ url('/projects/candidate-details/9') }}" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a> <a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate Candidate</a></span>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12 candidateCard">
										<div class="single-event">
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h4 class="panel-title">Raila Omolo Odinga</h4>
												</div>
												<div class="panel-body" style="color: black;">
													<div class="row" style="margin-left:5px;">
														<span><b>Age   </b></span><span>51</span><br>
														<span><b>Political Party   </b></span><span>ODM</span><br>
														<span><b></b></span><span>Former Prime Minister 2007-2012</span><br>
														<span><b>Corruption  </b></span><span>2</span><br>
														<span><b>Development  </b></span><span>3</span><br>
														<span><b>Transparency  </b></span><span>4.5</span><br>
														<p></p>
													</div>
													<span><a href="{{ url('/projects/candidate-details/10') }}" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate Candidate</a></span>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
						<div id="menu1" class="tab-pane fade">
							
							<div class="row" style="margin-top:5px;">
								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">Evans Kidero</h4>
											</div>
											<div class="panel-body" style="color: black;">

												<div class="row" style="margin-left:5px;">
													<span><b>Age  </b></span><span>59</span><br>
													<span><b>Political Party</b></span><span>ODM</span><br>
													<span><b></b></span><span>Current Nairobi Governor</span><br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/1') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">Esther Passaris</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													<span><b>Age   </b></span><span>52</span><br>
													<span><b>Political Party   </b></span><span>Kenya National Congress</span><br>
													<span><b></b></span><span>Current Business Woman</span><br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/2') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">Miguna Miguna</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													<span><b>Age   </b></span><span>53</span><br>
													<span><b>Political Party   </b></span><span>ODM</span><br>
													<span><b></b></span><span>Former Raila Odinga adviser</span><br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>

													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/3') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row" style="margin-top:-100px !important;">
								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">John Harun Mwau</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													<span><b>Age   </b></span><span>53</span><br>
													<span><b>Political Party   </b></span><span>ODM</span><br>
													<span><b></b></span><span>Former kenya Anti-Corruption Commisson (KACC) chairman</span><br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/4') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">kenneth Marende</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													<span><b>Age   </b></span><span>51</span><br>
													<span><b>Political Party   </b></span><span>ODM</span><br>
													<span><b></b></span><span>Speaker of the National Assembly of Kenya's 10th Parliament.</span><br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/5') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">Mike Sonko</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													
													<span><b>Age   </b></span><span>51</span><br>
													<span><b>Political Party   </b></span><span>ODM</span><br>
													<span><b></b></span><span>Current Nairobi Senator</span><br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/6') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">Dennis Waweru</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													<span><b>Age   </b></span><span>51</span><br>
													<span><b>Political Party   </b></span><span>ODM</span><br>
													<span><b></b></span><span>Dagoretti South MP</span>
													<br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/7') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">Margaret Wanjiru</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													<span><b>Age   </b></span><span>51</span><br>
													<span><b>Political Party   </b></span><span>ODM</span><br>
													<span><b></b></span><span>Former Starehe MP</span><br>										<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>		  
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/8') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 candidateCard">
									<div class="single-event">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">Johnson Sakaja</h4>
											</div>
											<div class="panel-body" style="color: black;">
												<div class="row" style="margin-left:5px;">
													<span><b>Age   </b></span><span>51</span><br>
													<span><b>Political Party   </b></span><span>TNA</span><br>
													<span><b></b></span><span>TNA nominated MP</span><br>
													<span><b>Corruption  </b></span><span>2</span><br>
													<span><b>Development  </b></span><span>3</span><br>
													<span><b>Transparency  </b></span><span>4.5</span><br>
													<p></p>
												</div>
												<span><a href="{{ url('/projects/candidate-details/9') }}" class="btn btn-primary">More Details <i class="fa fa-angle-right"></i></a><a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" >Rate </a></span>
											</div>
										</div>
									</div>
								</div>
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