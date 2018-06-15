<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\Receipt;

 class ReceiptRepository 
 {
 	public function getReceiptList()
 	{
 			return Receipt::all();
 	}
 }




?>