<template>	
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h3>Patient Details Form</h3>
				</div>
			</div>
		</div>
		<form method = "post">
			<div class="row form-group">
		    	<div class="col-md-6">
		        	<div class="col-md-6 ">
		            	<label for="case">Case type:</label>
		          	</div>
		          	<div class="col-md-6">
		            	<select  class="form-control ls-select2" v-validate="'required'" id = "case" name="case" value="" v-model="patientData.case">
		            		<option> Select </option>
		              		<option value="new">New</option>
		              		<option value="old">Old</option>
		            	</select>
		            	<i v-show="errors.has('case')" class="fa fa-warning"></i>
		            	<span class="help is-danger" v-show="errors.has('case')">
		              		Please select case type.
		            	</span>
		          	</div>
		        </div>
      		</div>
      		<div class="row form-group" v-if="patientData.case == 'old'" >
      			<div class="col-md-6" >
		        	<div class="col-md-6 ">
		            	<label for="selectType">Select Type:</label>
		          	</div>
		          	<div class="col-md-6">
		          		<select class="form-control ls-select2" v-validate="'required'" placeholder="Please select" id="select_type" name="select_type" v-model="patientData.select_type">
		          			<option> Select </option>
		          			<option value="uhidNo">UHID No.</option>
		          			<option value="mobileNo">Mobile No.</option>
		          			<option value="firstName">First Name</option>
		          			<option value="lastName">Last Name</option>
		          			<option value="dob">DOB</option>
		          		</select>
		          		<i v-show="errors.has('select_type')" class="fa fa-warning"></i>
		            	<span class="help is-danger" v-show="errors.has('select_type')">
		              		Please select  search type.
		            	</span>
		          	</div>
		        </div>
		        <div class="col-md-6">
		        	<div class="col-md-6">
		        		<label>Value:</label>
		        	</div>
		        	<div class="col-md-6" style="display: flex;">
		        		<input class="form-control" type="text" id="select_value" name="select_value" v-model="patientData.select_value" v-validate="'required'">
		            	<span  @click="getPatientDetailsBySearch()">
			        		<i class="fa fa-search fa-2x red m-1" aria-hidden="true" style="cursor: pointer;" title="search"></i>
			        	</span>
			        	<i v-show="errors.has('select_value')" class="fa fa-warning"></i>
		               	<span class="help is-danger" v-show="errors.has('select_value')">
		              		Please enter valid value.
		            	</span>
		        	</div>
		        </div>
      		</div>
      		 <div class="row form-group" v-if="userlistData.length>0">
			    <div class="col-md-12">
			   		 <userlist :userlistData="userlistData" ></userlist>
			    </div>
			  </div>    
      		<div>
      			<div class="row form-group">
	      			<div class="col-md-6">
	      				<div class="col-md-6">
	                    	<label for="first_name" class="control-label">First Name : </label>
	                	</div>
		                <div class="col-md-6">
							<input class="form-control" type = "text" v-validate="'required|alpha'" id = "first_name" name="first_name" value=""  v-model="patientData.fname" :readonly="patientData.case == 'old'"/>
							<i v-show="errors.has('first_name')" class="fa fa-warning"></i>
							<span class="help is-danger" v-show="errors.has('first_name')"> 
								Please enter valid first name.
			              	</span>
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="col-md-6">
		                   	<label for="middle_name" class="control-label">Middle Name: </label>
		                </div>
		                <div class="col-md-6">
							<input class="form-control" type="text" id="middle_name" name="middle_name" value=""  v-model="patientData.mname" :disabled="patientData.case == 'old'"  v-validate="'alpha'"/>
							<i v-show="errors.has('middle_name')" class="fa fa-warning"></i>
							<span class="help is-danger" v-show="errors.has('middle_name')">
			                	Please enter valid middle name.
			              	</span>
		                </div>
		            </div>	
	           	</div>
	           	<div class="row form-group">
	           		<div class="col-md-6">
	                	<div class="col-md-6">
	                		<label for="last_name" class="control-label">Last Name: </label>
	                	</div>
	                	<div class="col-md-6">
							<input class="form-control" type="text" id="last_name" name="last_name" value="" v-model="patientData.lname" v-validate="'required|alpha'" :disabled="patientData.case == 'old'"/>
							<i v-show="errors.has('last_name')" class="fa fa-warning"></i>
							<span class="help is-danger" v-show="errors.has('last_name')">
	            	         	Please enter valid lastname.
	          				</span>
	          			</div>
	      			</div>
	           		<div class="col-md-6">
	                	<div class="col-md-6">
	                        <label for="date_of_birth">Date of Birth: </label>
	                    </div>
	                    <div class="col-md-6">
							
							<date-picker  :date.sync="patientData.dob" :option="option" id = "date_of_birth" class="" type="text" name="date_of_birth" :limit="limit" v-model="patientData.dob.time" v-validate="'required'" :disabled="patientData.case == 'old'"></date-picker> 
							<i v-show="errors.has('date_of_birth')" class="fa fa-warning"></i>
							<span class="help is-danger" v-show="errors.has('date_of_birth')">
		            			Please enter valid date of birth.
		            		</span>
	                    </div>
	                </div>

	           	</div>
	           	<div class="row form-group">
	           		 <div class="col-md-6">
	                    <div class="col-md-6">
	                       	<label class="control-label" for="sex">Gender: </label>
	                    </div>
	                    <div class="col-md-6">
							<select  class="form-control ls-select2" id = "gender" name="gender" :disabled="patientData.case == 'old'">
	            				<option value="">Select</option>
	            				<option value="M">Male</option>
				            	<option value="F">Female</option>
				          	</select>
				          	<i v-show="errors.has('gender')" class="fa fa-warning"></i>
				          	<span class="help is-danger" v-show="errors.has('gender')">
				            	Please select gender.
				          	</span>	  
	                    </div>
	                </div>
	           		<div class="col-md-6">
			        	<div class="col-md-6">
			               <label for="address">Address: </label>
			            </div>
			            <div class="col-md-6">
							<input class="form-control" type="text" id="address" name="address" value="" v-model="patientData.address" v-validate="'required'" :disabled="patientData.case == 'old'"/>
							<i v-show="errors.has('address')" class="fa fa-warning"></i>
					      	<span class="help is-danger" v-show="errors.has('address')">
			                	Please enter valid address.

			                </span>
			            </div>
			        </div>
	           	</div>
	           	<div class="row form-group">
	           		<div class="col-md-6">
	                    <div class="col-md-6">
	                    	<label class="control-label" for="phone_no">Phone no.: </label>
	                    </div>
	                    <div class="col-md-6">
					      	<input class="form-control" type="text" id="phone_no" name="ph_no" value="" v-validate="'numeric'" v-model="patientData.ph_no" :disabled="patientData.case == 'old'" 
					      	  />
					      	  <i v-show="errors.has('ph_no')" class="fa fa-warning"></i>
					      	<span class="help is-danger" v-show="errors.has('ph_no')">
			                	Please enter valid phone no.
			                </span>	  
	                    </div>
	                </div>
	           		<div class="col-md-6">
	                	<div class="col-md-6">
	                    	<label class="control-label" for="mobile_no">Mobile no.: </label>
	                    </div>
	                    <div class="col-md-6">
					      	<input class="form-control" type="text" id="mobile_no" name="mob_no" value="" v-model="patientData.mob_no" v-validate="'required|numeric|min:10|max:10'" :disabled="patientData.case == 'old'" maxlength="10"  />
					      	<i v-show="errors.has('mob_no')" class="fa fa-warning"></i>
					      	<span class="help is-danger" v-show="errors.has('mob_no')">
				               Please enter valid mobile no.
				            </span>
	                    </div>
	                </div>
	           	</div>
      		</div>
           	<div class="row form-group">
           		<div class="col-md-6">
                    <div class="col-md-6">
                    	<label class="control-label" for="reference_dr">Reference Dr.: 
                    	</label>
				      	<input class="form-control" type="text" id="reference_dr" name="reference_dr" value="" v-model="patientData.reference_dr"/>
                    </div>
                </div>
                <div class="col-md-6">
					<div class="col-md-6">
			      		<label class="control-label" for="consulting_dr">Consulting Dr..: </label>
					</div>
					<div class="col-md-6">
			      		<select class="form-control ls-select2"  id="consulting_dr" name="consulting_dr"  v-model="patientData.consulting_dr" v-validate="'required'">
							 <option :value="doctor.id" v-for="doctor in patientData.consulting_dr_option">{{doctor.text}}</option>
			      		</select>
			      		<i v-show="errors.has('consulting_dr')" class="fa fa-warning"></i>
			      		<span class="help is-danger" v-show="errors.has('consulting_dr')">
		                	Please select consulting doctor.
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
                      <label for="date">Vitals:</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="vitals" id="vitals" class="form-control" v-model="patientData.vitals"  v-validate="'required'">
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
                        <div class="input-group-append">
                            <span class="input-group-text ">/mm</span>
                        </div>
                      
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
                  <div class="col-md-6">
	                	<div class="col-md-6">
	                        <label for="appointment_datetime">Appointment Date-time: </label>
	                    </div>
	                    <div class="col-md-6">
							
							<date-picker  :date.sync="patientData.appointment_datetime" :option="option" id = "appointment_datetime" class="" type="text" name="appointment_datetime" :limit="limit2" v-model="patientData.appointment_datetime.time" v-validate="'required'" :disabled="patientData.case == 'old'"></date-picker> 
							<i v-show="errors.has('appointment_datetime')" class="fa fa-warning"></i>
							<span class="help is-danger" v-show="errors.has('appointment_datetime')">

		            			Please enter valid appointment datetime.

		            		</span>
	                    </div>
	                </div>
                </div>
       		<div class="form-group text-center">
				<button class="btn btn-success" type="button" @click="savePatient()">Submit</button>
			</div>
		</form>
	</div>

</template>
<script >
//$(document).ready(function(){
    //get it if Status key found
    if(localStorage.getItem("Status"))
    {
        toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
        localStorage.removeItem("Status");
        //localStorage.clear();
    }
//});
	import User from '../../../api/users.js';
  	import myDatepicker from 'vue-datepicker';
  	import userlist from './userlistData.vue';
  	/*for consulting dr */
  	let consult_list=[];

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'type':'opd',
                'deleteConfirmMsg': 'Are you sure you would like to delete this referee? All information associated with this referee will be permanently deleted.',
                'userlistData':{},
                'option': {
                    type: 'day',
                    week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
                    month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    format: 'DD-MM-YYYY',
                    placeholder: 'Select Date',
                    inputStyle: {
                        'display': 'inline-block',
                        'padding': '6px',
                        'line-height': '22px',
                        'font-size': '16px',
                        'border': '2px solid #fff',
                        'box-shadow': '0 1px 3px 0 rgba(0, 0, 0, 0.2)',
                        'border-radius': '2px',
                        'color': '#5F5F5F',
                        'width':'100%',
                    },

                  },
			      limit: [
			      {
			        type: 'fromto',
			       	to: new Date()
			      }],
			      limit2: [
			      {
			        type: 'fromto',
			       	from: new Date()
			      }],
                'patientData' : {
                	'case': '',
                	'select_type': '',
                	'select_value':'',
                	'fname':'',
                	'dob': {
                		time:''
                	},
                	'mname': '',
                	'lname': '',
                	'gender': '',
                	'address': '',
                	'ph_no': '',
                	'mob_no': '',
                	'reference_dr': '',
                	'consulting_dr':'',
                	'consulting_dr_option':consult_list,
                	'weight':'',
                	'height': '',
                	'bmi':'',
                	'vitals':'',
                	'pulse':'',
                	'bp_systolic':'',
                	'bp_diastolic':'',
                	'temp':'',
                	'appointment_datetime': {
                		time:''
                	}
                }
            }
        },
        components: {
        	'date-picker': myDatepicker,
        	userlist
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
        mounted() {
		$('.ls-select2').select2({
					placeholder: "Select",
					tags: false,
				});
				let vm =this;
	          	$('.ls-select2').on("select2:select", function (e) {
		             if(this.id == 'case'){
		             	vm.patientData.case = $(this).val();
		             	if($(this).val()=='new')		
		             	{
		             		vm.userlistData={};
		             		vm.initPatientData();
		             	}
		             	else
		             	{
		             		setTimeout(function(){
		             			$('#select_type').select2({
									placeholder: "Select",
									tags: false,
								});

		             			$('#select_type').on("select2:select", function (e) {
		             				vm.patientData.select_type=$(this).val();
		             			});

		             		},1000);

		             	}	
		             }
		             else if(this.id == 'select_type'){

		             	vm.patientData.select_type = $(this).val();
		             }
		             else if(this.id == 'gender') {
		             	vm.patientData.gender = $(this).val();		

		             }
		             else{
		             	vm.patientData.consulting_dr = $(this).val();			
		             }

				});

			/*for consulting dr */

				    User.generateUserDetailsByType('All','Active').then(
				    	 (response) => {
	               	 		let consult_data  = response.data.data;
	               	 		$.each(consult_data, function(key, value) {
		               	 		let name =  value.first_name +' '+value.last_name;
		               	 		let id  = value.id ;
		               	 		consult_list.push({text:name, id:id});
	               	 		});
	               	 	},
	               	 	(error) => {
	            	 	},
					);
        },
        created: function(){
        	this.$root.$on('patientData',this.setPatientData);
        },
        methods: {
        	setPatientData(patientData) {
        		if(patientData.code==200)
        		{
        			let pDetails=patientData.data;
        			this.patientData.fname = pDetails.first_name;
            		this.patientData.mname = pDetails.middle_name;
            		this.patientData.lname = pDetails.last_name;
            		this.patientData.ph_no = pDetails.ph_no;
            		this.patientData.mob_no = pDetails.mob_no;
            		this.patientData.gender = pDetails.gender;
            		$('#gender').val(pDetails.gender).trigger('change');
            		this.patientData.address = pDetails.address;
            		this.patientData.reference_dr = pDetails.references;
            		this.patientData.dob.time = pDetails.dob;
            		this.patientData.consulting_dr = pDetails.consultant_id;
            		$('#gender').val(pDetails.gender).change();
            		$('#consulting_dr').val(pDetails.consultant_id).change();
        		}
        		else if(patientData.code==300)
        		{
        			toastr.error('Record not found', 'Error', {timeOut: 5000});
        			this.initPatientData();
        		}
        		else
        		{
        			toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
        			this.initPatientData();
        		}
        	},
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
			isNumber: function(evt) {
				console.log(evt,'evt',window.event);
			      evt = (evt) ? evt : window.event;
			      var charCode = (evt.which) ? evt.which : evt.keyCode;
			      if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
			        evt.preventDefault();;
			      } else {
			        return true;
			      }
			    },
		    initPatientData(){
		    	var vm = this;
		    	vm.patientData.fname = '';
		    	vm.patientData.mname = '';
		    	vm.patientData.lname = '';
		    	vm.patientData.dob.time = '';
		    	vm.patientData.gender = '';
		    	vm.patientData.address = '';
		    	vm.patientData.ph_no = '';
		    	vm.patientData.mob_no = '';
		    	vm.patientData.reference_dr = '';
		    	vm.patientData.consulting_dr = '';
		    	vm.patientData.weight = '';
		    	vm.patientData.height = '';
		    	vm.patientData.bmi = '';
		    	vm.patientData.vitals = '';
		    	vm.patientData.pulse = '';
		    	vm.patientData.bp_diastolic = '';
		    	vm.patientData.bp_systolic = '';
		    	vm.patientData.temp = '';
		    	vm.patientData.appointment_datetime.time = '';
		    	$("#gender").val('').trigger('change.select2');
		    	$("#consulting_dr").val('').trigger('change.select2');
		    },
		    deleteConfirmed() {

		        // Tournament.removeReferee(this.refereeId).then(
		        //   (response) => {
		        //        toastr['success']('Referee has been removed successfully', 'Success');
		        //        $('#delete_modal').modal('hide')
		        //        $('#refreesModal').modal('hide')
		        //         this.$store.dispatch('getAllReferee',this.$store.state.Tournament.tournamentId);
		        //        // this.$root.$emit('setRefereeReset')
		        //        // this.$root.$emit('setPitchPlanTab','refereeTab')
		        //   }
		        //   )
		      },
		     getPatientDetailsBySearch(){
		     	var vm =this;
		     	
		     	 if(this.patientData.select_type == '' || this.patientData.select_value == '') {
		            toastr.error('Please select search type & value.', 'Search error', {timeOut: 5000});
		            return false;
		     	 }
		     	  $("body .js-loader").removeClass('d-none');
		     	 
		     	 let patData = {'select_type':this.patientData.select_type,'select_value':this.patientData.select_value,'user_id':0};
				User.generatePatientListBySearch(patData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		let pData = response.data.data;
		                		vm.userlistData=pData;
		                	} else if(response.data.code == 300) {
		                		toastr.error('Record not found', 'Error', {timeOut: 5000});
		                		vm.initPatientData();
		                	} else{
		                	 	toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
		                		vm.initPatientData();
		                	}
		                	 $("body .js-loader").addClass('d-none');
		                },
		                (error) => {
		                	 $("body .js-loader").addClass('d-none');

		        })
		     },
		    savePatient() {
		     	// return false;
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
	            		 var pData = {'patientData':this.patientData,'patientType':'opd'};
				    	User.savePatient(pData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		
		    					var uhidNo=response.data.data.uhid_no;
								$("#createPatientDetail").modal("hide");
		    					this.$store.dispatch('SetUhidNo',uhidNo);
		    					
		    					//toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
		    					localStorage.setItem("Status",1)
    							window.location.reload(); 
    							//this.$router.go();
		                	} else if(response.data.code == 300) {
		                		toastr.error('Record not found.Please enter valid search value.', 'Error', {timeOut: 5000});
		                	} else{
		                		
		                	 toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
		                	}
		                	 $("body .js-loader").addClass('d-none');
		                },
		                (error) => {
		                	 $("body .js-loader").addClass('d-none');

		                }
		                )
			    	}
			    },
                (error) => {
                }
                )
			}
		  },

    }
</script>
