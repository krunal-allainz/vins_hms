<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\Receipt;

 class ReceiptRepository 
 {
 	public function getReceiptList()
 	{
 			return Receipt::with('patientDetails')->get();
 	}

 	public function deleteReceipt($id){
 		$delete= Receipt::where('id', $id)->delete();
        if ($delete) {
                return ['code' => '200','data'=>'', 'message' => 'Receipt successfully deleted'];
            } else {
                return ['code' => '300','data'=>'', 'message' => 'Something goes wrong'];
            }

 	}

 	public function viewReceipt($id,$type){
 		return Receipt::with('patientDetails')->where('receipt.id',$id)->first();
 	}


 }




?>