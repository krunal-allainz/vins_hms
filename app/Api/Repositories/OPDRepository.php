<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\OpdDetails;
 use euro_hms\Models\Laboratory;
 use euro_hms\Models\PrescriptionDetails;
 use euro_hms\Models\OPDReferences;
 use euro_hms\Models\Radiology;
 use euro_hms\Models\CrossDetails;
 use euro_hms\Models\LaboratoryDetails;
 use euro_hms\Models\PatientCheckUp;
 use euro_hms\Models\Examination;
 use euro_hms\Models\RadiologyAttachments;
 use euro_hms\Models\PhysiotherapyDetails;
 use euro_hms\Api\Repositories\PatientRepository;
 use euro_hms\Api\Repositories\UserRepository;
 use Carbon\Carbon;
 use DB;

 class OPDRepository 
 {

 	/**
 	 * [__construct description]
 	 */
 	public function __construct(){
        $this->objPatient = new PatientRepository();
        $this->objUser = new UserRepository();
    }
    //

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
 		$cross_opd_data=$request->all()['data']['opdData']['reffreal_cross_array'];
 		$lab_opd_data=$request->all()['data']['opdData']['reffreal_laboratory_array'];
 		$radio_opd_data=$request->all()['data']['opdData']['reffreal_radiology_array'];

 		if($department=='Vascular')
 		{
 			$examinationData=$request->all()['data']['vascExaminationData'];
 		}
 		else
 		{
 			$examinationData=$request->all()['data']['neuroExaminationData'];
 		}
 		
 		$opd_id_org=$data['opd_id'];
 		
 		
 		//for patient check up
 		if($opd_id_org){
 			$data_patient_checkup=array();
			$data_patient_checkup['height']=$data['height'];
			$data_patient_checkup['weight']=$data['weight'];
			if(isset($data['bmi']))
			{
				$data_patient_checkup['bmi']=$data['bmi'];
			}
			$data_patient_checkup['vitals']=$data['vitals'];
			$data_patient_checkup['pulse']=$data['pulse'];
			$data_patient_checkup['bp']=$data['bp_systolic'].'/'.$data['bp_diastolic'];
			$data_patient_checkup['temp']=$data['temp'];
			$data_patient_checkup['pain']=$data['pain_value'];
			$data_patient_checkup['updated_at']=Carbon::now();
			$data_patient_checkup=PatientCheckUp::where('opd_id',$opd_id_org)->update($data_patient_checkup);
 		}
		
 		
		
		//opd details
		if($opd_id_org)
		{
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
		 		//$opdData->consultant_id=$data['consulting_dr'];
		 		$opdData->save();
		}
 		//save prescription
 		if(!empty($prescription_data))
 		{

 			foreach($prescription_data as $prescription)
	 		{
	 			$prescription_obj=new PrescriptionDetails();
	 			$prescription_obj->opd_id=$opd_id_org;
	 			$prescription_obj->user_id=$user_id;
	 			$prescription_obj->prescription_drug_id=$prescription['pid'];
	 			$prescription_obj->how_many_times=$prescription['type'];
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
 		
 		//opd cross references 
 		if(!empty($cross_opd_data))
 		{	
 			foreach($cross_opd_data as $cross)
 			{
 				$cross_obj=new CrossDetails();
 				$cross_obj->opd_id=$opd_id_org;
 				$cross_obj->user_id=$user_id;
 				$cross_obj->cross_type=$cross['subtype'];
 				$cross_obj->cross_value=$cross['value'];
 				$cross_obj->save();
 			}
 		}
 		//opd laboratory references 
 		if(!empty($lab_opd_data))
 		{	
 			foreach($lab_opd_data as $lab)
 			{
 				$lab_obj=new LaboratoryDetails();
	 			$lab_obj->referance=0;
 				$lab_obj->opd_id=$opd_id_org;
 				$lab_obj->user_id=$user_id;
 				$lab_obj->laboratory_id=$lab['lab_id'];
 				$lab_obj->remove='false';
 				$lab_obj->save();
 			}
 		}
 		//opd radiology references 
 		if(!empty($radio_opd_data))
 		{	
 			foreach($radio_opd_data as $radio)
 			{
 				$radiology_obj=new Radiology();
	 			$radiology_obj->opd_id=$opd_id_org;
	 			$radiology_obj->user_id=$user_id;
	 			$radiology_obj->type=$radio['type'];
	 			$radiology_obj->bodyparts=$radio['bodyPart'];
	 			$radiology_obj->qualifiers=$radio['qualifier'];
	 			$radiology_obj->special_request=$radio['special_request'];
	 			$radiology_obj->referance=1;
	 			$radiology_obj->details=$radio['textData'];
	 			if($radio['type']=='X-Rays')
	 			{
	 				$radiology_obj->subtype = '';
	 			}
	 			else if($radio['type']=='MRI')
	 			{
	 				if($radiology_obj->bodyparts=='Spine')
	 				{
	 					$radiology_obj->subtype=$radio['spine_option_value'];
	 				}
	 			}
	 			$radiology_obj->save();
 			}
 		}

 		/*for form -2 library*/
 		if(!empty($labdata))
 		{
 			//print_r($labdata);exit;
 			foreach($labdata['type'] as $lab)
 			{
 				
				$lab_obj_2=new LaboratoryDetails();
				$lab_obj_2->referance=1;
 				$lab_obj_2->opd_id=$opd_id_org;
 				$lab_obj_2->user_id=$user_id;
 				$lab_obj_2->laboratory_id=$lab['id'];
 				$lab_obj_2->date=Carbon::createFromFormat('d-m-Y', $lab['lab_date']['time'])->format('Y-m-d');
 				$lab_obj_2->result=$lab['result'];
 				//$lab_obj_2->assign_dr=$lab['assign'];
 				$lab_obj_2->remove='false';
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
	 			$radiology_obj_2->user_id=$user_id;
	 			$radiology_obj_2->type=$r_data['type'];
	 			$radiology_obj_2->bodyparts=$r_data['bodyPart'];
	 			$radiology_obj_2->qualifiers=$r_data['qualifier'];
	 			$radiology_obj_2->special_request=$r_data['special_request'];
	 			$radiology_obj_2->referance=1;
	 			$radiology_obj_2->details=$r_data['textData'];
	 			$image_data=$r_data['imgData'];
	 			if($r_data['type']=='X-Rays')
	 			{
	 				// $radiology_obj_2->subtype=$r_data['x_ray_type'];
	 				$radiology_obj_2->subtype = '';
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
 		$patient_data=array();
 		if($opd_id_org!=0 && $opd_id_org!='')
 		{
 			$opd_details=OpdDetails::with('patientDetails')->where('id',$opd_id_org)->first();
 			$patient_data['patient_id']=$opd_details->patient_id;
 			$patient_data['opd_id']=$opd_details->opd_id;
 			$patient_data['p_name']=$opd_details['patientDetails']->first_name.' '.$opd_details['patientDetails']->last_name;
 			if($opd_details['patientDetails']->gender=='M')
 				$patient_data['gender']='Male';
 			else
 				$patient_data['gender']='Female';
 			$patient_data['age']=$opd_details['patientDetails']->age;
 			$patient_data['consultant']=$this->objUser->getUserNameById($opd_details['patientDetails']->consultant_id);
 			$patient_data['consult_id']=$opd_details['patientDetails']->consultant_id;
 			$patient_data['department']=$this->objUser->getDepartmentById($opd_details['patientDetails']->consultant_id);
 		}
 		if(count($patient_data)>0)
 		{
 			return ['code' => '200','data'=>$patient_data, 'message' => 'Record Sucessfully created'];
 		}
 		else
 		{
 			return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
 		}
 		
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

 	public function savePhysiotherapy($request)
 	{
 		$data=$request->all()['physioData'];
 		//print_r($data);exit;
 		$physio_details=new PhysiotherapyDetails();
 		//$physio_details->opd_id=$data['opd_id'];
 		$physio_details->user_id=$data['user_id'];
 		$physio_details->patient_id=$data['patient_id'];
 		$physio_details->uhid_no=$data['uhid_no'];
 		$physio_details->name=$data['name'];
 		$physio_details->age=$data['age'];
 		if($data['doa']['time']!='')
 			$physio_details->date_of_assessment=Carbon::createFromFormat('d-m-Y', $data['doa']['time'])->format('Y-m-d');
 		$physio_details->chief_complaints=$data['chief_complaints'];
 		$physio_details->history=$data['history'];
 		$physio_details->observation_gait=$data['observation_gait'];
 		$physio_details->observation_posture=$data['observation_posture'];
 		$physio_details->palpation_tenderness=$data['palpation_tenderness'];
 		$physio_details->palpation_muscle=$data['palpation_muscle'];
 		$physio_details->palpation_trigger=$data['palpation_trigger'];
 		$physio_details->pain_type=$data['pain_type'];
 		$physio_details->pain_site=$data['pain_site'];
 		$physio_details->pain_aggravating=$data['pain_aggravating'];
 		$physio_details->pain_relieving=$data['pain_relieving'];
 		$physio_details->pain_wrong=$data['pain_wrong'];
 		$physio_details->sensory_assessment=$data['sensory_assessment'];
 		$physio_details->rom=$data['rom'];
 		$physio_details->balance_examination=$data['balance_examination'];
 		$physio_details->diagnosis=$data['diagnosis'];
 		$physio_details->treatment_plan=$data['treatment_plan'];
 		if($data['nfd']['time']!='')
 			$physio_details->follow_date=Carbon::createFromFormat('d-m-Y', $data['nfd']['time'])->format('Y-m-d');
 		$physio_details->signature_therapist=$data['signature_therapist'];
 		$physio_details->name_therapist=$data['name_therapist'];
 		$physio_details->form_date=Carbon::createFromFormat('d-m-Y h:ia', $data['form_date'])->format('Y-m-d H:i:s');
 		$physio_details->save();

 		return $physio_details->id;

 	}
 	
 }
?>