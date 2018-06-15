<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\Receipt;

 class ReceiptRepository 
 {
 	public static function getReceiptList()
 	{
 			return Receipt::all();
 	}
 }




?>