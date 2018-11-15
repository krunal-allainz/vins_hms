<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\SpecialRequest;
use euro_hms\Models\RadiologyTable;
use Excel;
use File;

class SpecialRequestRepository 
{
   
 	/**
 	 * [getSpecialRequestList description]
 	 * @param  [type] $userType [description]
 	 * @param  [type] $noOfPage [description]
 	 * @param  [type] $userId   [description]
 	 * @return [type]           [description]
 	 */
    public function getSpecialRequestList($userType,$noOfPage,$userId)
    {
        $list= SpecialRequest::join('radiology', function ($join) {
                  $join->on('radiology.id', '=', 'special_request.radiology_id');
        })->select('special_request.id as special_id','special_request.name as special_name','radiology.name as radio_name')->orderBy('special_request.created_at','desc')->paginate($noOfPage);
        return $list;
    }

     /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($request)
    {
    	$form_data=$request->specialRequestData;
        $check_duplicate=$this->check_duplicate('ADD',0,$form_data['name'],$form_data['radiology_id']);
        if($check_duplicate=='yes')
        {
            $sp_id=array('specialRequest_id'=>0,'code'=>301);
        }
        else
        {
            $sp= new SpecialRequest;
            $sp->name=$form_data['name'];
            $sp->radiology_id=$form_data['radiology_id'];
            $sp->save();
            $sp_id=array('specialRequest_id'=>$sp->id,'code'=>200);
        }
        return $sp_id;
    }
     /**
     * [getSpecialRequestDetailsById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getSpecialRequestDetailsById($id)
    {
        return SpecialRequest::where('id',$id)->first();
    }
     /**
     * [edit description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function edit($request)
    {
        $form_data=$request->specialRequestData;
        $id=$form_data['specialRequestId'];
        $check_duplicate=$this->check_duplicate('EDIT',$id,$form_data['name'],$form_data['radiology_id']);
        if($check_duplicate=='yes')
        {
            $sp_id=array('specialRequest_id'=>0,'code'=>301);
        }
        else
        {
            $sp= SpecialRequest::findOrFail($id);
            $sp->name=$form_data['name'];
            $sp->radiology_id=$form_data['radiology_id'];
            $sp->save();
            $sp_id=array('specialRequest_id'=>$sp->id,'code'=>200);
        }
       
        return  $sp_id;
    }   

    /**
     * [check_duplicate description]
     * @param  [type] $page_name    [description]
     * @param  [type] $id           [description]
     * @param  [type] $name         [description]
     * @param  [type] $radiology_id [description]
     * @return [type]               [description]
     */
    public function check_duplicate($page_name,$id,$name,$radiology_id)
    {
        if($page_name=='ADD')
        {
            $get_specialRequest=SpecialRequest::whereRaw('LOWER(name)  = ?', $name)->where('radiology_id', $radiology_id)->get();
            if(count($get_specialRequest)>0)
            {
                return 'yes';
            }
            else
            {
                 return 'no';
            }
        }
        else if($page_name=='EDIT')
        {
            $get_specialRequest=SpecialRequest::whereRaw('LOWER(name) = ?', $name)->where('radiology_id', $radiology_id)->whereRaw('id != ?',$id)->get();
            if(count($get_specialRequest)>0)
            {
                return 'yes';
            }
            else
            {
                 return 'no';
            }
        }
        return 'no';
    }

     /**
     * [delete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
        $presp_id = SpecialRequest::find( $id );
        $presp_id ->delete();
        return $id;
    }
    /**
     * [getSpecialRequestListOptions description]
     * @return [type] [description]
     */
    public function getSpecialRequestByRadiologyId($r_id)
    {
        return SpecialRequest::where('radiology_id',$r_id)->get();
    }


    /**
     * [getSpecialRequestNameById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getSpecialRequestNameById($id)
    {
        $special_req= SpecialRequest::where('id',$id)->first();
        return $special_req->name;
    }
 }
?>
