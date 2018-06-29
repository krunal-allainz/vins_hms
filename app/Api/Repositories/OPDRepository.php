<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\OpdDetails;
 use euro_hms\Models\Laboratory;
 use Carbon\Carbon;
 use DB;

 class OPDRepository 
 {

 	/**
 	 * [getLaboratoryByType description]
 	 * @param  [type] $type [description]
 	 * @return [type]       [description]
 	 */
 	public function getLaboratoryByType($type)
 	{
 		return Laboratory::whereRaw('FIND_IN_SET(?,type)', $type)->get();
 	}
 	/**
 	 * [getLabpratoryNameById description]	
 	 * @param  [type] $id [description]
 	 * @return [type]     [description]
 	 */
 	public function getLabpratoryNameById($id)
 	{
 		return Laboratory::where('id',$id)->first();
 	}
 	/**
 	 * [getAllLaboratoryList description]
 	 * @return [type] [description]
 	 */
 	public function getAllLaboratoryList()
 	{
 		return Laboratory::get();
 	}
 	
 }
?>