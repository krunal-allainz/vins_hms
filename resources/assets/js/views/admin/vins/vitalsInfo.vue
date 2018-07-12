<template>	
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h3>Vitals Info Form</h3>
				</div>
			</div>
		</div>
		<form method = "post">
			<div class="row form-group">
            	<div class="col-md-6">
            		<div class="col-md-6 ">
              			<label for="patient">Select Patient:</label>
            		</div>
           			<div class="col-md-6">
           				<select  class="form-control ls-select2" v-validate="'required'" id = "patient" name="patient" value="" > 
                   				<option :value="pat.id" v-for="pat in patientData.patient_option">{{pat.name}}</option>
                		</select> 
                		<i v-show="errors.has('patient')" class="fa fa-warning"></i>  
                		<span class="help is-danger" v-show="errors.has('patient')">
                  			Please Select patient.
                		</span> 
            		</div>
            	</div>
            		<div class="col-md-6" >
		              <div class="col-md-6 ">
		                <label for="opd_no">Select OPD No.:</label>
		              </div>
		              <div class="col-md-6">
		                <select  class="form-control ls-select2" v-validate="'required'" id = "opd_no" name="opd_no" value="" v-model="patientData.opd_id" > 
		                <option value="">Select</option>
		                     <option :value="opd.id" v-for="opd in patientData.opd_option">{{opd.opd_id}}</option>
		                  </select> 
		                  <i v-show="errors.has('opd_no')" class="fa fa-warning"></i>      
		                   <span class="help is-danger" v-show="errors.has('opd_no')">
		                    Please Select OPD Number.
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
	                		<input type="text" name="weight" id="weight" class="form-control" v-model="patientData.weight"  placeholder="In kgs"   v-validate="'required|numeric|min_value:1'">
	                  		<i v-show="errors.has('weight')" class="fa fa-warning"></i> 
	                  		<span class="help is-danger" v-show="errors.has('weight')"> Please enter valid weight.</span>
	               		 </div>
            		</div>
            		 <div class="col-md-6">
                		<div class="col-md-6">
                  			<label for="date">Height:</label>
                		</div>
                		<div class="col-md-6">
                  			<input type="text" name="height" id="height" class="form-control" placeholder="In cms" v-model="patientData.height"  v-validate="'required|numeric|min_value:1'">
                  			<i v-show="errors.has('height')" class="fa fa-warning"></i> 
                    		<span class="help is-danger" v-show="errors.has('height')"> Please enter valid height. </span>
                  		</div>
               		</div>
            </div>
            <div class="row form-group">
            		 <div class="col-md-6">
                  <div class="col-md-6">
                    <label for="date">BMI:</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="bmi" id="bmi" class="form-control" readonly="" v-model="bmi_mod">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">RESP/SPO2:</label>
                    </div>
                    <div class="col-md-6">
                    	 <div class=" input-group">
                      <input type="text" name="vitals" id="vitals" class="form-control" v-model="patientData.vitals"  v-validate="'required|numeric'">
                      	  <div class="input-group-append">
                            <span class="input-group-text ">%</span>
                        </div>
                      </div>
                       <i v-show="errors.has('vitals')" class="fa fa-warning"></i> 
                      <span class="help is-danger" v-show="errors.has('vitals')"> Please enter valid vitals. </span>

                    </div>
                  </div>
            </div>
              <div class="row form-group">
                	 <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">Pulse:</label>
                    </div>
                    <div class="col-md-6" >
                      <div class=" input-group">
                        <input type="text" name="pulse" id="pulse" class="form-control" v-model="patientData.pulse"  v-validate="'required|numeric|min_value:1'"> 
                       <!--  <div class="input-group-append">
                            <span class="input-group-text ">/mm</span>
                        </div> -->
                      </div>
                      <i v-show="errors.has('pulse')" class="fa fa-warning"></i>

                       <div class="help is-danger" v-show="errors.has('pulse')"> 
                       	Please enter valid pulse.</div>


                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-6">
                      <label for="date">BP:</label>
                    </div>
                    <div class="col-md-6">
                      <div class=" input-group">

                      <input type="text" name="bp_systolic" id="bp_systolic" class="form-control"  v-model="patientData.bp_systolic"  v-validate="'required|numeric|min_value:1'" maxlength="3" > 
                        <div class="input-group-append">
                            <span class="input-group-text ">/</span>
                        </div>
                        <input type="text" name="bp_diastolic" id="bp_diastolic" class="form-control"  v-model="patientData.bp_diastolic"  v-validate="'required|numeric|min_value:1'" maxlength="3">
                      
                      </div>
                      
                      <i v-show="errors.has('bp_systolic')" class="fa fa-warning"></i>
                      <span class="help is-danger" v-show="errors.has('bp_systolic') || errors.has('bp_diastolic')">

                        Please enter valid BP.

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
                      <div class=" input-group">
                      <input type="text" name="temp" id="temp" class="form-control"  v-model="patientData.temp" v-validate="'required|numeric|min_value:1'" maxlength="3">
                        <div class="input-group-append">
                            <span class="input-group-text ">°F</span>
                        </div>
                      
                      </div>
                      <i v-show="errors.has('temp')" class="fa fa-warning"></i>
                      <span class="help is-danger" v-show="errors.has('temp')">

                         Please enter valid temprature.


                      </span>
                    </div>
              	</div>
            </div>
            	<div class="form-group text-center">
				<button class="btn btn-success" type="button" @click="savePatientCheckup()">Submit</button>
			</div>
		</form>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	let list=[];
	 export default {
        data() {
            return {
            	 'user_id':this.$store.state.Users.userDetails.id,
            	 'patientData' : {
            	 	'pain_value':0,
                	'patient_id':'',
                    'patient_option':[],
                    'opd_id':'',
                	'opd_option':[],
            	 	'weight':'',
                	'height': '',
                	'bmi':'',
                	'vitals':'',
                	'pulse':'',
                	'bp_systolic':'',
                	'bp_diastolic':'',
                	'temp':'',
            	 }
            }
        },
         mounted(){
         	  	let vm =this;
         	  	 let opd_list_new=[];
         	  	 $('.ls-select2').select2({
		            placeholder: "Select",
		            tags:false 
		          });
         	 	 User.getAllPatientName().then(

	               	 (response) => {
	               	 		let patien_data ;
	               	 		patien_data = response.data;
	               	 		$.each(response.data.data, function(key, value) {
	               	 		let name = value.first_name +' '+value.last_name;
	               	 		let pid  = value.id ;
	               	 		let uhid_no  = value.uhid_no ;
	               	 		list.push({
	               	 				name:name,
	               	 				id:pid,
	               	 				uhid_no:uhid_no
	               	 			});
	               	 	  	});
		                setTimeout(function(){
	                              $('#patient').select2({
	                                placeholder: "Select",
	                                tags:false 
	                              }); 

	                      },500);
	               	 	 vm.patientData.patient_option = list;
	               	 		
	               	 	 },
	               	 	 	(error) => {
	            	 	},
	               	 );

	        $(document).on("select2:select",'#patient', function (e) { 
	               let patientId = $(this).val();
                	vm.patientData.patient_id=patientId;
                	 User.generateOpdIdByPatirntID(patientId).then(
                    (response) => {
                      opd_list_new=[];
                     $.each(response.data.data, function(key,value) {

                         opd_list_new.push({
                           'id' : value.id,
                           'opd_id' : value.opd_id,
                        });
                      });
                       setTimeout(function(){
                              $('#opd_no').select2({
                                placeholder: "Select",
                                tags:false 
                              }); 

                      },500);
                       vm.patientData.opd_option=opd_list_new;
                      },
                      (error) => {
                      },
                );
                });
	          $(document).on("select2:select",'#opd_no', function (e) { 
	          		 let opdId = $(this).val();
                	vm.patientData.opd_id=opdId;
	          });
         	},
         computed: {
          bmi_mod() {
            if(this.patientData.weight!='' && this.patientData.height!=''){
              var height_met = this.patientData.height / 100;
              var bmiVal = (this.patientData.weight )/(height_met * height_met);
              var bmi_final_val=bmiVal.toFixed(1);
              this.patientData.bmi=bmi_final_val;
              return bmi_final_val;
            } else {
              return 0;
            }
          }
       },
       methods: {
       		savePatientCheckup(){ 
       			this.$validator.validateAll().then(
	            	(response) => { 	
	            		if (!this.errors.any()) { 
	            		 $("body .js-loader").removeClass('d-none');
	            		 var pData = {'patientData':this.patientData,'userId':this.user_id};
				    	User.savePatientCheckup(pData).then(
				    		  (response) => {
		                 	if(response.data.code == 200) {
		                 		toastr.success('Patient checkup detail have been saved', 'patient checkup', {timeOut: 5000});
		                 	}else if(response.data.code == 300) {
		                		toastr.error('Record not found.Please enter valid search value.', 'Error', {timeOut: 5000});
		                	} else{
		                		
		                	 toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
		                	 }	
			    },
		                	  (error) => {
		                	 $("body .js-loader").addClass('d-none');

		                }
       		}
       }
    }
</script>