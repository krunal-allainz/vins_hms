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

 	/**
 	*   get number of OPD
 	*
 	*
 	*/

 	public function getOPDCounters(){
 		$result = array();

		// this week results
		$fromDate =Carbon::now()->subDay(30)->startOfWeek()->toDateString(); // or ->format(..)
		$tillDate = Carbon::now()->toDateString();
		
		$result['today'] = OpdDetails::selectRaw('date(created_at) as date, COUNT(*) as count')
        ->where( DB::raw('date(created_at)'), [$tillDate] )
    	->orderBy('created_at', 'DESC')
    	->count();

		$result['month'] = OpdDetails::selectRaw('date(created_at) as date, COUNT(*) as count')
	    ->whereBetween( DB::raw('date(created_at)'), [$fromDate, $tillDate] )
	    ->orderBy('created_at', 'DESC')
	    ->count();
		


	return $result;
 	}
 	
 }
?>