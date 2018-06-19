<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\Receipt;
 use euro_hms\Models\ChargesType;
 use Carbon\Carbon;
 use DB;

 class ReceiptRepository 
 {
	 	public static function getReceiptList()
	 	{
	 			return Receipt::all();
	 	}

	 	/**
	 	 * [getChargesTypes for recipt charges types]
	 	 * @return [array] [return all types]
	 	 */
	 	public static function getChargesTypes()
	 	{
	 			return ChargesType::get();
	 	}

	 	public static function saveReceipt($request){
      
		        $lastReceipt = \DB::table('receipt')->orderBy('receipt_id', 'desc')->first();	
		        	
		        if($lastReceipt == null){	
		        	$receiptId = 1;	
		        }else{	
		        	$receiptId = $lastReceipt->receipt_id + 1;	
		        }



		       // print_r($request->formData);exit;
		        $receipt = new Receipt();

		       /* $type = $request->formData['case_type'];	
		        if ($type == 1){	
		        	 $receiptNumber = 'OPD'.$receiptId;	
		    	   }	
		         else if ($type == 2){ 
		            $receiptNumber = 'IPD'.$receiptId;  
		         }  */
		         $receiptNumber = 'OPD'.$receiptId;	
		         $charges_type_id=$request->formData['charges_type'];
		         $charges_id=0;
		        if($charges_type_id==1)
		        {
		            //$charges_type_val="consultation_charges_id";
		            $receipt->consultation_charges_id=$request->formData['consultation_type'];
		            $charges_id=$request->formData['consultation_type'];
		        }
		        else if($charges_type_id==2)
		        {
		            //$charges_type_val="emergency_charges_id";
		            $receipt->emergency_charges_id=$request->formData['emergency_type'];
		            $charges_id=$request->formData['emergency_type'];
		        }
		        $department=$request->formData['department'];
		        $procedures_val=0;
		        if($department=='Neurology')
		        {
		            //$procedures='neurological_procedures_id';
		            $receipt->neurological_procedures_id=$request->formData['neurological_procedures'];
		            $procedures_val=$request->formData['neurological_procedures'];
		        }
		        else if($department=='Vascular')
		        {
		            $receipt->vascular_procedures_id=$request->formData['vascular_procedures'];
		            //$procedures='vascular_procedures_id';
		            $procedures_val=$request->formData['vascular_procedures'];
		        }
		        $date_arr=$request->formData['date_receipt'];
		       //	print_r($request->formData);exit;
		          $receipt->receipt_id = $receiptId ;
		          $receipt->receipt_number = $receiptNumber ;
		          $date_r = Carbon::parse($date_arr['time']);
		          $date_receipt=$date_r->format('Y-m-d H:i:s');
		          //echo $date_receipt;exit;
		          $receipt->date =  $date_receipt;
		          $receipt->case_no = $request->formData['case_no'] ;
		          $receipt->patient_id = $request->formData['patient_id'] ;
		          $receipt->charges_name = $request->formData['charges_type'] ;
		          $receipt->amount = $request->formData['chargeAmount'] ;
		          $receipt->case_type = $request->formData['case_type'];
		          $receipt->charges_type_id = $request->formData['charges_type'];
		          $receipt->charges = $request->formData['chargeAmount'];
		          $receipt->department = $request->formData['department'];
		          $receipt->procedures_charges = $request->formData['procedure_charges'];
		          $receipt->other_charges_id = $request->formData['other_charges_category'];
		          $receipt->other_charges = $request->formData['other_charges'];
		          $receipt->created_at=Carbon::now();
		          $receipt->updated_at=Carbon::now();
		          $receipt->save();
		        
				
		        $data = ['receiptId'=>$receiptId,'receiptNumber'=>$receiptNumber,'caseNo'=>$request->formData['case_no'],'chagredName'=>$request->formData['charges_type'],'amount'=>$request->formData['chargeAmount'],'case_type'=>$request->formData['case_type'],'charges_type'=>$request->formData['charges_type'],'charges_type_val'=>$charges_id,'charges'=>$request->formData['chargeAmount'],'department'=>$request->formData['department'],'procedures_val'=>$procedures_val,'procedures_charges'=>$request->formData['procedure_charges'],'other_charges_category'=>$request->formData['other_charges_category'],'other_charges'=>$request->formData['other_charges'],'date_receipt'=>$date_receipt];

		        return $data;	
      }
 }




?>