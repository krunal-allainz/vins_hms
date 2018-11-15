<?php

namespace euro_hms\Api\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use euro_hms\Models\User;
use euro_hms\Models\Laboratory;
use euro_hms\Api\Repositories\LaboratoryRepository;


use DB;
use Carbon\Carbon;

class LaboratoryController extends Controller
{
    public function __construct(){
        $this->prescObj = new LaboratoryRepository();
    }

    /**
     * [getLaboratoryList description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getLaboratoryList(Request $request)
    {
        $userType = $request->userType;
        $userId = $request->userId ;
        $noOfPage = $request->noofRecord;
        
        $laboratory_list=$this->prescObj->getLaboratoryList($userType,$noOfPage,$userId);
        if($laboratory_list)
        {
            return ['code' => 200 ,'data'=>$laboratory_list,'message'=>'Getting case type successfully.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
        }
       
    }

    /**
     * [createLaboratory description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function createLaboratory(Request $request)
    {
        $add_Laboratory=$this->prescObj->create($request);
        if($add_Laboratory['code']==200)
        {
            return ['code' => 200 ,'data'=>$add_Laboratory,'message'=>'Laboratory successfully added.'];
        }
        else if($add_Laboratory['code']==301)
        {
             return ['code'=> 301 ,'data'=>'','message'=>'Laboratory already exist.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
        }
    }

    /**
     * [getLaboratoryDetailsById description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getLaboratoryDetailsById(Request $request)
    {
        $id = $request->id;
        $laboratory_details=$this->prescObj->getLaboratoryDetailsById($id);
        if($laboratory_details)
        {
            return ['code' => 200 ,'data'=>$laboratory_details,'message'=>'Laboratory successfully added.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
        }
    }

    /**
     * [editLaboratory description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function editLaboratory(Request $request)
    {
        $edit_Laboratory=$this->prescObj->edit($request);
        if($edit_Laboratory['code']==200)
        {
            return ['code' => 200 ,'data'=>$edit_Laboratory,'message'=>'Laboratory successfully edited.'];
        }
        else if($edit_Laboratory['code']==301)
        {
             return ['code'=> 301 ,'data'=>'','message'=>'Laboratory already exist.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
        }
    }

    /**
     * [deleteLaboratory description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function deleteLaboratory(Request $request)
    {
        $id = $request->id;
        $delete_laboratory=$this->prescObj->delete($id);
        if($delete_laboratory)
        {
            return ['code' => 200 ,'data'=>$delete_laboratory,'message'=>'Laboratory successfully deleted.'];
        }
        else
        {
            return ['code'=> 300 ,'data'=>'','message'=>'Something went wrong'];
        }
    }

    /**
     * [importLaboratoryFile description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function importLaboratoryFile(Request $request)
    {
        $import_file=$this->prescObj->importLaboratoryFile($request);
        if($import_file!=0 && $import_file['inserted']>0)
        {
            return back()->with('success', 'Laboratory '.$import_file['inserted'].' out of '.$import_file['total'].' records have been imported successfully!');
        }
        else
        {
            return back()->with('error', 'Something wrong with file!');
        }
    }
}
