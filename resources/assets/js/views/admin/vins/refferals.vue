<template>
    <div class="container">
       <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-12">
          <label for="referral">Referral:</label>
        </div>
        <div class="col-md-12">
          <select class="form-control ls-select2" name="referral" id="referral" v-model="reffData.referral">
            <option value="" selected>Select </option>
            <option value="cross">Cross</option>
            <option value="radiology">Radiology</option>
            <option value="laboratory">Laboratory</option>
            <option value="physiotherapy">Physiotherapy</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6" v-if="reffData.referral == 'cross'">
        <div class="col-md-12">
          <label for="internal">Cross Reference:</label>
        </div>
        <div class="col-md-12">
          <select class="form-control ls-select2" name="cross" id="cross">
            <option value="">Select</option>
            <option value="internal">Internal</option>
            <option value="external">External</option>
          </select>
        </div>
      </div>
    </div>
    <div >
      <div class=" form-group" id="radio_div1" v-show="reffData.referral == 'radiology'">
        <div class="">
            <div class="row form-group">
               <div class="col-md-6"> 
                <div class="col-md-12">
                  <label>Select Radiology:</label>
                  <br>
                  <select class="form-control ls-select2" id="radiology_type_opd" name="radiology_type_opd">
                    <option v-for="type in investigationData.radiologyType" :value="type.value">{{type.text}}</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12" v-if="resultData.type=='other'">
                  <label> Other Parts</label>
                  <input type="text" name="radiology_other_text" id="radiology_other_text" class="form-control" v-model="resultData.radiologyOther">
                </div>
              </div>
            </div>
             <div class="row form-group">
                    <div class="col-md-6">
                      <div class="col-md-12">
                          <label>Body Part Side:</label><br>
                          <select class = "form-control ls-select2" id = "body_part_side" name = "body_part_side">
                              <option v-for="bps in investigationData.bodyPartSide" :value="bps.value">{{bps.text}}</option>
                          </select>
                      </div>
                    </div>
                </div>
            <div class="row form-group">
              <div class="col-md-6">
                <div class="col-md-12">
                  <label>Body Parts:</label>
                  <br>
                  <select class="form-control ls-select2" id="radiology_subtype_opd" name="radiology_subtype_opd" v-model="resultData.subType">
                    <option v-for="obj in investigationData.radiologySubType" :value="obj.text">{{obj.text}}</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12" v-if="resultData.subtype_text_enable">
                  <label> Other Parts</label>
                  <input type="text" name="subType_text_opd" id="subType_text_opd" class="form-control"  v-model="resultData.bodyPart">
                </div>
                <div class="col-md-12" v-if="resultData.subType === 'Spine'">
                  <label> Spine option:</label>
                  <select class="form-control ls-select2" id="radiology_spine_opd" name="radiology_spine_opd"  v-model="resultData.spine_option_value">
                    <option :value="obj.text" v-for="obj in investigationData.Spine_option" >{{obj.text}}</option>
                  </select>
                </div>
              </div>
                
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                 <div class="col-md-12">
                    <label>Select Qualifires:</label>
                    <br>  
                      <select class="form-control ls-select2" id="radiology_qualifier_opd" name="radiology_qualifier_opd" v-if="(resultData.type == 'MRI' && resultData.bodyPart != 'Spine')" v-model="resultData.qualifier">
                        <option v-for="obj in investigationData.radiologyQualifier" :value="obj.text">{{obj.text}}</option>
                      </select>
                      <input type="text" name="qualifier_opd" id="qualifier_opd" class="form-control" v-model="resultData.qualifier" v-else>
                </div>
                <div class="col-md-12" v-if="resultData.type == 'MRI'">
                    <label>Select Special request:</label>
                    <br>
                      <select class="form-control ls-select2" id="radiology_special_request_opd" name="radiology_special_request_opd" v-model="resultData.special_request">
                        <option v-for="obj in investigationData.radiologySpecialRequest" :value="obj.text">{{obj.text}}</option>
                      </select>
              </div>
              <div class="col-md-12" v-else>
                <label>Select Special request:</label>
                <br>
                  <input type="text" name="special_request_opd" id="special_request_opd" class="form-control" v-model="resultData.special_request">
              </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12" v-if="resultData.qualifier_text_enable">
                  <label> Other Parts</label>
                  <input type="text" name="qualifier_text_opd" id="qualifier_text_opd" class="form-control" v-model="resultData.qualifier">
                </div>
              </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6" >
                   <div class="col-md-12">
                      <label>Report details:</label><br>
                      <textarea class="form-control" cols="50" rows="5" v-model="resultData.textData"></textarea>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row form-group">
        <div class="col-md-6" v-show="cross_internal=='true'">
          <div class="col-md-12">
            <label for="internal">Internal Reference:</label>
          </div>
          <div class="col-md-12">
            <select class="form-control ls-select2" name="internal" id="internal" >
              <option value="">Select</option>
              <option :value="doc.name" v-for="doc in doctorOption">{{doc.name}}</option>
            </select>
          </div>
        </div>
        <div class="col-md-6" v-show="cross_external=='true'">
          <div class="col-md-12">
            <label for="external">External Reference:</label>
          </div>
          <div class="col-md-12">
            <input type="text" name="external" id="external" class="form-control" v-model="reffData.cross_type_ext">
            </div>
          </div>
        </div>
        <!-- for laboratory -->
        <div class="row form-group" v-show="reffData.referral == 'laboratory' ">
          <div class="col-md-6">
          <div class="col-md-12">
            <label class="control-label" for="label_1">Laboratory </label>
          </div>
          <div class="col-md-12">
             <select class="form-control ls-select2"  id="laboratory_report_opd" name="laboratory_report_opd[]" multiple="multiple">
              </select>
          </div>
        </div>
      </div>
      <!-- for laboratory -->

        <!-- for physiotherapy -->
        <div class="row form-group" v-show="reffData.referral == 'physiotherapy' ">
          <div class="col-md-6">
          <div class="col-md-12">
            <label class="control-label" for="label_1">Details </label>
          </div>
          <div class="col-md-12">
            <textarea class="form-control" name="physio_details" id="physio_details" v-model="reffData.physio_details"></textarea>
          </div>
        </div>
      </div>
      <!-- for physiotherapy -->
       
         <div class="row form-group">
          <div class="col-md-12">
               <button type="button" class="btn btn-primary btn-lg " v-if="reffData.referral!='physiotherapy'" @click="saveReport()">Add</button>
          </div>
       </div> 
      <!-- for cross table -->  
      <div class="col-md-12" v-if="reffData.reffreal_cross_array.length>0">
         <card title="<i class='ti-layout-cta-left'></i> Cross"  class="filterable">
           <div class="table-responsive">
              <table class="table table-striped table-bordered" id="">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Type</th>
                      <th>Sub Type</th>
                      <th>Value</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(cross_arr, index) in reffData.reffreal_cross_array">
                        <td>{{cross_arr.id}}</td>
                        <td>{{cross_arr.type}}</td>
                        <td>{{cross_arr.subtype}}</td>
                        <td>{{cross_arr.value}}</td>
                        <td><i class="fa fa-remove" @click="removeCrossRef(cross_arr.id)"></i></td>
                    </tr>
                  </tbody>
              </table>
            </div>
          </card>
      </div>
      <!-- for cross table -->
      <!-- for radiology table -->  
      <div class="col-md-12" v-if="reffData.reffreal_radiology_array.length>0">
          <card title="<i class='ti-layout-cta-left'></i> Radiology"  class="filterable">
           <div class="table-responsive">
              <table class="table table-striped table-bordered" id="radio_list">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Type</th>
                      <th>Body parts</th>
                      <th>Qualifier</th>
                      <th>Special request</th>
                      <th>Details</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-for="(radio_arr, index) in reffData.reffreal_radiology_array">
                      <td>{{radio_arr.id}}</td>
                      <td>{{radio_arr.type}}</td>
                      <td>{{radio_arr.bodyPart}}</td>
                      <td>{{radio_arr.qualifier}}</td>
                      <td>{{radio_arr.special_request}}</td>
                      <td>{{radio_arr.textData}}</td>
                      <td><i class="fa fa-remove" @click="removeRadioRef(radio_arr.id)"></i></td>
                  </tr>
                  
                  </tbody>
              </table>
            </div>
          </card>
          </div>
      <!-- for radiology table -->
       <!-- for laboratory table -->  
      <div class="col-md-12" v-if="reffData.reffreal_laboratory_array.length>0">
        <card title="<i class='ti-layout-cta-left'></i> Laboratory"  class="filterable">
           <div class="table-responsive">
              <table class="table table-striped table-bordered" id="">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(lab_arr, index) in reffData.reffreal_laboratory_array">
                        <td>{{lab_arr.id}}</td>
                        <td>{{lab_arr.name}}</td>
                        <td><i class="fa fa-remove" @click="removeLabRef(lab_arr.id)"></i></td>
                    </tr>
                  </tbody>
              </table>
            </div>
            </card>
      </div>
      <!-- for laboratory table -->
    </div>
</template>
<script >
    import User from '../../../api/users.js';
    import myDatepicker from 'vue-datepicker';
    import card from "./card.vue"
    import _ from 'lodash';
    export default {
        name:'referral',
        computed:{

        },
        components: {
           card
        },
        props:[],
        data() {
            return {
              'prescriptionunique' : 0,
              'cross_internal':'false',
              'cross_external':'false',
              'cross_array':{},
              'cross':{},
              'id':this._uid,
              'internal_array':{},
              'laboratory_array':{},
              'ref_cross_array':[],
              'ref_lab_array':[],
              'ref_radio_array':[],
              'doctorOption': [
                  {'name':'Rakesh Shah' },
                  {'name':'Anand Vaishnav'},
                  {'name':'Suvorit Bhowmick'},
                  {'name':'Mihir Acharya'},
                  {'name':'Monish Malhotra'},
                  {'name':'Suresh Nayak'},
                  {'name':'Rakesh Jasani'},
                  {'name':'Kaushik K Trivedi'},
                  {'name':'Ketan Kapashi'},
                  {'name':'Vijay Thakore'},
                  {'name':'Sumit Kapadia'},
                  {'name':'Rajesh Kantharia'},
                  {'name':'Hemant Mathur'},
              ],
              'investigationData':{
                  'radiologyType':[
                    {text:'',value:''},
                    {text:'X-Rays',value:'X-Rays'},
                    {text:'CT',value:'CT'},
                    {text:'MRI',value:'MRI'},
                    {text:'Ultra Sound',value:'ultra_sound'},
                    {text:'Doppler',value:'Doppler'},
                    {text:'Echo Cardiography',value:'echo_cardiography'},
                    {text:'PET-CT',value:'PET-CT'},
                    {text:'Bone Densitometry (DXA)',value:'bone_densitometry'},
                    {text:'Other',value:'other'},
                  ],
                  'bodyPartSide':[
                    {text:'Select',value:''},
                    {text:'Right',value:'Right'},
                    {text:'Left',value:'Left'},
                    {text:'Bilateral',value:'Bilateral'},
                    {text:'AP Lateral Oblique',value:'ap_lateral_oblique'}
                  ],
                  'radiologySubType':[
                      {text:'',value:''},
                  ],
                  'radiologyQualifier':[
                      {text:'',value:''},
                      {text:'Stroke protocol',value:'stroke_protocol'},
                      {text:'Epilepsy protocol',value:  'epilepsy_protocol'},
                      {text:'Headache protocol',value:'headache_protocol'},
                      {text:'Tumor protocol',value:'tumor_protocol'}
                  ],
                  'radiologyQualifierReal':[
                      {text:'',value:''},
                      {text:'Stroke protocol',value:'stroke_protocol'},
                      {text:'Epilepsy protocol',value:  'epilepsy_protocol'},
                      {text:'Headache protocol',value:'headache_protocol'},
                      {text:'Tumor protocol',value:'tumor_protocol'}
                  ],
                  'X-Rays':'',
                  // 'xray_type_options': [
                  //     {text:'Fixed',value:'fixed','selected':true},
                  //     {text:'Portable',value:'portable','selected':false}
                  // ],
                  'X-Rays_options':[
                      {text:'',value:''},
                      {text:'HIP',value:'hip'},
                      {text:'Knee',value:'knee'},
                      {text:'Shoulder',value:'shoulder'},
                      {text:'Pelvis',value:'pelvis'},
                      {text:'Chest PA',value:'chest_pa'},
                      {text:'Cervical Spine',value:'cervical_spine'},
                      {text:'Dorsal Spine',value:'dorsal_spine'},
                      {text:'Lumbar Spine',value:'lumbar_spine'},
                      {text:'Other',value:'other'},
                  ],
                  'CT':'',     
                  'CT_options':[
                      {text:'',value:''},
                      {text:'Brain (Plain)', value:'brain_plain'},
                      {text:'Brain (Plain & Contrast)', value:'brain_plain_contrast'},
                      {text:'Neck', value:'neck'},
                      {text:'Chest', value:'chest'},
                      {text:'Upper Abdomen', value:'upper_abdomen'},
                      {text:'Pelvis', value:'pelvis'},
                      {text:'Whole Abdomen', value:'whole_abdomen'},
                      {text:'CT Angiography', value:'ct_angiography'},
                      {text:'Guided Procedure:Biopsy', value:'guided_procedure'},
                      {text:'Other',value:'other'},
                     ],
                  'brain_options':[
                      {text:'',value:''},
                      {text:'Stroke protocol',value:'stroke_protocol'},
                      {text:'Epilepsy protocol',value:  'epilepsy_protocol'},
                      {text:'Headache protocol',value:'headache_protocol'},
                      {text:'Tumor protocol',value:'tumor_protocol'},
                      {text:'Brain (Routine)',value:'Brain (Routine)'},
                      {text:'Brain with Head &Neck MR Angiography(MRA)',value:'Brain with Head &Neck MR Angiography(MRA)'},
                      {text:'Brain with IntracranialMRA/MR Venography',value:'Brain with IntracranialMRA/MR Venography'},
                      {text:'Brain MR Spectroscopy alone',value:'Brain MR Spectroscopy alone'},
                      {text:'Brain Tumour Protoco',value:'Brain Tumour Protoco'},
                      {text:'Other',value:'Other'},
                  ],
                  'MRI':'',
                  'MRI_options':[
                       {text:'', value:''},
                       {text:'Brain', value:'brain'},
                       {text:'Spine', value:'spine'},
                       {text:'Joint', value:'joint'},
                       {text:'Cranial Nerne', value:'Cranial Nerne'},
                       {text:'Other', value:'other'}
                     ],
                  'Spine_option': [
                      {text:'',value:''},
                      {text:'Cervical', value:'Cervical'},
                      {text:'Dorsal', value:'Dorsal'},
                      {text:'Lumbar', value:'Lumbar'},
                      {text:'Whole spine screening', value:'Whole spine screening'},
                  ],
                  'others':'',
                  'others_options':[
                      {text:'',value:''},
                      {text:'other-Option 1'},
                      {text:'other-Option 2'},
                      {text:'other-Option 3'},
                      {text:'other-Option 4'},
                      {text:'other-Option 5'},
                      {text:'other-Option 6'},
                      {text:'other-Option 7'},
                      {text:'other-Option 8'}
                  ],
                  'radiologySpecialRequest':[
                      {text:'',value:''},
                      {text:'Neck Angio',value:'neck_angio'},
                      {text:'Brain Angio',value:'brain_angio'},
                      {text:'Spectroscopy',value:'spectroscopy'},
                      {text:'Diffusion',value:'diffusion'},
                      {text:'Flexion',value:'flexion'},
                      {text:'Extension',value:'extension'},
                  ]

              },
              'resultData': {
                    'id':'',
                    'uploadType':'image',
                    'bodyPart':'',
                    'qualifierPart':'',
                    'type': '',
                    // 'x_ray_type':'fixed',
                    'spine_option_value':'',
                    'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'qualifier_text_enable':false,
                    'special_request':'',
                    'removed':false,
                    'body_part_side':'',
                    'radiologyOther':''
                },
              'reffData': {
                'reffreal_cross_array':[],
                'reffreal_laboratory_array':[],
                'reffreal_radiology_array':[],
                'laboratoryALLData':[],
                'laboratory_report_opd_data':{},
                'referral':'',
                'laboratory':'',
                'physio_details':'',
              }
            }
               
        },
        mounted() {
          let vm =this;
          $('.ls-select2').select2({
                  placeholder: "Select",
          });
          vm.$root.$emit('setReferralId',this._uid)
               /*for laboratory data*/
            let labpratory_all_data=[];
            User.generateAllLaboratoryListByChild().then(
              (response) => {
                let lab_data = response.data.data;
                vm.reffData.laboratoryALLData = lab_data;
                $('#laboratory_report_opd').select2({
                  placeholder: 'Select',
                  data:lab_data
                });
              },
              (error) => 
              {
              },
            );

           $('#laboratory_report_opd').on("select2:select", function (e) {
              let selections = $(this).val();
              vm.reffData.laboratory_report_opd_data=selections;
              //vm.setLabData();
            });

          
          $(document).on("select2:select",'.ls-select2', function (e) { 
            if(this.id == 'referral'){
               vm.setRadioReferral();
              vm.reffData.referral=$(this).val();
              //vm.finalResultData = '';
              if($(this).val() != 'physiotherapy') {
                vm.reffData.physio_details = "";
              }
              if($(this).val() == 'cross') {
                setTimeout(function(){
                  $('#cross').select2({
                    placeholder: "Select",
                    tags:false 
                  }); 
                },20)  
              }
            }
            else if(this.id == 'radiology'){
              vm.reffData.radiology=$(this).val();
            }
            else if(this.id == 'laboratory'){
              vm.reffData.laboratory=$(this).val();
            }
            else if(this.id == 'cross'){
              var cross_array=$(this).val();
              vm.cross=cross_array;
               if(cross_array.includes("internal"))
              {
                  vm.cross_internal='true';
                  vm.cross_external='false';
              }
              if(cross_array.includes("external"))
              {
                  vm.cross_external='true';
                  vm.cross_internal='false';
              }
              
              // vm.reffData.reffreal_cross_array =  vm.cross;

            }
            else if(this.id == 'internal'){
              var val_cross_array=$(this).val();
              vm.internal_array=val_cross_array;
            }
            else if(this.id == 'laboratory_report_opd'){
              var val_lab_array=$(this).val();
              vm.laboratory_array=val_lab_array;
            }
            else if(this.id == 'case_type'){
              vm.reffData.case_type = $(this).val(); 
            }
             else if(this.id == 'xray_type_opd'){
              vm.resultData.x_ray_type = $(this).val(); 
            }
                       
            if(this.id == 'radiology_type_opd') {

                vm.resultData.type = $(this).val();
                let type_opd_val=$(this).val();
                vm.resultData.spine_option_value="";
                vm.resultData.bodyPart ="";
                vm.resultData.subType="";
                vm.resultData.subtype_text_enable = false;
                $('#radiology_spine_opd').select2("destroy");
                $("#radiology_subtype_opd").val('').trigger('change.select2');
                if(type_opd_val=='MRI')
                {
                  setTimeout(function(){
                          $('#radiology_qualifier_opd').select2({
                            placeholder: "Select",
                            tags:false 
                          }); 
                          $('#radiology_special_request_opd').select2({
                            placeholder: "Select",
                            tags:false 
                          });
                          
                    },1000);
                }
                else
                {
                    $('#radiology_qualifier_opd').select2("destroy");
                    $('#radiology_special_request_opd').select2("destroy");
                }
                vm.radioSubType();
                
            } 
            if(this.id == 'body_part_side') {
                vm.resultData.body_part_side=$("#body_part_side").select2().val();
            }
            if(this.id == 'radiology_subtype_opd') {
                    
              let q_data=vm.investigationData.radiologyQualifierReal;
              let radiologySubType_val=$("#radiology_subtype_opd").select2().val();
              vm.resultData.bodyPart = radiologySubType_val;
              vm.resultData.subType=radiologySubType_val;
                //vm.investigationData.radiologySubType =  radiologySubType_val;
                 vm.resultData.subtype_text_enable = false;

                $("#radiology_qualifier_opd").val('').trigger('change.select2');
                vm.resultData.qualifier = '';
                vm.resultData.qualifier_text_enable = false;
                vm.resultData.qualifierPart = '';
                if(vm.resultData.type=='MRI')
                    {
                        setTimeout(function(){
                            $('#radiology_qualifier_opd').select2({
                                    placeholder: "Select",
                                    tags:false 
                                  }); 
                        },500);
                    }
                if(radiologySubType_val=='Spine')
                {
                   $('#radiology_qualifier_opd').select2("destroy");
                    setTimeout(function(){
                            $('#radiology_spine_opd').select2({
                              placeholder: "Select",
                              tags:false 
                            }); 
                    },500);
                     vm.resultData.subtype_text_enable = false;
                   
                }
                else if(radiologySubType_val=='Brain')
                {
                  
                  vm.investigationData.radiologyQualifier="";
                  vm.investigationData.radiologyQualifier=vm.investigationData.brain_options;
                }
                else
                { 

                    vm.investigationData.radiologyQualifier="";
                    vm.investigationData.radiologyQualifier=q_data;
                    vm.resultData.qualifier_text_enable = false;
                    vm.resultData.qualifierPart = '';
                }

                if(radiologySubType_val == 'Other' || radiologySubType_val =='Joint'){
                    $('#radiology_spine_opd').select2("destroy");
                     vm.resultData.spine_option_value="";
                    vm.resultData.subtype_text_enable = true;
                    //vm.resultData.bodyPart = radiologySubType_val;
                } else {
                  
                  vm.resultData.subtype_text_enable = false;
                  //vm.resultData.bodyPart = '';
                  
                }
            }
            if(this.id == 'radiology_qualifier_opd') {

                vm.resultData.qualifier = $("#radiology_qualifier_opd").select2().val();
                let qualy_val=$("#radiology_qualifier_opd").select2().val();
                //console.log(qualy_val);
                if(qualy_val=='Other')
                {
                    vm.resultData.qualifier_text_enable = true;
                    vm.resultData.qualifierPart = '';
                }
                else
                {
                    vm.resultData.qualifier_text_enable = false;
                    vm.resultData.qualifierPart = $("#radiology_qualifier_opd").select2().val();
                }

            }
            if(this.id == 'radiology_spine_opd')
            {
              vm.resultData.spine_option_value=$("#radiology_spine_opd").select2().val();
            }
            if(this.id == 'radiology_special_request_opd') {
              
              vm.resultData.special_request = $("#radiology_special_request_opd").select2().val();
            }
             

          });
          $(document).on("select2:unselect",'.ls-select2', function (e) {
              if(this.id == 'cross')
              {
                  if(e.params.data.id=='external')
                  {
                      vm.cross_external='false';
                  }
                  if(e.params.data.id=='internal')
                  {
                      vm.cross_internal='false';
                  }
              }
          });

           /*for intialize data end*/
            setTimeout(function(){
                vm.initData();
            },1000)
            
            
        },
        filters:{
             removeReport(did) {
                let vm =this;
                // _.pullAt(resData, 0);
                _.find(vm.finalResultData, function(res) {
                    if(res.id == did) {
                         res.removed = true;
                    }
                });
          },
        },
        methods: {
          initData() {
              let vm =this;
              var reffData = _.cloneDeep(vm.$store.state.Patient.refferelReportData);
              if(!(jQuery.isEmptyObject(reffData)))
              {
                  vm.reffData=reffData;
                  vm.ref_cross_array=reffData.reffreal_cross_array;
                  vm.ref_lab_array=reffData.reffreal_laboratory_array;
                  vm.ref_radio_array=reffData.reffreal_radiology_array;
              }
            },
            saveReport() {
                
                // var resData1=[];
                let vm =this;
                if(vm.reffData.referral=='cross')
                {
                   vm.saveCrossReport();
                }
                if(vm.reffData.referral=='laboratory')
                {
                    vm.saveLabReport();
                }
                if(vm.reffData.referral=='radiology')
                {
                    vm.saveRadiologyReport();
                }

                vm.$store.dispatch('saveReferralReportData',vm.reffData);
                 
                return false;
                 
          },
          radioSubType(){
            let vm =this;
            let resType = vm.resultData.type;
            let x_rayData = '';
            
            if(vm.resultData.type != ''){
              x_rayData = vm.investigationData[resType+'_options'];
              $('#radiology_subtype_opd').select2({
                placeholder: "Select",
              });

            } 
            vm.investigationData.radiologySubType = '';
            setTimeout(function(){
              vm.investigationData.radiologySubType = x_rayData;
            },200);

          },
           saveRadiologyReport()
          {
              let vm =this;
              if(vm.resultData.type == '' ){
                  toastr.error('Please select report data.', 'Report error', {timeOut: 5000});
                  return false;
              }
              
               let matches=_.some(vm.ref_radio_array,{'type':vm.resultData.type,'bodyPart':vm.resultData.bodyPart,'qualifier':vm.resultData.qualifier,'special_request':vm.resultData.special_request});
              if(matches)
              {
                  $('#referral').val('').trigger('change.select2');
                  vm.setRadioReferral();
                  toastr.error('This record already exist', 'Error', {timeOut: 5000});
                  return false;
              }
              vm.resultData.id = vm.ref_radio_array.length+1;
              vm.ref_radio_array.push(vm.resultData);
              vm.reffData.reffreal_radiology_array = _.cloneDeep(vm.ref_radio_array);
              $('#referral').val('').trigger('change.select2');
              vm.setRadioReferral();
              return false;
          },
           setRadioReferral()
          {
               let vm =this;
               vm.cross_internal='false';
                vm.cross_external='false';
              $('#radiology_qualifier_opd').select2("destroy");
              $('#radiology_special_request_opd').select2("destroy");
              $('#radiology_type_opd').val('').trigger('change.select2');
              $('#radiology_subtype_opd').val('').trigger('change.select2');
              $('#radiology_spine_opd').select2("destroy");
              vm.resultData = {
                   'id':'',
                    'uploadType':'image',
                    'bodyPart':'',
                    'type': '',
                    'spine_option_value':'',
                    'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'special_request':'',
                    'removed':false,
                };
                $('#radio_div1 .ls-select2').val(null).trigger('change');
                vm.reffData.referral="";
          },
          removeRadioRef(rid)
          {
              let vm =this;
              _.remove(vm.ref_radio_array, function(o) {
                  return o.id==rid;
                });
              vm.reffData.reffreal_radiology_array= _.cloneDeep(vm.ref_radio_array);
          },
          saveLabReport()
          {
              let vm =this;
              if(vm.laboratory_array.length>0)
              {

                 _.forEach(vm.laboratory_array, function(value, key) {
                    let matches=_.some(vm.ref_lab_array,['lab_id',value]);
                    if(matches)
                    {
                        vm.setLabReferral();
                        toastr.error('This record already exist', 'Error', {timeOut: 5000});
                        return false;
                    }
                    else
                    {
                      var lab_name= $("#laboratory_report_opd option[value='"+value+"']").text();
                      vm.ref_lab_array.push({'id':vm.ref_lab_array.length+1,'name':lab_name,'lab_id':value});
                    }
                    
                  });
              }
              vm.reffData.reffreal_laboratory_array= _.cloneDeep(vm.ref_lab_array);
              vm.setLabReferral();
              return false;
          },
          setLabReferral()
          {
               let vm =this;
              $('#referral').val('').trigger('change.select2');
              $('#laboratory_report_opd').val('').trigger('change.select2');
              vm.reffData.referral="";
              vm.laboratory_array=[];
          },
          removeLabRef(lid)
          {
              let vm =this;
              _.remove(vm.ref_lab_array, function(o) {
                  return o.id==lid;
                });
              vm.reffData.reffreal_laboratory_array= _.cloneDeep(vm.ref_lab_array);
          },
          saveCrossReport()
          {
                let vm =this;
                let matches2=_.some(vm.ref_cross_array,['value',vm.reffData.cross_type_ext]);
                if(matches2)
                {
                    vm.setCrossReferral();
                    toastr.error('This record already exist', 'Error', {timeOut: 5000});
                    return false;
                }
                if(vm.internal_array.length>0)
                {
                  vm.ref_cross_array.push({'id':vm.ref_cross_array.length+1,'type':vm.reffData.referral,'subtype':'Internal','value':vm.internal_array});
                }
                if(vm.reffData.cross_type_ext)
                {
                    vm.ref_cross_array.push({'id':vm.ref_cross_array.length+1,'type':vm.reffData.referral,'subtype':'External','value':vm.reffData.cross_type_ext});
                }
                vm.reffData.reffreal_cross_array=vm.ref_cross_array;
                vm.setCrossReferral();
                return false;

          },
          setCrossReferral()
          {
               let vm =this;
              $('#referral').val('').trigger('change.select2');
              $('#cross').val('').trigger('change.select2');
              $('#internal').val('').trigger('change.select2');
              vm.reffData.referral="";
              vm.reffData.cross_type_ext="";
              vm.internal_array=[];
              vm.cross_internal='false';
              vm.cross_external='false';
          },
          removeCrossRef(cid)
          {
              let vm =this;
              _.remove(vm.ref_cross_array, function(o) {
                  return o.id==cid;
                });
              vm.reffData.reffreal_cross_array= _.cloneDeep(vm.ref_cross_array);
          },
            
        }
           
    }
</script>
