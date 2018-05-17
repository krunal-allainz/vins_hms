<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Receipt extends Model
{
    //
    protected $table = 'receipt';

    protected $fillable=[
      'receipt_id',
      'receipt_number',
      'Date',
      'case_no',
      'patient_id',
      'charges_name',
      'amount',
      'created_at',
      'updated_at'

    ];


    static function saveReceipt($request){ 
      //dd(Carbon::createFromFormat('dd-MM-yyyy', $request->formData['date_receipt']));
      //  $lastReceipt = Receipt::orderBy('id', 'desc')->first();
        $lastReceipt = \DB::table('receipt')->orderBy('receipt_id', 'desc')->first();
        
        if($lastReceipt == null){
        	$receiptId = 1;
        }else{
        	$receiptId = $lastReceipt->receipt_id + 1;
        }
        $type = $request->type;
        if ($type == 'opd'){
        	$receiptNumber = 'OPD'.$receiptId;
    	}
        Receipt::create([
        	'receipt_id' => $receiptId,
        	'receipt_number' => $receiptNumber,
        	'date' =>  $request->formData['date_receipt'],
        	'case_no' => $request->formData['case_no'],
        	'patient_id' => $request->formData['patient_id'],
        	'charges_name' => $request->formData['charges'],
        	'amount' => $request->formData['amount'],
        	'created_at'=>Carbon::now() ,
        	'updated_at'=>Carbon::now() 
        ]);

        $data = ['receiptId'=>$receiptId,'receiptNumber'=>$receiptNumber,'caseNo'=>$request->formData['case_no'],'chagredName'=>$request->formData['charges'],'amount'=>$request->formData['amount']];
        return $data;
      }
}
