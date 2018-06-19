<?php

namespace euro_hms\Models;

use Illuminate\Database\Eloquent\Model;	
use Carbon\Carbon;	
use DB;
use euro_hms\Api\Repositories\ReceiptRepository;

	
class Receipt extends Model	
{	
    //	

    private $receiptObj;

    protected $table = 'receipt';	
	
    protected $fillable=[ 
      'receipt_id', 
      'receipt_number', 
      'Date', 
      'case_no',  
      'patient_id', 
      'charges_name', 
      'amount', 
      'case_type',
      'charges_type_id',
      'consultation_charges_id',
      'emergency_charges_id',
      'charges',
      'department',
      'neurological_procedures_id',
      'vascular_procedures_id',
      'procedures_charges',
      'other_charges_id',
      'other_charges',
      'created_at', 
      'updated_at'  
  
    ];	
	
     public function __construct(){
        $this->receiptObj = new ReceiptRepository();
    }
	


      public static function receiptlist(){
        return $this->$receiptObj->getReceiptList(); 
      }

      public static function getReceiptDataById($id){
         return $this->$receiptObj->getReceiptDataById($id);
      }
}
