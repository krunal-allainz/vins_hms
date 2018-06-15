<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use euro_hms\ReceiptContract as receipt

class ReceiptController extends Controller
{
    //
    public function __construct(receipt $r){
    	$this->receiptObj = $r;
    }

    public function getPatientReceiptList(){
    	$receiptData = $this->receiptObj->getReceiptList();

    	return $receiptData;
    }
}
