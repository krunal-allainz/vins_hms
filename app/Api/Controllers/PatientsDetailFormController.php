<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\PatientDetailsForm;
use euro_hms\Models\IpdDetails;
use euro_hms\Models\OpdDetails;
use Illuminate\Support\Facades\Response;
use euro_hms\Models\Receipt;
use euro_hms\Api\Repositories\ReceiptRepository;
use euro_hms\Api\Repositories\PatientDetailsFormRepository;
use Terbilang;
use DB;
use Carbon\Carbon;
use euro_hms\Api\Repositories\UserRepository;
use euro_hms\Api\Repositories\PatientRepository;

class PatientsDetailFormController extends Controller
{

    public function __construct(){
        $this->userOBJ = new UserRepository();
        $this->patientOBJ = new PatientRepository();
        $this->patientDetailObj = new PatientDetailsFormRepository();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */  
    public function create()
    {
        //
        return view('/PatientsDetailForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return $this->patientOBJ->patient_add($request); 
    }
    public function getPatientDetailBysearch(Request $request)
    {
        $data = $request->all()['searchData'];
        $patientId = 0;
        if($data['select_type'] == 'uhidNo'){
            $select_key = 'uhid_no';
        }else {
            $select_key = 'mob_no';
        }
        $patientData = PatientDetailsForm::where($select_key,$data['select_value'])->get()->first();
        
        if($patientData) {
             return ['code' => '200','data'=>$patientData, 'message' => 'Patient record '];
        } else {
             //return ['code' => '300','patientData'=>'', 'message' => 'Record not found'];
             return ['code' => '300','data'=>'', 'message' => 'Something went wrong'];
        }
       

    }

    /**
     * get all details of patient.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDetails($id)
    {
        // echo "<pre>";print_r($id);echo "</pre>";exit;
        if($id!='') {
            $details = IpdDetails::with('patientDetails')->where('id',$id)->first();
            // dd($details);
            if ($details) {
                return ['code' => '200','data'=>$details, 'message' => 'Record Sucessfully created'];
            } else {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }
        }
    }
    public function getAllPatientName() {
        $patientDetails = PatientDetailsForm::get();
        if ($patientDetails) {
            return ['code' => '200','data'=>$patientDetails, 'message' => 'Record Sucessfully created'];
        } else {
            return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    /**    
    *   print patient recept   
    *      
    *      
    *      
    */ 
    public function printReceipt(Request $request,$content = array()){ 
   
        //return response()->view('receipt', $content, 200)->header('Content-Type','application/pdf'); 
   
           /* $contents = view('receipt', $content,200);   
           // $response = Response::make($contents, $statusCode);  
            $response->header('Content-Type', 'application/pdf');  
            return $response;*/    
   
            return response()->view('receipt', $content, 200); 
   
    }  
   
    public function saveReceiptData(Request $request){ 

        $data =  ReceiptRepository::saveReceipt($request); 
        $all_amt=$request->formData['chargeAmount']+$request->formData['procedure_charges']+$request->formData['other_charges'];
        $wordAmount = Terbilang::make($all_amt); 
        $consultant_name=$this->userOBJ->getUserNameById($request->formData['consult_id']);  
        $formData = [  
            'name' => $request->formData['fullname'],  
            'date' => $request->formData['date_receipt'] , 
            'consultant' =>$consultant_name,    
            'age' =>   $request->formData['age'],  
            'gender' =>$request->formData['gender'],   
            'wordamount' => $wordAmount  ,
            'total_amount'  =>$all_amt
        ]; 
        
        $view = view("receipt",['data'=> $data,'formData' => $formData])->render();    
        return response()->json(['html'=>$view]);  
           
    }

    /**
    */
    public  function getAllPatientNameByConsultDoctor(Request $request){
            $consultDr = $request->doctor;
            $section   =  $request->section;
            $patientDetails = $this->patientOBJ->getPatientListByConsultDr($consultDr, $section);
             if($patientDetails){
               return  ['code' => '200','data'=>$patientDetails, 'message' => 'Record Sucessfully created'];
             }else{
                  return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
             }     
    }

    /**
     * [getPatientDetailsById description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getPatientDetailsById(Request $request)
    {  
        $id=$request->id;
        $patientDetails = $this->patientOBJ->getPatientDetailsById($id);
        if ($patientDetails) {
            return ['code' => '200','data'=>$patientDetails, 'message' => 'Record Sucessfully created'];
        } else {
            return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
        }
    }

    /**

     * [getOPDIdByPatientId description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getOPDIdByPatientId(Request $request)
    {
        $pid=$request->patient_id;
        $opdDetails =  $this->patientOBJ->getOPDIdByPatientId($pid);
        if ($opdDetails) {
            return ['code' => '200','data'=>$opdDetails, 'message' => 'Record Sucessfully created'];
        } else {
            return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
        }
    }

    public function patientCheckUpDetails(Request $request)
    {
        $oid=$request->opd_id;
        $checkupdetails =  $this->patientOBJ->patientCheckUpDetailsByOpdId($oid);
        if ($checkupdetails) {
            return ['code' => '200','data'=>$checkupdetails, 'message' => 'Record Sucessfully created'];
        } else {
            return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
        }
    }
    /*
    * get  number of patient by type
    * 
    *
    */
    public function getNumberOfPatient(Request $request){
        $type = $request->type;
        $id = $request->id;
        $patientTotal = $this->patientDetailObj->getNumberOfPatient($type,$id);
        if ($patientTotal) {
            return ['code' => '200','data'=>$patientTotal, 'message' => 'Record Sucessfully created'];
        } else {
            return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
        }


    }

    /**
    * get patient list with pagination of perticuler 
    *
    */

    public function getPatientListByDoctor(Request $request){
        $id = $request->id;
        $patientList = $this->patientDetailObj->getPatientListByDoctor($id);
        if ($patientList) {
            return ['code' => '200','data'=>$patientList, 'message' => 'Record Sucessfully created'];
        } else {
            return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
        }
    }
}
