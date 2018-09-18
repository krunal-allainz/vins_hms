@if(isset($data['ReportPageData']['examinationData']) && $data['ReportPageData']['examinationData'] != '')
	<div  style="padding-left: 35px;">
		<div class='col-md-6 text-left'>
		<span class='text-left'><b>Examination :-</b></span>
		</div>
		<div class='row'>
				<div class='col-md-12 text-left'>
				<span class='text-left' style="padding-left:30px;">{{$data['ReportPageData']['examinationData']}}</span>
				</div>
		</div>
	</div>
@endif