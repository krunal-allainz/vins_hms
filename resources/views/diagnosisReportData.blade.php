@if(isset($data['ReportPageData']['opdData']['diagnosis']) && $data['ReportPageData']['opdData']['diagnosis'] != '')
<div>
	<div class='col-md-6 '>
		<span class='report_title'>Diagnosis:-</span>
	</div>
	<div >
		<div class='col-md-12'>
		   <span class="report_details">{{$data['ReportPageData']['opdData']['diagnosis']}}</span>
		</div> 
	</div>
</div>
@endif 