<template>
   <div class="container">
   	   <div class="page-header">
      	  <div class="row">
             <div class="col-md-6">
               <h3>Patient Receipt form </h3>
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
	          		<select  class="form-control ls-select2" v-validate="'required'" id = "patient" name="patient" value="" v-model="patientData.patient_id"   v-on:change="myFunction()">
	            		 <option :value="patient.id" v-for="patient in patientData.patient_option">{{patient.text}}</option>
	          		</select>	
         							
	          		<span class="help is-danger" v-show="errors.has('patient')">
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
	          	 	 	 	<div class="col-md-6">
	          	 	 	 		 <label for="date"><b>Gender:</b></label>
	          	 	 	 	 </div>
		          	 	 	<div class="col-md-6">	
							        <span  v-if="data.gender=='M'">	
							             Male 	
							        </span>	
							        <span  v-if="data.gender=='F'">	
						             Female	
							        </span>	
							        / <span id=age>{{patientData.age}}</span>	
							     </div>	
						 </div>	
							  <div class="col-md-6">	
						 	<div class="col-md-6" v-for="data in patientData.select_patient_detail">	
										
							     	 <label class="control-label" for="consulting_dr"><b>Consulting Dr.:</b> </label>	
							     </div>	
							      <div class="col-md-6">	
										{{data.consult}}	
							</div>	
							</div>	
					</div>
						<div class="row form-group" >	
				 		<div class="col-md-6">	
					 		<div class="col-md-6">	
					 	 		<label for="date"><b>Case Type:</b></label>	
					 		</div>	
					 		<div class="col-md-6">	
					 			 {{patientData.casetype}}	
				 		</div>	
				 	 	</div>	
				 	 	<div class="col-md-6">	
				          <div class="col-md-6">	
				            <label><b>Date :</b></label>	
				         </div>	
				         <div class="col-md-6">	
			       				<date-picker v-model="patientData.date_receipt" lang="en"  format="dd-MM-yyyy" ></date-picker>	
			           	</div>	
			        </div>	
				 </div>
				 <div class="row form-group" >	
				 	<div class="col-md-6">	
						<div class="col-md-6">	
						<label for="charges"><b>Charges Name:</b></label>	
									
						</div>	
						<div class="col-md-6">	
							<input class="form-control" type="text" name="charges" id="charges"  	
								v-validate="'required'" v-model="patientData.charges"/>									<span class="help is-danger" v-show="errors.has('charges')">	
				              		Please enter charges name	
				            	</span>	
						</div>	
 					</div>
 					<div class="col-md-6">
 						<div class="col-md-6">
 							<label for="chargeAmount"><b>Charges Amount:</b></label>	
								
							</div>	
							<div class="col-md-6">	
									<input class="form-control" type="text" name="chargeAmount" id="chargeAmount"  v-validate="'required|numeric'" 	v-model="patientData.amount"/>	
								<span class="help is-danger" v-show="errors.has('chargeAmount')">	
				              		Please enter charges in numeric	
				            	</span>	
				            </div>	
			        </div>	
				</div>
				<div class="row form-group" >
					 <div class="btn-success" type="submit" ><a class="btn btn-primary pull-right" data-toggle="modal" href="#receiptModal" id="modellink" @click="receiptPrintView()">Print Preview</a> </div>
				</div>
			 </div>
		</form>
		 <div id="receiptModal" class="modal fade">
		 	<div class="modal-dialog">
		 		<div class="modal-content">
		 			<div class="modal-header">
		 			</div>
		 			<div class="modal-body" id="printContent">	
		 				
            		</div>	
            	
	
       		<div class="modal-footer">	
	
				<button  type="button" class="btn btn-primary"  @click="ClickHereToPrint()">Print</button>		      	
			
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
             <!--  <button type="button" class="btn btn-primary">Save</button>-->	
            </div>	
            </div>	
          </div>	
       </div>		
		</div>
	 </template>
	<script >
		import User from '../../../api/users.js';
		import DatePicker from 'vue2-datepicker';

		let list=[];
		var patientId = '';

		export default {
			data() {
				return {
					post: null,
					'footer' : 'footer',
					'currentYear': new Date().getFullYear(),
					 'patientData' : {
					 		'fullname' : '',
					 		'gender': '',
					 		'case_no': '',
					 		'dob' : '',	
                			'age' : '',	
		                	'casetype' : '',
		                	'reference_dr': '',
		                	'patient_id':'',
		                	'date_receipt' : '',	
                 			'patient_option':list,
                 			'case_detail':{},
                 			'charges':'',
                 			'amount' : '',
                 			'select_patient_detail':{},	
                 		}
                 	}
                },
                components: {	
	       			 DatePicker	
	         	},
	          mounted(){
	          	 $('.ls-select2').select2({
	          	 	 placeholder: "Select"
	          	  }); 
	          	   let vm =this;

	          	    $('#patient').on("select2:select", function (e) { 
	          	    patientId = $(this).val();
  					let opdDetail=[];
  					User.getPatientOPDDetail(patientId).then(
  						(response) => { 
  							if(response.data.code == 200){
  								vm.patientData.case_detail = opdDetail;
  								if(response.data.data.length != 0){
  									$.each(response.data.data,function(key,value){
  										let opdId = value.id;
  										let opdNumber =  value.id;
  										opdDetail.push({'id':opdId,'text':opdNumber});
  									});
  								vm.patientData.case_detail = opdDetail;
  								setTimeout(function(){
  									$('#case_no').select2({
  										placeholder: 'Select'
  									});
  								},500)
  								}
  							}
  						},
  					 	(error) => {
  					 	},
  					  	);
  					});


  					$('#case_no').on("select2:select", function (e) {
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
  							 	vm.patientData.fullname = name;
  							 	vm.patientData.case_no = $(this).val();
  							 	vm.patientData.gender = gender;
  							 	vm.patientData.casetype = caseType;
  							 	vm.patientData.patient_id = pid;
  							 	vm.patientData.reference_dr = consulatant;
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
	               	 		let name = value.first_name +' '+value.last_name;
	               	 		let pid  = value.id ;
	               	 		let address  = value.address ;
	               	 		let caseType  = value.case_type ;	
	               	 		let consulatant  = value.consultant ;
	               	 		let gender  = value.gender ;
	               	 		let mob  = value.mob_no ;
	               	 		let phone  = value.ph_no ;
	               	 		let references  = value.references ;
	               	 		let uhid_no  = value.uhid_no ;
	               	 		list.push({
	               	 				text:name,
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
	               	 		setTimeout(function(){
	               	 			$('#patient').select2({
					          	 	 placeholder: "Select"
					          	  });		
	               	 		},500)
	               	 	 
	               	 		
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
	            		let type = 'opd';	
	            		User.generateReceiptData(this.patientData,type).then(	
		                (response) => { 	
		                	$('#printContent').html('');
		                	 if ($("#printContent .printReceiptPage" ).length == 0){	
		                		$('#printContent').append(response.data.html);	
		                	}else{	
		                		$('#printContent').append(response.data.html)	
		                	}	
		                	//$('#receiptModal').modal({show:true}); 	
	
		            	},	
		                (error) => {	
		                	 $("body .js-loader").addClass('d-none');	
	
		                }	
		                )	
				    	/*User.printReceiptPreview(this.patientData,content).then(	
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
		                )*/	
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
				    if(age > 1){	
				    	return age+' Years';	
				    }	
				   	if(age == 1){	
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
				ClickHereToPrint() {	
				    try {	
				    	var  printContent = '';	
				        printContent = document.getElementById('printContent').innerHTML;	
					        var windowUrl = '';	
					        var uniqueName = new Date();	
					        var windowName = 'Print' + uniqueName.getTime();	
					        var printWindow = window.open(windowUrl, windowName, 'left=50000,top=50000,width=0,height=0');	
					        printWindow.document.write('<html><body><div class="wrapper">'+printContent+'</div></body></html>');	
	
				        printWindow.document.close();	
				        printWindow.focus();	
				        printWindow.print();	
	
				        printWindow.close();	
				    }	
				    catch (e) {	
				        self.print();	
				    }	
				},	
	
				
		  },	
	
 	 
     }	
</script>