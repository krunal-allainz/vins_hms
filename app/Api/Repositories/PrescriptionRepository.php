<?php
namespace euro_hms\Api\Repositories;
use Carbon\Carbon;
use DB;
use euro_hms\Models\PrescriptionDrugs;
use Excel;
use File;
use Illuminate\Database\Eloquent\SoftDeletes;


 class PrescriptionRepository 
 {
    use SoftDeletes;
    protected $dates = ['deleted_at'];
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
        
        $check_duplicate=$this->check_duplicate('ADD',0,$form_data['name'],$form_data['department']);
        if($check_duplicate=='yes')
        {
            $presp_id=array('prescription_id'=>0,'code'=>301);
        }
        else
        {
            $presp= new PrescriptionDrugs;
            $presp->name=$form_data['name'];
            $presp->doctor=$form_data['doctor'];
            $presp->type=$form_data['department'];
            $presp->status=1;
            $presp->save();
            $presp_id=array('prescription_id'=>$presp->id,'code'=>200);
        }
        
        return $presp_id;
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
        $check_duplicate=$this->check_duplicate('EDIT',$id,$form_data['name'],$form_data['department']);
        if($check_duplicate=='yes')
        {
            $presp_id=array('prescription_id'=>0,'code'=>301);
        }
        else
        {
            $presp= PrescriptionDrugs::findOrFail($id);
            $presp->name=$form_data['name'];
            $presp->doctor=$form_data['doctor'];
            $presp->type=$form_data['department'];
            $presp->save();
            $presp_id=array('prescription_id'=>$presp->id,'code'=>200);
        }
       
        return  $presp_id;
    }

    /**
     * [delete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function delete($id)
    {
        $presp_id = PrescriptionDrugs::find( $id );
        $presp_id ->delete();
        return $id;
    }

    /**
     * [check_duplicate description]
     * @param  [type] $page_name  [description]
     * @param  [type] $id         [description]
     * @param  [type] $name       [description]
     * @param  [type] $department [description]
     * @return [type]             [description]
     */
    public function check_duplicate($page_name,$id,$name,$department)
    {
        if($page_name=='ADD')
        {
            $get_prescription=PrescriptionDrugs::whereRaw('LOWER(name)  = ?', $name)->whereRaw('LOWER(type)  = ?', $department)->get();
            if(count($get_prescription)>0)
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
            $get_prescription=PrescriptionDrugs::whereRaw('LOWER(name) = ?', $name)->whereRaw('LOWER(type)  = ?', $department)->whereRaw('id != ?',$id)->get();
            if(count($get_prescription)>0)
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
     * [importPrescriptionFile description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function importPrescriptionFile($request)
    {
       $dept_array=array('Neurology','Neurosurgery','Cardiology','Vascular','Onco','Ortho','Others');
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
                        if(isset($value->name) && isset($value->doctor) && isset($value->department))
                        {
                            $new_dept=strtolower($value->department);
                            $dept=trim(ucfirst($new_dept));
                            if(in_array($dept,$dept_array))
                            {
                                if($dept=='Onco')
                                {
                                    $dept='ONCO';
                                }
                                $check_duplicate=$this->check_duplicate('ADD',0,$value->name,$dept);
                                if($check_duplicate=='no')
                                {
                                    $insert[] = [
                                        'name' => $value->name,
                                        'doctor' => $value->doctor,
                                        'type' => $dept,
                                        'status'=>1,
                                        'created_at'=>Carbon::now(),
                                        'updated_at'=>Carbon::now(), 
                                    ]; 
                                }
                            }
                        }
                    }
                    
                    if(!empty($insert)){
 
                        $insertData = DB::table('prescription_drugs')->insert($insert);
                       
                        if ($insertData) {
                            return array('total'=>$total_insert,'inserted'=>count($insert));
                        }else {                        
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
