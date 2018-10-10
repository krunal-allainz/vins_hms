<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\PrescriptionDrugs;


 class PrescriptionRepository 
 {

 	/**
 	 * [getPrescriptionList description]
 	 * @param  [type] $userType [description]
 	 * @param  [type] $noOfPage [description]
 	 * @param  [type] $userId   [description]
 	 * @return [type]           [description]
 	 */
    public function getPrescriptionList($userType,$noOfPage,$userId)
    {
        $list= PrescriptionDrugs::where('status',1)->where('remove','false')->orderBy('prescription_drugs.created_at','desc')->paginate($noOfPage);
        return $list;
    }

    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($request)
    {
    	$form_data=$request->prescriptionData;
    	$presp= new PrescriptionDrugs;
    	$presp->name=$form_data['name'];
        $presp->doctor=$form_data['doctor'];
    	$presp->type=$form_data['department'];
        $presp->status=1;
    	$presp->save();
    	return $presp->id;
    }

    /**
     * [getPrescriptionDetailsById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getPrescriptionDetailsById($id)
    {
        return PrescriptionDrugs::where('id',$id)->first();
    }

    /**
     * [edit description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function edit($request)
    {
        $form_data=$request->prescriptionData;
        $id=$form_data['prescriptionId'];
        $presp= PrescriptionDrugs::findOrFail($id);
        $presp->name=$form_data['name'];
        $presp->doctor=$form_data['doctor'];
        $presp->type=$form_data['department'];
        $presp->save();
        return $presp->id;
    }

    /**
     * [delete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
        $presp= PrescriptionDrugs::findOrFail($id);
        $presp->remove='true';
        $presp->save();
        return $presp->id;
    }
    
 }
?>
