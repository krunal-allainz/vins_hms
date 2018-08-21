<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\Receipt;
 use euro_hms\Models\ChargesType;
 use euro_hms\Models\PatientDetailsForm;
 use Carbon\Carbon;
 use DB;
 use euro_hms\Api\Repositories\UserRepository;

 class ReceiptRepository 
 {

 	public function getReceiptList()
 	{
 			return Receipt::with('patientDetails.userDetails')->paginate(10);
 	}

 	public function deleteReceipt($id){
 		$delete= Receipt::where('id', $id)->delete();
        if ($delete) {
                return ['code' => '200','data'=>'', 'message' => 'Receipt successfully deleted'];
            } else {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }

 	}

 	public function viewReceipt($id,$type){
 		return Receipt::with('patientDetails')->where('receipt.id',$id)->first();
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
		        else if($department=='Physiotherapy')
		        {
		            $receipt->physiotherapy_procedures_id=$request->formData['physiotherapy_procedures'];
		            //$procedures='vascular_procedures_id';
		            $procedures_val=$request->formData['physiotherapy_procedures'];
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
		        
				
		        $data = ['receiptId'=>$receiptId,'receiptNumber'=>$receiptNumber,'caseNo'=>$request->formData['case_no'],'chagredName'=>$request->formData['charges_type'],'amount'=>$request->formData['chargeAmount'],'case_type'=>$request->formData['case_type'],'charges_type'=>$request->formData['charges_type'],'charges_type_val'=>$charges_id,'charges'=>$request->formData['chargeAmount'],'department'=>$request->formData['department'],'procedures_val'=>$procedures_val,'procedures_charges'=>$request->formData['procedure_charges'],'other_charges_category'=>$request->formData['other_charges_category'],'consult_id'=>$request->formData['consult'],'other_charges'=>$request->formData['other_charges'],'date_receipt'=>$date_receipt];
		        return $data;	
      }

      /**
       * [getReceiptDetailsById description]
       * @param  [type] $id [description]
       * @return [type]     [description]
       */
      public function getReceiptDetailsById($id)
      {
      		
      		//$data_all=Receipt::where('id',$id)->first();
      		$data_all=Receipt::with('patientDetails')->where('receipt.id',$id)->first();
      		//for date receipt 
      		
      		$date_r = Carbon::parse($data_all['date']);
		    $date_receipt=$date_r->format('Y-m-d H:i:s');
		    $charges_id=0;
      		if($data_all['charges_type_id']==1)
		        {
		            //$charges_type_val="consultation_charges_id"; 
		            $charges_id=$data_all['consultation_charges_id'];
		        }
		        else if($data_all['charges_type_id']==2)
		        {
		            //$charges_type_val="emergency_charges_id";
		           $charges_id=$data_all['emergency_charges_id'];
		        }
		        $department=$data_all['department'];
		        $procedures_val=0;
		        if($department=='Neurology')
		        {
		            $procedures_val=$data_all['neurological_procedures_id'];
		        }
		        else if($department=='Vascular')
		        {
		            $procedures_val=$data_all['vascular_procedures_id'];
		        }
		        else if($department=='Physiotherapy')
		        {
		        	$procedures_val=$data_all['physiotherapy_procedures_id'];
		        }
      		$fullname=$data_all['patientDetails']['first_name'].' '.$data_all['patientDetails']['last_name'];
      		$age=Carbon::parse($data_all['patientDetails']['dob'])->format('Y-m-d');
      		$age_val=Carbon::parse($age)->diff(\Carbon\Carbon::now())->format('%y Years');
      		//echo $age_val;exit;
      		
      		$gender='Female';
      		if($data_all['patientDetails']['gender']=='M')
      		{
      			$gender='Male';
      		}
      		$data = ['receiptId'=>$data_all['receipt_id'],'receiptNumber'=>$data_all['receipt_number'],'caseNo'=>$data_all['case_no'],'chagredName'=>$data_all['charges_type_id'],'amount'=>$data_all['charges'],'case_type'=>$data_all['case_type'],'charges_type'=>$data_all['charges_type_id'],'charges_type_val'=>$charges_id,'charges'=>$data_all['charges'],'department'=>$data_all['department'],'procedures_val'=>$procedures_val,'procedures_charges'=>$data_all['procedures_charges'],'other_charges_category'=>$data_all['other_charges_id'],'other_charges'=>$data_all['other_charges'],'date_receipt'=>$date_receipt,'consult_id'=>$data_all['patientDetails']['consultant_id'],'fullname'=>$fullname,'gender'=>$gender,'age'=>$age_val];
      		 return $data;	
      }
 }
?>