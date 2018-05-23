
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
        			<div class="address text-center">99,Urmi Society, Opp Haveli Productivity Road, Akota Vadodara. Ph :(0265)2331343 , 2341787 </div>
        		</div>
			</div>
			<div class="row">
        		<div class="col-md-12">
		--------------------------------------------------------------------------------------------------------------------------------------------------------------------
		</div>
		

         <table class="table" align="center" cellspacing=0>
         	<thead>
         		<tr>
         			<td class="text-left"><b>ReceiptNo</b> : {{$data['receiptNumber']}}</td>
         			<td class="text-center"><b>Date</b> : {{date('d/m/Y', strtotime($formData['date'] )) }}</td>
         		</tr>
         		<tr>
         			<td class="text-left"><b>PatientName</b> : <span class="text-uppercase">{{$formData['name']}}</span></td>
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
         		<tr  style="border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;">
         			<th class="text-center">Particular</th>
         			<th class="text-center">Amount</th>
         		</tr>
         	</thead>
         	<tr height="100px">
         		<td class="text-center"><span class="text-uppercase text-center"><b>{{$data['chagredName']}}<b></span></td>
         		<td class="text-center"><b>{{number_format($data['amount'], 2)}}</b></td>
         	</tr>

         	<tr>
         		<td width="500px"><span class="text-uppercase"></span></td>
         		<td class="text-center">
         			<table class="text-center">
         				<tr  style="border-top: 1px solid #ddd !important;">
         					<td class="text-center"><b>{{number_format($data['amount'], 2)}}</b></td>
         					<td class="text-center"><b>0.00</b></td>
         					<td class="text-center"><b>{{number_format($data['amount'], 2)}}</b></td>
         				</tr>
         			</table>
         		</td>
         	</tr>

         	<tr  style="border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;">
         		<td  class="text-left text-capitalize"><b>Rs.{{$formData['wordamount']}} Only</b></td>
         		<td  class="text-left"><b>Net Amount: {{number_format($data['amount'], 2)}}</b></td>
         	</tr>
         	<tr>
         		<td class="text-left">Rs <span class="text-right">{{$data['amount']}}/-</span></td>
         		<td class="text-right" width="400px">For, Vadodara Institute Of Neurological Sciences</td>
         	</tr>
         	<tr >
         		<td>=========================</td>
         		<td></td>
         	</tr>
         	<tr colspan="2">
         		<td class="text-left">SHREYANGI-{{date('d/m/y H:i')}}</td>
         		<td class="text-right">AUTHORISED SIGNATORY</td>
         		
         	</tr>
         	
         </table>
        

</div>
	</div>


 <style type="text/css">
 #receiptModal .modal-content{
    width : 850px;
}
#printContent .address{
    font-size : medium;
}
#printContent table{
    width : 90%;

}
#printContent table, th, td, tbody, thead, tr{
    border : 0 !important;
    padding : 3px 0px !important;
}

#printContent table.table-bordered, th, td, tbody, thead, tr{
    border : 0 !important;
     padding : 3px  0px !important;
}
#printContent table tr.borderTopBottom{
    border: 1px solid #ddd !important;border-left: 0px !important;border-right: 0px !important;
}
#printContent table tr.borderTop{
    border-top: 1px solid #ddd !important;
}
@media print {
    .printReceiptPage table, th, td, tbody, thead, tr{
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
}



 </style>