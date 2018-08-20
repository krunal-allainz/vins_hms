<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
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

    </style>
</head>
<body>
	<div class="container" style="padding:15px;">
    <div class=""> 
       <div class="row">
        <div class="col-md-12" style="padding:25px;">
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
			  <div class="form-group">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="laboratory_table_list">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Result</th>
                        </tr>
                        </thead>
                        <tbody>
                       	@foreach($data['labReportData'] as $index=>$res)
                         <tr class="text-center">
                            <td>{{++$index}}</td> 
                            <td>{{$res['text'] }}</td>
                            <td>{{$res['lab_date']['time']}}</td>
                            <td>{{$res['result']}}</td>
                          </tr>
						 @endforeach
                        </tbody>
                    </table>
                  </div>
                  
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
		<div class="row">
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
                 <tr class="text-center">
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
  	<div style="min-height: 350px;height: 350px;">
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
					    	<?php //print_r($data['priscriptionData']);exit;?>
					   		 @foreach($data['priscriptionData'] as $key=>$res)
					   		 	
					   		 	@if($res['remove']==='false')
								   	<tr>
		                             	<td>{{++$key}} ] {{$res['name']}} :ORAL
										@if($res['clock_quantity_1']!='0')
											{{$res['clock_quantity_1']}}
										@endif
		                                @if($res['clock_quantity_2']!='0') 
		                                    @if($res['clock_quantity_1']!='0') ______ @endif
		                                    {{$res['clock_quantity_2']}}
		                                @endif
		                                @if($res['clock_quantity_3']!='0') 
		                                	@if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0') ______ @endif
		                                	{{$res['clock_quantity_3']}} 
		                                @endif
		                                @if($res['clock_quantity_4']!='0')
		                                	@if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0' || $res['clock_quantity_3']!='0')  ______ @endif
		                                	{{$res['clock_quantity_4']}}
		                                @endif
		                                [ 
		                                @if($res['clock_time_1']!='00:00') 
		                                	{{$res['clock_time_1']}}
		                                @endif
		                                @if($res['clock_time_2']!='00:00')
		                                	@if($res['clock_time_1']!='00:00') ______ @endif
		                                	{{$res['clock_time_2']}}
		                                @endif
		                                @if($res['clock_time_3']!='00:00')
		                                    @if($res['clock_time_1']!='00:00' || $res['clock_time_2']!='00:00') ______ @endif {{$res['clock_time_3']}}
		                                @endif
		                                @if($res['clock_time_4']!='00:00')
		                                    @if($res['clock_time_1']!='00:00' || $res['clock_time_2']!='00:00' || $res['clock_time_3']!='00:00') ______ @endif
		                                    {{$res['clock_time_4']}}
		                                @endif ] 
		                                [ 
		                                @if($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') 
		                                	{{$res['clock_suggest_1']}}
		                                @endif
			                        	@if($res['clock_suggest_2']!=''  && $res['clock_suggest_2']!='--') 
			                        		@if($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') ______ @endif
			                        		{{$res['clock_suggest_2']}}
			                        	@endif
		                                @if($res['clock_suggest_3']!=''  && $res['clock_suggest_3']!='--')
		                                	@if(($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') || ($res['clock_suggest_2']!='' && $res['clock_suggest_2']!='--')) ______ @endif
		                                	{{$res['clock_suggest_3']}}
		                                @endif
		                                @if($res['clock_suggest_4']!=''  && $res['clock_suggest_4']!='--')
		                                	@if(($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') || ($res['clock_suggest_2']!='' && $res['clock_suggest_2']!='--') || ($res['clock_suggest_3']!='' && $res['clock_suggest_3']!='--')) ______ @endif
		                                	{{$res['clock_suggest_4']}}
		                                @endif 
		                                ]  
										@if($res['qhrs']!='') <span>[{{$res['qhrs']}}]</span> @endif
		                                &#9747;
		                                @if($res['total_prescription_days']!='')
		                                	{{$res['total_prescription_days']}} <span> DAYS </span>
		                                @else
		                                 	<span> TO BE CONTINUE </span>
		                                @endif
						            	</td>
		                        	</tr>
		                        @endif
							@endforeach
		                </tbody>
			       </table>
			</div>
			<div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <thead>
	                    <tr>
	                        <th>Index</th>
	                        <th>Prescription Name</th>
	                        <th>How Many Days</th>
	                        <th>Total Quantity</th>
	                        <th>Q-Hrs</th>
	                        <th>Total Days</th>
	                        
	                    </tr>
	                </thead>
	                <tbody>
						@foreach($data['priscriptionData'] as $key2=>$res2)
		                	@if($res2['remove']==='false')
			                 <tr class="text-center">
			                        <td>{{++$key2}} </td>
			                        <td>{{$res2['name']}}</td>
			                        <td>{{$res2['type']}}</td>
			                        <td>{{$res2['total_quantity']*$res2['total_prescription_days']}}</td>
			                        <td>{{$res2['qhrs']}}</td>
			                        <td>{{$res2['total_prescription_days']}}</td>
			                  </tr>
			                @endif
		            	@endforeach
	                </tbody>
	            </table>
		</div>
		@endif
	@endif

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
  <div >
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

	@if(in_array( 'Advice + follow ups',$data['checkedreportList']))
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
		@endif 
	@endif
	@if(in_array('Radiology',$data['checkedreportList']))
		<div class='row'>
		<div class='col-md-12 text-center'>
			<h4>Radiology Report</h4>
		</div>
		<div class="row"  >
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
                 <tr class="text-center">
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
	@if(in_array('Laboratory',$data['checkedreportList'] ))
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h4>Lab Report</h4>
			</div>
  		</div>
		<div class="form-group">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="laboratory_table_list">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Result</th>
                        </tr>
                        </thead>
                        <tbody>
                       	@foreach($data['labReportData'] as $index=>$res)
                         <tr class="text-center">
                            <td>{{++$index}}</td> 
                            <td>{{$res['text'] }}</td>
                            <td>{{$res['lab_date']['time']}}</td>
                            <td>{{$res['result']}}</td>
                          </tr>
						 @endforeach
                        </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
  	
	@endif
	@if(in_array('Prescription',$data['checkedreportList']))
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
					   		 @if($res['remove']==='false')
								   	<tr>
		                             	<td>{{++$key}} ] {{$res['name']}} :ORAL
										@if($res['clock_quantity_1']!='0')
											{{$res['clock_quantity_1']}}
										@endif
		                                @if($res['clock_quantity_2']!='0') 
		                                    @if($res['clock_quantity_1']!='0') ______ @endif
		                                    {{$res['clock_quantity_2']}}
		                                @endif
		                                @if($res['clock_quantity_3']!='0') 
		                                	@if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0') ______ @endif
		                                	{{$res['clock_quantity_3']}} 
		                                @endif
		                                @if($res['clock_quantity_4']!='0')
		                                	@if($res['clock_quantity_1']!='0' || $res['clock_quantity_2']!='0' || $res['clock_quantity_3']!='0')  ______ @endif
		                                	{{$res['clock_quantity_4']}}
		                                @endif
		                                [ 
		                                @if($res['clock_time_1']!='00:00') 
		                                	{{$res['clock_time_1']}}
		                                @endif
		                                @if($res['clock_time_2']!='00:00')
		                                	@if($res['clock_time_1']!='00:00') ______ @endif
		                                	{{$res['clock_time_2']}}
		                                @endif
		                                @if($res['clock_time_3']!='00:00')
		                                    @if($res['clock_time_1']!='00:00' || $res['clock_time_2']!='00:00') ______ @endif {{$res['clock_time_3']}}
		                                @endif
		                                @if($res['clock_time_4']!='00:00')
		                                    @if($res['clock_time_1']!='00:00' || $res['clock_time_2']!='00:00' || $res['clock_time_3']!='00:00') ______ @endif
		                                    {{$res['clock_time_4']}}
		                                @endif ] 
		                                [ 
		                                @if($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') 
		                                	{{$res['clock_suggest_1']}}
		                                @endif
			                        	@if($res['clock_suggest_2']!=''  && $res['clock_suggest_2']!='--') 
			                        		@if($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') ______ @endif
			                        		{{$res['clock_suggest_2']}}
			                        	@endif
		                                @if($res['clock_suggest_3']!=''  && $res['clock_suggest_3']!='--')
		                                	@if(($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') || ($res['clock_suggest_2']!='' && $res['clock_suggest_2']!='--')) ______ @endif
		                                	{{$res['clock_suggest_3']}}
		                                @endif
		                                @if($res['clock_suggest_4']!=''  && $res['clock_suggest_4']!='--')
		                                	@if(($res['clock_suggest_1']!='' && $res['clock_suggest_1']!='--') || ($res['clock_suggest_2']!='' && $res['clock_suggest_2']!='--') || ($res['clock_suggest_3']!='' && $res['clock_suggest_3']!='--')) ______ @endif
		                                	{{$res['clock_suggest_4']}}
		                                @endif 
		                                ] 
										@if($res['qhrs']!='') <span>[{{$res['qhrs']}}]</span> @endif
		                                &#9747;
		                                @if($res['total_prescription_days']!='')
		                                	{{$res['total_prescription_days']}} <span> DAYS </span>
		                                @else
		                                 	<span> TO BE CONTINUE </span>
		                                @endif
						            	</td>
		                        	</tr>
		                        @endif
							@endforeach
			           </tbody>
			       </table>
				</div>
				<div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <thead>
	                    <tr>
	                        <th>Index</th>
	                        <th>Prescription Name</th>
	                        <th>How Many Days</th>
	                        <th>Total Quantity</th>
	                        <th>Q-Hrs</th>
	                        <th>Total Days</th>
	                        
	                    </tr>
	                </thead>
	                <tbody>
						@foreach($data['priscriptionData'] as $key2=>$res2)
		                	@if($res2['remove']==='false')
			                 <tr class="text-center">
			                        <td>{{++$key2}} </td>
			                        <td>{{$res2['name']}}</td>
			                        <td>{{$res2['type']}}</td>
			                        <td>{{$res2['total_quantity']*$res2['total_prescription_days']}}</td>
			                        <td>{{$res2['qhrs']}}</td>
			                        <td>{{$res2['total_prescription_days']}}</td>
			                  </tr>
			                @endif
		            	@endforeach
	                </tbody>
	            </table>
		</div>
			@endif
		@endif
		<br/><br/>
	@endif
	</div>
@endif
	
	<div style="width:100%height:200px;right:30px;" class="text-right">
		<!-- <img  :src="{{$url.'/assets/img/signature/'.$data['signatureName'].'.png'}}" height="66" width="182"/> -->
		<span><b>{{$data['signatureName']}}</b></span>
	</div>	
	<div style="width:100%height:200px;right:30px;" class="text-right">
	 	<!-- <img  :src="{{$url.'/assets/img/timestamp/'.$data['timeStamp'].'.png'}}" height="66" width="182"/> -->
	 	<span><b>{{$data['timeStamp']}}</b></span><br>
	 	<span><b>{{$data['regNo']}}</b></span>
	</div>
	<div style="">
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