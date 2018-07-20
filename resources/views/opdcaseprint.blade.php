<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vins Administration</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="print">
<style type="text/css">

	@media print { 
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
	filter: grayscale(1);
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
	
     @page{
    	margin: 0px;
    	 size: portrait;
    	 -webkit-print-color-adjust: exact; 

    }
	@media (min-width: 768px)
	.hidden-md-up {
	    display: none !important;
	}

    </style>
</head>
<body>
	<div class="container" style="padding:15px;">
    <div class=""> 
       <div class="row">
        <div class="col-md-12">
            <img src="{{$url.'/assets/img/nabh_vins_logo.png'}}" id="logo-desk" alt="NABH Logo" class="hidden-sm-down" height="" width="30%">
        </div>
      </div>
    </div>  

  @if($data['printType'] == 'lab')
  	<div class='row'>
		<div class='col-md-12 text-center'>
			<h4>Lab Report</h4>
		</div>
  	</div>
  		<div class='row' style="padding-left: 15px;padding-right:15px;">
			    	 <table class="table" align="center" cellspacing=0>	
		         	<thead>	
		         		<tr>	
		         			<td class="text-left"><b>Ref By :</b>{{$data['adviceDoctor']}} </td>	
		         			<td class="text-center"><b>Date :</b> 	{{$data['todayDate']}} </td>	
		         		</tr>	
		         	</thead>
		         </table>
			    
		    </div>	
			<br/><br/>
  	<div class="row" style="min-height: 350px;height: 350px;">
  		<div class="col-md-12">
  			<div class="col-md-6"><span><b>Blood :</b></span>{{$data['labReportData']['blood_report_val']}} </div>
  			<div class="col-md-6"><span><b>Body Fluid Analysis :</b>{{$data['labReportData']['body_fluid_analysis_report_val']}}</span></div>
  		</div>
  		<div class="col-md-12">
  			<div class="col-md-6"><span><b>Urine :</b>{{$data['labReportData']['urine_report_val']}}</span></div>
  			<div class="col-md-6"><span><b>CSF :</b>{{$data['labReportData']['csf_report_val']}}</span></div>
  		</div>
  	</div>
  @endif

  @if($data['printType'] == 'radiology')
  	<div class='row'>
		<div class='col-md-12 text-center'>
			<h4>Radiology Report</h4>
		</div>
			<div class='row' style="padding-left: 15px;padding-right:15px;">
			    	 <table class="table" align="center" cellspacing=0>	
		         	<thead>	
		         		<tr>	
		         			<td class="text-left"><b>Ref By :</b>{{$data['adviceDoctor']}} </td>	
		         			<td class="text-center"><b>Date :</b> 	{{$data['todayDate']}} </td>	
		         		</tr>	
		         	</thead>
		         </table>
		    </div>	
			<br/><br/>
		<div class="row"  style="min-height: 350px;height: 350px;">
        	<div class="col-md-12">
        	  <div class="">
                <table class="table table-striped table-bordered" id="radio_list">
                  <thead>
                    <tr>
                    <!--  <th>#</th> -->
                     <th>Type</th>
                     <th>Body parts</th>
                     <th>Qualifier</th>
                     <th>Special request</th>
                     <th>Details</th>
                    </tr>
                 </thead>
                 <tbody>
                 @foreach($data['radioReportData'] as $index=>$res)
                 <tr>
                            <!-- <td>{{++$index}}</td> -->
                            <td>{{$res['type']}}</td>
                            <td>{{$res['bodyPart']}}</td>
                            <td>{{$res['qualifier']}}</td>
                            <td>{{$res['special_request']}}</td>
                            <td>{{$res['textData']}}</td>
                           
                    </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
        	</div>
        </div>
  	</div>
  @endif
  
  @if($data['printType'] == 'prescription')
  	<div style="padding-left: 35px;min-height: 350px;height: 350px;">
			<div class='row' style="padding-left: 15px;padding-right:15px;">
			    	 <table class="table" align="center" cellspacing=0>	
		         	<thead>	
		         		<tr>	
		         			<td class="text-left"><b>Ref By :</b>{{$data['adviceDoctor']}} </td>	
		         			<td class="text-center"><b>Date :</b> 	{{$data['todayDate']}} </td>	
		         		</tr>	
		         	</thead>
		         </table>
			    
		    </div>	
			<br/><br/>
  	@if(isset($data['priscriptionData']))
	  	@if(!empty($data['priscriptionData']))

			<div class='col-md-12 text-center'>
				<span class='text-center'><b>Prescription</b></span>
			</div>

			
			<div class="table-responsive">
				<table class="table" id="prescription_list">
				    <thead>
						</thead>
						   <tbody>
						   	@foreach($data['priscriptionData'] as $key=>$res)
							 <tr>
							   <td>{{++$key}}]  {{$res['name']}} :  ORAL {{$res['clock_quantity_1']}}___{{$res['clock_quantity_2']}}___{{$res['clock_quantity_3']}} [ {{$res['clock_time_1']}}__ {{$res['clock_time_2']}}___{{$res['clock_time_3']}} ] [ {{$res['clock_suggest_1']}}___{{$res['clock_suggest_2']}}___{{$res['clock_suggest_3']}} ] 
							   	@if($res['total_prescription_days'] !='')
                                 <span >{{$res['total_prescription_days']}} DAYS </span>
                                @else
                                <span >TO BE CONTINUE</span>
                                @endif
                            </td>
                        </tr>
							@endforeach
			           </tbody>
			       </table>
			</div>
		@endif
	@endif
	<br/><br/>

	@if(isset($data['referalType']))
	@if($data['referalType'] != null && $data['crossSelectedValue'] != '')
	 
			<div class='col-md-12 text-center'>
				<span class='text-center'><b>Cross Referal</b></span>
			</div>
		
		@if($data['referalType'] == 'cross')
				<div style="padding-left: 40px;">
				@if($data['crossType'] == 'internal')
					<div class='row' >
					 	<div class='col-md-6 text-left'>
					 		<span class='text-left'><b>{{$data['crossType']}}</b></span> {{$data['crossSelectedValue']}}
					 	</div>
					</div>
				@endif
				@if($data['crossType'] == 'external')
					<div style="padding-left: 40px;">
						<div class='col-md-6 text-left'>
					 		<span class='text-left text-capitalize' style='padding-left:30px;padding-right;20px'><b>{{$data['crossType']}}
					 					</b></span>
					 					{{$data['crossSelectedValue']}}
					 	</div>
					</div>
				@endif
			@endif
			</div>
		@endif

	@endif

  @endif
  @if($data['printType'] == 'opd_case')
  <div style='min-height: 750px;height: 1050px;'>
  	<div class='row'>
		<div class='col-md-12 text-center'>
			<h4>OPD CASE </h4>
		</div>
  	</div>
  	<div class='row' style="padding-left: 15px;padding-right:15px;">
	    	 <table class="table" align="center" cellspacing=0>	
         	<thead>	
         		<tr>
         			<td class="text-left"><b>Ref By :</b>{{$data['adviceDoctor']}} </td>	 
         			 <td class="text-center"><b>Date :</b> 	{{$data['todayDate']}} </td>	 
         		</tr>	
         	</thead>
         </table>
    </div>	
	<br/><br/>
	
	@if($data['advice'] != null && $data['adviceType'] == 'text')
	<div  style="padding-left: 35px;">
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Advice :-</b></span>
		</div>
		<div class='row'>
			@if ($data['adviceType'] == 'text')
				<div class='col-md-12 text-left'>
					<span class='text-left' style="padding-left:30px;">{{$data['advice']}}</span>
				</div>
			@endif
			
		</div>
	</div>
	<br/><br/>
	@endif 

	@if($data['adviceType'] != 'text' && $data['adviceScribleValue'] != '')
	<div  style="padding-left: 35px;">
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Advice :-</b></span>
		</div>
		<div class='row'>

				<div class='col-md-12 text-left'>
				    <img src="{{$data['adviceScribleValue']}}" title="Advice">
				</div> 
		</div>
	</div>
	<br/><br/>
	@endif
	@if($data['followup'] != '')
	<div  style="padding-left: 35px;">
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Followup :-</b></span>
		</div>
		<div >
				<div class='col-md-12 text-left'>
				   {{$data['followup']}}
				</div> 
		</div>
	</div>
	<br/><br/>
	@endif 
	
	<!-- @if(count($data['priscriptionData']) > 0 || $data['priscriptionData'] != null)
	<div style="padding-left: 35px;">
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Prescription :-</b></span>
		</div>

		<div class="table-responsive">
			<table class="table" id="prescription_list">
			    <thead>
				    <tr>
					   <th width="8%">#</th>
					   <th >Name</th>
					   <th class="text-center">Quntity</th> -->

					  <!--  <th class="text-center">Unit</th> -->

					<!--    <th class="text-center">Time For Medicine</th>
				 	</tr>
					</thead>
					   <tbody>
					   	@foreach($data['priscriptionData'] as $key=>$value)
						   <tr >
							   <td>{{$key}}</td>
							   <td>{{$value['Prescription'] }}</td>
							   <td class="text-center">{{$value['quntity']}}</td> -->

							 <!--   <td class="text-center">{{(isset($value['unit']))?$value['unit']:''}}</td> -->

							<!--    <td class="text-center">{{$value['time']}}</td>
						  </tr>
						@endforeach
		           </tbody>
		       </table>
		</div>
	</div>
	<br/><br/>
	@endif

	@if($data['referalType'] != null && $data['crossSelectedValue'] != '')
	<div style="padding-left: 35px;"> 
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Referal :-</b></span>
		</div>
	</div>
	@if($data['referalType'] == 'cross')
	<div style="padding-left: 40px;">
		@if($data['crossType'] == 'internal')
			<div class='row' style="padding-left: 15px;padding-right:15px;">
			 	<div class='col-md-6 text-left'>
			 		<span class='text-left'><b>{{$data['crossType']}}</b></span> {{$data['crossSelectedValue']}}
			 		</div>
			</div>
		@endif
		@if($data['crossType'] == 'external')
			<div style="padding-left: 40px;">
				<div class='col-md-6 text-left'>
			 		<span class='text-left text-capitalize' style='padding-left:30px;padding-right;20px'><b>{{$data['crossType']}}
			 					</b></span>
			 					{{$data['crossSelectedValue']}}
			 	</div>
			</div>
		@endif
	</div>
	@endif
	@endif

	@if($data['referalType'] == 'radiology' && $data['radiologyData'] != '')
	<div style="padding-left: 35px;"> 
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Referal :-</b></span>
		</div>
	</div>
	<div style="padding-left: 40px;">	
		<table class="table" id="radio_list">
			<thead>
				<tr>
					<th class="text-center">Type</th>
					<th class="text-center">Body parts</th>
					<th class="text-center">Qualifier</th>
					<th class="text-center">Special request</th>
				</tr>
			</thead>
			<tbody>
					<tr >
						<td class="text-center">{{$data['radiologyData']['type']}}</td>
						<td class="text-center">{{$data['radiologyData']['bodyPart']}}</td>
						<td class="text-center">{{$data['radiologyData']['qualifier']}}</td>
						<td class="text-center">{{$data['radiologyData']['special_request']}}</td>
					</tr>
			</tbody>
		</table>
	</div> -->
</div>
	@endif
	@endif
	<div style="position:absolute;bottom:230px;width:100%height:200px;right:30px;">
		<img  :src="{{'/assets/img/signature/'.$data['signatureName'].'.png'}}" height="66" width="182"/>
		<img  :src="{{'/assets/img/timestamp/'.$data['timeStamp'].'.png'}}" height="66" width="182"/>

	</div>	
	
	<div style="position:absolute;bottom:200px;width:100%height:50px;right:30px;">
			<img  :src="{{'/assets/img/timestamp/'.$data['timeStamp'].'.png'}}" height="66" width="182"/>
	</div>
	<div class="row" style="padding-right:20px;font-size: 15px;right:0px;">
		<div class='col-md-12 text-right'>
			<span class='text-right'><b>Consultant's Signature</b></span>
		</div>
	</div>	
</div>
   <div  class="footer" style="background-color: dodgerblue;color: white;position:absolute;bottom:0;width:100%;height:170px;left:0">
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
</body>
<html>