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
				<div class="panel-heading"><a href="{{ url('/projects/Kenyan-elections-2017') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>  Back </a>  /   <a class="btn btn-primary">Candidate Details</a></div>

				<div class="panel-body">
					
				@foreach($candidates as $candidate)
							<div class="row">
								<div class="col-sm-12 col-md-12" style="margin-top:10px;">
								<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="single-event">
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h4 class="panel-title">{{ $candidate->name }}</h4>
												</div>
												<div class="panel-body" style="color: black;">
													<h5> {{ $candidate->category }} elections</h5>
													<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12">
													<p  style="margin-left:15px;" >Age   {{$candidate->age }}</p>
													<p  style="margin-left:15px;" >Party   {{$candidate->party }}</p>
														<p  style="margin-left:15px;" ><span><b> Bio</b>   </span>{{$candidate->description }}</p>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12">
														<div class="well well-sm">
														All graphs go on this column.
														</div>
														</div>
													</div>
													<a href="{{ url('/projects/compare-candidates') }}" class="btn btn-primary">Compare Candidates  <i class="fa fa-angle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach                
				</div>    
			</div>
		</div>   
	</div>
</div> 


@endsection
@section('footer')
@endsection
@section('extrajs')