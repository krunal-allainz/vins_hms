<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\Qualifiers;
use euro_hms\Models\Bodyparts;
use euro_hms\Models\RadiologyTable;
use Excel;
use File;
class QualifiersRepository 
{
   
 	/**
 	 * [getQualifiersList description]
 	 * @param  [type] $userType [description]
 	 * @param  [type] $noOfPage [description]
 	 * @param  [type] $userId   [description]
 	 * @return [type]           [description]
 	 */
    public function getQualifiersList($userType,$noOfPage,$userId)
    {
        $list= Qualifiers::join('radiology', function ($join) {
                  $join->on('radiology.id', '=', 'qualifiers.radiology_id');
        })->join('bodyparts', function ($join) {
                  $join->on('bodyparts.id', '=', 'qualifiers.bodyparts_id');
        })->select('qualifiers.id as qualifier_id','qualifiers.name as qualifier_name','radiology.name as radio_name','bodyparts.name as bodypart_name')->orderBy('qualifiers.created_at','desc')->paginate($noOfPage);
        return $list;
    }
   /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($request)
    {
    	$form_data=$request->qualifiersData;
        $check_duplicate=$this->check_duplicate('ADD',0,$form_data['name'],$form_data['radiology_id'],$form_data['bodyparts_id']);
        if($check_duplicate=='yes')
        {
            $qualify_id=array('qualifiers_id'=>0,'code'=>301);
        }
        else
        {
            $qualify= new Qualifiers;
            $qualify->radiology_id=$form_data['radiology_id'];
            $qualify->bodyparts_id=$form_data['bodyparts_id'];
            $qualify->name=$form_data['name'];
            $qualify->save();
            $qualify_id=array('qualifiers_id'=>$qualify->id,'code'=>200);
        }
        return $qualify_id;
    }
    /**
     * [getQualifiersDetailsById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getQualifiersDetailsById($id)
    {
        return Qualifiers::where('id',$id)->first();
    }
   /**
     * [edit description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function edit($request)
    {
        $form_data=$request->qualifiersData;
        $id=$form_data['qualifiersId'];
        $check_duplicate=$this->check_duplicate('EDIT',$id,$form_data['name'],$form_data['radiology_id'],$form_data['bodyparts_id']);
        if($check_duplicate=='yes')
        {
            $qualify_id=array('qualifiers_id'=>0,'code'=>301);
        }
        else
        {
            $qualify= Qualifiers::findOrFail($id);
            $qualify->name=$form_data['name'];
            $qualify->radiology_id=$form_data['radiology_id'];
            $qualify->bodyparts_id=$form_data['bodyparts_id'];
            $qualify->save();
            $qualify_id=array('qualifiers_id'=>$qualify->id,'code'=>200);
        }
       
        return  $qualify_id;
    }

    /**
     * [check_duplicate description]
     * @param  [type] $page_name    [description]
     * @param  [type] $id           [description]
     * @param  [type] $name         [description]
     * @param  [type] $radiology_id [description]
     * @param  [type] $bodyparts_id [description]
     * @return [type]               [description]
     */
    public function check_duplicate($page_name,$id,$name,$radiology_id,$bodyparts_id)
    {
        if($page_name=='ADD')
        {
            $get_qualifiers=Qualifiers::whereRaw('LOWER(name)  = ?', $name)->where('radiology_id', $radiology_id)->where('bodyparts_id', $bodyparts_id)->get();
            if(count($get_qualifiers)>0)
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
            $get_qualifiers=Qualifiers::whereRaw('LOWER(name) = ?', $name)->where('radiology_id', $radiology_id)->where('bodyparts_id', $bodyparts_id)->whereRaw('id != ?',$id)->get();
            if(count($get_qualifiers)>0)
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
        $presp_id = Qualifiers::find( $id );
        $presp_id ->delete();
        return $id;
    }
    /**
     * [getQualifierByBodypartsId description]
     * @param  [type] $b_id [description]
     * @return [type]       [description]
     */
    public function getQualifierByBodypartsId($b_id)
    {
        return Qualifiers::where('bodyparts_id',$b_id)->get();
    }

    /**
     * [getQualifiersNameById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getQualifiersNameById($id)
    {
        $qualifier= Qualifiers::where('id',$id)->first();
        return $qualifier->name;
    }
   
    
 }
?>
