<template>
  <div class="container">
     <div class="row form-group">
              <div class="col-md-3">
                <div class="col-md-12">
                  <label for="prescription">Prescription:</label>
                </div>
                <div class="col-md-12">
                  <select class="form-control ls-select2"  name="prescription" id="prescription" v-validate="'required'"  v-model="prescriptFinalData.prescription">
                    <option value="">Select</option>
                    <option v-for="pres in prescriptionOption"  :value="pres.id">{{pres.name}}</option>
                  </select>
                  <i v-show="errors.has('prescription')" class="fa fa-warning"></i>
                  <span class="help is-danger" v-show="errors.has('prescription')">
                    Please select prescription.
                  </span>
                </div>
              </div>

              <div class="col-md-3">
                <div class="col-md-12">
                  <label for="quantity">Total Quantity:</label>
                </div>
                <div class="col-md-12">
                  <div class=" input-group">
                    <input type="text" name="prescription_quantity" id="prescription_quantity" class="form-control" v-model="prescriptFinalData.prescription_quantity" v-validate="'required|numeric'">
                      <div class="input-group-append">
                          <span class="input-group-text ">{{prescriptFinalData.prescription_unit}}</span>
                      </div>
                    
                    </div>
                    <i v-show="errors.has('prescription_quantity')" class="fa fa-warning" v-if="prescription_enable == true"></i>
                  <span class="help is-danger" v-show="errors.has('prescription_quantity')" v-if="prescription_enable == true">
                     Please enter valid quantity.
                  </span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="col-md-12">
                  <label for="quantity">Total Prescription Days:</label>
                </div>
                <div class="col-md-12">
                  <div class=" input-group">
                    <input type="text" name="total_prescription_days" id="total_prescription_days" class="form-control" v-model="prescriptFinalData.total_prescription_days" v-validate="'required|numeric'">
                      <div class="input-group-append">
                          <span class="input-group-text ">Day</span>
                      </div>
                    
                    </div>
                    <i v-show="errors.has('total_prescription_days')" class="fa fa-warning" v-if="prescription_enable == true"></i>
                  <span class="help is-danger" v-show="errors.has('total_prescription_days')" v-if="prescription_enable == true">
                     Please enter valid quantity.
                  </span>
                </div>
              </div>
          </div>
          <div v-if="prescriptFinalData.prescription_report.length>0" :id="'presp_div_'+index" v-for="(presp, index) in prescriptFinalData.prescription_report">
           <div class="row form-group" >
                <div class="col-md-3">
                  <div class="col-md-12">
                    <label for="prescription">Clock:</label>
                  </div>
                  <div class="col-md-12">
                   <div class="input-group clockpicker" >
                      <input type="text" class="form-control clock_time" :name="'presp_clock_time'+index" :id="'presp_clock_time_id'+index" v-model="presp.clock_time">
                      <span class="input-group-addon">
                          <span class="fa fa-clock-o"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="col-md-12">
                    <label for="prescription">Quantity:</label>
                  </div>
                  <div class="col-md-12">
                    <input type="text"  v-validate="'required|numeric'" v-model="presp.clock_quantity" :name="'presp_clock_quantity'+index" id="presp_clock_quantity_id" class="form-control clock_quantity">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="col-md-12">
                    <label for="prescription">Suggetion:</label>
                  </div>
                  <div class="col-md-12">
                      <label class="col-md-6">
                        <input type="radio" class="form-check-input clock_suggest" :id="'presp_suggest_empty'+index"  :name="'presp_suggest'+index" v-model="presp.clock_suggest" value="ES" checked="checked">Empty Stomach
                      </label>
                      <label class="col-md-5">
                        <input type="radio" class="form-check-input clock_suggest" :id="'presp_suggest_full'+index"  :name="'presp_suggest'+index" v-model="presp.clock_suggest" value="ES">Full Stomach
                      </label> 
                  </div>
                </div>
            </div>
          </div>
            <div class="row form-group">
              <div class="col-md-2">
                <div class="col-md-12"> </div>
                <div class="col-md-12">
                  <i class="fa fa-plus-circle" @click="multipleClockResult()"></i>
                </div>
              </div>
               <div class="col-md-2">
                <div class="col-md-12"> </div>
                <div class="col-md-12">
                  <button type="button" v-if="class_type=='ADD'" class="btn btn-primary btn-lg "  @click="saveClockResult()">Add</button>
                  <button type="button" v-if="class_type=='EDIT'" class="btn btn-primary btn-lg "  @click="editClockResult()">Edit</button>
                </div>
              </div>
            </div>
            <br/>
            <div class="row form-group" v-if="prescriptFinalData.prescriptionNameList.length>0">
              <div class="col-md-3">
                  <div class="col-md-12">
                     <label for="prescription">Prescription Name</label>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="col-md-12">
                     <label for="prescription">Quantity</label>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="col-md-12">
                     <label for="prescription">Clock Time</label>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="col-md-12">
                     <label for="prescription">Suggetion</label>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="col-md-12">
                     <label for="prescription">T. Quantity</label>
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="col-md-12">
                     <label for="prescription">T. Days</label>
                  </div>
              </div>

            </div>
            <div v-for="pres_clock in prescriptFinalData.prescriptionNameList">
               <div class="row form-group clock_result" :id="'presct_table_'+pres_clock.pid" v-if="pres_clock.remove=='false'">
                  <div class="col-md-3">
                      <div class="col-md-12">
                        <div class=" input-group">
                        <div class="input-group-append">
                            <span class="input-group-text ">{{(pres_clock.name==''?'Prescription Name':pres_clock.name)}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="col-md-12" >
                      <div class=" input-group">
                        <div class="input-group-append" >
                            <span class="input-group-text" >{{pres_clock.clock_quantity_1}}</span>
                        </div>
                        <div class="input-group-append" >
                            <span class="input-group-text" >{{pres_clock.clock_quantity_2}}</span>
                        </div>
                        <div class="input-group-append" >
                            <span class="input-group-text" >{{pres_clock.clock_quantity_3}}</span>
                        </div>
                      </div>  
                    </div>
                  </div>
               
                 <div class="col-md-2">
                  <div class="col-md-12">
                    <div class=" input-group">
                      <div class="input-group-append">
                          <span class="input-group-text " @click="editPrescriptionResult(pres_clock.pid,pres_clock.clock_time_1,1)" v-if="">{{pres_clock.clock_time_1}}</span>
                      </div>
                      <div class="input-group-append">
                          <span class="input-group-text " @click="editPrescriptionResult(pres_clock.pid,pres_clock.clock_time_2,2)" v-if="">{{pres_clock.clock_time_2}}</span>
                      </div>
                      <div class="input-group-append">
                          <span class="input-group-text " @click="editPrescriptionResult(pres_clock.pid,pres_clock.clock_time_3,3)" v-if="">{{pres_clock.clock_time_3}}</span>
                      </div>
                      </div>  
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="col-md-12">
                     <div class=" input-group">
                        <div class="input-group-append">
                            <span class="input-group-text ">{{(pres_clock.clock_suggest_1==''?'--':pres_clock.clock_suggest_1)}}</span>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text ">{{(pres_clock.clock_suggest_2==''?'--':pres_clock.clock_suggest_2)}}</span>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text ">{{(pres_clock.clock_suggest_3==''?'--':pres_clock.clock_suggest_3)}}</span>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="col-md-12">
                     <div class=" input-group">
                        <div class="input-group-append">
                            <span class="input-group-text ">{{pres_clock.total_quantity}}</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-1">
                  <div class="col-md-12">
                     <div class=" input-group">
                        <div class="input-group-append">
                            <span class="input-group-text ">{{pres_clock.total_prescription_days}}</span>
                        </div>
                    </div>
                </div>
                </div>
              </div>
          </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <div class="col-md-12"><br></div>
                     <div class="col-md-12">
                           <button type="button" class="btn btn-primary btn-lg " :disabled="(priscription_add_disabled==false)" @click="savePrescription()">Add</button>
                    </div>
            </div>
          </div>
     <div class="row" v-if="show_prescription_result_data_enable==true"> 
        <prescriptionPrint :prescriptData="prescriptFinalData.finalPrescriptionAllData"> </prescriptionPrint>
    </div>  
      
  </div>
</template>
<script >
  import User from '../../../api/users.js';
  import myDatepicker from 'vue-datepicker';
  import _ from 'lodash';
    import prescriptionPrint from './prescriptionPrint.vue';
    let clocktimedata=[];
    var prespRes = [];
    export default {
      computed:{

      },
      components: {
        'date-picker': myDatepicker,
            prescriptionPrint
      },
      props:['department'],
        data() {
            return {
              'notValid':false,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'lab_val_size':0,
                'original_length':0,
                'prescriptionOption':'',
                'show_prescription_result_data_enable':false,
                'priscription_add_disabled':false,
                'priscriptionAdd':{},
                'prescription_enable':true,
                'class_type':'ADD',
                'prescriptFinalData' :{
                    'prescriptDataPage': [],
                    prescription_report: [
                      {
                        name : '',
                        pid : '',
                        clock_time: '', 
                        clock_quantity: '', 
                        clock_suggest: '', 
                        remove: 'false',
                        //end: 'education[0][end]'
                      }
                    ],
                    'clock_quantity':'',
                    'clock_time':'',
                    'quantity_1':'0',
                    'quantity_2':'0',
                    'quantity_3':'0',
                    'clock_time_1':'00:00',
                    'clock_time_2':'00:00',
                    'clock_time_3':'00:00',
                    'medicine_qty':1,
                    'prescriptionNameList':[],
                    'total_prescription_days':0,
                    'finalPrescriptionAllData':[],
                    'prescriptiData' : '',
                    'prescription':'',
                    'prescription_id':'',
                    'prescription_quantity':'',
                    'prescription_unit':'TAB.',
                    'prescription_time':[],
                    'clock_type':'',
                    'clock_value':'',
                    'old_clock_value':'',
                }
                
            }
        },
        created: function() {
             this.$root.$on('removePrescriptionByName', this.removePrescription);
        },
        mounted() {
            let vm=this;
             $('#prescription').on("select2:select", function (e) {
            // console.log($(this).data()[0].formalation);
            let presId = $('#prescription').select2('data')[0].id;
            vm.prescriptFinalData.prescription=$('#prescription').select2('data')[0].text;
             vm.prescriptFinalData.prescription_id=presId;
            vm.prescriptFinalData.prescription_quantity = '1';
            vm.prescriptFinalData.prescription_unit = 'TAB.';
            vm.prescriptFinalData.prescription_time = '1';
            vm.prescriptFinalData.total_prescription_days = '1';
            // vm.prescriptFinalData.prescription = $(this).text();
            _.find(vm.prescriptionOption, function(res) {
                    if(res.id == presId) {
                         vm.prescriptFinalData.prescription_unit=res.formulation;
                     
                    }
                });
           });
            setTimeout(function(){vm.getPrescriptionList(); },500);
            $('.clockpicker').clockpicker({donetext: 'Done',autoclose: true});
            $('.clockpicker').clockpicker().find('input').change(function(){
                vm.prescriptFinalData.clock_time=this.value;
                vm.prescriptFinalData.clock_quantity=1;
                jQuery('input:radio[name="clock_suggest"]').filter('[value="ES"]').attr('checked', true);
            });
            /*for lab data end*/
            setTimeout(function(){
                vm.initData();
            },1000) 
      
        },
        filters:{
          
        },
        methods: {
          initData()
          {
            let vm =this;
            let all_prescription=_.cloneDeep(vm.$store.state.Patient.prescriptionData);
            
            if(all_prescription)
            {
                if(all_prescription.length)
                {
                  //console.log('dasd');
                  vm.prescriptFinalData.prescriptionNameList = all_prescription
                  vm.prescriptFinalData.finalPrescriptionAllData = all_prescription
                  vm.priscription_add_disabled=true;
                  vm.show_prescription_result_data_enable=true;
                }
                
            }
          },
          clearPrespData()
          {
              let vm =this;
              vm.prescriptFinalData.prescription="";
              vm.prescriptFinalData.prescription_id="";
              vm.prescriptFinalData.prescription_quantity="";
              vm.prescriptFinalData.total_prescription_days="";
              vm.prescriptFinalData.clock_time="";
              vm.prescriptFinalData.clock_quantity="";
              vm.prescriptFinalData.clock_suggest="";
              vm.priscription_add_disabled=true;
              $('#prescription').val(null).trigger('change'); 

          },
          multipleClockResult()
          { 
              let p_name=this.prescriptFinalData.prescription;
              let p_id=this.prescriptFinalData.prescription_id;
              console.log(this.prescriptFinalData.prescription_report);
              let check_name=this.checkPrescriptionById(p_id,this.prescriptFinalData.prescription_report);
             
              if(p_id=='' || p_id==0)
              {
                  toastr.error('Please select prescription name.', 'Prescription error', {timeOut: 5000});
                  return false; 
              }  
              else if(check_name==3 && this.prescriptFinalData.prescription_report.length>2)
              {
                  toastr.error('You can add clock time only three times.', 'Prescription error', {timeOut: 5000});
                  return false; 
              }
              prespRes.push({'name':p_name,'pid':p_id,'clock_time':'','clock_quantity':'','clock_suggest':'','remove':'false'});
                    this.prescriptFinalData.prescription_report=prespRes;
              return false;
              
          },
          saveClockResult()
          {
            let vm =this;
            
            if(vm.prescriptFinalData.prescription == '' || vm.prescriptFinalData.prescription_quantity == '' ||  vm.prescriptFinalData.prescription_quantity<1 || vm.prescriptFinalData.total_prescription_days<1 ){
                  toastr.error('Please select prescription data and must be valid.', 'Prescription error', {timeOut: 5000});
                  return false; 
            }
            if(vm.prescriptFinalData.clock_quantity == '' || vm.prescriptFinalData.clock_time == '' ||  vm.prescriptFinalData.clock_quantity<1 ){
                  toastr.error('Please enter valid quantity and time.', 'Prescription error', {timeOut: 5000});
                  return false; 
            }
            
            let check_p=vm.checkClcokPrescription();
            //ghgfh
            vm.clearPrespData();
            return false;
          },
          checkClcokPrescription()
          {
            let vm=this;
            let message="";
            
            let new_array=_.filter(vm.prescriptFinalData.prescriptionNameList, ['remove', 'false']);
            vm.original_length=new_array.length;
            if(vm.prescriptFinalData.prescriptionNameList.length > 0){
              
                 _.find(vm.prescriptFinalData.prescriptionNameList, function(res) {

                    var check_name=  vm.checkPrescriptionById(vm.prescriptFinalData.prescription_id,vm.prescriptFinalData.prescriptionNameList);
                    
                    if(res.pid==vm.prescriptFinalData.prescription_id && check_name!=0 && res.remove=='false') {
                        var check_clocktime=vm.checkClockTime(vm.prescriptFinalData.clock_time,res.clock_time_1,res.clock_time_2,res.clock_time_3);
                        
                        if(res.clock_time_1!="00:00" && res.clock_time_2!="00:00" && res.clock_time_3!="00:00")
                        {
                          toastr.error('Prescription already exist.', 'Prescription error', {timeOut: 5000});
                            return false;
                        }
                        else if(check_clocktime=='yes')
                        {
                            toastr.error('Clock time already exist.', 'Prescription error', {timeOut: 5000});
                            return false;
                        }
                        else 
                        {
                          vm.editMedicinOntime(res,clocktimedata);
                          return false;
                        }
                    }
                    else if(check_name==0)
                    {
                        vm.addMedicinOntime();
                        return false;
                    }
                });
            }else{
                
               vm.addMedicinOntime();
               return false;
            }

          },
          checkPrescriptionById(id,array)
          {
            
              var length=0;
              var i=0;
              for(i=0;i<array.length;i++)
              {
                  if(array[i]['pid']==id && array[i]['remove']=='false')
                  {
                      length++;
                  }
              }
              return length;
          },
          editMedicinOntime(array,clocktimedata)
          {
              let vm =this;
              let clock_suggest='--';

              if(vm.prescriptFinalData.clock_suggest)
              {
                clock_suggest=vm.prescriptFinalData.clock_suggest;
              }
             

              
               clocktimedata.push({'pid':vm.prescriptFinalData.prescription_id,'name':vm.prescriptFinalData.prescription,'timing':vm.prescriptFinalData.clock_time,'quantity':vm.prescriptFinalData.clock_quantity,'clock_suggest':clock_suggest,'remove':'false'});
               clocktimedata= _.sortBy(clocktimedata, [function(o) { return o.timing; }]);
                  
                    
                      let i=0;
                      let objIndex = vm.prescriptFinalData.prescriptionNameList.findIndex((obj => obj.pid == vm.prescriptFinalData.prescription_id && obj.remove=='false'));
                        vm.prescriptFinalData.prescriptionNameList[objIndex].prescription_quantity=vm.prescriptFinalData.prescription_quantity;
                        vm.prescriptFinalData.prescriptionNameList[objIndex].total_prescription_days=vm.prescriptFinalData.total_prescription_days;
                      _.find(clocktimedata, function(res) {
                          if(res.remove=='false')
                          {

                              if(res.pid==vm.prescriptFinalData.prescription_id)
                              {
                                  if(i==0)
                                  {
                                    
                                      vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_1 = res.timing; 
                                      vm.prescriptFinalData.prescriptionNameList[objIndex].clock_quantity_1 = res.quantity; 
                                      vm.prescriptFinalData.prescriptionNameList[objIndex].clock_suggest_1 = res.clock_suggest; 
                                  }
                                  if(i==1)
                                  {
                                    
                                      vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_2 = res.timing; 
                                      vm.prescriptFinalData.prescriptionNameList[objIndex].clock_quantity_2 = res.quantity; 
                                       vm.prescriptFinalData.prescriptionNameList[objIndex].clock_suggest_2 = res.clock_suggest; 
                                  }
                                  if(i==2)
                                  {
                                    
                                      vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_3 = res.timing; 
                                      vm.prescriptFinalData.prescriptionNameList[objIndex].clock_quantity_3 = res.quantity; 
                                       vm.prescriptFinalData.prescriptionNameList[objIndex].clock_suggest_3 = res.clock_suggest; 
                                  }
                                  i++;
                              }
                          }
                          console.log(vm.prescriptFinalData.prescriptionNameList);
                            
                        });  
                      
                       return 'okay'; 
          },
          addMedicinOntime()
          {

            let vm=this;
            let clock_suggest='--';
              if(vm.prescriptFinalData.clock_suggest)
              {
                clock_suggest=vm.prescriptFinalData.clock_suggest;
              }
            
            clocktimedata.push({'pid':vm.prescriptFinalData.prescription_id,'name':vm.prescriptFinalData.prescription,'timing':vm.prescriptFinalData.clock_time,'quantity':vm.prescriptFinalData.clock_quantity,'clock_suggest':clock_suggest,'remove':'false'});
                let i=0;
                var clock_time_1="00:00",clock_time_2="00:00",clock_time_3="00:00";
                var clock_quantity_1=0,clock_quantity_2=0,clock_quantity_3=0;
                var clock_suggest_1='--',clock_suggest_2='--',clock_suggest_3='--';
                      for(i=0;i<clocktimedata.length;i++)
                      { 
                        
                        if(clocktimedata[i]['pid']==vm.prescriptFinalData.prescription_id)
                        {
                            clock_time_1 = clocktimedata[i]['timing']; 
                            clock_quantity_1 = clocktimedata[i]['quantity'];
                            clock_suggest_1 = clocktimedata[i]['clock_suggest'];
                        }

                         
                          
                      }

              vm.prescriptFinalData.prescriptionNameList.push({'pid': vm.prescriptFinalData.prescription_id,'name':vm.prescriptFinalData.prescription,'total_quantity':vm.prescriptFinalData.prescription_quantity,'clock_time_1':clock_time_1,'clock_quantity_1':clock_quantity_1,'clock_time_2':clock_time_2,'clock_quantity_2':clock_quantity_2,'clock_time_3':clock_time_3,'clock_quantity_3':clock_quantity_3,'clock_suggest_1':clock_suggest_1,'clock_suggest_2':clock_suggest_2,'clock_suggest_3':clock_suggest_3,'total_prescription_days':vm.prescriptFinalData.total_prescription_days,'remove':'false'});
                  return vm.prescriptFinalData.prescriptionNameList;
                },
          getLength(pid,array)
          {
              var length=0;
              var i=0;
              for(i=0;i<array.length;i++)
              {
                  if(array[i]['pid']==pid)
                  {
                      length=array[i]['clock_time'].length;
                  }
              }
              return length;
          },
          checkClockTime(time,clock1,clock2,clock3)
          {
              if(clock1==time)
              {
                return 'yes';
              }
              else if(clock2==time)
              {
                  return 'yes';
              }
              else if(clock3==time)
              {
                  return 'yes';
              }
              return 'no';
          },
          checkClockTimeEdit(time,clock1,clock2,clock3,old_clock)
          {
              if(old_clock!=time && clock1==time)
              {
                return 'yes';
              }
              else if(old_clock!=time && clock2==time)
              {
                  return 'yes';
              }
              else if(old_clock!=time && clock3==time)
              {
                  return 'yes';
              }
              return 'no';
          },
          savePrescription() {

             let vm =this;
             vm.prescriptFinalData.finalPrescriptionAllData=_.cloneDeep(vm.prescriptFinalData.prescriptionNameList);
             //console.log(vm.finalPrescriptionData,'fdsfds');
             vm.show_prescription_result_data_enable=true;
             vm.priscription_add_disabled=false;
             let finalData = _.cloneDeep(vm.prescriptFinalData.finalPrescriptionAllData);
             vm.$store.dispatch('setPrescriptionData',finalData);
          },
           removePrescription(did) {
                
                let vm =this;
                let prescpt_array=_.cloneDeep(vm.prescriptFinalData.prescriptionNameList);
                let clock_data_array=clocktimedata;
                _.find(prescpt_array, function(res) {
                    if(res.pid == did) {
                      res.remove = true;
                      return false;
                    }
                }); 
                _.remove(clock_data_array, function (e) {
                   return e.pid ==did ;
                });
                
              
               vm.prescriptFinalData.prescriptionNameList=prescpt_array;
               clocktimedata=clock_data_array;
               let new_array=_.filter(vm.prescriptFinalData.prescriptionNameList, ['remove', 'false']);
              vm.original_length=new_array.length;
                return false;
                
          },
           getPrescriptionList() {

            let vm =this;
            let userDepartment = vm.department;
            jQuery('.js-loader').removeClass('d-none');

            User.getPrescription(userDepartment).then( 
              (response)=> {
                  if(response.status == 200){
                    vm.prescriptionOption = response.data.data;
                    //$("#prescription").select2('destroy'); 
                     
                     setTimeout(function(){
                      $('#prescription').select2({placeholder: 'Select'});
                       jQuery('.js-loader').addClass('d-none');
                     },1000)

                  }
                },
                (error)=>{
                    jQuery('.js-loader').addClass('d-none');
                }

              )
           
          },
        editPrescriptionResult(name,clock_time,type)
        {
            let vm =this;
            let final_result=[];
            if(clock_time=='' || clock_time=="00:00")
            {
                toastr.error('Please select valid clock time.', 'Prescription error', {timeOut: 5000});
                return false;
            }
            _.find(vm.prescriptFinalData.prescriptionNameList, function(res) {
                if(res.pid == name) {
                    final_result=res;
                    vm.class_type='EDIT';
                    vm.prescriptFinalData.prescription=final_result.name;
                    vm.prescriptFinalData.prescription_id=final_result.pid;
                    //$("#prescription").select2("val", final_result.pid);
                    $("#prescription").val(final_result.pid).trigger('change');
                    $('#prescription').prop('readonly',true);
                    vm.prescriptFinalData.prescription_quantity=final_result.total_quantity;
                    vm.prescriptFinalData.total_prescription_days=final_result.total_prescription_days;
                    vm.prescriptFinalData.clock_type=type;
                    vm.prescriptFinalData.clock_value=clock_time;

                    if(type==1) 
                    {
                        if(res.clock_time_1==clock_time)
                        {
                            vm.prescriptFinalData.old_clock_value=final_result.clock_time_1;
                            vm.prescriptFinalData.clock_time=final_result.clock_time_1;
                            vm.prescriptFinalData.clock_quantity=final_result.clock_quantity_1;
                            vm.prescriptFinalData.clock_suggest=final_result.clock_suggest_1;
                            jQuery('input:radio[name="clock_suggest"]').filter('[value="'+final_result.clock_suggest_1+'"]').attr('checked', true);
                            return false;
                        }
                    }
                    else if(type==2)
                    {
                        if(res.clock_time_2==clock_time)
                        {
                            vm.prescriptFinalData.old_clock_value=final_result.clock_time_2;
                            vm.prescriptFinalData.clock_time=final_result.clock_time_2;
                            vm.prescriptFinalData.clock_quantity=final_result.clock_quantity_2;
                            vm.prescriptFinalData.clock_suggest=final_result.clock_suggest_2;
                            
                            return false;
                        }
                    }
                    else if(type==3)
                    {
                        if(res.clock_time_3==clock_time)
                        {
                            
                            vm.prescriptFinalData.old_clock_value=final_result.clock_time_3;
                            vm.prescriptFinalData.clock_time=final_result.clock_time_3;
                            vm.prescriptFinalData.clock_quantity=final_result.clock_quantity_3;
                            vm.prescriptFinalData.clock_suggest=final_result.clock_suggest_3;
                            return false;
                        }
                    }
                  
                  
                }
            });

           
            return false;
        },
        editClockResult()
        {
            let vm=this;
            let clock_suggest='--';
              if(vm.prescriptFinalData.clock_suggest!="")
              {
                clock_suggest=vm.prescriptFinalData.clock_suggest;
              }

            let objIndex = vm.prescriptFinalData.prescriptionNameList.findIndex((obj => obj.pid == vm.prescriptFinalData.prescription_id && obj.remove=='false'));
             var check_clocktime_edit=vm.checkClockTimeEdit(vm.prescriptFinalData.clock_time, vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_1, vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_2, vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_3,vm.prescriptFinalData.old_clock_value);
            if(check_clocktime_edit=='yes')
            {
                toastr.error('Clock time already exist.', 'Prescription error', {timeOut: 5000});
                return false;
            }
            else
            {
                    vm.prescriptFinalData.prescriptionNameList[objIndex].total_quantity=vm.prescriptFinalData.prescription_quantity;
                    vm.prescriptFinalData.prescriptionNameList[objIndex].total_prescription_days=vm.prescriptFinalData.total_prescription_days;
                   

                    let objIndex_clock = clocktimedata.findIndex((obj => obj.pid == vm.prescriptFinalData.prescription_id && obj.timing == vm.prescriptFinalData.old_clock_value));
                    clocktimedata[objIndex_clock].timing=vm.prescriptFinalData.clock_time;
                    clocktimedata[objIndex_clock].quantity=vm.prescriptFinalData.clock_quantity;
                    clocktimedata[objIndex_clock].clock_suggest=clock_suggest;
                    clocktimedata= _.sortBy(clocktimedata, [function(o) { return o.timing; }]);
                    let i=0;
                     _.find(clocktimedata, function(res) {
                          if(res.pid==vm.prescriptFinalData.prescription_id)
                          {
                              if(i==0)
                              {
                                  vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_1 = res.timing; 
                                  vm.prescriptFinalData.prescriptionNameList[objIndex].clock_quantity_1 = res.quantity; 
                                  vm.prescriptFinalData.prescriptionNameList[objIndex].clock_suggest_1 = res.clock_suggest; 
                              }
                              if(i==1)
                              {
                                  vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_2 = res.timing; 
                                  vm.prescriptFinalData.prescriptionNameList[objIndex].clock_quantity_2 = res.quantity; 
                                   vm.prescriptFinalData.prescriptionNameList[objIndex].clock_suggest_2 = res.clock_suggest; 
                              }
                              if(i==2)
                              {
                                  vm.prescriptFinalData.prescriptionNameList[objIndex].clock_time_3 = res.timing; 
                                  vm.prescriptFinalData.prescriptionNameList[objIndex].clock_quantity_3 = res.quantity; 
                                   vm.prescriptFinalData.prescriptionNameList[objIndex].clock_suggest_3 = res.clock_suggest; 
                              }
                              i++;
                          }
                            
                    });  
                    vm.class_type='ADD';
                    vm.clearPrespData();
                    return false;   
            }
           
            return false;
        },
          
      }
    }
</script>
<style>
.fa{
  font-size: 30px;
} 
</style>
