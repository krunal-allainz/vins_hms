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
		              		<option value="new">New</option>
		              		<option value="old">Old</option>
		            	</select>
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
		          			<option value="uhidNo">UHID No.</option>
		          			<option value="mobileNo">Mobile No.</option>
		          		</select>
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
		        		<input class="form-control" type="text" id="select_value"name="select_value" v-model="patientData.select_value" >

		               	<span class="help is-danger" v-show="errors.has('select_value')">
		              		Please enter search value.
		            	</span>
		            	<span  @click="getPatientDetailsBySearch()">
			        		<i class="fa fa-search fa-2x red m-1" aria-hidden="true" style="cursor: pointer;" title="search"></i>
			        	</span>
		        	</div>
		        	
		        	

		        </div>
      		</div>
      		<div  >
      			<div class="row form-group">
	      			<div class="col-md-6">
	      				<div class="col-md-6">
	                    	<label for="first_name" class="control-label">First Name : </label>
	                	</div>
		                <div class="col-md-6">
							<input class="form-control" type = "text" v-validate="'required'" id = "first_name" name="first_name" value="" :class="{'is-danger': errors.has('first_name') }" v-model="patientData.fname" :readonly="patientData.case == 'old'"/>
							<span class="help is-danger" v-show="errors.has('first_name')">
			                	First name is required
			              	</span>
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="col-md-6">
		                   	<label for="middle_name" class="control-label">Middle Name: </label>
		                </div>
		                <div class="col-md-6">
							<input class="form-control" type="text" id="middle_name" name="middle_name" value=""  v-model="patientData.mname" :disabled="patientData.case == 'old'"  />
		                </div>
		            </div>	
	           	</div>
	           	<div class="row form-group">
	           		<div class="col-md-6">
	                	<div class="col-md-6">
	                		<label for="last_name" class="control-label">Last Name: </label>
	                	</div>
	                	<div class="col-md-6">
							<input class="form-control" type="text" id="last_name" name="last_name" value="" v-model="patientData.lname" v-validate="'required'" :disabled="patientData.case == 'old'"/>
							<span class="help is-danger" v-show="errors.has('last_name')">
	            	         	Last name is required
	          				</span>
	          			</div>
	      			</div>
	           		<div class="col-md-6">
	                	<div class="col-md-6">
	                        <label for="date_of_birth">Date of Birth: </label>
	                    </div>
	                    <div class="col-md-6">
							
							<date-picker  :date.sync="patientData.dob" :option="option" id = "date_of_birth" class="" type="text" name="date_of_birth" :limit="limit" v-model="patientData.dob.time" v-validate="'required'" :disabled="patientData.case == 'old'"></date-picker> 
							<span class="help is-danger" v-show="errors.has('date_of_birth')">
		            			Field is required
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
	            				<option value="M">Male</option>
				            	<option value="F">Female</option>
				          	</select>
				          	<span class="help is-danger" v-show="errors.has('gender')">
				            	Gender field is required
				          	</span>	  
	                    </div>
	                </div>
	           		<div class="col-md-6">
			        	<div class="col-md-6">
			               <label for="address">Address: </label>
			            </div>
			            <div class="col-md-6">
							<input class="form-control" type="text" id="address" name="address" value="" v-model="patientData.address" v-validate="'required'" :disabled="patientData.case == 'old'"/>
					      	<span class="help is-danger" v-show="errors.has('address')">
			                	Address is required
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
					      	<input class="form-control" type="text" id="phone_no" name="ph_no" value="" v-validate="'required|numeric'" v-model="patientData.ph_no" :disabled="patientData.case == 'old'" maxlength="10"  />
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
					      	<input class="form-control" type="text" id="mobile_no" name="mob_no" value="" v-model="patientData.mob_no" v-validate="'required|numeric'" :disabled="patientData.case == 'old'" maxlength="10"  />
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
				      	<input class="form-control" type="text" id="reference_dr" name="reference_dr" value="" v-model="patientData.reference_dr" v-validate="'required'" />
				      	<span class="help is-danger" v-show="errors.has('reference_dr')">
			                Please select reference doctor.
			            </span>	  
                    </div>
                </div>
                <div class="col-md-6">
					<div class="col-md-6">
			      		<label class="control-label" for="consulting_dr">Consulting Dr..: </label>
					</div>
					<div class="col-md-6">
			      		<select class="form-control ls-select2"  id="consulting_dr" name="consulting_dr"  v-model="patientData.consulting_dr">
							 <option :value="doctor.id" v-for="doctor in patientData.consulting_dr_option">{{doctor.text}}</option>
			      		</select>
			      		<span class="help is-danger" v-show="errors.has('consulting_dr')">
		                	Please select consulting doctor.
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
	import User from '../../../api/users.js';
  	import myDatepicker from 'vue-datepicker';
  	/*for consulting dr */
  	let consult_list=[];

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'type':'opd',
                'deleteConfirmMsg': 'Are you sure you would like to delete this referee? All information associated with this referee will be permanently deleted.',
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
                	'consulting_dr_option':consult_list
                	
                }
            }
        },
        components: {
        	'date-picker': myDatepicker,
        },
        mounted() {
		$('.ls-select2').select2({
					placeholder: "Select",
				});
				let vm =this;
	          	$('.ls-select2').on("select2:select", function (e) {
		             if(this.id == 'case'){
		             	vm.patientData.case = $(this).val();	
		             }
		             else if(this.id == 'select_type'){
		             	vm.patientData.select_type = $(this).val();		
		             }
		             else{
		             	vm.patientData.consulting_dr = $(this).val();			
		             }

				});

			/*for consulting dr */

				    User.generateUserDetailsByType().then(
				    	 (response) => {
	               	 		let consult_data  = response.data;
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
        methods: {
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
		    	vm.patientData.dob = '';
		    	vm.patientData.gender = '';
		    	vm.patientData.address = '';
		    	vm.patientData.ph_no = '';
		    	vm.patientData.mob_no = '';
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
		     	 
		     	 let patData = {'select_type':this.patientData.select_type,'select_value':this.patientData.select_value};
				User.savePatientDetailBySearch(patData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		let pData = response.data.data;
		                		this.patientData.fname = pData.first_name;
		                		this.patientData.mname = pData.middle_name;
		                		this.patientData.lname = pData.last_name;
		                		this.patientData.ph_no = pData.ph_no;
		                		this.patientData.mob_no = pData.mob_no;
		                		this.patientData.gender = pData.gender;
		                		this.patientData.dob = pData.dob;
		                		toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
		    					
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
		                		toastr.success('Patient details have been saved', 'patient detail', {timeOut: 5000});
		    					var uhidNo=response.data.data.uhid_no;
								$("#createPatientDetail").modal("hide");
		    					this.$store.dispatch('SetUhidNo',uhidNo);
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
