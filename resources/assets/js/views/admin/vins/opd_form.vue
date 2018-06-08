<template id="">
  <div class="container">
    <div class="page-header">
      <div class="row text-center">
        <div class="col-md-12">
          <h1>OPD Form</h1>
        </div>
      </div>
    </div>
    <form action="" method="post" enctype="multipart/formdata">
      <div v-if="curStep == 1">
        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6 ">
              <label for="case_type">Case type:</label>
            </div>
            <div class="col-md-6">
              <select class="form-control ls-select2" type="text" v-validate="'required'" id="case_type" name="case_type" value="" v-model="opdData.case_type">
                <option value="new">New</option>
                <option value="old">Old</option>
              </select>
              <span class="help is-danger" v-show="errors.has('case_type')">
              Field is required
            </span>
            </div>
          </div>
          <div class="col-md-6" v-if="opdData.case_type == 'new'">
            <create-patient-detail @confirmed="deleteConfirmed()" patientType='opd' :doctor="doctor"></create-patient-detail>
            <div class="col-md-6 " v-if="opdData.uhid_no!=''" >
              <label for="date">UHID No:</label>
            </div>
            <div class="col-md-6" v-if="opdData.uhid_no!=''" >
              <input type="text" class="form-control"  v-model="opdData.uhid_no" readonly="">
            </div>  
          </div>
          <div class="col-md-6" v-if="opdData.case_type == 'old'">
            <div class="col-md-6 ">
              <label for="date">UHID No:</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="uhid_no" class="form-control" v-validate="'required'" v-model="opdData.uhid_no">
                <span class="help is-danger" v-show="errors.has('uhid_no')">
                  Field is required
                </span>
              </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <div class="col-md-6">
                <label for="date">Weight:</label>
              </div>
              <div class="col-md-6">
                <input type="text" name="weight" id="weight" class="form-control" v-model="opdData.weight"  placeholder="In kgs"   v-validate="'required|numeric'">
                  <span class="help is-danger" v-show="errors.has('weight')">
                    Field and Numeric value required
                  </span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-6">
                  <label for="date">Height:</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="height" id="height" class="form-control" placeholder="In cms" v-model="opdData.height"  v-validate="'required|numeric'">
                    <span class="help is-danger" v-show="errors.has('height')">
                      Field and Numeric value required
                    </span>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="col-md-6">
                    <label for="date">BMI:</label>
                  </div>
                  <div class="col-md-12">
                    <input type="text" name="bmi" id="bmi" class="form-control" readonly="" v-model="bmi">
                    </div>
                  </div>
                </div>
                <hr>
                  <div class="row form-group">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label for="date">Doctor:</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" name="doctor" id="doctor" class="form-control" readonly="" v-model="doctor">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label for="date">Department:</label>
                      </div>
                      <div class="col-md-6">
                        <input type="text" name="department" id="department" class="form-control" readonly=""  v-model="department">
                      </div>
                    </div>
                  </div>
                  <div class="row form-group">
                  <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">Vitals:</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="vitals" id="vitals" class="form-control" v-model="opdData.vitals"  v-validate="'required'">
                      <span class="help is-danger" v-show="errors.has('vitals')">
                        Field is required
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">Pulse:</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="pulse" id="pulse" class="form-control" v-model="opdData.pulse"  v-validate="'required|numeric'" placeholder="/min"> 
                       <span class="help is-danger" v-show="errors.has('pulse')">
                        Field is required
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">BP Systolic:</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="bp_systolic" id="bp_systolic" class="form-control"  v-model="opdData.bp_systolic"  v-validate="'required'">

                      <span class="help is-danger" v-show="errors.has('bp_systolic')">
                        Field is required
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">BP Diastolic:</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="bp_diastolic" id="bp_diastolic" class="form-control"  v-model="opdData.bp_diastolic"  v-validate="'required'">
                       <span class="help is-danger" v-show="errors.has('bp_diastolic')">
                        Field is required
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row form-group">

                  <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">Temp:</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="temp" id="temp" class="form-control"  v-model="opdData.temp" v-validate="'required'" placeholder="°F">
                      <span class="help is-danger" v-show="errors.has('temp')">
                        Field is required
                      </span>
                    </div>
                  </div>
                </div>

      <div class="row form-group">
        <div class="col-md-6">
            <div class="col-md-12">
              <label for="history">History type:</label>
              <button type="button" class="btn btn-submit" @click="setHistoryType('present','text')">Text</button>
              <button type="button" class="btn btn-warning" @click="setHistoryType('present','scribble')">Scribble</button>
            </div>

        </div>
        
      </div>
      <div class="row form-group">
        <div class="col-md-6">
            <div class="col-md-6">
              <label for="history">History: </label>
            </div>
            <div class="col-md-12" v-show="opdData.historyType == 'text'">
              <textarea name="history"  id="history" class="form-control"  v-model="opdData.history" cols=""></textarea> 
            </div>
            <div class="col-md-12" v-show="opdData.historyType == 'scribble'">
              <div id="signature-pad" class="signature-pad">
                <div class="signature-pad--body">
                  <canvas class="can-img" id="history_scribble" height="200px" width="500px" ></canvas> 
                </div>
                <div><button type="button" id="clear_history_scribble" class="btn btn-md btn-danger">Clear</button>
                <button type="button" id="save_history_scribble" class="btn btn-md btn-primary">Save</button></div>

              </div>
            </div>
        </div>
        <div class="col-md-6" v-if="opdData.signaturePad_src!=''">
          <div class="col-md-12">
              <label for="history">History Preview:     <i class="fa fa-download fa-lg red" @click="download(opdData.signaturePad_src,'History')" aria-hidden="true"></i></label>
            </div>
            <div>
              <img :src="opdData.signaturePad_src" title="past history">
            </div>  
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
            <div class="col-md-12">
              <label for="history">Past History type:</label>
              <button type="button" class="btn btn-submit" @click="setHistoryType('past','text')">Text</button>
              <button type="button" class="btn btn-warning" @click="setHistoryType('past','scribble')">Scribble</button>
            </div>

        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
            <div class="col-md-6">
              <label for="history">Past History:</label>
            </div>
            <div class="col-md-12" v-show="opdData.pastHistoryType == 'text'">
              <textarea name="history"  id="history" class="form-control"  v-model="opdData.past_history" cols=""></textarea> 
            </div>
            <div class="col-md-12" v-show="opdData.pastHistoryType == 'scribble'">
              <div id="signature-pad1" class="signature-pad">
                <div class="signature-pad--body">
                  <canvas class="can-img" id="past_history_scribble" height="200px" width="500px" ></canvas> 
                </div>
                <div>
                  <button type="button" id="clear_past_history_scribble" class="btn btn-md btn-danger">Clear</button>
                  <button type="button" id="save_past_history_scribble" class="btn btn-md btn-primary">Save</button>
                </div>
              </div>
            </div>
        </div>
         <div class="col-md-6" v-if="opdData.signaturePad1_src!=''">
          <div class="col-md-12">
              <label for="history">Past history Preview:  <i class="fa fa-download fa-lg red" @click="download(opdData.signaturePad1_src,'Past history')" aria-hidden="true"></i></label>
            </div>
            <div>
              <img :src="opdData.signaturePad1_src" title="past history">
            </div>  
        </div>
      </div>


    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="advise">Advice:</label>
        </div>
        <div class="col-md-12">
          <textarea class="form-control" type="text" name="advise" id="advise" v-model="opdData.advise"  v-validate="'required'"></textarea>
          <span class="help is-danger" v-show="errors.has('advise')">
            Field is required
          </span>
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-3">
        <div class="col-md-12">
          <label for="prescription">Prescription:</label>
        </div>
        <div class="col-md-12">
          <select class="form-control ls-select2"  name="prescription" id="prescription" v-validate="'required'"  v-model="opdData.prescription">
            <option value="">Select</option>
            <option v-for="pres in prescriptionOption" :value="pres.name">{{pres.name}}</option>
          </select>
          <span class="help is-danger" v-show="errors.has('prescription')">
            Field is required
          </span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="col-md-12">
          <label for="quantity">Quantity:</label>
        </div>
        <div class="col-md-12">
            <input type="text" name="prescription_quantity" id="prescription_quantity" class="form-control" v-model="opdData.prescription_quantity">
          <span class="help is-danger" v-show="errors.has('prescription_quantity')">
            Field is required
          </span>
        </div>
      </div>
       <div class="col-md-3">
        <div class="col-md-12">
          <label for="prescription_unit">Unit:</label>
        </div>
         <div class="col-md-12">
            <input type="text" name="prescription_unit" id="prescription_unit" class="form-control" v-model="opdData.prescription_unit" readonly="readonly">
          <span class="help is-danger" v-show="errors.has('prescription_unit')">
            Field is required
          </span>
        </div>
      </div>
      <div class="col-md-3">
         <div class="col-md-12">
          <label for="prescription_time">Time For Medicine:</label>
        </div>
        <div class="col-md-12">
          <select class="form-control ls-select2"  name="prescription_time" id="prescription_time" v-validate="'required'" multiple="multiple" v-model="opdData.prescription_time">
            <option value="">Select</option>
            <option value="morning">Morning</option>
             <option value="noon">Noon</option>
             <option value="evening">Evening</option>
             <option value="night">Night</option>
          </select>
          <span class="help is-danger" v-show="errors.has('prescription_time')">
            Field is required
          </span>
      </div>
      <div class="col-md-12">
                   <button type="button" class="btn btn-primary btn-lg " :disabled="(opdData.prescriptionOption == '' || opdData.prescription_quantity == '' )" @click="savePrescription()">Add</button>
      </div>
    </div>
     <div class="table-responsive">
              <table class="table" id="prescription_list">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Quntity</th>
                      <th>Unit</th>
                      <th>Time For Medicine</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr></tr>
                  </tbody>
                   <tr  v-for="(res,index) in finalPrescriptionData">
                      <td>{{res.id}}</td>
                      <td>{{res.Prescription }}</td>
                      <td>{{res.quntity}}</td>
                      <td>{{res.unit}}</td>
                      <td>{{res.time}}</td>
                      <td> <i class="fa fa-remove" @click="removePrescription(res.id)"></i></td>
                    </tr>
              </table>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-12">
          <label for="referral">Referral:</label>
        </div>
        <div class="col-md-12">
          <select class="form-control ls-select2" name="referral" id="referral" v-model="opdData.referral">
            <option value="cross">Cross</option>
            <option value="radiology">Radiology</option>
            <option value="laboratory">Laboratory</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6" v-if="opdData.referral == 'cross'">
        <div class="col-md-12">
          <label for="internal">Cross Reference:</label>
        </div>
        <div class="col-md-12">
          <select class="form-control ls-select2" name="cross" id="cross" v-model="opdData.cross">
            <option value="internal">Internal</option>
            <option value="external">External</option>
          </select>
        </div>
      </div>
    </div>
    <div >
      <div class=" form-group" id="radio_div1" v-show="opdData.referral == 'radiology'">
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
                <div class="col-md-6" v-show="resultData.type == 'X-Rays'">
                  <div class="col-md-12">
                    <label> Select Type</label>
                    <select class="form-control" id="xray_type_opd" name="xray_type_opd" v-model="resultData.x_ray_type">
                      <option v-for="type in investigationData.xray_type_options" :value="type.value">{{type.text}}</option>
                    </select>
                  </div>
                </div>
              <!-- </div>  -->
            </div>
            <div class="row form-group">
              <div class="col-md-6">

                <div class="col-md-12">
                  <label>Body Parts:</label>
                  <br>
                  <select class="form-control ls-select2" id="radiology_subtype_opd" name="radiology_subtype_opd">
                    <option v-for="obj in investigationData.radiologySubType" :value="obj.text">{{obj.text}}</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12" v-if="resultData.subtype_text_enable">
                  <label> Other Parts</label>
                  <input type="text" name="subType_text_opd" id="subType_text_opd" class="form-control" v-model="resultData.bodyPart">
                </div>
                <div class="col-md-12" v-if="resultData.bodyPart == 'Spine'">
                  <label> Spine option</label>
                  <select class="form-control ls-select2" id="radiology_spine_opd" name="radiology_spine_opd"  v-model="resultData.spine_option_value">
                    <option v-for="obj in investigationData.Spine_option" :value="obj.text">{{obj.text}}</option>
                  </select>
                </div>
              </div>
                
            </div>
            <div class="row form-group">
              <div class="col-md-6">

              <div class="col-md-12">
                <label>Select Qualifires:</label>
                <br>  
                  <select class="form-control " id="radiology_qualifier_opd" name="radiology_qualifier_opd" v-if="resultData.type == 'MRI'" v-model="resultData.qualifier">
                    <option v-for="obj in investigationData.radiologyQualifier" :value="obj.text">{{obj.text}}</option>
                  </select>
                  <input type="text" name="qualifier_opd" id="qualifier_opd" class="form-control" v-model="resultData.qualifier" v-else>
              </div>
              <div class="col-md-12" v-if="resultData.type == 'MRI'">
                    <label>Select Special request:</label>
                    <br>
                      <select class="form-control" id="radiology_special_request_opd" name="radiology_special_request_opd" v-model="resultData.special_request">
                        <option v-for="obj in investigationData.radiologySpecialRequest" :value="obj.text">{{obj.text}}</option>
                      </select>
              </div>
              <div class="col-md-12" v-else>
                <label>Select Special request:</label>
                <br>
                  <input type="text" name="special_request_opd" id="special_request_opd" class="form-control" v-model="resultData.special_request">
              </div>
              </div>
            </div>
             <div class="row form-group">
              <div class="col-md-12">
                   <button type="button" class="btn btn-primary btn-lg " :disabled="(resultData.type == '' || resultData.bodyPart == '')" @click="saveReport()">Add</button>
              </div>
          </div>                   
              
           
          </div>
          <card title="<i class='ti-layout-cta-left'></i> Reports">
           <div class="table-responsive">
              <table class="table" id="radio_list">
                  <thead>
                  <tr>
                      <th>Type</th>
                      <th>Body parts</th>
                      <th>Qualifier</th>
                      <th>Special request</th>
                      <!-- <th>Details</th> -->
                      <!-- <th>Gallery</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <tr >
                      <td>{{finalResultData.type}}</td>
                      <td>{{finalResultData.bodyPart}}</td>
                      <td>{{finalResultData.qualifier}}</td>
                      <td>{{finalResultData.special_request}}</td>
                      <!-- <td>{{res.textData | strLimit}}</td> -->
                      <!-- <td><a href="javascript:void(0)" @click="viewGallery(res.id)" class="red">View</a></td> -->
                      <!-- <td><img :src="res.imgData" height="100" width="100" /></td> -->
                      <!-- <td> <i class="fa fa-remove" @click="removeReport(res.id)"></i></td> -->

                      
                  </tr>
                  
                  </tbody>
              </table>
          </div>
        </card>
        </div>

        <!-- <div class="row">
          <div  v-if="opdData.referral == 'laboratory'">
            <div class="col-md-6">
              <label for="laboratory">Laboratory:</label>
            </div>
            <div class="col-md-12">
              <input class="form-control" type="text" name="laboratory" id="laboratory" v-model="opdData.laboratory" />
            </div>
          </div>
        </div> -->
      </div>
      <div class="row form-group">
        <div class="col-md-6" v-show="opdData.referral == 'cross' && opdData.cross == 'internal'">
          <div class="col-md-12">
            <label for="internal">Internal Reference:</label>
          </div>
          <div class="col-md-12">
            <select class="form-control ls-select2" name="internal" v-model="opdData.cross_type_int" id="internal">
              <option :value="doc.name" v-for="doc in doctorOption">{{doc.name}}</option>
            </select>
          </div>
        </div>
        <div class="col-md-6" v-show="opdData.referral == 'cross'&& opdData.cross == 'external'">
          <div class="col-md-12">
            <label for="external">External Reference:</label>
          </div>
          <div class="col-md-12">
            <input type="text" name="external" id="external" class="form-control" v-model="opdData.cross_type_ext">
            </div>
          </div>
        </div>
        
      </div>
      <div class="row" v-if="curStep == 2"> 
          <laboratory ></laboratory>
        </div>
      <div class="row form-group"  v-if="curStep == 3">
        <div class="col-md-12" v-if="department == 'Neurology' || department == 'Neurosurgery'">
          <neuro-examination :doctor="doctor"></neuro-examination>
        </div>
        <div class="col-md-12" v-if="department == 'Vascular'">
          <vascular-examination :doctor="doctor"></vascular-examination>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <button type="button" class="btn btn-primary btn-submit text-right " @click="prev()" v-if="curStep!=1">Previous</button>
          <button type="button" class="btn btn-primary btn-submit text-right " @click="next()" v-if="curStep!=3">Next</button>
          <button type="button" class="btn btn-primary btn-submit text-right " v-if="curStep==3" @click="saveInformation()">Submit</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script >
    var resData1=[];

  import User from '../../../api/users.js';
  import createPatientDetail from './createPatientDetail.vue';
  import vascularExamination from './vascularExamination.vue';
  import neuroExamination from './neuroExamination.vue';
  import SignaturePad from 'signature_pad';
  import laboratory from './laboratory.vue';
  import _ from 'lodash';
    import card from "./card.vue"
      var  medicine ;
      var  timeList = '';

    export default {
        data() {
            return {
              'footer' : 'footer',
              'currentYear': new Date().getFullYear(),
              'type': 'opdForms',
              'doctor':this.$store.state.Users.userDetails.first_name+' '+this.$store.state.Users.userDetails.last_name,
              'department':this.$store.state.Users.userDetails.department,
              'prescriptionOption':'',
              'finalResultData':{},
              'finalPrescriptionData' : [],
              'investigationData':{
                  'radiologyType':[
                    {text:'',value:''},
                    {text:'X-Rays',value:'X-Rays'},
                    {text:'CT',value:'CT'},
                    {text:'MRI',value:'MRI'},
                    {text:'Doppler',value:'doppler'},
                    {text:'Other',value:'other'}
                  ],
                  'radiologySubType':[
                      {text:'',value:''},
                  ],
                  'radiologyQualifier':[
                      {text:'',value:''},
                      {text:'Stroke protocol',value:'stroke_protocol'},
                      {text:'Epilepsy protocol',value:'epilepsy_protocol'},
                      {text:'Headache protocol',value:'headache_protocol'},
                      {text:'Tumor protocol',value:'tumor_protocol'}
                  ],
                  'X-Rays':'',
                  'xray_type_options': [
                      {text:'Fixed',value:'fixed','selected':true},
                      {text:'Portable',value:'portable','selected':false}
                  ],
                  'X-Rays_options':[
                      {text:'',value:''},
                      {text:'HIP',value:'hip'},
                      {text:'Knee',value:'knee'},
                      {text:'Shoulder',value:'shoulder'},
                      {text:'Pelvis',value:'pelvis'},
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
                     ],
                  'MRI':'',
                  'MRI_options':[
                       {text:'Brain', value:'brain'},
                       {text:'Spine', value:'spine'},
                       {text:'Joint', value:'joint'},
                       {text:'Other', value:'other'},
                       {text:'Cranial Nerne', value:'Cranial Nerne'}
                     ],
                  'Spine_option': [
                      {text:'Cervical', value:'Cervical'},
                      {text:'Dorsal', value:'Dorsal'},
                      {text:'Lumbar', value:'Lumbar'},
                      {text:'Whole spine screening', value:'Whole spine screening'},
                  ],   
                  'doppler':'',
                  'doppler_options':[
                    {text:'',value:''},
                    {text:'doppler-Option 1'},
                    {text:'doppler-Option 2'},
                    {text:'doppler-Option 3'},
                    {text:'doppler-Option 4'},
                    {text:'doppler-Option 5'},
                    {text:'doppler-Option 6'},
                    {text:'doppler-Option 7'},
                    {text:'doppler-Option 8'}
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
                      {text:'Neck Angio',value:'neck_angio'},
                      {text:'Brain Angio',value:'brain_angio'},
                      {text:'Spectroscopy',value:'spectroscopy'},
                      {text:'Diffusion',value:'diffusion'},
                      {text:'Flexion',value:'flexion'},
                      {text:'Extension',value:'extension'},
                  ]
              },
              
              'curStep':1,
              'totalStep':3,  
              'resultData': {
                    'id':'',
                    'uploadType':'image',
                    'bodyPart':'',
                    'type': '',
                    'x_ray_type':'fixed',
                    'spine_option_value':'',
                    'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'special_request':'',
                    'removed':false

                },
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
              'opdData': {
                'case_type': '',
                'uhid_no': '',
                'name':'',
                'age':'',
                'gender':'',
                'weight':'',
                'height': '',
                'history':'',
                'historyType': 'scribble',
                'past_history':'',
                'pastHistoryType': 'scribble',
                'prescription':'',
                'prescription_quantity':'',
                'prescription_unit':'',
                'prescription_time':[],
                'advise':'',
                'referral':'',
                'cross':'',
                'cross_type_int':'',
                'cross_type_ext':'',
                'radiology':'',
                'laboratory':'',
                'signaturePad':{},
                'signaturePad_src':'',

                'signaturePad1_src':'',
              }
            }
        }, 
        components: {
         createPatientDetail,
         vascularExamination,
         neuroExamination,
         laboratory,
         card,
       },
        computed: {
          bmi() {
            if(this.opdData.weight!='' && this.opdData.height!=''){
              var height_met = this.opdData.height / 100;
              var bmiVal = (this.opdData.weight )/(height_met * height_met);
              return bmiVal.toFixed(1);
            } else {
              return 0;
            }
          }
       },
       created: function() {
             this.$root.$on('SetUhidNo', this.updateUhidNo);
        },
        mounted(){
       
          $('.ls-select2').select2({
            placeholder: "Select",
            tags:false 
          }); 
         var vm =this;  

         
          setTimeout(function(){
            vm.doctor = vm.$store.state.Users.userDetails.first_name+' '+vm.$store.state.Users.userDetails.last_name;  
          },1000);
           $('#prescription').on("select2:select", function (e) { 
              medicine =  $(this).val();
             let medicineType =  medicine.split(" ");
             let size = medicineType.length;
             let unitType =  medicineType[size-1];
              if(unitType.match(/TAB/g)){
                vm.opdData.prescription_unit='mg';
              }else if(unitType.match(/INJ/g)){
                 vm.opdData.prescription_unit='mg/ml';
              }else if(unitType.match(/SYRUP/g)){
               vm.opdData.prescription_unit='ml';
              }else if(unitType.match(/GEL/g)){
                vm.opdData.prescription_unit='ng/ul';
              }else{ 
                vm.opdData.prescription_unit='--';
              }
           });
          
          $(document).on("select2:select",'.ls-select2', function (e) { 
            if(this.id == 'referral'){
              vm.opdData.referral=$(this).val();
              vm.finalResultData = '';
              if($(this).val() == 'cross') {
                setTimeout(function(){
                  $('#cross').select2({
                    placeholder: "Select",
                    tags:false 
                  }); 
                },500)  
              }
            }
            else if(this.id == 'radiology'){
              vm.opdData.radiology=$(this).val();
            }
            else if(this.id == 'laboratory'){
              vm.opdData.laboratory=$(this).val();
            }

            else if(this.id == 'cross'){
              vm.opdData.cross=$(this).val();
            }
            else if(this.id == 'internal'){
              vm.opdData.cross_type_int=$(this).val();
            }
            else if(this.id == 'external'){
              vm.opdData.cross_type_ext=$(this).val();
            }
            else if(this.id == 'prescription'){
              vm.opdData.prescription=$(this).val();
            }
            else if(this.id == 'case_type'){
              vm.opdData.case_type = $(this).val(); 
            }
            if(this.id == 'radiology_type_opd') {
               $('#radiology_subtype_opd').select2("destroy");
                vm.resultData.type = $("#radiology_type_opd").select2().val();
                vm.radioSubType();
            } if(this.id == 'radiology_subtype_opd') {
                if($("#radiology_subtype_opd").select2().val() == 'Other'){
                    vm.resultData.subtype_text_enable = true;
                    vm.resultData.bodyPart = '';
                } else {
                  vm.resultData.subtype_text_enable = false;
                  vm.resultData.bodyPart = $("#radiology_subtype_opd").select2().val();
                }
            }
            if(this.id == 'radiology_qualifier_opd') {
                vm.resultData.qualifier = $("#radiology_qualifier_opd").select2().val();
            }
             if($(this).val() == 'old') {
             } 
             else if($(this).val() == 'new') {
                setTimeout(function(){
                $('#createPatientDetail').modal('show');  
             },500)
            }

          });
          $(document).on('hidden.bs.modal','#createPatientDetail', function () {
            $('#case_type').val('old').trigger('change.select2');
            vm.opdData.case_type = 'old';
          });
        setTimeout(function(){
          vm.examinationChangeImage();
           
            vm.getPrescriptionList();
        },2000)
        },
        methods: {
          saveReport() {
                // var resData1=[];
                let vm =this;
                 // resData1.push= vm.finalResultData;
                
                if(vm.resultData.type == '' || vm.resultData.bodyPart == '' ){
                    toastr.error('Please select report data.', 'Report error', {timeOut: 5000});
                    return false;
                }
                vm.resultData.id = resData1.length;
                // resData1.push(vm.resultData);
                
                vm.finalResultData = vm.resultData;

                vm.initData();
                // vm.setRadioData();
          },
          savePrescription() {

             let vm =this;
             
             if(vm.opdData.prescription == '' || vm.opdData.prescription_quantity == '' ){
                    toastr.error('Please select prescription data.', 'prescription error', {timeOut: 5000});
                    return false;
                }
                let prescription_index  = 1;
                if(vm.finalPrescriptionData.length > 0){
                   prescription_index = vm.finalPrescriptionData.length + 1;
                 }
             
              vm.finalPrescriptionData.push({
                          'id' : prescription_index,
                          'Prescription' : medicine,
                          'quntity' : vm.opdData.prescription_quantity,
                          'unit' : vm.opdData.prescription_unit,
                          'time'  : vm.opdData.prescription_time

              });
              console.log(vm.finalPrescriptionData);

          },
          initData() {
                let vm =this;
                
                vm.resultData = {
                   'id':'',
                    'uploadType':'image',
                    'bodyPart':'',
                    'type': '',
                    'x_ray_type':'fixed',
                    'spine_option_value':'',
                    'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'special_request':'',
                    'removed':false

                };
                // vm.imgGallery = '';
                $('#radio_div1 .ls-select2').val(null).trigger('change');
                // $('.ls-select2').select2().val('');

            },
          updateUhidNo(uhid) {
            let vm = this;
            vm.opdData.uhid_no = uhid;
          },
          prev(){
            let vm =this;
            vm.$root.$emit('submitNeuroData');
            // setTimeout(function(){
              if(vm.curStep> 0){
                vm.curStep = vm.curStep-1;
              }  
            // },3000)
            
            vm.opdData =  _.cloneDeep(vm.$store.state.Patient.opdData);
            vm.resultData = _.cloneDeep(vm.$store.state.Patient.opd_resultData);
            vm.initLastData();
          },
          next() {
            let vm =this;
                this.$validator.validateAll().then(
                (response) => {
                  if (!this.errors.any()) {

                    vm.curStep = vm.curStep+1;

                    vm.$store.dispatch('setOpdData',vm.opdData);
                    vm.$store.dispatch('setResData',vm.finalResultData);
                  }
                },
                (error) => {
                }
                )
            
          },
          initLastData(){
            let vm = this;
            let pres = _.cloneDeep(vm.opdData.prescription);
            setTimeout(function(){
              $('#prescription').val(pres).trigger('change');
              $('.ls-select2').select2({
                placeholder: "Select",
                tags:false 
              });
              if(vm.curStep == 1){
                vm.examinationChangeImage();
              } 
            },1500)
          }, 
          removeReport(did) {
                let vm =this;
                // _.pullAt(resData, 0);
                _.find(vm.finalResultData, function(res) {
                    if(res.id == did) {
                         res.removed = true;
                    }
                });
          },
          removePrescription(did) {
                let vm =this;
                // _.pullAt(resData, 0);
                _.find(vm.finalPrescriptionData, function(res) {
                    if(res.id == did) {
                         res.removed = true;
                         vm.finalPrescriptionData.splice(did, 1);
                    }
                });
          },
          getPrescriptionList() {

            let vm =this;
            let userDepartment = vm.department;
            jQuery('.js-loader').removeClass('d-none');

            User.getPrescription(userDepartment).then( 
              (response)=> {
                  if(response.status == 200){
                    vm.prescriptionOption = response.data.data;
                    jQuery('.js-loader').addClass('d-none');

                  }
                },
                (error)=>{
                    jQuery('.js-loader').addClass('d-none');
                }

              )
           
          },
          setHistoryType(res,type){
            var vm =this;
            if(res == 'present'){
              vm.opdData.historyType = type;
            } else {
              vm.opdData.pastHistoryType = type;
            }
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
            },200)
          },
          resizeCanvas(canvas) {
              var ratio =  Math.max(window.devicePixelRatio || 1, 1);
              canvas.width = canvas.offsetWidth * ratio;
              canvas.height = canvas.offsetHeight * ratio;
               canvas.getContext("2d").scale(ratio, ratio);
            },
         dataURLToBlob(dataURL) {
              // Code taken from https://github.com/ebidel/filer.js
              var parts = dataURL.split(';base64,');
              var contentType = parts[0].split(":")[1];
              var raw = window.atob(parts[1]);
              var rawLength = raw.length;
              var uInt8Array = new Uint8Array(rawLength);
              for (var i = 0; i < rawLength; ++i) {
                uInt8Array[i] = raw.charCodeAt(i);
              }
              return new Blob([uInt8Array], { type: contentType });
            },
          saveInformation() {
            var vm =this;
            //   var wrapper = document.getElementById("signature-pad");
            // var canvas = document.getElementById("history_scribble");
            // // var signaturePad = new SignaturePad(canvas, {
            // //   backgroundColor: 'rgb(255, 255, 255)',
            // // });

            toastr.success('Report has been saved succeessfully', 'OPD Report', {timeOut: 2000});
            // window.onresize = vm.resizeCanvas(canvas);
            // vm.  (canvas);
            var opdData = this.opdData;
             this.$router.push({'name':'opd_form_thankyou'});
            // if (vm.signaturePad.isEmpty()) {
              //  alert("Please provide a signature first.");
              //} else {
                //    
                // var opdDataRes = {'data':opdData,'imgData1':dataURL1,'imgData2':dataURL2};
                // vm.frmStep = 'step2';
                // vm.download(dataURL, "signature.png");
              //}
            // User.saveOpdData(opdDataRes).then((response) => {
            //             // console.log(response);
            //              // this.$router.push({'name':'dashboard'});
            //         })
          },
          download(dataURL, filename) {
            var vm =this;
              var blob = vm.dataURLToBlob(dataURL);
              var url = window.URL.createObjectURL(blob);
              var a = document.createElement("a");
              a.style = "display: none";
              a.href = url;
              a.download = filename;
              document.body.appendChild(a);
              a.click();
              window.URL.revokeObjectURL(url);
            },
          examinationChangeImage() {
            var vm =this;
            // savePNGButton.addEventListener("click", function (event) {
            var wrapper = document.getElementById("signature-pad");
            var wrapper1 = document.getElementById("signature-pad1");
            var canvas = document.getElementById("history_scribble");
            var canvas1 = document.getElementById("past_history_scribble");
            var clear_history_scribble = document.getElementById("clear_history_scribble");
            var clear_past_history_scribble = document.getElementById("clear_past_history_scribble");
            var save_history_scribble = document.getElementById("save_history_scribble");
            var save_past_history_scribble = document.getElementById("save_past_history_scribble");


            vm.opdData.signaturePad = new SignaturePad(canvas, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            vm.opdData.signaturePad1 = new SignaturePad(canvas1, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            window.onresize = vm.resizeCanvas;
            vm.resizeCanvas(canvas);
            vm.resizeCanvas(canvas1);
            clear_history_scribble.addEventListener("click", function (event) {
              vm.opdData.signaturePad.clear();
              vm.opdData.signaturePad_src='';
            });
            clear_past_history_scribble.addEventListener("click", function (event) {
              vm.opdData.signaturePad1.clear();
              vm.opdData.signaturePad1_src='';

            });
            save_history_scribble.addEventListener("click", function (event) {
              vm.opdData.signaturePad_src = vm.opdData.signaturePad.toDataURL();
              
            });
            save_past_history_scribble.addEventListener("click", function (event) {
              vm.opdData.signaturePad1_src = vm.opdData.signaturePad1.toDataURL();
            });
            
              // if (signaturePad.isEmpty()) {
              //   alert("Please provide a signature first.");
              // } else {resizeCanvas
              //   console.log(dataURL);resizeCanvas
              //   // download(dataURL, "signature.png");
              // }
            // });
          },
        }
                      
           
    }
        
</script>
