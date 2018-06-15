<?php 
namespace euro_hms\Api\Services;

use euro_hms\Api\Repositories\ReceiptRepository


class ReceiptService implements ReceiptContract 
{
	public function __construct(){
		$this->receiptObj = new ReceiptRepository();
	}

	public function getReceiptList()
 	{
 		$this->receiptObj->getReceiptList();
 	}
}