@if(isset($data['ReportPageData']['past_history']) )
	@if($data['ReportPageData']['past_history']['type'] == 'text' )	
		<div  style="padding-left: 35px;">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Past Hisotory :-</b></span>
			</div>
			<div class='row'>
				@if ($data['ReportPageData']['past_history']['type'] == 'text')
					<div class='col-md-12 text-left'>
						<span class='text-left' style="padding-left:30px;">{{$data['ReportPageData']['past_history']['value']}}</span>
					</div>
				@endif
				
			</div>
		</div>
		<br/>
		@endif
		@if($data['ReportPageData']['past_history']['type'] != 'text' && $data['ReportPageData']['past_history']['value'] != '')
		<div  style="padding-left: 35px;">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Past Hisotory :-</b></span>
			</div>
			<div class='row'>
					<div class='col-md-12 text-left'>
					    <img src="{{$data['ReportPageData']['past_history']['value']}}" title="Past Hisotory">
					</div> 
			</div>
		</div>
		@endif 
@endif