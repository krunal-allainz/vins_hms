@if(isset($data['ReportPageData']['opdData']['follow_up']) && $data['ReportPageData']['opdData']['follow_up'] != '')
		<div  style="padding-left: 35px;">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Followup :-</b></span>
			</div>
			<div >
					<div class='col-md-12 text-left'>
					   {{$data['ReportPageData']['opdData']['follow_up']}}
					</div> 
			</div>
		</div>
		@endif 