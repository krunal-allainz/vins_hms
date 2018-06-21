<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use euro_hms\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use euro_hms\Api\Providers\ReceiptServiceProvider;
use ReceiptService;
use euro_hms\Api\Contracts\ReceiptContract as ReceiptContract;
use euro_hms\Api\Repositories\ReceiptRepository;
use euro_hms\Models\Receipt;
use Terbilang;




class ReceiptController extends Controller
{
    //	
    public function __construct(){
    	$this->receiptObj = new ReceiptRepository();
    }


    /**
    * Get List Of Receipt
    * return array
    */
    public function getPatientReceiptList(){
    	$receiptData = $this->receiptObj->getReceiptList();
    	return $receiptData;
    }

    /**
    * Delete Receipt
    */

    public function deleteReceipt(Request $request){ 
    	$id = $request->id;
    	$receiptData = $this->receiptObj->deleteReceipt($id);

    	return $receiptData;
    }

    /**
    *  View Receipt By Id
    */
    public function viewreceipt(Request $request){
    	$id = $request->id;
    	$type = $request->type;
    	$receiptData = $this->receiptObj->viewreceipt($id,$type);
         $wordAmount = Terbilang::make($request->formData['amount']);  
        $data =  $receiptData;
        $data = [
        	'receiptNumber' =>  $receiptData->receipt_number,
        	'charges' =>	$receiptData->charges_name,
        	'amount' => $receiptData->amount,
        	'caseNo' => $receiptData->case_no,
            'date_receipt' => $receiptData->date, 
            'case_type' =>$receiptData->case_type,
            'procedures_charges' => 0,
            'other_charges' => ''
        ];

        $formData = [  
            'name' => $receiptData->patientDetails->first_name.''.$receiptData->patientDetails->last_name,  
            'consultant' => $receiptData->patientDetails->consultant,    
            'age' =>   $receiptData->patientDetails->dob,  
            'gender' =>$receiptData->patientDetails->gender,   
            'wordamount' =>  $receiptData->amount, 
            'total_amount '  => 0,
        ]; 
      //  dd($formData);
        /*$data = array_push($data,{'name' : $request->formData['fullname'],'date' : $request->formData['date_receipt'] });*/  
        $view = view("receipt",['data'=> $data,'formData' => $formData])->render();    
        return response()->json(['html'=>$view]);  
    	//return $receiptData; 
    }

    /**
     * [getChargesTypes description]
     * @return [array] [get all charges type for receipt]
     */
    public function getChargesTypes()
    {
    	$all=$this->receiptObj->getChargesTypes();
    	return  $all;
    }


}
