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
		            	<label for="case">Patient Type:</label>
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

				<div class="col-md-6">
			    	<div class="col-md-6">
					 	<label for="date">Senction:</label>
					</div>
					<div class="col-md-6">
				    	<select class="form-control ls-select2"  id = "type" name="type" value="" v-model="patientData.type" v-validate="'required'">
				    		<option :value="patient_type.id" v-for="patient_type in patient_type_option">{{patient_type.text}}</option>
				    	</select>
				    <i v-show="errors.has('type')" class="fa fa-warning"></i>
				   <span class="help is-danger" v-show="errors.has('type')"> Please Select Patient Type. </span>
				    </div>
			    </div>
      		</div>
      		
      		<patientSearch v-if="patientData.case == 'old'" :user_id="0" ref="patientDetailForm"></patientSearch>
      		
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
							
							<date-picker  :date.sync="patientData.dob" :option="option" id = "date_of_birth" class="" type="date" name="date_of_birth" :limit="limit" v-model="patientData.dob.time" :disabled="patientData.case == 'old'" @change="getAgeCal()" ></date-picker> 
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
	                        	<label for="age">Age: </label>
	                		 </div>
	                		  <div class="col-md-6">
								<input class="form-control" type="numeric" id="age" name="age" value="" v-model="patientData.display_age" v-validate="'required|numeric|min:1|max:3'" @change="getBirthYear()" />
								<i v-show="errors.has('age')" class="fa fa-warning"></i>
								<span class="help is-danger" v-show="errors.has('age')">
			            			Please enter your age.
			            		</span> 
			            	</div>
	                    </div>
	                   <div class="col-md-6"> <div class="col-md-6">
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
	                    </div></div>
	           	</div>
	           	<div class="row form-group">
	           		<div class="col-md-6">
	                    <div class="col-md-6">
	                    	<label class="control-label" for="phone_no">Phone no.: </label>
	                    </div>
	                    <div class="col-md-6">
					      	<input class="form-control" type="text" id="phone_no" name="ph_no" value="" v-validate="'numeric'" v-model="patientData.ph_no" :disabled="patientData.case == 'old'" 
					      	   @change="compairNumbers()"/>
					      	  <i v-show="errors.has('ph_no')" class="fa fa-warning"></i>
					      	<span class="help is-danger" v-show="errors.has('ph_no')">
			                	Please enter valid phone no.
			                </span>	  
			                <span class="help is-danger" v-if="(patientData.ph_no == patientData.mob_no)">{{patientData.validatenumber}}</span>
	                    </div>
	                </div>
	           		<div class="col-md-6">
	                	<div class="col-md-6">
	                    	<label class="control-label" for="mobile_no">Mobile no.: </label>
	                    </div>
	                    <div class="col-md-6">
					      	<input class="form-control" type="text" id="mobile_no" name="mob_no" value="" v-model="patientData.mob_no" v-validate="'required|numeric|min:10|max:10'" :disabled="patientData.case == 'old'" maxlength="10" @change="compairNumbers()" />
					      	<i v-show="errors.has('mob_no')" class="fa fa-warning"></i>
					      	<span class="help is-danger" v-show="errors.has('mob_no')">
				               Please enter valid mobile no.
				            </span>
				            	<span class="help is-danger" v-if="(patientData.ph_no == patientData.mob_no)">{{patientData.validatenumber}}</span>
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
                 
                  <div class="col-md-6">
	                	<div class="col-md-6">
	                      <label for="appointment_datetime">Appointment Date-time:
	                     </label>
	                    </div>
	                    <div class="col-md-6">
							<date-picker  :date.sync="patientData.appointment_datetime" :option="timeoption" id = "appointment_datetime" class="" type="datetime" name="appointment_datetime"   v-model="patientData.appointment_datetime.time" v-validate="'required'" :disabled="patientData.case == 'old'" :limit="limit2" ></date-picker> 
							<i v-show="errors.has('appointment_datetime')" class="fa fa-warning"></i>
							<span class="help is-danger" v-show="errors.has('appointment_datetime')">
		            			Please enter valid appointment datetime.
		            		</span>
	                    </div>
	                </div>
                </div>
            <div class="row form-group">
            	 <div class="col-md-6">
		        	<div class="col-md-6 ">
			        	<label for="case_type">Token No:</label>
			        </div>
			        <div class="col-md-6 ">
			        	<input class="form-control" type="text" id="token_no" name="token_no" value="" v-model="patientData.token_no"  @change=" checkExistingToken()"  />
			        </div>
			        <i v-show="errors.has('token_no')" class="fa fa-warning"></i>
							<span class="help is-danger" v-if="(patientData.token_validation != 0)">
		            			Please enter another token number it's already exist.
		            		</span>
		        </div>
            	<div class="col-md-6" >
			        	<div class="col-md-6 ">
			            	<label for="token_status">Token Status:</label>
			          	</div>
		          	<div class="col-md-6">
		            	<select  class="form-control  ls-select2" v-validate="'required'" id = "token_status" name="token_status" value="" v-model="patientData.token_status">
		              		<option value="waiting" selected="selected">waiting</option>
		              		<option value="pending">pending</option>
		            	</select>
		          	</div>
		        </div>
            </div>
              <div class="row form-group" v-if="(patientData.case == 'old')" >
                	<div class="col-md-6">
			        	<div class="col-md-6 ">
			            	<label for="case_type" >Case Type:</label>
			          	</div>
		          	<div class="col-md-6">
		            	<select  class="form-control ls-select2" v-validate="'required'" id = "case_type" name="case_type" value="" v-model="patientData.case_type">
		              		<option value="cross_reference">Cross Reference</option>
		              		<option value="reports">Reports</option>
		              		<option value="follow_ups">Follow ups</option>
		              		<option value="new_consult">New Consult</option>
		            	</select>
		            	<i v-show="errors.has('case_type')" class="fa fa-warning"></i>
		            	<span class="help is-danger" v-show="errors.has('case_type')">
		              		Please select case type.
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
// <<<<<<< HEAD
//   	import userlist from './userlistData.vue';
  	import moment from 'moment';
  	import patientSearch from './patientSearchData.vue';

  	/*for consulting dr */
  	let consult_list=[];

    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
				'patient_type_option': [{id:'opd',text:'OPD'}, {id:'ipd',text:'IPD'}] ,
                'deleteConfirmMsg': 'Are you sure you would like to delete this referee? All information associated with this referee will be permanently deleted.',
                timeoption: {
                	type : 'min',
			        week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
			        month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			        format: 'DD-MM-YYYY  H:mm:ss',
			        placeholder: 'when?',
			        inputStyle: {
			          'display': 'inline-block',
			          'padding': '6px',
			          'line-height': '22px',
			          'font-size': '16px',
			          'border': '2px solid #fff',
			          'box-shadow': '0 1px 3px 0 rgba(0, 0, 0, 0.2)',
			          'border-radius': '2px',
			          'color': '#5F5F5F'
			      		},
			      	
			      },
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
			       	from: moment().subtract(1, 'days').startOf('day')
			      }],
			     
                'patientData' : {
                	'case': '',
                	'type' : '',
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
                	'age' : '',
                	'display_age' : '',
                	'appointment_datetime': {
                		time:''
                	},
                	'validatenumber' : '',
                	'patient_id':'',
                	'case_type' : '',
                	'token_no' : '',
                	'token_status' : '',
                	'token_validation' : 0
                }
            }
        },
        components: {
        	'date-picker': myDatepicker,
        	patientSearch
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
		             		//vm.userlistData={};
		             		vm.initPatientData();
		             	}
		             }
		             else if(this.id == 'gender') {
		             	vm.patientData.gender = $(this).val();		

		             } else if(this.id == 'type') {
		             	vm.patientData.type = $(this).val();		
		             } else if(this.id == 'case_type') {
		             	vm.patientData.case_type = $(this).val();		

		             }
		             else{
		             	vm.patientData.consulting_dr = $(this).val();			
		             }
				});

			/*for consulting dr */

				    User.generateUserDetailsByType(1,'Active').then(
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
        	this.$root.$on('patientEmpty',this.patientEmpty);
        },
        methods: {
        	compairNumbers(){ 
        		
        		if(this.patientData.ph_no == this.patientData.mob_no){
        		 this.patientData.validatenumber = 'Mobile number and phone number must be different';

        		}	
        		return this.patientData.validatenumber;

        	},
        	 customFormatter(date) {
		      		return moment(date).format('MMMM Do YYYY, h:mm:ss a');
		    	},

        	patientEmpty(p_val)
        	{
        		this.initPatientData();
        	},

        	  getAgeCal () { 
        	  	let vm =this;
		        vm.handleDOBChanged();
		      },
		      getBirthYear(){ 

		      	 let getYearForage = 0;
		      	 this.patientData.dob.time = null;
		      	
		      		let patientAge = this.patientData.display_age;
		      	     getYearForage =   this.currentYear - patientAge - 1;
		      	      this.patientData.age = getYearForage;
		      		
		      	 return true;
		      	
		      },
		      checkExistingToken(){
		      	let vm =this;
		      	vm.patientData.token_validation = 0;
		      	User.getExistingToken(vm.patientData.token_no).then(
	  				(response) => {
	  					vm.patientData.token_validation = response.data;
	  				},
	  				(error)=>{

	  				}
  				);
		      },
		      getAgeFromYear(year){
				
		      	let getYear = 0;
		      	this.patientData.display_age = 1;
		      	getYear = this.currentYear - year - 1;
		      	console.log(getYear);
		      	if(getYear != 0){
		      		this.patientData.display_age = getYear;
		      	}
		      },
        	setPatientData(patientData) {
        		
        		if(patientData.code==200)
        		{
        			
        			let pDetails=patientData.searchdata;
        			
        			if(pDetails.dob == null){
        				console.log(pDetails.age);
            			this.getAgeFromYear(pDetails.age);
            			
            		}else{
            			this.patientData.display_age=pDetails.age;
            			this.patientData.age = pDetails.age;
            			
            		}
        			this.patientData.patient_id=pDetails.id;
        			this.patientData.fname = pDetails.first_name;
            		this.patientData.mname = pDetails.middle_name;
            		this.patientData.lname = pDetails.last_name;
            		this.patientData.ph_no = pDetails.ph_no;
            		this.patientData.mob_no = pDetails.mob_no;
            		this.patientData.type = pDetails.type;
            		this.patientData.gender = pDetails.gender;
            		$('#gender').val(pDetails.gender).trigger('change');
            		this.patientData.address = pDetails.address;
            		this.patientData.reference_dr = pDetails.references;
            		this.patientData.dob.time = pDetails.dob;
            		this.patientData.consulting_dr = pDetails.consultant_id;
            		
            		this.patientData.type = pDetails.type;
            		$('#type').val(pDetails.type).trigger('change');

            		$('#gender').val(pDetails.gender).change();
            		$('#consulting_dr').val(pDetails.consultant_id).change();
            		
            		//this.getAgeCal();
        		}
        		else if(patientData.code==300)
        		{
        			vm.userlistData={};	
        			toastr.error('Record not found', 'Error', {timeOut: 5000});
        			this.initPatientData();
        		}
        		else
        		{
        			vm.userlistData={};
        			toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
        			this.initPatientData();
        		}
        	},
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    handleDOBChanged() { 	
				   // $('#dob').on('change', function () {	
				   		this.patientData.age = '';
				      if (this.isDate(this.patientData.dob.time)) { 

				        var ageCal = this.calculateAge(this.parseDate(this.patientData.dob.time), new Date());	
				     
				      	//$("#age").html(age); 
				      	this.patientData.display_age = ageCal; 	
				      	this.patientData.age = ageCal; 	
				        	
				      }     	
				  //  });	
				},	
	
				//convert the date string in the format of dd/mm/yyyy into a JS date object	
				parseDate(dateStr) {
				  var dateParts = dateStr.split("-");	
				
				   return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);		
				},	
	
				//is valid date format	
				calculateAge (dateOfBirth, dateToCalculate) {
				
				    var calculateYear = dateToCalculate.getFullYear();	
				    var calculateMonth = dateToCalculate.getMonth();	
				    var calculateDay = dateToCalculate.getDate();	
					//console.log(calculateYear +'/'+ calculateMonth +'/'+ calculateDay);
				    var birthYear = dateOfBirth.getFullYear();	
				    var birthMonth = dateOfBirth.getMonth();	
				    var birthDay = dateOfBirth.getDate();	
					//console.log(birthYear +'/'+ birthMonth +'/'+ birthDay);
				    var age = calculateYear - birthYear;	
				    var ageMonth = calculateMonth - birthMonth;	
				    var ageDay = calculateDay - birthDay;	
				  
				    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {	
			        age = parseInt(age) - 1;	
				    }	
				    if(age > 1){	
				    	return age - 1;
				    }	
				   	if(age == 1){	
						 return age;	
					}else{
						return 1;
					}/*else if(ageMonth != 0){	
						return ageMonth;	
					}else{	
						return ageDay;	
					}	*/
				},	
	
				isDate(txtDate) {	
				  var currVal =txtDate;

				  if (currVal == '')	
				    return true;	

				  //Declare Regex	
				  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;	
				  var dtArray = currVal.match(rxDatePattern); // is format OK?	
					 
				  if (dtArray == null)	
				    return false;	
	
				  //Checks for dd/mm/yyyy format.	
				  var dtDay = dtArray[1];	
				  var dtMonth = dtArray[3];	
				  var dtYear = dtArray[5];	
					
				  if (dtMonth < 1 || dtMonth > 12)	 
				    return false;	
				  else if (dtDay < 1 || dtDay > 31)	 
				    return false;	
				  else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)	
				    return false;	
				  else if (dtMonth == 2) {	 
				    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));	
				    if (dtDay > 29 || (dtDay == 29 && !isleap))	
				      return false;	
				  }	
	
				  return true;	
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
		    	vm.patientData.patient_id = '';
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
		    	vm.patientData.age = '';
		    	vm.patientData.type = '';
		    	vm.patientData.appointment_datetime.time = '';
		    	$("#gender").val('').trigger('change.select2');
		    	$("#consulting_dr").val('').trigger('change.select2');
		    },
		    deleteConfirmed() {
		      },
		    savePatient() {
		     	// return false;
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
	            		 var pData = {'patientData':this.patientData,'patientType':this.patientData.type};

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
		                		toastr.error('Something goes wrong.', 'Error', {timeOut: 5000});
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
