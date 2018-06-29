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
use euro_hms\Api\Repositories\UserRepository;

class ReceiptController extends Controller
{
    //	
    public function __construct(){
    	$this->receiptObj = new ReceiptRepository();
        $this->userOBJ = new UserRepository();
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
    public function viewReceipt(Request $request){
    	$id = $request->id;
    	$type = $request->type;
    	$receiptData = $this->receiptObj->getReceiptDetailsById($id);
        //print_r($receiptData);exit;
        $all_amt=$receiptData['charges']+$receiptData['procedures_charges']+$receiptData['other_charges'];
        $wordAmount = Terbilang::make($all_amt); 
        $consultant_name=$this->userOBJ->getUserNameById($receiptData['consult_id']);  
        $formData = [  
            'name' => $receiptData['fullname'],  
            'date' => $receiptData['date_receipt'] , 
            'consultant' =>$consultant_name,    
            'age' =>   $receiptData['age'],  
            'gender' =>$receiptData['gender'],   
            'wordamount' => $wordAmount  ,
            'total_amount'  =>$all_amt
        ]; 
        $data=$receiptData;
       
        $view = view("receipt",['data'=> $data,'formData' => $formData])->render();    
        return response()->json(['html'=>$view]);  
    	
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
