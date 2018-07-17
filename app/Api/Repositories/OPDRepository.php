<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\OpdDetails;
 use euro_hms\Models\Laboratory;
 use euro_hms\Models\PrescriptionDetails;
 use euro_hms\Models\OPDReferences;
 use euro_hms\Models\Radiology;
 use euro_hms\Models\LaboratoryDetails;
 use euro_hms\Models\PatientCheckUp;
 use euro_hms\Models\Examination;
 use euro_hms\Models\RadiologyAttachments;
 use Carbon\Carbon;
 use DB;

 class OPDRepository 
 {

 	/**
 	 * [getLaboratoryByType description]
 	 * @param  [type] $type [description]
 	 * @return [type]       [description]
 	 */
 	public function getLaboratoryByType($type)
 	{
 		return Laboratory::whereRaw('FIND_IN_SET(?,type)', $type)->get();
 	}
 	/**
 	 * [getLabpratoryNameById description]	
 	 * @param  [type] $id [description]
 	 * @return [type]     [description]
 	 */
 	public function getLabpratoryNameById($id)
 	{
 		return Laboratory::where('id',$id)->first();
 	}
 	/**
 	 * [getAllLaboratoryList description]
 	 * @return [type] [description]
 	 */
 	public function getAllLaboratoryList()
 	{
 		return Laboratory::get();
 	}

 	/**
 	 * [getLabListByChildren description]
 	 * @return [type] [description]
 	 */
 	public function getLabListByChildren()
 	{
 		$data_lab=Laboratory::get();
 		foreach($data_lab as $lab)
 		{
 			
 			$types=explode(',', $lab['type']);
 			if(in_array(1,$types))
 			{
 				$blood_array[]=array('id'=>$lab['id'],'text'=>$lab['name']);
 			}
 			if(in_array(2,$types))
 			{
 				$urine_array[]=array('id'=>$lab['id'],'text'=>$lab['name']);
 			}
 			if(in_array(3,$types))
 			{
 				$csf_array[]=array('id'=>$lab['id'],'text'=>$lab['name']);
 			}
 			if(in_array(4,$types))
 			{
 				$bfa_array[]=array('id'=>$lab['id'],'text'=>$lab['name']);
 			}
 			
 		}
 		$lab_array[0]=array('id'=>'1','text'=>'Blood','children'=>$blood_array,'element'=>'HTMLOptGroupElement');
 		$lab_array[1]=array('id'=>'2','text'=>'Urine','children'=>$urine_array,'element'=>'HTMLOptGroupElement');
 		$lab_array[2]=array('id'=>'3','text'=>'CSF','children'=>$csf_array,'element'=>'HTMLOptGroupElement');
 		$lab_array[3]=array('id'=>'4','text'=>'BFA','children'=>$bfa_array,'element'=>'HTMLOptGroupElement');
 		return $lab_array;

 	}


 	public function store($request)
 	{

 		$data = $request->all()['data']['opdData'];
 		$user_id=$request->all()['data']['doctor'];
 		$department=$request->all()['data']['department'];
 		$prescription_data=$request->all()['data']['prescriptionData'];
 		$radiology_data=$request->all()['data']['radioData'];
 		$resultdata=$request->all()['data']['resultData'];
 		$labdata=$request->all()['data']['laboratoryData'];

 		if($department=='Vascular')
 		{
 			$examinationData=$request->all()['data']['vascExaminationData'];
 		}
 		else
 		{
 			$examinationData=$request->all()['data']['neuroExaminationData'];
 		}
 		
 		
 		$opd_id_org=$data['opd_id'];
 		//print_r($data);exit;
 		//patient check up
 		$data_patient_checkup=PatientCheckUp::findOrFail($opd_id_org);
		$data_patient_checkup->height=$data['height'];
		$data_patient_checkup->weight=$data['weight'];
		$data_patient_checkup->bmi=$data['bmi'];
		$data_patient_checkup->vitals=$data['vitals'];
		$data_patient_checkup->pulse=$data['pulse'];
		$data_patient_checkup->bp=$data['bp_systolic'].'/'.$data['bp_diastolic'];
		$data_patient_checkup->temp=$data['temp'];
		$data_patient_checkup->pain=$data['pain_value'];
		$data_patient_checkup->updated_at=Carbon::now();
		$data_patient_checkup->save();
		//opd details
 		$opdData=OpdDetails::findOrFail($opd_id_org);
 		if($data['adviceType']=='text')
 		{
 			$advice=array('type'=>$data['adviceType'],'value'=>$data['advice']);
 		}
 		else
 		{
 			$advice=array('type'=>$data['adviceType'],'value'=>$data['signaturePad2_src']);
 		}
 		if($data['historyType']=='text')
 		{
 			$history=array('type'=>$data['historyType'],'value'=>$data['history']);
 		}
 		else
 		{
 			$history=array('type'=>$data['historyType'],'value'=>$data['signaturePad_src']);
 		}
 		if($data['pastHistoryType']=='text')
 		{
 			$past_history=array('type'=>$data['pastHistoryType'],'value'=>$data['past_history']);
 		}
 		else
 		{
 			$past_history=array('type'=>$data['pastHistoryType'],'value'=>$data['signaturePad1_src']);
 		}
 		$advice_final=json_encode($advice);
 		$history_final=json_encode($history);
 		$past_history_final=json_encode($past_history);
 		$opdData->advice=$advice_final;
 		$opdData->history=$history_final;
 		$opdData->past_history=$past_history_final;
 		$opdData->save();
 		//save prescription
 		if(!empty($prescription_data))
 		{
 			foreach($prescription_data as $prescription)
	 		{
	 			$prescription_obj=new PrescriptionDetails();
	 			$prescription_obj->opd_id=$opd_id_org;
	 			$prescription_obj->user_id=$user_id;
	 			$prescription_obj->prescription_drug_id=$prescription['id'];
	 			$prescription_obj->total_quantity=$prescription['total_quantity'];
	 			$prescription_obj->clock_quantity_1=$prescription['clock_quantity_1'];
	 			$prescription_obj->clock_quantity_2=$prescription['clock_quantity_2'];
	 			$prescription_obj->clock_quantity_3=$prescription['clock_quantity_3'];
	 			$prescription_obj->clock_time_1=$prescription['clock_time_1'];
	 			$prescription_obj->clock_time_2=$prescription['clock_time_2'];
	 			$prescription_obj->clock_time_3=$prescription['clock_time_3'];
	 			$prescription_obj->clock_suggest_1=$prescription['clock_suggest_1'];
	 			$prescription_obj->clock_suggest_2=$prescription['clock_suggest_2'];
	 			$prescription_obj->clock_suggest_3=$prescription['clock_suggest_3'];
	 			$prescription_obj->remove=$prescription['remove'];
	 			$prescription_obj->save();
	 		}
 		}
 		
 		//opd references 
 		if($data['referral']!='')
 		{
 			$reference_obj=new OPDReferences();
	 		$reference_obj->opd_id=$opd_id_org;
	 		$reference_obj->user_id=$user_id;
	 		$reference_obj->reference_type=$data['referral'];
	 		
	 		if($data['referral']=='cross')
	 		{
	 			$reference_obj->cross_type=$data['cross'];
	 			if($data['cross']=='internal')
	 			{
	 				$reference_obj->cross_value=$data['cross_type_int'];
	 			}
	 			else
	 			{
	 				$reference_obj->cross_value=$data['cross_type_ext'];
	 			}
	 		}
	 		else if($data['referral']=='radiology')
	 		{
	 			$radiology_obj=new Radiology();
	 			$radiology_obj->opd_id=$opd_id_org;
	 			$radiology_obj->type=$resultdata['type'];
	 			$radiology_obj->bodyparts=$resultdata['bodyPart'];
	 			$radiology_obj->qualifiers=$resultdata['qualifier'];
	 			$radiology_obj->special_request=$resultdata['special_request'];
	 			$radiology_obj->referance=0;
	 			if($resultdata['type']=='X-Rays')
	 			{
	 				$radiology_obj->subtype=$resultdata['x_ray_type'];
	 			}
	 			else if($resultdata['type']=='MRI')
	 			{
	 				if($radiology_obj->bodyparts=='Spine')
	 				{
	 					$radiology_obj->subtype=$resultdata['spine_option_value'];
	 				}

	 				
	 			}
	 		
	 			$radiology_obj->save();
	 			$radiology_id=$radiology_obj->id;
	 			$reference_obj->radiology_id=$radiology_id;
	 		}
	 		else if($data['referral']=='laboratory')
	 		{
	 			$type=array('blood'=>$data['blood_report_opd'],'urine'=>$data['urine_report_opd'],'bfa'=>$data['body_fluid_analysis_report_opd'],'csf'=>$data['csf_report_opd']);
	 			
	 			foreach($type as $key => $value)
	 			{
	 				$lab_obj=new LaboratoryDetails();
	 				$lab_obj->opd_id=$opd_id_org;
	 				$lab_obj->user_id=$user_id;
	 				$lab_obj->lab_type=$key;
	 				$lab_obj->report=$value;
	 				$lab_obj->refrences=0;
	 				$lab_obj->save();
	 			}
	 			
	 			//$reference_obj->lab_id=$lab_obj->id;
	 		}
	 		$reference_obj->save();

 		}

 		/*for form -2 library*/
 		if(!empty($labdata))
 		{
 			$type_2=array('blood'=>$labdata['blood_report'],'urine'=>$labdata['urine_report'],'bfa'=>$labdata['body_fluid_analysis_report'],'csf'=>$labdata['csf_report']);
	 			
	 			foreach($type_2 as $key => $value)
	 			{
	 				$lab_obj_2=new LaboratoryDetails();
	 				$lab_obj_2->opd_id=$opd_id_org;
	 				$lab_obj_2->user_id=$user_id;
	 				$lab_obj_2->lab_type=$key;
	 				$lab_obj_2->report=$value;
	 				$lab_obj_2->refrences=1;
	 				$lab_obj_2->save();
	 			}
 		}
 		/*for form -2 library*/

 		/*for radiology */
 		if(!empty($radiology_data))
 		{
 			foreach($radiology_data as $r_data)
 			{
 				$radiology_obj_2=new Radiology();
	 			$radiology_obj_2->opd_id=$opd_id_org;
	 			$radiology_obj_2->type=$r_data['type'];
	 			$radiology_obj_2->bodyparts=$r_data['bodyPart'];
	 			$radiology_obj_2->qualifiers=$r_data['qualifier'];
	 			$radiology_obj_2->special_request=$r_data['special_request'];
	 			$radiology_obj_2->referance=1;
	 			$radiology_obj_2->details=$r_data['special_request'];
	 			$image_data=$r_data['imgData'];
	 			if($r_data['type']=='X-Rays')
	 			{
	 				$radiology_obj_2->subtype=$r_data['x_ray_type'];
	 			}
	 			else if($r_data['type']=='MRI')
	 			{
	 				if($radiology_obj_2->bodyparts=='Spine')
	 				{
	 					$radiology_obj_2->subtype=$r_data['spine_option_value'];
	 				}
	 			}
	 			$radiology_obj_2->save();
	 			$radiology_id=$radiology_obj_2->id;
	 			if(!empty($image_data))
	 			{
		 			foreach($image_data as $image)
		 			{
		 				$attachment=array();
		 				if($image['remove']!='true' && $image['type']=='image')
		 				{
		 					$r_attach_obj=new RadiologyAttachments();
		 					$r_attach_obj->opd_id=$opd_id_org;
		 					$r_attach_obj->radiology_id=$radiology_id;
		 					//$attachment['image']=$image['data'];
		 					//$r_attach_obj->image=$image['data'];
		 					$r_attach_obj->save();
		 					
		 				}
		 				
		 			}
	 			}
 			}

 		}

 		/*for radiology */
 		/*for examination*/
 		if(!empty($examinationData))
 		{

 			$examination_obj=new Examination();
 			$examination_obj->opd_id=$opd_id_org;
 			$examination_obj->user_id=$user_id;
 			$examination_obj->department=$department;
 			$examination_data=array();
 			foreach($examinationData as $key=>$value)
 			{
 				$exam[$key]=$value;
 				$examination_data[]=$exam;
 			}
 			//print_r($examination_data);exit;
 			$examination_obj->examination_data=json_encode($examination_data);
 			$examination_obj->save();
 		}
 		
 		return $opd_id_org;
 	}

 	/**
 	*   get number of OPD
 	*
 	*
 	*/

 	public function getOPDCounters($id){
 		$result = array();
		// this week results
		$fromDate =Carbon::now()->subDay(30)->startOfWeek()->toDateString(); // or ->format(..)
		$tillDate = Carbon::now()->toDateString();
		
		
		$result['today'] = OpdDetails::selectRaw('date(created_at) as date, COUNT(*) as count')
        ->where( DB::raw('date(created_at)'), [$tillDate] )
    	->orderBy('created_at', 'DESC')
    	->count();

		$result['month'] = OpdDetails::selectRaw('date(created_at) as date, COUNT(*) as count')
	    ->whereBetween( DB::raw('date(created_at)'), [$fromDate, $tillDate] )
	    ->orderBy('created_at', 'DESC')
	    ->count();	
		return $result;

 	}
 	
 }
?>