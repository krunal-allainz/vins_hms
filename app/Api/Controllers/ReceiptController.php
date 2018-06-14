<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use euro_hms\Models\Receipt;

class ReceiptController extends Controller
{
    //
    

    public function getPatientReceiptList(){
    	$result = Receipt::receiptlist();

    	return $result;
    }
}
