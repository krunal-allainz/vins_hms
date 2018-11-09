<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\Laboratory;
use Excel;
use File;



 class LaboratoryRepository 
 {
   
 	/**
 	 * [getLaboratoryList description]
 	 * @param  [type] $userType [description]
 	 * @param  [type] $noOfPage [description]
 	 * @param  [type] $userId   [description]
 	 * @return [type]           [description]
 	 */
    public function getLaboratoryList($userType,$noOfPage,$userId)
    {
        $list= Laboratory::orderBy('laboratory.created_at','desc')->paginate($noOfPage);
        return $list;
    }

    /**
     * [create description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function create($request)
    {
    	$form_data=$request->laboratoryData;
        $check_duplicate=$this->check_duplicate('ADD',0,$form_data['name'],$form_data['type']);
        if($check_duplicate=='yes')
        {
            $lab_id=array('laboratory_id'=>0,'code'=>301);
        }
        else
        {
            $lab= new Laboratory;
            $lab->name=$form_data['name'];
            $lab->type=$form_data['type'];
            $lab->save();
            $lab_id=array('laboratory_id'=>$lab->id,'code'=>200);
        }
        return $lab_id;
    }

    /**
     * [getLaboratoryDetailsById description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getLaboratoryDetailsById($id)
    {
        return Laboratory::where('id',$id)->first();
    }

    /**
     * [edit description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function edit($request)
    {
        $form_data=$request->laboratoryData;
        $id=$form_data['laboratoryId'];
        $check_duplicate=$this->check_duplicate('EDIT',$id,$form_data['name'],$form_data['type']);
        if($check_duplicate=='yes')
        {
            $lab_id=array('laboratory_id'=>0,'code'=>301);
        }
        else
        {
            $lab= Laboratory::findOrFail($id);
            $lab->name=$form_data['name'];
            $lab->type=$form_data['type'];
            $lab->save();
            $lab_id=array('laboratory_id'=>$lab->id,'code'=>200);
        }
       
        return  $lab_id;
    }

    /**
     * [check_duplicate description]
     * @param  [type] $page_name [description]
     * @param  [type] $id        [description]
     * @param  [type] $name      [description]
     * @param  [type] $type      [description]
     * @return [type]            [description]
     */
    public function check_duplicate($page_name,$id,$name,$type)
    {
        if($page_name=='ADD')
        {
            $get_laboratory=Laboratory::whereRaw('LOWER(name)  = ?', $name)->whereRaw('LOWER(type)  = ?', $type)->get();
            if(count($get_laboratory)>0)
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
            $get_laboratory=Laboratory::whereRaw('LOWER(name) = ?', $name)->whereRaw('LOWER(type)  = ?', $type)->whereRaw('id != ?',$id)->get();
            if(count($get_laboratory)>0)
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
        $presp_id = Laboratory::find( $id );
        $presp_id ->delete();
        return $id;
    }

    /**
     * [importLaboratoryFile description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function importLaboratoryFile($request)
    {
       $file=$request->file('file');
       
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                $total_insert=$data->count();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        if(isset($value->name) &&  isset($value->type))
                        {
                            $new_type=strtolower($value->type);
                            $type=trim($new_type);
                            $n_type=0;
                            if($type=='blood')
                            {
                                $n_type=1;
                            }
                            else if($type=='urine')
                            {
                                $n_type=2;
                            }
                            else if($type=='csf')
                            {
                                $n_type=3;
                            }
                            else if($type=='bfa')
                            {
                                $n_type=4;
                            }
                            if($n_type!=0)
                            {
                                $check_duplicate=$this->check_duplicate('ADD',0,$value->name,$n_type);
                                if($check_duplicate=='no')
                                {
                                    $insert[] = [
                                        'name' => $value->name,
                                        'type' => $n_type,
                                        'created_at'=>Carbon::now(),
                                        'updated_at'=>Carbon::now(),
                                    ];
                                }
                                
                            }
                             
                        }
                       
                    }
                    
                    if(!empty($insert)){

                        $insertData = DB::table('laboratory')->insert($insert);
                        if ($insertData) {
                             return array('total'=>$total_insert,'inserted'=>count($insert));
                        }
                        else {                        
                            return 0;
                        }
                    }
                    else
                    {
                         return 0;
                    }
                }
            }
            return 0;
        }
    }
    
 }
?>
