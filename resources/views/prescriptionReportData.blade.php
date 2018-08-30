	<div style="min-height: 350px;height: 350px;">
		
  	@if(isset($data['priscriptionData']))
	  	@if(!empty($data['priscriptionData']))

			<div class='col-md-12 text-center'>
				<span class='text-center'><b>Prescription</b></span>
			</div>
			<div class="table-responsive">
				<table class="table" id="prescription_list">
				    	<thead>
						</thead>
					    <tbody>
					    	<?php //print_r($data['priscriptionData']);exit;?>
					   		 @foreach($data['priscriptionData'] as $key=>$res)
					   		 	
					   		 	@if($res['remove']==='false')
								   	<tr>
		                             	<td>{{++$key}} ] {{$res['name']}} :ORAL
										@if($res['clock_quantity_1']!='0')
											{{$res['clock_quantity_1']}}
										@endif
		                                @if($res['clock_quantity_2']!='0') 
		                                    @if($res['clock_quantity_1']!='0') ______ @endif
		                                    {{$res['clock_quantity_2']}}
		                                @endif
		                                @if($res['clock_quantity_3']!='0') 
		                                	@if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0') ______ @endif
		                                	{{$res['clock_quantity_3']}} 
		                                @endif
		                                @if($res['clock_quantity_4']!='0')
		                                	@if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0' || $res['clock_quantity_3']!='0')  ______ @endif
		                                	{{$res['clock_quantity_4']}}
		                                @endif
		                                [ 
		                                @if($res['clock_quantity_1']!='0') 
		                                	{{$res['clock_time_1']}}
		                                @endif
		                                @if($res['clock_quantity_2']!='0')
		                                	@if($res['clock_quantity_1']!='0') ______ @endif
		                                	{{$res['clock_time_2']}}
		                                @endif
		                                @if($res['clock_quantity_3']!='0')
		                                    @if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0') ______ @endif {{$res['clock_time_3']}}
		                                @endif
		                                @if($res['clock_quantity_4']!='0')
		                                    @if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0' || $res['clock_quantity_3']!='0') ______ @endif
		                                    {{$res['clock_time_4']}}
		                                @endif ]
										
										@if(($res['clock_suggest']!='--' && $res['clock_suggest']!='') || ($res['clock_suggest_2']!='--' && $res['clock_suggest_2']!='')  || ($res['clock_suggest_3']!='--' && $res['clock_suggest_3']!='')  || ($res['clock_suggest_4']!='--' && $res['clock_suggest_4']!='') )

		                                	[ 
				                                @if($res['clock_suggest']!='' && $res['clock_suggest']!='--') 
				                                	{{$res['clock_suggest']}}
				                                @endif
					                        	@if($res['clock_suggest_2']!=''  && $res['clock_suggest_2']!='--') 
					                        		@if($res['clock_suggest']!='' && $res['clock_suggest']!='--') ______ @endif
					                        		{{$res['clock_suggest_2']}}
					                        	@endif
				                                @if($res['clock_suggest_3']!=''  && $res['clock_suggest_3']!='--')
				                                	@if(($res['clock_suggest']!='' && $res['clock_suggest']!='--') || ($res['clock_suggest_2']!='' && $res['clock_suggest_2']!='--')) ______ @endif
				                                	{{$res['clock_suggest_3']}}
				                                @endif
				                                @if($res['clock_suggest_4']!=''  && $res['clock_suggest_4']!='--')
				                                	@if(($res['clock_suggest']!='' && $res['clock_suggest']!='--') || ($res['clock_suggest_2']!='' && $res['clock_suggest_2']!='--') || ($res['clock_suggest_3']!='' && $res['clock_suggest_3']!='--')) ______ @endif
				                                	{{$res['clock_suggest_4']}}
				                                @endif 
		                                	]
										@endif
										@if($res['qhrs']!='') <span>[{{$res['qhrs']}}]</span> @endif
		                                &#9747;
		                                @if($res['total_prescription_days']!='')
		                                	{{$res['total_prescription_days']}} <span> DAYS </span>
		                                @else
		                                 	<span> TO BE CONTINUE </span>
		                                @endif
						            	</td>
		                        	</tr>
		                        @endif
							@endforeach
		                </tbody>
			       </table>
			</div>
			<div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <thead>
	                    <tr>
	                        <th>Index</th>
	                        <th>Prescription Name</th>
	                        <th>How Many Days</th>
	                        <th>Total Quantity</th>
	                        <th>Q-Hrs</th>
	                        <th>Total Days</th>
	                    </tr>
	                </thead>
	                <tbody>
						@foreach($data['priscriptionData'] as $key2=>$res2)
		                	@if($res2['remove']==='false')
			                 <tr class="text-center">
			                        <td>{{++$key2}} </td>
			                        <td>{{$res2['name']}}</td>
			                        <td>{{$res2['type']}}</td>
			                        <td>{{$res2['total_quantity']*$res2['total_prescription_days']}}</td>
			                        <td>{{$res2['qhrs']}}</td>
			                        <td>{{$res2['total_prescription_days']}}</td>
			                  </tr>
			                @endif
		            	@endforeach
	                </tbody>
	            </table>
		</div>
		@endif
	@endif