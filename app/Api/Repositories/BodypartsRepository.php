<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\Bodyparts;
use euro_hms\Models\RadiologyTable;
use Excel;
use File;
 class BodypartsRepository 
 {
   
    /**
     * [getBodypartsList description]
     * @param  [type] $userType [description]
     * @param  [type] $noOfPage [description]
     * @param  [type] $userId   [description]
     * @return [type]           [description]
     */
    public function getBodypartsList($userType,$noOfPage,$userId)
    {
        $list= Bodyparts::join('radiology', function ($join) {
                  $join->on('radiology.id', '=', 'bodyparts.radiology_id');
        })->select('bodyparts.id as bodypart_id','bodyparts.name as bodypart_name','radiology.name as radio_name')->orderBy('bodyparts.created_at','desc')->paginate($noOfPage);
        return $list;
    }
    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($request)
    {
        $form_data=$request->bodypartsData;
        $check_duplicate=$this->check_duplicate('ADD',0,$form_data['name'],$form_data['radiology_id']);
        if($check_duplicate=='yes')
        {
            $bodyp_id=array('bodyparts_id'=>0,'code'=>301);
        }
        else
        {
            $bodyp= new Bodyparts;
            $bodyp->name=$form_data['name'];
            $bodyp->radiology_id=$form_data['radiology_id'];
            $bodyp->save();
            $bodyp_id=array('bodyparts_id'=>$bodyp->id,'code'=>200);
        }
        return $bodyp_id;
    }
    /**
     * [getBodypartsDetailsById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getBodypartsDetailsById($id)
    {
        return Bodyparts::where('id',$id)->first();
    }
    /**
     * [edit description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function edit($request)
    {
        $form_data=$request->bodypartsData;
        $id=$form_data['bodypartsId'];
        $check_duplicate=$this->check_duplicate('EDIT',$id,$form_data['name'],$form_data['radiology_id']);
        if($check_duplicate=='yes')
        {
            $bodyp_id=array('bodyparts_id'=>0,'code'=>301);
        }
        else
        {
            $bodyp= Bodyparts::findOrFail($id);
            $bodyp->name=$form_data['name'];
            $bodyp->radiology_id=$form_data['radiology_id'];
            $bodyp->save();
            $bodyp_id=array('bodyparts_id'=>$bodyp->id,'code'=>200);
        }
       
        return  $bodyp_id;
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
            $get_bodyparts=Bodyparts::whereRaw('LOWER(name)  = ?', $name)->where('radiology_id', $radiology_id)->get();
            if(count($get_bodyparts)>0)
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
            $get_bodyparts=Bodyparts::whereRaw('LOWER(name) = ?', $name)->where('radiology_id', $radiology_id)->whereRaw('id != ?',$id)->get();
            if(count($get_bodyparts)>0)
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
        $presp_id = Bodyparts::find( $id );
        $presp_id ->delete();
        return $id;
    }
    /**
     * [getBodypartsListOptions description]
     * @return [type] [description]
     */
    public function getBodypartsByRadiologyId($r_id)
    {
        return Bodyparts::where('radiology_id',$r_id)->get();
    }

    /**
     * [getBodypartsNameById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getBodypartsNameById($id)
    {
        $bodyparts= Bodyparts::where('id',$id)->first();
        return $bodyparts->name;
    }
    
 }
?>