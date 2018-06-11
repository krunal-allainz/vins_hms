<?php

namespace euro_hms\Api\Controllers;


use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use euro_hms\Models\PatientDetailsForm;
use euro_hms\Models\OpdDetails;
use Illuminate\Support\Facades\Response;
use euro_hms\Custom\Helper\Common;
use DB;

class OPDDetailsFromController extends Controller
{
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
}
