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
	
    
	}
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
	
     @page{
    	margin: 0px;
    	 size: landscape;
    }
@media (min-width: 768px)
	.hidden-md-up {
	    display: none !important;
	}

    </style>
</head>
<body>
	
	<div class="container" style="padding-bottom:15px;">
    <div class="page-header"> 
       <div class="row">
        <div class="col-md-12 letter-head">
            <img src="{{$url.'/assets/img/nabh_vins_logo.png'}}" id="logo-desk" alt="NABH Logo" class="hidden-sm-down" width="30%" height="10%">
        </div>
      </div>
    </div>  
  </div>
  	<div class='row'>
		<div class='col-md-12 text-center'>
			<h4>OPD CASE </h4>
			
		</div>
  	</div>
  	<div class='row' style="padding-left: 15px;padding-right:15px;">
  		<div class='col-md-12'>
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Ref By :</b></span>
					{{$data['adviceDoctor']}} 
	    	</div>
	    	<div class='col-md-6 text-right'>
	    	 	<span class='text-right'><b>Date :</b> 
	    	 	 	{{$data['todayDate']}} 
	    	 	</span>
	    	</div>
	    </div>
    </div>	
	<br/><br/>
	@if($data['advice'] != null)
	<div>
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Advice :-</b></span>
		</div>
		<div class='row'>
			<div class='col-md-12 text-left'>
				<span class='text-left' style="padding-left:30px;">{{$data['advice']}}</span>
			</div>
		</div>
	</div>
	<br/><br/>
	@endif 
	
	@if(count($data['priscriptionData']) > 0)
	<div>
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>prescription :-</b></span>
		</div>
		<ol class='text-left' >
			@foreach($data['priscriptionData'] as $key)

				<li class='text-left'>{{$key}}</li>
			@endforeach
		</ol>
	</div>
	<br/><br/>
	@endif
	@if($data['referalType'] != null)
	<div> 
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>Referal :-</b></span>
		</div>
	</div>
	@endif

	@if($data['referalType'] == 'cross')
	<div >
		@if($data['crossType'] == 'internal')
			<div>
			 	<div class='col-md-6 text-left'>
			 		<span class='text-left'><b>{{$data['crossType']}}</b></span> {{$data['crossSelectedValue']}}
			 		</div>
			</div>
		@endif
		@if($data['crossType'] == 'external')
			<div>
				<div class='col-md-6 text-left'>
			 		<span class='text-left text-capitalize' style='padding-left:30px;padding-right;20px'><b>{{$data['crossType']}}
			 					</b></span>
			 					{{$data['crossSelectedValue']}}
			 	</div>
			</div>
		@endif
	</div>
	@endif
	@if($data['referalType'] == 'radiology')
	<div class="col-md-12 text-left">	
		<table class="table" id="radio_list">
			<thead>
				<tr>
					<th>#</th>
					<th>Type</th>
					<th>Body parts</th>
					<th>Qualifier</th>
					<th>Special request</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data['radiologyData'] as $key=>$res)
					<tr >
						<td>{{++$key}}</td>
						<td>{{$res['type']}}</td>
						<td>{{$res['bodyPart']}}</td>
						<td>{{$res['qualifier']}}</td>
						<td>{{$res['special_request']}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@endif

	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="row" style="padding-bottom: 10px;padding-right:20px;font-size: 15px;  ">
		<div class='col-md-12 text-right'>
			<span class='text-right'><b>Consultant's Signature</b></span>
		</div>
	</div>	
   <div  class="footer" style="background-color: dodgerblue;color: white;">
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
    
	  <div class="row text-center">	
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
</body>
<html>