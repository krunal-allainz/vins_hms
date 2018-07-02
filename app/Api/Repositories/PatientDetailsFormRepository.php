<?php

namespace euro_hms\Api\Repositories;

use DB;
use hash;
use Carbon\Carbon;
use euro_hms\Models\PatientDetailsForm;
use euro_hms\Models\OpdDetails;

class PatientDetailsFormRepository
{

	public function getNumberOfPatient($type){
		$result = array();

		// this week results
		$fromDate = Carbon\Carbon::now()->subDay(30)->startOfWeek()->toDateString(); // or ->format(..)
		$tillDate = Carbon\Carbon::now()->subDay()->toDateString();
		$result['today'] = PatientDetailsForm::selectRaw('date(created_at) as date, COUNT(*) as count'))
        ->where( DB::raw('date(created_at)'), [$tillDate] )
        ->groupBy('date')
    	->orderBy('date', 'DESC')
    	->lists('count', 'date');

		$result['month'] = PatientDetailsForm::selectRaw('date(created_at) as date, COUNT(*) as count'))
	    ->whereBetween( DB::raw('date(created_at)'), [$fromDate, $tillDate] )
	    ->groupBy('date')
	    ->orderBy('date', 'DESC')
	    ->lists('count', 'date');
		


	return $result;
}