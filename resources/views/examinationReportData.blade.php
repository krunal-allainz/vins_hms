@if(isset($data['ReportPageData']['ExaminationData']) && $data['ReportPageData']['ExaminationData'] != '')
	<div  style="padding-left: 35px;">
		<div class='col-md-6 text-left'>
		<span class='text-left'><b>Examination :-</b></span>
		</div>
		<div class='row'>
				<div class='col-md-12 text-left'>
				<span class='text-left' style="padding-left:30px;">{{$data['ReportPageData']['ExaminationData']}}</span>
				</div>
		</div>
	</div>
@endif