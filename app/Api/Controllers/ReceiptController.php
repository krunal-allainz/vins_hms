<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use euro_hms\Api\Providers\ReceiptServiceProvider;
use ReceiptService;
use euro_hms\Api\Contracts\ReceiptContract as ReceiptContract;
use euro_hms\Api\Repositories\ReceiptRepository;
use euro_hms\Models\Receipt;



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
    	dd($receiptData);
    	return $receiptData;
    }
}
