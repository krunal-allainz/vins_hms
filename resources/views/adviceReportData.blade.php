@if(isset($data['ReportPageData']['adviceData']) )
	@if($data['ReportPageData']['adviceData']['type'] == 'text') 
		<div  style="padding-left: 35px;">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Advice :-</b></span>
			</div>
			<div class='row'>
				@if ($data['ReportPageData']['adviceData']['type'] == 'text')
					<div class='col-md-12 text-left'>
						<span class='text-left' style="padding-left:30px;">{{$data['ReportPageData']['adviceData']['value']}}</span>
					</div>
				@endif
				
			</div>
		</div>
		@endif
		@if($data['ReportPageData']['adviceData']['type'] != 'text' && $data['ReportPageData']['adviceData']['value'] != '')
		<div  style="padding-left: 35px;">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Advice :-</b></span>
			</div>
			<div class='row'>
					<div class='col-md-12 text-left'>
					    <img src="{{$data['ReportPageData']['adviceData']['value']}}" title="Advice">
					</div> 
			</div>
		</div>
		@endif
@endif