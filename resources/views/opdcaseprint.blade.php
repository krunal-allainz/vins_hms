<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <title>Vins Administration</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="print">
<style type="text/css">
	#header {visibility: hidden;}
	#footer{visibility: hidden;}
	@media all {
		.page-break	{ display: none; }
	}
	@media print {
		
		#header, #footer {visibility: visible;}
		html {
		    -ms-overflow-style: scrollbar;
		    -webkit-tap-highlight-color: transparent;
		}
		body {
			-webkit-print-color-adjust: exact; 
	   /* background-color: #eeeeee;*/
	    font-family: "Lato", sans-serif;
	    color: #595959;
	    font-size: 15px;
	     background-color: #fff;
	    background-clip: padding-box;
	   /* position: relative;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    background-color: #fff;
	    background-clip: padding-box;
	   /* border: 1px solid rgba(0, 0, 0, 0.2);
	    border-radius: 0.3rem;
	    outline: 0;*/
	}
	.page-break { display: block; page-break-after: always; }
	.report_space
	{
	    margin-bottom:20px;

	}
	.report_title
	{
	    font-family: "Times New Roman", Times, serif;
	    font-style: bold;
	    font-size : 20px;
	    text-align:left;
	}
	.report_left_pad
	{
		padding-left: 35px;
	}
	.report_details
	{
	    font-family: "Times New Roman", Times, serif;
	    font-size : 14px;
	    text-align:left;
	    
	}

	.report_table th
	{
	    font-family: "Times New Roman", Times, serif;
	    font-size : 16px;
	    font-style: bold;
	    text-align: left;
	}
	.report_table td
	{
	    font-family: "Times New Roman", Times, serif;
	    font-size : 14px;
	    text-align: left;
	}
	.report_style
	{
	    font-family: "Times New Roman", Times, serif;
	}
	table.table-bordered, th, td, tbody, thead, tr {
    	border: 1px solid #ddd !important;
	}
	.row {
	    margin-right: -15px;
	    margin-left: -15px;
	}
	.text-center {
    	text-align: center !important;
	}
	.text-left {
	    text-align: left !important;
	}
	.text-right {
	    text-align: right !important;
	}
	.col-md-12 {
	    -ms-flex: 0 0 100%;
	    flex: 0 0 100%;
	    max-width: 100%;
	}
	.text-capitalize {
	    text-transform: capitalize !important;
	}
	.col-md-6 {
	    -ms-flex: 0 0 50%;
	    flex: 0 0 50%;
	    max-width: 50%;
	}
	.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
	h4, .h4 {
	    font-size: 1.5rem;
	}
	.site-header .container {
   		 width: 95%;
    	max-width: 100%;
	}
	.btn {
		    white-space: normal;
	}
	table.table-bordered ,th , td, tbody, thead, tr{
		  border: 1px solid #ddd !important;
	}
	.table thead th {
	    vertical-align: bottom;
	    border-bottom: 2px solid #eceeef;
	}
    .modal-body {
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 15px;
    }
    h2, .h2 {
        font-size: 2rem;
    }
    .text-capitalize {
        text-transform: capitalize !important;
    }
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
    .text-center {
        text-align: center !important;
    }
    .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #eceeef;
    }
   
    table{   
        width : 90%;   
      } 
     
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
     }
       
    table.table-bordered, th, td, tbody, thead, tr{  
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
    table tr.borderTopBottom{    
        border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{  
        border-top: 1px solid #ddd !important; 
    }  
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
    }  
   
     table.table-bordered, th, td, tbody, thead, tr{   
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
     table tr.borderTopBottom{ 
    border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{    
        border-top: 1px solid #ddd !important; 
    }  
    .letter-head img{
    width:30%;
    }

   img {
    -webkit-print-color-adjust: exact;
}
	
    
	}
		html {
		    -ms-overflow-style: scrollbar;
		    -webkit-print-color-adjust: exact; 
		}
		body {
		-webkit-print-color-adjust: exact; 
	   /* background-color: #eeeeee;*/
	    font-family: "Lato", sans-serif;
	    color: #595959;
	    font-size: 15px;
	     background-color: #fff;
	    background-clip: padding-box;
	   /* position: relative;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    background-color: #fff;
	    background-clip: padding-box;
	   /* border: 1px solid rgba(0, 0, 0, 0.2);
	    border-radius: 0.3rem;
	    outline: 0;*/
	}
	
	.row {
	    margin-right: -15px;
	    margin-left: -15px;
	}
	.text-center {
    	text-align: center !important;
	}
	.text-left {
	    text-align: left !important;
	}
	.text-right {
	    text-align: right !important;
	}
	.col-md-12 {
	    -ms-flex: 0 0 100%;
	    flex: 0 0 100%;
	    max-width: 100%;
	}
	.text-capitalize {
	    text-transform: capitalize !important;
	}
	.col-md-6 {
	    -ms-flex: 0 0 50%;
	    flex: 0 0 50%;
	    max-width: 50%;
	}
	.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
	h4, .h4 {
	    font-size: 1.5rem;
	}
	.site-header .container {
   		 width: 95%;
    	max-width: 100%;
	}
	.btn {
		    white-space: normal;
	}
	table.table-bordered ,th , td, tbody, thead, tr{
		  border: 1px solid #ddd !important;
	}
	.table thead th {
	    vertical-align: bottom;
	    border-bottom: 2px solid #eceeef;
	}
    .modal-body {
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 15px;
    }
    h2, .h2 {
        font-size: 2rem;
    }
    .text-capitalize {
        text-transform: capitalize !important;
    }
    .row {
        margin-right: -15px;
        margin-left: -15px;
    }
    .text-center {
        text-align: center !important;
    }
    .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 15px;
        border-bottom: 1px solid #eceeef;
    }
   
    table{   
        width : 90%;   
      } 
     
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
     }
       
    table.table-bordered, th, td, tbody, thead, tr{  
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
    table tr.borderTopBottom{    
        border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{  
        border-top: 1px solid #ddd !important; 
    }  
    table, th, td, tbody, thead, tr{ 
        border : 0 !important; 
        padding : 3px 0px !important;  
    }  
   
     table.table-bordered, th, td, tbody, thead, tr{   
        border : 0 !important; 
         padding : 3px  0px !important;    
    }  
     table tr.borderTopBottom{ 
    border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;    
    }  
    table tr.borderTop{    
        border-top: 1px solid #ddd !important; 
    }  
    .letter-head img{
   		 width:30%;
   		 -webkit-print-color-adjust: exact; 
    }
	img {
    -webkit-print-color-adjust: exact;
	}
     @page{
    	margin: 0px;
    	 size: portrait;
    	 -webkit-print-color-adjust: exact; 

    }
	@media (min-width: 768px)
	.hidden-md-up {
	    display: none !important;
	}
	@media screen {
		#header { display: block; }
		#footer { display: block; }
		}
    </style>
</head>
<body>
@if($data['printType'] == 'opd_case')
  	<div class="container report_style">
  		@include('opdReportPrint')
	</div>
@else
	<div class="container" style="padding:15px;">
    <div class="" style="width:100%;height:150px;top:0px;left:0"> 
       <div class="row">
        <div class="col-md-12" style="padding:25px;">
            <img src="{{$url.'/assets/img/nabh_vins_logo.png'}}" id="logo-desk" alt="NABH Logo" class="hidden-sm-down" height="auto" width="30%">
        </div>
      </div>
    </div>  
	 @include('patientDetailReport')
	 @include('patientCheckupReport')
	 @if($data['printType'] == 'lab')
	 	<div class="report_left_pad">
	 		@include('labReportData')
	 	</div>
	 @endif
	@if($data['printType'] == 'radiology')
		<div class="report_left_pad">
			@include('radiologyReportData')
		</div>
	@endif
	@if($data['printType'] == 'prescription')
		<div class="report_space report_left_pad">
	  		@include('prescriptionReportData')
	  	</div>
	  	<div class="report_space report_left_pad">
	  		@include('crossReportData')
	  	</div>
	@endif

	  @if($data['printType'] == 'print_perceptions')
	  	
	  		<div class="report_space report_left_pad">
				<div class='col-md-6'>
					<span class='report_title'>Provisional Diagnostic :-</span>
				</div>
				<div class=''>
					@if($data['ReportPageData']['opdData']['provisional_diagnosis']!='')
						<div class='col-md-12'>
							<span class='report_details'>{{$data['ReportPageData']['opdData']['provisional_diagnosis']}}</span>
						</div>
					@else
						<div class='col-md-12'>
							<span class='report_details'>No record found.</span>
						</div>
					@endif
				</div>
			</div>
			
			@if(isset($data['priscriptionData']))
	  			<div class="report_space report_left_pad">
					@include('prescriptionReportData')
				</div>
				
			@endif
			<div class="report_space report_left_pad">
				@include('adviceReportData')
			</div>
			<div class="report_space report_left_pad">
				@include('followupReportData')
			</div>
			<div class="report_space report_left_pad">
				@include('crossReportData')
			</div>
			
			
	  @endif
	 
		<div style="height: 70px;" class="text-right">
			<img src="{{$url.'/assets/img/signature/'.$data['signatureName'].'.png'}}" height="66" width="182"/>
		</div>	
		<div style="height: 70px;" class="text-right">
		 	<!-- <img  :src="{{$url.'/assets/img/timestamp/'.$data['timeStamp'].'.png'}}" height="66" width="182"/> -->
		 	<span><b>{{$data['doctoreName']}}</b></span><br/>
		 	<span><b>{{$data['timeStamp']}}</b></span><br>
		 	<span><b>{{$data['regNo']}}</b></span>
		</div>
		<div style="">
		<!-- <div class="row" style="padding-right:20px;font-size: 15px;right:0px;">
			<div class='col-md-12 text-right'>
				<span class='text-right'><b>Consultant's Signature</b></span>
			</div>
		</div> -->	
	</div>
	   <div  class="footer" style="background-color: dodgerblue;color: white;bottom:0;width:100%;height:130px;left:0;position:fixed;">
	      <div class="row text-center">
	          <div class="col-md-12">
	              <div class="text-center text-capitalize"  style="text-align: center;">  
	                  <h2  class="text-center text-capitalize" style="text-align: center;color:white;"><u><b><i>Vadodara Institute Of Neurological Sciences</i></b></u></h2>  
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
	</div>
@endif
</body>
<html>