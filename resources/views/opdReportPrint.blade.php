<div>
  <div id="header">
    <div class="" style="width:100%;height:150px;top:0px;left:0;position:fixed;"> 
       <div class="row">
        <div class="col-md-12" style="padding:25px;">
            <img src="{{$url.'/assets/img/nabh_vins_logo.png'}}" id="logo-desk" alt="NABH Logo" class="hidden-sm-down" height="auto" width="30%">
        </div>
      </div>
    </div>
  </div>
    <!-- <hr style="border-top: dashed  1px;" /> -->
   
    <div class="middlePart" style="margin-top: 150px;">
      @include('patientDetailReport')
      @include('patientCheckupReport')
        @if(in_array('Advice + follow ups',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
              @include('adviceReportData')
              @include('followupReportData')
          </div>
        @endif
        @if(in_array('Radiology',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('radiologyReportData')
          </div>
        @endif  

        @if(in_array('Laboratory',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('labReportData')
          </div>
        @endif

        @if(in_array('Prescription',$data['checkedreportList'] ))
          @if(isset($data['priscriptionData']))
              <div class="report_space report_left_pad">
                @include('prescriptionReportData')
              </div>
          @endif
        @endif

        @if(in_array('History',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('historyReportData')
          </div>
        @endif

        @if(in_array('Past History',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('pastHistoryReportdata')
          </div>
        @endif
        
        @if(in_array('Investigation Lab',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('labPatientReportData')
          </div>
        @endif

        @if(in_array('Investigation Radiology',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('radiologyPatientReportData')
          </div>
        @endif
        
        @if(in_array('Examination',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('examinationReportData')
          </div>
        @endif
        
        @if(in_array('Referrals',$data['checkedreportList'] ))
          <div class="report_space report_left_pad">
            @include('crossReportData')
          </div>
        @endif
    </div>
    <div id="footer" class="footer" style="background-color: dodgerblue;color: white;bottom:0;width:100%;height:130px;left:0;position:fixed;">
      <div class="row text-center">
        <div class="col-md-12">
            <div class="text-center text-capitalize"  style="text-align: center;">  
                <h2  class="text-center text-capitalize" style="text-align: center;color:white;font-size:22px;"><u><b>Vadodara Institute Of Neurological Sciences</b></u></h2>  
            </div>  
          </div>
        </div>
      <div class="row text-center"> 
        <div class="col-md-12 text-center"> 
          <div class="text-center"><span>99,Urmi Society, Opp Haveli Productivity Road, Akota Vadodara - 7 (Guj.), INDIA </span></div>  
        </div>  
      </div>
      <div class="row text-center" >
        <div class="col-md-12 text-center"> 
          <div class="text-center">
            <span style="padding-right: 5px;"><i class="fa fa-phone-square" aria-hidden="true" style="padding-right: 2px;"></i>+91-265-232 37 78,233 13 43,234 17 87 </span>
            <span style="padding-right: 5px;"><i class="fa fa-mobile" aria-hidden="true"  style="padding-right: 2px;"></i>+91 99 78 99 99 40</span>
            <span style="padding-right: 5px;"><i class="fa fa-envelope" aria-hidden="true"  style="padding-right: 2px;"></i>mail@vinshospital.com</span>
            <span style="padding-right: 5px;"> <i class="fa fa-globe" aria-hidden="true"  style="padding-right: 2px;"></i>www.vinshospital.com</span>
          </div>  
        </div>  
      </div>
    </div> 
  </div>
  <style>
  @media print {
    .page-break { margin-top:150px; }
  }
</style>