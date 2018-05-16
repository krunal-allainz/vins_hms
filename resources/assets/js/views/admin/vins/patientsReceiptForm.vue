<template>
   <div class="container">
   	   <div class="page-header">
      	  <div class="row">
             <div class="col-md-6">
               <h1>Patient Receipt From </h1>
             </div>
          </div>
       </div>	
       <form action="" method="post" enctype="multipart/formdata">
    	   <div class="row form-group">	
    	   		<div class="col-md-6">
    	   			<div class="col-md-6">
			          <label for="date">Select Patient:</label>
			        </div>
    	   		

    	   		<div class="col-md-6">
	          		<select  class="form-control ls-select2" v-validate="'required'" id = "patient" name="patient" value="" v-model="patientData.patient"   v-on:change="myFunction()">
	            		 <option :value="patient.id" v-for="patient in patientData.patient_option">{{patient.text}}</option>
	          		</select>	
         							
	          		<span class="help is-danger" v-show="errors.has('patient_list')">
	            		Field is required
	          		</span>
	          	</div>
	          </div>

	          <div class="col-md-6">
			        <div class="col-md-6">
			          <label for="date">OPD CASE NO:</label>
			        </div>
			        <div class="col-md-6">
			         <select  class="form-control ls-select2"  v-validate="'required'" id="case_no" name="case_no" v-model="patientData.case_no" value="">
			           <option :value="case_no.id" v-for="case_no in patientData.case_detail">{{case_no.text}}</option>
			          </select>
			          <span class="help is-danger" v-show="errors.has('case_no')">
			            Field is required
			          </span>
			        
			        </div>
			     </div>
			    </div>
			    <div  v-for="data in patientData.select_patient_detail">
			   	 <div class="row form-group" >
		          	<div class="col-md-6">
				       
				          <label for="date"><b>Gender:</b></label>
				       
				        <span  v-if="data.gender=='M'">
				             Male 
				        </span>
				        <span  v-if="data.gender=='F'">
				             Female
				        </span>
				        / <span id=age>{{patientData.age}}</span>
				     </div>

			     <div class="col-md-6" v-for="data in patientData.select_patient_detail">
					
			     	 <label class="control-label" for="consulting_dr"><b>Consulting Dr.:</b> </label>
						{{data.consult}}
				</div>
			</div>
			 <div class="row form-group" >
			 	<div class="col-md-6">
			 	 <label for="date"><b>Case Type:</b></label>
			 	 {{patientData.casetype}}
			 	</div>
			 	 <div class="col-md-6">
		          <div class="col-md-6">
		            <label><b>Date :</b></label>
		          </div>
		          <div class="col-md-6">
		           <input class="form-control ls-datepicker" type="text" id ="date_receipt" name="date_receipt" v-model="patientData.date_receipt"   v-validate="'required|numeric'" />
		            <span class="help is-danger" v-show="errors.has('date_receipt')">
		              Field is required
		            </span>
		          </div>
		        </div>
			 </div>

			<!--<div class="row form-group" >
				<div class="col-md-6"><label>Perticular</label></div><div class="col-md-6"><label>Amount</label></div>
			</div>-->
			<div class="row form-group" >
				<div class="col-md-6">
						<input class="form-control" type="text" name="charges" id="charges" placeholder="charges" 
						v-validate="'required'"/>
						<span class="help is-danger" v-show="errors.has('charges')">
		              		Please enter charges name
		            	</span>
				</div>
				<div class="col-md-6"><input class="form-control" type="text" name="chargeAmount" id="chargeAmount" placeholder="amount" v-validate="'required|numeric'" />
				<span class="help is-danger" v-show="errors.has('chargeAmount')">
		              		Please enter charges in numeric
		            	</span></div>
			</div>
			

	        <div class="row form-group" >
	       		 <div class="btn-success" type="submit" ><a class="btn btn-primary pull-right" data-toggle="modal" href="#receiptModal" id="modellink" @click="receiptPrintView()">Print Preview</a> </div>
	       	</div>
         </div>
       </form>		
   </div>
</template>
<script >
	import User from '../../../api/users.js';
	//import myDatepicker from 'vue-datepicker';
	
	let list=[];
	// var opdDetail=[];
	//var patient_data_detail=[];

	 export default {
        data() {
            return {
            	post: null,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'patientData' : {
                	'gender': '',
                	'case_no': '',
                	'dob' : '',
                	'age' : '',
                	'casetype' : '',
                	'reference_dr': '',
                	'patient':'',
                	'date_receipt' : '',
                	'patient_option':list,
                	'case_detail':{},
                	'select_patient_detail':{},
                }
            }

        },

        mounted(){
       		   
		          $('.ls-select2').select2({
		        	   placeholder: "Select"
		          }); 

			      $('.ls-datepicker').datepicker({
	           	       format: 'dd/mm/yyyy',
	                   todayHighlight: true,
	                  'autoclose': true
	              });

		          let vm =this;
         // // $('.ls-select2').on("select2:select", function (e) { 
         // //   if(this.id == 'referral'){
         // //     vm.patientData.referral=$(this).val();
         //    }
         //    else if(this.id== 'internal'){
         //      vm.patientData.cross_type_int = $(this).val();
         //    }
         //    else{
         //      vm.patientData.case_type = $(this).val(); 
         //    }
         //     if($(this).val() == 'old') {
         //     } 
         //     else {
         //        setTimeout(function(){
         //        $('#createPatientDetail').modal('show');  
         //     },500)
         //    }
            

         //  });
           $('#patient').on("select2:select", function (e) { 
  			let patientId = $(this).val();
  			let opdDetail=[];
  			 User.getPatientOPDDetail(patientId).then(
  			 	(response) => { 
  			 		if(response.data.code == 200){
  			 			if(response.data.data.length != 0){
  			 			// console.log(response.data.data);
  			 			
  			 				$.each(response.data.data,function(key,value){
  			 					let opdId = value.id;
  			 					let opdNumber =  value.id;
  			 					opdDetail.push({'id':opdId,'text':opdNumber});
  			 				});
  			 				vm.patientData.case_detail = opdDetail;


  			 				
  			 			}
  			 		}
		      	},
			    (error) => {
			    },
  			 );

			});
 			$('#case_no').on("select2:select", function (e) {
	  			let patientId = $(this).val();
	  			let patient_data_detail = [];
	           User.getpatientDetail(patientId).then(
	  				(response) => { 
	  					if(response.data.code == 200){
	  							
	  					let patientDetails = response.data.data.patient_details;
	  					let name = patientDetails.first_name +' '+patientDetails.last_name;
	  					let pid  = patientDetails.id ;
						let address  = patientDetails.address ;
						let dob  = patientDetails.dob ;
						let caseType  = patientDetails.case_type ;
						let consulatant  = patientDetails.consultant ;
						let gender  = patientDetails.gender ;
						let mob  = patientDetails.mob_no ;
						let phone  = patientDetails.ph_no;
						let references  = patientDetails.references ;
						let uhid_no  = patientDetails.uhid_no ;
	  					patient_data_detail.push({
	  									  'name' : name,
				      					   'id' : pid,
				      					   'add' : address,
				      					   'case_type' : caseType,
				      					   'consult' : consulatant,
				      					   'gender' : gender,
				      					   'mob' : mob,
				      					   'phone' : phone,
				      					   'references' : references,
				      					   'uhid_no' : uhid_no
				      					  });
	  					vm.patientData.select_patient_detail=patient_data_detail;
	  					vm.patientData.dob = dob;
	  					vm.patientData.casetype = caseType;
	  					 vm.handleDOBChanged();
	  					}
	  				},
				    (error) => {
				    },
	  			 );
	       });

          User.getAllPatientName().then(
		    (response) => {
		    	let patien_data ;
		      	patien_data = response.data;
		      	$.each(response.data.data, function(key, value) {
						let name = value.patient_details.first_name +' '+value.patient_details.last_name;
						let pid  = value.patient_details.id ;
						let address  = value.patient_details.address ;
						let caseType  = value.patient_details.case_type ;
						let consulatant  = value.patient_details.consultant ;
						let gender  = value.patient_details.gender ;
						let mob  = value.patient_details.mob_no ;
						let phone  = value.patient_details.ph_no ;
						let references  = value.patient_details.references ;
						let uhid_no  = value.patient_details.uhid_no ;
		      			list.push({text:name,
		      					   id:pid,
		      					   add:address,
		      					   case_type:caseType,
		      					   consult:consulatant,
		      					   gender:gender,
		      					   mob:mob,
		      					   phone:phone,
		      					   references:references,
		      					   uhid_no:uhid_no
		      					  });
  				 });
		    },
		    (error) => {
		    },
		);

		
        },
       methods: {
		    receiptPrintView() {   
		    	this.$validator.validateAll().then(  
	            (response) => { 
	            	//if (!this.errors.any()) {
	            		// $("body .js-loader").removeClass('d-none');
	            		let content = [];
				    	User.printReceiptPreview(this.patientData,content).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		$('#receiptModal').modal({show:true});
		                		toastr.success('Appointment has been saved', 'Appointment Book', {timeOut: 5000});
		                	}
		                	 $("body .js-loader").addClass('d-none');

		                },
		                (error) => {
		                	 $("body .js-loader").addClass('d-none');

		                }
		                )
			    	//
			    },
                (error) => {
                }
                )

			},
				handleDOBChanged() { 
				   // $('#dob').on('change', function () {
				      if (this.isDate(this.patientData.dob)) {
				        var age = this.calculateAge(this.parseDate(this.patientData.dob), new Date());
				      	//$("#age").html(age);  
				      	this.patientData.age = age; 
				      } else {
				        //$("#age").html('');   
				        this.patientData.age = age;
				      }      
				  //  });
				},

				//convert the date string in the format of dd/mm/yyyy into a JS date object
				parseDate(dateStr) { 
				  var dateParts = dateStr.split("/");
				  return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
				},

				//is valid date format
				calculateAge (dateOfBirth, dateToCalculate) {
				    var calculateYear = dateToCalculate.getFullYear();
				    var calculateMonth = dateToCalculate.getMonth();
				    var calculateDay = dateToCalculate.getDate();

				    var birthYear = dateOfBirth.getFullYear();
				    var birthMonth = dateOfBirth.getMonth();
				    var birthDay = dateOfBirth.getDate();

				    var age = calculateYear - birthYear;
				    var ageMonth = calculateMonth - birthMonth;
				    var ageDay = calculateDay - birthDay;

				    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
				        age = parseInt(age) - 1;
				    }
				   	if(age != 0){
						 return age+' Year';
					}else if(ageMonth != 0){
						return ageMonth +' Month';
					}else{
						return ageDay + ' Days';
					}
				},

				isDate(txtDate) {
				  var currVal = txtDate;
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

			
		  },


    }

</script>