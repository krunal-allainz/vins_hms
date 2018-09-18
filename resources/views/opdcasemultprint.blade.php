	<div class='row'>
		<div class='col-md-12 text-center'>
			<h5>OPD CASE </h5> 
		</div>
  	</div>
  		@include('patientDetailReport')
 		@include('patientCheckupReport')
	  	@if(in_array( 'Advice + follow ups',$data['checkedreportList']))

			@include('adviceReportData')
			@include('followupReportData')

		@endif
	  	@if(in_array( 'Radiology',$data['checkedreportList']))
	  		@include('radiologyReportData')
	  	@endif	

	  	@if(in_array( 'Laboratory',$data['checkedreportList']))
	  		@include('labReportData')
	  	@endif
		
		@if(in_array('Prescription',$data['checkedreportList']))
			@if(isset($data['priscriptionData']))
		  		@if(!empty($data['priscriptionData']))
					@include('prescriptionReportData')
				@endif
			@endif
		@endif

		@if(in_array( 'History',$data['checkedreportList']))
			@include('historyReportData')
		@endif

		@if(in_array( 'Past History',$data['checkedreportList']))
			@include('pastHistoryReportdata')
		@endif
		
		@if(in_array('Investigation Lab',$data['checkedreportList'] ))
			@include('labPatientReportData')
		@endif

		@if(in_array('Investigation Radiology',$data['checkedreportList']))
			@include('radiologyPatientReportData')
		@endif
		
		@if(in_array( 'Examination',$data['checkedreportList']))
			@include('examinationReportData')
		@endif
		
		@if(in_array('Referrals',$data['checkedreportList'] ))
			@include('crossReportData')
		@endif