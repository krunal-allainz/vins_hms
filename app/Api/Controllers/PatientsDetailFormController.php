<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use euro_hms\Models\User;
use euro_hms\Models\PatientDetailsForm;
use euro_hms\Models\Receipt;
use euro_hms\Models\IpdDetails;
use euro_hms\Models\OpdDetails;
use Illuminate\Support\Facades\Response;
use Terbilang;
use DB;
use Carbon\Carbon;

class PatientsDetailFormController extends Controller
{
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
        // echo "<pre>";print_r($request->all());echo "</pre>";
        // dd($request->all());
        $data = $request->all()['patientData']['patientData'];
        $patientType = $request->all()['patientData']['patientType'];
        $uhid="VM";
        $year = date('y');
        // dd($patientUHId);

        if($data['case'] == 'new') {
           $patientD =  PatientDetailsForm::get()->last();
           $lastPatientId=$patientD->id;
           $newPatNo = sprintf("%04d",++$lastPatientId);
           $insertedPatientId=$uhid.$year.$newPatNo;

            $patientData = PatientDetailsForm::create([
           // 'date' => $request->date,
           // 'time' => $request->time,
          'uhid_no'=> $insertedPatientId,
          'first_name' => $data['fname'],
          'middle_name' => $data['mname'],
          'last_name' => $data['lname'],
          'dob' => $data['dob'],
          'gender' => $data['gender'],
          'address' => $data['address'],
          'ph_no' => $data['ph_no'],
          'mob_no' => $data['mob_no'],
          'references' => $data['reference_dr'],
          'consultant' => isset($data['consulting_dr'])?$data['consulting_dr']: '' ,
          'case_type' => $data['case'],
        ]);    
         $patientId = $patientData->id;
        } else {
            $patientId = 0;
          if($data['select_type'] == 'uhidNo'){
            $select_key = 'uhid_no';
          }else {
            $select_key = 'mob_no';
          }
            $patientData = PatientDetailsForm::where($select_key,$data['select_value'])->get()->first();
            if($patientData) {
                $patientId = $patientData->id;
            } else {
                 return ['code' => '300','patientData'=>'', 'message' => 'Record not found'];
            }

        }
        if ($patientId) {
            if($patientType == "opd"){
                $caseData = OpdDetails::create([
                    'patient_id'=> $patientId,
                    'uhid_no'=> $patientData->uhid_no,
                    'admit_datetime' =>  Carbon::now() 
                ]);
                if ($caseData) {
                    return ['code' => '200','data'=>['patientId'=> $patientId,'opdId' => $caseData->id,'uhid_no'=>$patientData->uhid_no], 'message' => 'Record Sucessfully created'];
                } else {
                    return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
                }    
            }
            else{
                 $caseData = IpdDetails::create([
                    'patient_id'=> $patientId,
                    'admit_datetime' =>  Carbon::now()
                ]);
                if ($caseData) {
                    return ['code' => '200','data'=>['patientId'=> $patientId,'ipdId' => $caseData->id,'uhid_no'=>$patientData->uhid_no], 'message' => 'Record Sucessfully created'];
                } else {
                    return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
                }
            }

        }
        return ['code' => '400','data'=>'', 'message' => 'Something goes wrong'];
        
        
        // return view('\index');
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
             return ['code' => '300','patientData'=>'', 'message' => 'Record not found'];
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
        $ipdDetails = IpdDetails::with('patientDetails')->get();
        if ($ipdDetails) {
                return ['code' => '200','data'=>$ipdDetails, 'message' => 'Record Sucessfully created'];
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
        $data =  Receipt::saveReceipt($request);
        $wordAmount = Terbilang::make($request->formData['amount']);
        $formData = [
            'name' => $request->formData['fullname'],
            'date' => $request->formData['date_receipt'] ,
            'consultant' => $request->formData['reference_dr'],
            'age' =>   $request->formData['age'],
            'gender' =>$request->formData['gender'],
            'wordamount' => $wordAmount
        ];
        /*$data = array_push($data,{'name' : $request->formData['fullname'],'date' : $request->formData['date_receipt'] });*/
        $view = view("receipt",['data'=> $data,'formData' => $formData])->render();
        return response()->json(['html'=>$view]);
       //  return redirect('receipt/view');
    }
}
