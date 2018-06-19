<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Http\Request;
use euro_hms\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use euro_hms\Models\Receipt;
use euro_hms\Api\Repositories\ReceiptRepository;

class ReceiptController extends Controller
{
    //
    
    public function __construct()
    {
        $this->receiptRepoObj = new ReceiptRepository();
        // $this->middleware('auth');
        // $this->middleware('jwt.auth');
    }


    public function getPatientReceiptList(){
    	$result = Receipt::receiptlist();
    	return $result;
    }

    /**
     * [getChargesTypes description]
     * @return [array] [get all charges type for receipt]
     */
    public function getChargesTypes()
    {
    	$all=$this->receiptRepoObj->getChargesTypes();
    	return  $all;
    }


}
