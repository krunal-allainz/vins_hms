@if(isset($data['ReportPageData']['historyData']) )
	@if($data['ReportPageData']['historyData']['type'] == 'text' )	
		<div  style="padding-left: 35px;">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Hisotory :-</b></span>
			</div>
			<div class='row'>
				@if ($data['ReportPageData']['historyData']['type'] == 'text')
					<div class='col-md-12 text-left'>
						<span class='text-left' style="padding-left:30px;">{{$data['ReportPageData']['historyData']['value']}}</span>
					</div>
				@endif
				
			</div>
		</div>
		<br/>
		@endif
		@if($data['ReportPageData']['historyData']['type'] != 'text' && $data['ReportPageData']['historyData']['value'] != '')
		<div  style="padding-left: 35px;">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>History :-</b></span>
			</div>
			<div class='row'>
					<div class='col-md-12 text-left'>
					    <img src="{{$data['ReportPageData']['historyData']['value']}}" title="History">
					</div> 
			</div>
		</div>
		@endif 
@endif