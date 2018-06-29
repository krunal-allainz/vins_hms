<?php

namespace euro_hms\Api\Controllers;


use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use euro_hms\Models\PatientDetailsForm;
use euro_hms\Models\OpdDetails;
use euro_hms\Models\Receipt;
use Illuminate\Support\Facades\Response;
use euro_hms\Custom\Helper\Common;
use euro_hms\Api\Repositories\OPDRepository;
use DB;

class OPDDetailsFromController extends Controller
{

     public function __construct(){
        $this->opdObj = new OPDRepository();
    }
    //
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
     * get all details of patient.
     *
     * @param  int  $patientId
     * @return \Illuminate\Http\Response
     */
    public function getDetails($patientId)
    {
         
        if($patientId!='') {

            $details = OpdDetails::with('patientDetails')->where('patient_id',$patientId)->first();
          
            if ($details) {
                return ['code' => '200','data'=>$details, 'message' => 'Record Sucessfully Generated'];
            } else {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }
        }
    }

    /**
    * get opd cse detail in array.
    * @param  int  $OPDCaseData
    * @return \Illuminate\Http\Response
    */
    public function printCaseData(Request $request)
    {
        
        $data =  $request->OPDCaseData;
        $url = common::getCurrentSiteUrl();

         return view("opdcaseprint",compact('data','url')); 

          
    }

    /**
    * get opd reciept list in array.
    * @return opdlist 
    */
    public function receiptlist()
    {
        $records=DB::table('patient_details')
            ->join('receipt', 'patient_details.id', '=', 'receipt.patient_id')
            ->select('patient_details.*', 'receipt.*,receipt.id as rid,patient_details.id as pid')
            ->groupBy('receipt.id')
            ->get();
        return $records;

    }

    /**
    * get success message.
    * @param  int  $rid(receipt id)
    * @return receipt deleted 
    */
    public function deletereceipt($rid)
    {
       $delete= Receipt::where('id', $rid)->delete();
        if ($delete) {
                return ['code' => '200','data'=>'', 'message' => 'Receipt successfully deleted'];
            } else {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }
    }

    /**
    * get reciept data in array by id.
    * @param  int  $rid(receipt id)
    * @return receipt detail 
    */
    public function getreceiptDetails($rid)
    {
      $records=DB::table('patient_details')
            ->join('receipt', 'patient_details.id', '=', 'receipt.patient_id')
            ->select('patient_details.*', 'receipt.*,receipt.id as rid,patient_details.id as pid')
            ->where('receipt.id', $rid)
            ->first();
        return $records;
    }
    /**
     * [getLaboratoryData description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getLaboratoryData(Request $request)
    {
        $data_array=$request->all()['data'];
        if($data_array['name']=='type')
        {
            $type_data=$this->opdObj->getLaboratoryByType($data_array['value']);
            if($type_data)
            {
                return ['code' => '200','data'=>$type_data, 'message' => 'Record Sucessfully created'];
            }
            else
            {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }
           
        }
        else if ($data_array['name']=='id')
        {
           
          $id_data=$this->opdObj->getLabpratoryNameById($data_array['value']);
            if($id_data)
            {
                return ['code' => '200','data'=>$id_data, 'message' => 'Record Sucessfully created'];
            }
            else
            {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }
        }
        
    }

    public function getAllLaboratoryList()
    {
            $get_list=$this->opdObj->getAllLaboratoryList();
            if($get_list)
            {
                return ['code' => '200','data'=>$get_list, 'message' => 'Record Sucessfully created'];
            }
            else
            {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }
    }
    

   
}
