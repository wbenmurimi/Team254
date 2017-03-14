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
				<div class="panel-heading"><a href="{{ url('/projects/Kenyan-elections-2017') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>  Back </a>  /   <a class="btn btn-primary"> Compare Candidates</a></div>

				<div class="panel-body">
					
					@foreach($candidates as $candidate)
					<div class="row">
						<div class="col-sm-12 col-md-12" style="margin-top:10px;">
							<div class="table-responsive">  
								<table style="width:100%" class="table table-striped">
									<tr><th>Candidate</th><th>Score</th><th>Average Score</th><th>Agreee</th></tr>
									<tr><td>Evans Kidero</td><td><ul>
										<li>Corruption: 20%</li>
										<li>Developent: 60% </li>
										<li>Motions: 90% </li>
									</ul></td><td>90%</td>
									<td><label class="c-input c-radio">
										<input id="radio1" name="radio" type="radio">
										<span class="c-indicator"></span>
										Yes
									</label>
									<label class="c-input c-radio">
										<input id="radio2" name="radio" type="radio">
										<span class="c-indicator"></span>
										No
									</label></td></tr>
									<tr><td>Esther Passaris</td><td><ul>
										<li>Corruption: 60%</li>
										<li>Developent: 20% </li>
										<li>Motions: 20% </li>
									</ul></td><td>70%</td>
										<td><label class="c-input c-radio">
										<input id="radio1" name="radio" type="radio">
										<span class="c-indicator"></span>
										Yes
									</label>
									<label class="c-input c-radio">
										<input id="radio2" name="radio" type="radio">
										<span class="c-indicator"></span>
										No
									</label></td>
									</tr>
									<tr><td>Miguna Miguna</td><td><ul>
										<li>Corruption: 70%</li>
										<li>Developent: 55% </li>
										<li>Motions: 70% </li>
									</ul></td><td>60%</td>
									<td><label class="c-input c-radio">
										<input id="radio1" name="radio" type="radio">
										<span class="c-indicator"></span>
										Yes
									</label>
									<label class="c-input c-radio">
										<input id="radio2" name="radio" type="radio">
										<span class="c-indicator"></span>
										No
									</label></td>
									</tr>
									<tr><th>Candidate</th><th>Score</th><th>Average Score</th><th>Agreee</th></tr>
								</table>
								
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