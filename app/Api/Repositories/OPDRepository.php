<?php
  namespace euro_hms\Api\Repositories;

 use euro_hms\Models\OpdDetails;
 use euro_hms\Models\Blood;
 use euro_hms\Models\Urine;
 use euro_hms\Models\BodyFluidAnalysis;
 use euro_hms\Models\CSF;
 use Carbon\Carbon;
 use DB;

 class OPDRepository 
 {

 	/**
 	 * [getBloodList description]
 	 * @return [type] [description]
 	 */
 	public function getBloodList()
 	{
 			return Blood::get();
 	}
 	/**
 	 * [getBodyFluidAnalysisList description]
 	 * @return [type] [description]
 	 */
 	public function getBodyFluidAnalysisList()
 	{
 			return BodyFluidAnalysis::get();
 	}
 	/**
 	 * [getUrineList description]
 	 * @return [type] [description]
 	 */
 	public function getUrineList()
 	{
 			return Urine::get();
 	}
 	/**
 	 * [getCSFList description]
 	 * @return [type] [description]
 	 */
 	public function getCSFList()
 	{
 			return CSF::get();
 	}

 	
 }
?>