<?php
  namespace euro_hms\Api\Repositories;


 use euro_hms\Models\PatientCheckUp;
 use euro_hms\Models\PatientDetailsForm;
 use Carbon\Carbon;
 use DB;
 use euro_hms\Api\Repositories\UserRepository;
 use euro_hms\Models\OpdDetails;
 use euro_hms\Models\IpdDetails;
 use euro_hms\Models\PatientCaseManagment;
 use euro_hms\Models\TokenManagment;

 class PatientRepository 
 {

    public function __construct(){
        $this->patientDetailObj = new PatientDetailsForm();
    }

 	public function patient_add($request) 	
 	{ 
 		$data = $request->all()['patientData']['patientData'];
        $patientType = $request->all()['patientData']['patientType'];
        $a_time=$data['appointment_datetime']['time'];
        $user_id=$data['consulting_dr'];
        $referance=$data['reference_dr'];
 		    $uhid="VN";
        $year = date('y');
        $insertedPatientId="";
        $sectionId = '';
        $opdInsert = 0;

      
        if($data['case'] == 'new') {
        	$patientData=new PatientDetailsForm();
           $opdInsert  = 1;
        }
        else
        {
        	$patientId =$data['patient_id'];
           if($data['case_type']  == 'new_consult'){
              $opdInsert = 1;
          }else{
             $opdData =  $this->getLastOPDIdByPatientId($patientId);
             $opdInsert = 0;
          }
        	if($patientId!=0 && $patientId!="")

        	{
        		$patientData=PatientDetailsForm::findOrFail($patientId);
        	}
        	else
        	{
        		return ['code' => '300','data'=>'', 'message' => 'Record not found'];
        	}
        	
        }
        /*patient details*/
    $patientData->first_name=$data['fname'];
		$patientData->middle_name=$data['mname'];
		$patientData->last_name=$data['lname'];
    $patientData->dob= $data['dob']['time'];
		$patientData->gender=$data['gender'];
    $patientData->age=$data['age'];
    $patientData->type=$data['type'];
		$patientData->address=$data['address'];
		$patientData->ph_no=$data['ph_no'];
		$patientData->mob_no=$data['mob_no'];
		$patientData->references=$data['reference_dr'];
		$patientData->consultant_id=$data['consulting_dr'];
		$patientData->consultant=$data['consulting_dr'];
		$patientData->case_type=$data['case'];
		$patientData->appointment_datetime=$data['appointment_datetime']['time'];
		/*for patient details end*/

        if($data['case'] == 'new') {
           $patientD =  PatientDetailsForm::orderBy('id', 'desc')->first();
            if($patientD == null){   
                $lastPatientId = 1; 
            }else{  
                $lastPatientId = $patientD->id + 1;  
            }
           $newPatNo = sprintf("%04d",$lastPatientId);
           $insertedPatientId=$uhid.$year.$newPatNo;
			/*for patient details start*/
			$patientData->uhid_no=$insertedPatientId;
			$patientData->created_at=Carbon::now();
		    $patientData->updated_at=Carbon::now();
			$patientData->save();
			$patientId = $patientData->id;
			/*for patient details end*/
        } else {
	        /*for patient details start*/
    			$patientData->updated_at=Carbon::now();
    			$patientData->save();
    			/*for patient details end*/
        }

        if ($patientId) {

            if($patientType == "opd"){
              if($opdInsert == 1){ 
                  $opd_prefix="OPD";
                  $opdId =  OpdDetails::orderBy('id', 'desc')->first();
                  if($opdId == null){   
                    $lastOPD = 1; 
                  }else{  
                    $lastOPD = $opdId->id + 1;  
                  }

                  $newPatOPDNo = sprintf("%04d",$lastOPD);
                  $insertedOPDId=$opd_prefix.$year.$newPatOPDNo;
                  $sectionId = $insertedOPDId;

                    $caseData = OpdDetails::create([
                      'opd_id'=>$insertedOPDId,
                        'patient_id'=> $patientId,
                        'consultant_id'=> $user_id,
                        'references'=> $referance,
                        'uhid_no'=> $patientData->uhid_no,
                        'admit_datetime' =>  Carbon::now(),
                        'appointment_datetime'=> $a_time
                    ]);

                    

                    $tokenInsert =  TokenManagment::create([
                    'token'=>$data['token_no'],
                    'date' =>  date('d-m-Y H:i:s'),
                    'opd_id'=>$insertedOPDId,
                    'patient_id' =>$patientId,
                    'status' =>$data['token_status'],
                   ]);

                   /* start add case management data */
                  $patientCaseInsert = PatientCaseManagment::create([
                    'case_type' =>$data['case_type'],
                    'section_type' => $patientType,
                    'section_id' => $sectionId,
                    'patient_id' =>$patientId,
                    'status' =>true,
                    'created_at' =>Carbon::now(),
                    'updated_at' =>Carbon::now(),

                 ]);


                if ($caseData) {
                    return ['code' => '200','data'=>['patientId'=> $patientId,'opdId' => $caseData->id,'uhid_no'=>$patientData->uhid_no], 'message' => 'Record Sucessfully created'];
                } else {
                    return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
                }   

              }else{ 
                $insertedOPDId = $opdData->opd_id;
                 $sectionId    = $opdData->opd_id;
                   $tokenInsert =  TokenManagment::create([
                    'token'=>$data['token_no'],
                    'date' =>  date('d-m-Y H:i:s'),
                    'opd_id'=>$insertedOPDId,
                    'patient_id' =>$patientId,
                    'status' =>$data['token_status'],
                   ]);

                   /* start add case management data */
                  $patientCaseInsert = PatientCaseManagment::create([
                    'case_type' =>$data['case_type'],
                    'section_type' => $patientType,
                    'section_id' => $sectionId,
                    'patient_id' =>$patientId,
                    'status' =>true,
                    'created_at' =>Carbon::now(),
                    'updated_at' =>Carbon::now(),

                 ]);

                  if ($tokenInsert && $patientCaseInsert) {
                    return ['code' => '200','data'=>['token'=> $data['token_no'],'opdId' => $insertedOPDId,'uhid_no'=>$patientData->uhid_no], 'message' => 'Record Sucessfully created'];
                } else {
                    return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
                }   

              }
            	/*to get OPD Id*/

            /* end add case management data */
  
            }
            else{
            	 $ipd_prefix="IPD";
        		   $year = date('y');
		           $ipdId =  IpdDetails::orderBy('id', 'desc')->first();
		           if($ipdId == null){   
		              $lastIPD = 1; 
		           }else{  
		             $lastIPD = $ipdId->id + 1;  
		           }
		       	    $newPatIPDNo = sprintf("%04d",$lastIPD);
                
           		  $insertedIPDId=$ipd_prefix.$year.$newPatIPDNo;
                $sectionId = $insertedIPDId;
                   $caseData = IpdDetails::create([
                 	  'ipd_id'=>$insertedIPDId,
                    'patient_id'=> $patientId,
                    'uhid_no'=> $patientData->uhid_no,
                    'admit_datetime' =>  Carbon::now(),
                     'appointment_datetime'=>$patientData->appointment_datetime
                ]);

                    /* start add case management data */
                  PatientCaseManagment::create([
                    'case_type' =>$data['case_type'],
                    'section_type' => $patientType,
                    'section_id' => $sectionId,
                    'patient_id' =>$patientId,
                    'status' =>true,
                    'created_at' =>Carbon::now(),
                    'updated_at' =>Carbon::now(),

                 ]);
            
                /* end add case management data */
              
                if ($caseData) {
                    return ['code' => '200','data'=>['patientId'=> $patientId,'ipdId' => $caseData->id,'uhid_no'=>$patientData->uhid_no], 'message' => 'Record Sucessfully created'];
                } else {
                    return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
                }
            }
            

        }
        return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
 	}

	/**
	 * [getPatientDetailsById description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getPatientDetailsById($id)
 	{
 		$get_patient_details=PatientDetailsForm::where('id',$id)->first();
 		return $get_patient_details;
 	}


   /**
     * [getOPDIdByPatientId description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getLastOPDIdByPatientId($pid)
    {
        return OpdDetails::where('patient_id',$pid)->orderBy('id', 'desc')->first();
    }

    /**
     * [getOPDIdByPatientId description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getOPDIdByPatientId($pid)
    {
        return OpdDetails::where('patient_id',$pid)->get();
    }
    /**
     * [getPatientListByConsultDr description]
     * @param  [type] $doctor  [description]
     * @param  [type] $section [description]
     * @return [type]          [description]
     */
    public function getPatientListByConsultDr($doctor,$section){
       $result = array();
       $patientList =PatientDetailsForm::where('consultant_id',$doctor)->get();
      foreach ($patientList as $key=>$value){
         $result[$key] = [
            'id' => $value->id,
            'name' =>  $value->first_name.' '.$value->last_name,
            'consultant' =>  $value->consultant_id,
            'dob' => $value->dob,
            'gender' =>  $value->gender,
            'address' =>  $value->address,
            'uhid_no' =>  $value->uhid_no
          ] ;
      }
      return  $result;
    }

    /**
     * [patientCheckUpDetailsByOpdId description]
     * @param  [type] $oid [description]
     * @return [type]      [description]
     */
    public function patientCheckUpDetailsByOpdId($oid)
    {
        return PatientCheckUp::where('opd_id',$oid)->orderBy('id', 'desc')->first();
    }

   /**
    * [getPatientListBySearch description]
    * @param  [type] $request [description]
    * @return [type]          [description]
    */
    public function getPatientListBySearch($request)
    {
        $data = $request->all()['searchData'];
        $search_data=$request->all()['searchData']['search_data'];
        $user_id=$data['user_id'];
        $search_by=$data['search_by'];
       $user_type=$search_data['user_type'];
        // dd($search_by);
        $date="";
        if($search_data['select_type_dob']['time']!="")
          $date=Carbon::createFromFormat('d-m-Y', $search_data['select_type_dob']['time'])->format('Y-m-d');

        $patientList=array();
        $tes_query=0;
              $reportQuery= PatientDetailsForm::join('opd_details', function ($join) {
                  $join->on('opd_details.patient_id', '=', 'patient_details.id');
               });
                  if(($user_type==1 ||  $user_type==2) && ($search_by=='All'))
                  {
                      $reportQuery->whereDate('opd_details.appointment_datetime',Carbon::today()->format('Y-m-d'));
                  }
                  if(($user_type==1 ||  $user_type==2) && ($search_by=='last_week'))
                  {
                      $to=Carbon::now()->today()->format('Y-m-d');

                      $from=Carbon::now()->subDays(7)->format('Y-m-d');
                      $reportQuery->whereDate('opd_details.appointment_datetime','<=',$to)
                      ->whereDate('opd_details.appointment_datetime','>=',$from)
                      ->first();

                  }
                   $reportQuery->where(function ($query2) use ($user_id) {
                        if($user_id!=0 && $user_id!="")
                        {
                           $query2->where('opd_details.consultant_id',$user_id);
                        }
                  });
            
             $reportQuery->where(function ($query) use ($search_data,$date,$tes_query,$user_id) {
                
                
                $all_stnames=explode(' ',$search_data['name']);

                if($search_data['name']!='' && $tes_query==0)
                {
                    foreach($all_stnames as $st_name)
                    {
                        $query->where('first_name', 'like', '%'.$st_name.'%')
                      ->orWhere('middle_name', 'like', '%'.$st_name.'%')
                      ->orWhere('last_name', 'like', '%'.$st_name.'%');
                    }
                    $tes_query=1;
                   
                }
                else if($search_data['name']!='')
                {
                  foreach($all_stnames as $st_name)
                    {
                      $query->orWhere('first_name', 'like', '%'.$st_name.'%')
                      ->orWhere('middle_name', 'like', '%'.$st_name.'%')
                      ->orWhere('last_name', 'like', '%'.$st_name.'%');
                    }
                }
                if($search_data['uhid_no']!='' && $tes_query==0)
                {
                    $query->where('patient_details.uhid_no',$search_data['uhid_no']);
                    $tes_query=1;
                }
                else if($search_data['uhid_no']!='')
                {
                    $query->orWhere('patient_details.uhid_no',$search_data['uhid_no']);
                }
                 if($date!='' && $tes_query==0)
                 {
                     $query->whereDate('dob', $date);
                     $tes_query=1;
                 }
                 else if($date!='')
                {
                     $query->orWhereRaw("DATE(dob) = ?", [$date]);
                } 
                 if($search_data['mobile_no']!=''  && $tes_query==0)   
                 {
                    $query->where('mob_no', 'like', '%'.$search_data['mobile_no'].'%');
                    $tes_query=1;
                 }
                 else if($search_data['mobile_no']!='')
                 {
                    $query->orWhere('mob_no', 'like', '%'.$search_data['mobile_no'].'%');
                 }
            });
             $reportQuery->groupBy('opd_details.patient_id')->orderBy('opd_details.created_at','desc');
            $patientList = $reportQuery->select(
              'patient_details.id',
              'patient_details.first_name',
              'patient_details.middle_name',
              'patient_details.last_name',
              'patient_details.uhid_no',
              'patient_details.age',
              'patient_details.dob',
              'patient_details.mob_no',
              'opd_details.appointment_datetime',
              'opd_details.consultant_id'
            )->get();
        if(count($patientList)>0) {
             return ['code' => '200','data'=>$patientList, 'message' => 'Patient record '];
        } else {
             //return ['code' => '300','patientData'=>'', 'message' => 'Record not found'];
             return ['code' => '300','data'=>'', 'message' => 'Something went wrong'];
        }
    }

    public function addPatientCheckup($request){
        
            /*for patient details start*/
        $data = $request->all()['pData']['patientData'];
        $userId = $request->all()['pData']['userId'];
        $data_patient_checkup=new PatientCheckUp;
        $data_patient_checkup->user_id=$userId;
        $data_patient_checkup->height=$data['height'];
        $data_patient_checkup->weight=$data['weight'];
        $data_patient_checkup->bmi=$data['bmi'];
        $data_patient_checkup->vitals=$data['vitals'];
        $data_patient_checkup->pulse=$data['pulse'];
        $data_patient_checkup->bp=$data['bp_systolic'].'/'.$data['bp_diastolic'];
        $data_patient_checkup->temp=$data['temp'];
        $data_patient_checkup->pain=$data['pain_value'];
        $data_patient_checkup->opd_id=$data['opd_id'];
        $data_patient_checkup->patient_id=$data['patient_id'];
        $data_patient_checkup->created_at=Carbon::now();
        $data_patient_checkup->updated_at=Carbon::now();
        $data_patient_checkup->save();
        if ($data_patient_checkup) {
            return ['code' => '200','data'=>$data_patient_checkup, 'message' => 'Record Sucessfully created'];
        } else {
            return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
        }
        /*to add data */
    }

    public function tokenExist($token){
      $date =  date('Y-m-d');
      return TokenManagment::where('date','like',$date.'%')->Where('token',$token)->count();
    }

    public function getPatientList($type,$noOfRecord,$id){

     return PatientDetailsForm::where('consultant_id',$id)->paginate($noOfRecord);
     /* if($type == 'opd')
      {

      }*/
    }

    public function getPatientDetailInfo($patientId){

          $result = array();
          $result['patientDetail'] =  PatientDetailsForm::where('id',$patientId)->first();
          $result['opdDetails'] = OpdDetails::where('patient_id',$patientId)->get();
          $result['tokenDetail'] = TokenManagment::where('patient_id',$patientId)->get();
          $result['caseDetail'] = PatientCaseManagment::where('patient_id',$patientId)->get();
          return $result;

    }
 }
?>