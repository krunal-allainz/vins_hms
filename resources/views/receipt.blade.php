    <div class="container printReceiptPage">	
			<div class="page-header">	
		      	  <div class="row">	
		             <div class="col-md-12 text-center text-capitalize"  style="text-align: center;">	
		               <h2  class="text-center text-capitalize" style="text-align: center;"><u><b>Vadodara Institute Of Neurological Sciences</b></u></h2>	
		             </div>	
		          </div>	
       		</div>	
			<div class="row">	
        		<div class="col-md-12 text-center">	
        			<div class="address text-center">99,Urmi Society, Opp Haveli Productivity Road, Akota Vadodara. Ph :(0265)2331343 , 2341787 
                    </div>	
        		</div>	
                <div class="col-md-12 text-center"> 
        ----------------------------------------------------------------------------------------------------------------------------------------------------------</div>
			     </div>	
            </div>
    <div class="row"> 

        <div class="col-md-12 text-center"> 
         <table class="table" align="center" cellspacing=0 width="90%">	
         	<thead>	
         		<tr>	
         			<td class="text-left"><b>ReceiptNo</b> : {{$data['receiptNumber']}}</td>	
         			<td class="text-center"><b>Date</b> : {{date('d-m-Y', strtotime($data['date_receipt'] )) }}</td>	
         		</tr>	
         		<tr>	
         			<td class="text-left"><b>Patient Name</b> : <span class="text-uppercase">{{$formData['name']}}</span></td>	
         			<td class="text-center"><b>OPD CASE NO : {{$data['caseNo']}}</b></td>	
         		</tr>	
         		<tr>	
         			<td class="text-left"><b>Sex/Age</b> :{{($formData['gender'] == 'M')?'Male':'Female'}}/{{$formData['age']}}</td>	
         			<td></td>	
        		</tr>	
         		<tr>	
         			<td class="text-left"><b>Consultant Name</b> : <span class="text-uppercase"> {{$formData['consultant']}}	</span></td>	
         			<td></td>	
         		</tr>
               
                <tr>    
                    <td class="text-left"><b>Case Type</b> :
                            
                        @if($data['case_type']==2)
                            <span class="text-uppercase">IPD</span>
                        @else
                            <span class="text-uppercase">OPD</span>
                        @endif
                    </td> 

                    <td></td>   
                </tr>	
         		<tr  class="border-tr-top-bottom" style="border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;">	
         			<th class="text-center">Particular</th>	
         			<th class="text-center">Amount</th>	
         		</tr>	
         	</thead>
            @if($data['charges']!=0 && $data['charges']!='')
             	<tr height="">	
             		<td class="text-center"><span class="text-uppercase text-center">
                        @if($data['charges_type']==1)
                            <b>Consultation Charges<b>
                        @elseif($data['charges_type']==2)
                            <b>Emergency Charges<b>
                        @endif
                        </span></td>	
             		<td class="text-center"><b>{{number_format($data['charges'], 2)}}</b></td>	
             	</tr>	
            @endif
            @if($data['procedures_charges']!=0 && $data['procedures_charges']!='')
            
                <tr height=""> 
                    <td class="text-center"><span class="text-uppercase text-center">
                        <?php
                            $procedure_val="" ;
                            if($data['department']=='Neurology')
                            {
                                if($data['procedures_val']==1)
                                {
                                    $procedure_val="EEG";
                                }
                                if($data['procedures_val']==2)
                                {
                                    $procedure_val="Bedside EEG";
                                }
                                if($data['procedures_val']==3)
                                {
                                    $procedure_val="Video EEG";
                                }
                                if($data['procedures_val']==4)
                                {
                                    $procedure_val="Nerve Conduction Studies per limb / 2 limbs";
                                }
                                if($data['procedures_val']==5)
                                {
                                    $procedure_val="Nerve Conduction Studies (All 4 limbs)";
                                }
                                if($data['procedures_val']==6)
                                {
                                    $procedure_val="Electromyography with disposable needle";
                                }
                                if($data['procedures_val']==7)
                                {
                                    $procedure_val="Visual evoked potentials (VEP)";
                                }
                                if($data['procedures_val']==8)
                                {
                                    $procedure_val="Auditory evoked potentials (BAEP)";
                                }
                                if($data['procedures_val']==9)
                                {
                                    $procedure_val="Somatosensory potentials (SSEP) / per nerve";
                                }
                                if($data['procedures_val']==10)
                                {
                                    $procedure_val="Facial Nerve study";
                                }
                                if($data['procedures_val']==11)
                                {
                                    $procedure_val="Repetitive Nerve stimulation";
                                }
                                if($data['procedures_val']==12)
                                {
                                    $procedure_val="Lumbar Puncture / +Manometry";
                                }
                                if($data['procedures_val']==13)
                                {
                                    $procedure_val="Neostigmine Test";
                                }
                                if($data['procedures_val']==14)
                                {
                                    $procedure_val="Bedside NCV (all 4 limbs)";
                                }
                                if($data['procedures_val']==15)
                                {
                                    $procedure_val="Bedside NCV (2 limbs)";
                                }
                                if($data['procedures_val']==16)
                                {
                                    $procedure_val="Bedside RNS";
                                }
                                if($data['procedures_val']==17)
                                {
                                    $procedure_val="Stroke Management Charges";
                                }
                                
                            }
                            else if($data['department']=='Vascular')
                            {
                                if($data['procedures_val']==1)
                                {
                                    $procedure_val="Color Doppler (per leg)";
                                }
                                 if($data['procedures_val']==2)
                                {
                                    $procedure_val="Color Doppler Carotid";
                                }
                                 if($data['procedures_val']==3)
                                {
                                    $procedure_val="Ankle Brachial Index / TBI";
                                }
                                 if($data['procedures_val']==4)
                                {
                                    $procedure_val="Toe Brachial Index";
                                }
                                 if($data['procedures_val']==5)
                                {
                                    $procedure_val="Maximum Venous Flow";
                                }
                                if($data['procedures_val']==6)
                                {
                                    $procedure_val="Pneumatic Compression Device";
                                }
                                if($data['procedures_val']==7)
                                {
                                    $procedure_val="Photo Plethysmography";
                                }

                            }
                            else if($data['department']=='Physiotherapy')
                            {
                                if($data['procedures_val']==1)
                                {
                                    $procedure_val="(Procedure Charges) Evaluation + Exercise Therapy (Daily)";
                                }
                                if($data['procedures_val']==2)
                                {
                                    $procedure_val="(Procedure Charges)Evaluation + Exercise Therapy + Electro Therapy (One Modality) (Daily)";
                                }
                                if($data['procedures_val']==3)
                                {
                                    $procedure_val="(Procedure Charges) Evaluation + Exercise Therapy + Electro Therapy (Two Modalities) (Daily)";
                                }
                                if($data['procedures_val']==4)
                                {
                                    $procedure_val="(Procedure Charges) Evaluation + Exercise Therapy (Weekly)";
                                }
                                if($data['procedures_val']==5)
                                {
                                    $procedure_val="(Procedure Charges) Evaluation + Exercise Therapy + Electro Therapy (One Modality) (Weekly)";
                                }
                                if($data['procedures_val']==6)
                                {
                                    $procedure_val="(Procedure Charges) Evaluation + Exercise therapy + Electro Therapy (Two Modalities) (Weekly)";
                                }
                                if($data['procedures_val']==7)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy (Daily)";
                                }
                                if($data['procedures_val']==8)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy + Assist Modality (Any One)[FES/MEntamove/Treadmill/Tilt Table/Cycling] (Daily)";
                                }
                                if($data['procedures_val']==9)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy + Assist Modality (2 Assist Modalities)(Daily)";
                                }
                                if($data['procedures_val']==10)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy + Assist Modality (All Assist Modalities)(Daily)";
                                }
                                if($data['procedures_val']==11)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy (Weekly)";
                                }
                                if($data['procedures_val']==12)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy + Assist Modality (Any One)[FES/MEntamove/Treadmill/Tilt Table/Cycling] (Weekly)";
                                }
                                if($data['procedures_val']==13)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy + Assist Modality (2 Assist Modalities)(Weekly)";
                                }
                                if($data['procedures_val']==14)
                                {
                                    $procedure_val="(Rehabilitation) Evaluation + Exercise Therapy + Assist Modality (All Assist Modalities)(Weekly)";
                                }
                            }
                        ?>
                        <b>{{$procedure_val}}</b>
                        </span></td>    
                    <td class="text-center"><b>{{number_format($data['procedures_charges'], 2)}}</b></td>  
                </tr>
            @endif
            @if($data['other_charges']!=0 && $data['other_charges']!='')
                <tr height=""> 
                    <td class="text-center"><span class="text-uppercase text-center">
                        <?php 
                            $other_category="";
                            if($data['other_charges_category']==1)
                            {
                                $other_category="(Procedure Charges) Dressing";
                            }
                            else if($data['other_charges_category']==2)
                            {
                                $other_category="(Procedure Charges) Special dressing";
                            } else if($data['other_charges_category']==3)
                            {
                                $other_category="Strip Method RBS   ";
                            }
                             else if($data['other_charges_category']==4)
                            {
                                $other_category="(Procedure Charges) ECG";
                            }
                             else if($data['other_charges_category']==5)
                            {
                                $other_category="(Procedure Charges) Enema";
                            }
                             else if($data['other_charges_category']==6)
                            {
                                $other_category="(Procedure Charges) Urine Sugar (Per Test)";
                            }
                             else if($data['other_charges_category']==7)
                            {
                                $other_category="(Procedure Charges) Suture Removal";
                            }
                             else if($data['other_charges_category']==8)
                            {
                                $other_category="(Procedure Charges) Ambulance Charge (Within city limits only)";
                            }
                             else if($data['other_charges_category']==9)
                            {
                                $other_category="(Procedure Charges) Escort with Ventilator (per hour)";
                            }
                             else if($data['other_charges_category']==10)
                            {
                                $other_category="(Procedure Charges) Escort without Ventilator (per hour)";
                            }
                             else if($data['other_charges_category']==10)
                            {
                                $other_category="(Procedure Charges) Escort without Ventilator (per hour)";
                            }
                             else if($data['other_charges_category']==10)
                            {
                                $other_category="(Procedure Charges) Escort without Ventilator (per hour)";
                            }
                             else if($data['other_charges_category']==10)
                            {
                                $other_category="(Procedure Charges) Escort without Ventilator (per hour)";
                            }
                            else if($data['other_charges_category']==11)
                            {
                                $other_category="(Wound Care) Dressing - Minor";
                            }
                            else if($data['other_charges_category']==12)
                            {
                                $other_category="(Wound Care) Dressing - Major";
                            }
                            else if($data['other_charges_category']==13)
                            {
                                $other_category="(Wound Care) Vac (per session + actual expenditure)";
                            }
                            else if($data['other_charges_category']==14)
                            {
                                $other_category="(Wound Care) Special Dressing";
                            }
                            

                        ?>
                        <b>{{$other_category}}</b>
                        
                        </span></td>    
                    <td class="text-center"><b>{{number_format($data['other_charges'], 2)}}</b></td>  
                </tr>
	        @endif
         	<tr>	
         		<td width="500px" class="text-left"><span class="text-uppercase"></span></td>	
         		<td class="text-right">	
         			<table align="center">	
         				<tr  class="border-top-tr" style="border-top: 1px solid #ddd !important;">	
         					<td class="text-center"><b>{{number_format($formData['total_amount'], 2)}}</b></td>	
         					<td class="text-center"><b>0.00</b></td>	
         					<td class="text-center"><b>{{number_format($formData['total_amount'], 2)}}</b></td>	
         				</tr>	
         			</table>	
         		</td>	
         	</tr>	
	
         	<tr  class="border-tr-top-bottom" style="border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;">	
         		<td  class="text-left text-capitalize"><b>Rs.{{$formData['wordamount']}} Only</b></td>	
         		<td  class="text-right">
                    <table align="center">  
                        <tr >  
                            <td class="text-center"><b>Net Amount: {{number_format($formData['total_amount'], 2)}}</b></td>   
                            
                        </tr>   
                    </table>
                </td>	
         	</tr>	
         	<tr>	
         		<td class="text-left">Rs <span class="text-right">{{$formData['total_amount']}}/-</span></td>	
         		<td class="text-right" width="500px">For, Vadodara Institute Of Neurological Sciences</td>	
         	</tr>	
         	<tr >	
         		<td class="text-left">=========================</td>	
         		<td></td>	
         	</tr>	
         	<tr colspan="2">	
         		<td class="text-left">SHREYANGI-{{date('d/m/y H:i')}}</td>	
         		<td class="text-right">AUTHORISED SIGNATORY</td>	
         			
         	</tr>	
         		
         </table>	
       </div> 	
	
</div>	
	</div>	
	
	
 <style type="text/css">
 html {
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent;
}
body {
    background-color: #fff;
    font-family: "Lato", sans-serif;
    color: #595959;
    font-size: small;
    letter-spacing: 0.5px;
    font-weight: normal;
    line-height: 1.5;
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
    .modal-content{	
        width : 850px;	
    }	
     .address{	
        font-size : medium;	
    }	
    table{	
        width : 90%;	
    	
    }	
    table, th, td, tbody, thead, tr{	
        
        padding : 3px 0px !important;	
    }	
    	
    table.table-bordered, th, td, tbody, thead, tr{	
        
         padding : 3px  0px !important;	
    }	
    table tr.borderTopBottom{	
        border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;	
    }	
    table tr.borderTop{	
        border-top: 1px solid #ddd !important;	
    }
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #eceeef;
    }
    .table th, .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #eceeef;
    }
     table tr.border-top-tr{
            border-top: 1px solid #ddd !important;
        }
     table tr.border-tr-top-bottom{
        border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important; 
    }

    @page {
        margin: 5px;
        size: landscape;
    }	

@media print {	
    html {
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent;
    }
    body {
        background-color: #fff;
        font-family: "Lato", sans-serif;
        color: #595959;
        font-size: small;
        letter-spacing: 0.5px;
        font-weight: normal;
        line-height: 1.5;
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
    .printReceiptPage table, th, td, tbody, thead, tr{	
        border : 0 !important;	
        padding : 3px 0px !important;	
    }	
	table, th, td, tbody, thead, tr{   
        
        padding : 3px 0px !important;   
    }   
    
     table.table-bordered, th, td, tbody, thead, tr{	
        border : 0 !important;	
         padding : 3px  0px !important;	
    }		
    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #eceeef;
    }
    .table th, .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #eceeef;
    }
     table tr.border-top-tr{
        border-top: 1px solid #ddd !important;
         -webkit-print-color-adjust: exact; 
    }
     table tr.border-tr-top-bottom{
       border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important; 
        -webkit-print-color-adjust: exact; 
    }
     table{
        border-collapse: collapse
    }
    .container {
        width: 1140px;
        max-width: 100%;
            padding-right: 15px;
    padding-left: 15px;
    }
}	
	
	
	
 </style> 