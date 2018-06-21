<template>
   <div class="container">
   	   <div class="page-header">
      	  <div class="row">
             <div class="col-md-6">
               <h3>Patient Receipt form </h3>
             </div>
          </div>
       </div>	
       <form action="" method="post" enctype="multipart/formdata" @submit="receiptPrintView">
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
	            		Please Select Patient.
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
			            Please Select OPD Case No.
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
							      
							     </div>	
							     <div class="col-md-6">
	          	 	 	 		 <label for="date"><b>Age:</b></label>
	          	 	 	 	 </div>
	          	 	 	 	 <div class="col-md-6">
	          	 	 	 	  <span id="age">{{patientData.age}}</span>	
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
				</div>
						<div class="row form-group" >	
				 		 	
				 			<div class="col-md-6">
			    	   			<div class="col-md-6">
						         	<label for="date">Case Type:</label>
						        </div>
						        <div class="col-md-6">
				    	   			<select class="form-control ls-select2"  id = "case_type" name="case_type" value="" v-model="patientData.case_type">
				    	   				<option :value="case_type.id" v-for="case_type in patientData.case_type_option">{{case_type.text}}</option>
				    	   			</select>
				    	   			<!-- <span class="help is-danger" v-show="errors.has('case_type')"> Please Select Case Type. </span> -->
				    	   		</div>
			    	   		</div>
				 	 	<div class="col-md-6">	
				          <div class="col-md-6">	
				            <label><b>Date :</b></label>	
				         </div>	
				         <div class="col-md-6">
			       				<date-picker  :date.sync="patientData.date_receipt" :option="option" id = "date_receipt" class="" type="text" name="date_receipt" :limit="limit" v-model="patientData.date_receipt.time" ></date-picker> 
							
			           	</div>	
			        </div>	
				 </div>
				
				<div class="row form-group" >	
					<div class="col-md-6">	
							<div class="col-md-6">	
								<label for="charges"><b>Charges Type:</b></label>
							</div>	
							<div class="col-md-6">
								<select  class="form-control ls-select2" id = "charges_type" name="charges_type" v-model="patientData.charges_type"   v-on:change="ChargesTypeFunction()">
	            		 			<option :value="charges_type.id" v-for="charges_type in patientData.charges_type_option">{{charges_type.text}}</option>
	          					</select>	
								<!-- <span class="help is-danger" v-show="errors.has('charges_type')"> Please Select Charges Type. </span>  -->
							</div>
				 	</div>
				 			<div class="col-md-6" v-if="patientData.charges_type == '1'">
						<div class="col-md-6">
							<label class="control-label" for="consultation_type">Consultation Charges: </label>
						</div>
						<div class="col-md-6">
							<select class="form-control ls-select2"  id="consultation_type" name="consultation_type"  v-model="patientData.consultation_type">
    								
  									<optgroup label="Super Specialists" value="1">
    									<option class="level_0" value="1">First</option>
    									<option class="level_0" value="2">Follow up</option>
    									<option class="level_0" value="3">Emergency</option>
  								 	</optgroup>
  								 <optgroup label="Specialists" value="2">
    								<option class="level_1" value="4">First</option>
    								<option class="level_1" value="5">Follow up</option>
    								<option class="level_1" value="6">Emergency</option>
  								 </optgroup>
								
							</select>
							<!-- <span class="help is-danger" v-show="errors.has('consultation_type')"> Please Select Consultation Charges. </span> -->
						</div>
					</div>
				 	<div class="col-md-6" v-if="patientData.charges_type == '2'">
						<div class="col-md-6">
				      		<label class="control-label" for="emergency_type">Emergency Charges: </label>
						</div>
						<div class="col-md-6">
				      		<select class="form-control ls-select2"  id="emergency_type" name="emergency_type"  v-model="patientData.emergency_type" >
								 <option :value="emergency_type.id" v-for="emergency_type in patientData.emergency_type_option">{{emergency_type.text}}</option>
				      		</select>
				      		<!-- <span class="help is-danger" v-show="errors.has('emergency_type')"> Please Select Emergency Charges. </span> -->
						</div>
					</div>
			 
				</div>
				<div class="row form-group" >	
					<div class="col-md-6">
						<div class="col-md-6">
				      		<label class="control-label" for="chargeAmount">Charges: </label>
						</div>
						<div class="col-md-6">
				      		<input class="form-control" type="text" name="chargeAmount" id="chargeAmount"  v-validate="'numeric'" 	v-model="patientData.chargeAmount" />
				      		<span class="help is-danger" v-show="errors.has('chargeAmount')"> Please Enter Charges with valid numeric value. </span>
						</div>
					</div>
					<div class="col-md-6" v-for="data in patientData.select_patient_detail">	
		 				<div class="col-md-6">	
		 					<label for="date"><b>Department:</b></label>	
		 				</div>	
		 				<div class="col-md-6">	
		 					{{patientData.department}}	
		 				</div>	
		 			</div> 	
				</div>
				<div class="row form-group" >	
					<div class="col-md-6" v-if="patientData.department=='Neurology'">
						<div class="col-md-6">
				      		<label class="control-label" for="neurological_procedures">Neurological Procedures: </label>
						</div>
						<div class="col-md-6">
				      		<select class="form-control ls-select2"  id="neurological_procedures" name="neurological_procedures"  v-model="patientData.neurological_procedures" >
								 <option :value="neurological_procedures.id" v-for="neurological_procedures in patientData.neurological_procedures_option">{{neurological_procedures.text}}</option>
				      		</select>
						</div>
					</div>
					<div class="col-md-6" v-if="patientData.department=='Vascular'">
						<div class="col-md-6">
				      		<label class="control-label" for="vascular_procedures">Vascular Procedures: </label>
						</div>
						<div class="col-md-6">
				      		<select class="form-control ls-select2"  id="vascular_procedures" name="vascular_procedures"  v-model="patientData.vascular_procedures" >
								 <option :value="vascular_procedures.id" v-for="vascular_procedures in patientData.vascular_procedures_option">{{vascular_procedures.text}}</option>
				      		</select>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="col-md-6">
				      		<label class="control-label" for="procedure_charges">Procedure Charges: </label>
						</div>
						<div class="col-md-6">
				      		<input class="form-control" type="text" name="procedure_charges" id="procedure_charges"  v-validate="'numeric'" v-model="patientData.procedure_charges" />
				      		<span class="help is-danger" v-show="errors.has('procedure_charges')"> Please Enter Procedure Charges with valid numeric value. </span> 
						</div>
					</div>
				</div>
				<div class="row form-group" >
					<div class="col-md-6">
						<div class="col-md-6">
					      		<label class="control-label" for="other_charges_category">Other Charges Category: </label>
							</div>
							<div class="col-md-6">
					      		<select class="form-control ls-select2"  id="other_charges_category" name="other_charges_category"  v-model="patientData.other_charges_category" >
									 <option :value="other_charges_category.id" v-for="other_charges_category in patientData.other_charges_category_option">{{other_charges_category.text}}</option>
					      		</select>
							</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      		<label class="control-label" for="other_charges">Other Charges: </label>
						</div>
						<div class="col-md-6">
				      		<input class="form-control" type="text" name="other_charges" id="other_charges"  v-validate="'numeric'" 	v-model="patientData.other_charges" />
				      		<span class="help is-danger" v-show="errors.has('other_charges')"> Please Enter Other Charges with valid numeric value. </span> 
						</div>
					</div>

				</div>
			 
			 	<div class="row form-group" >
					<div class="col-md-12">
					 	<button class="btn btn-primary pull-left" type="submit" id="modellink" >Save Receipt</button>
					</div>
				</div>
		</form>
			<div id="receiptModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"> </div>
						<div class="modal-body" id="printContent"> </div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-primary"  @click="ClickHereToPrint()">Print</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
							<!-- <button type="button" class="btn btn-primary">Save</button>	 -->
						</div>	
					</div>	
				</div>	
			</div> 		
		</div>
	 </template>
	<script>
		import User from '../../../api/users.js';
		import myDatepicker from 'vue-datepicker';

		let list=[];
		let charges_list=[];
		var patientId = '';
		
		

		export default {
			data() {
				return {
					post: null,
					'footer' : 'footer',
					 'currentYear': new Date().getFullYear(),
					 /*date code*/
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
					 		'fullname' : '',
					 		'gender': '',
					 		'case_no': '',
					 		'case_type' : '',
					 		'case_type_option': [{id:1,text:'OPD'}, {id:2,text:'IPD'}] ,
					 		'dob' : '',	
                			'age' : '',
		                	'reference_dr': '',
		                	'patient_id':'',
		                	'date_receipt': {
                				time:''
                			},
                 			'patient_option':list,
                 			'case_detail':{},
                 			'charges_type':'',
                 			'charges_type_option':charges_list,
                 			'chargeAmount' : '',
                 			'select_patient_detail':{},
		                	'consultation_type':'',
		                	'emergency_type':'',
		                	'emergency_type_option': [{id:1,text:'Day visit (8 am to 8 pm)'}, {id:2,text:'Night visit (8 pm to 8 am)'}],
		                	'neurological_procedures':'',
		                	'neurological_procedures_option': [
								{id:1,text:'EEG'},
								{id:2,text:'Bedside EEG'},
								{id:3,text:'Video EEG'},
								{id:4,text:'Nerve Conduction Studies per limb / 2 limbs'},
								{id:5,text:'Nerve Conduction Studies (All 4 limbs)'},
								{id:6,text:'Electromyography with disposable needle'},
								{id:7,text:'Visual evoked potentials (VEP)'},
								{id:8,text:'Auditory evoked potentials (BAEP)'},
								{id:9,text:'Somatosensory potentials (SSEP) / per nerve'},
								{id:10,text:'Facial Nerve study'},
								{id:11,text:'Repetitive Nerve stimulation'},
								{id:12,text:'Lumbar Puncture / +Manometry'},
								{id:13,text:'Neostigmine Test'},
								{id:14,text:'Bedside NCV (all 4 limbs)'},
								{id:15,text:'Bedside NCV (2 limbs)'},
								{id:16,text:'Bedside RNS'},
								{id:17,text:'Stroke Management Charges'},
								],
							'vascular_procedures':'',
		                	'vascular_procedures_option': [
								{id:1,text:'Color Doppler (per leg)'},
								{id:2,text:'Color Doppler Carotid'},
								{id:3,text:'Ankle Brachial Index / TBI'},
								{id:4,text:'Toe Brachial Index'},
								{id:5,text:'Maximum Venous Flow'},
								{id:6,text:'Pneumatic Compression Device'},
								{id:7,text:'Photo Plethysmography'},
							],
							'other_charges_category':'',
		                	'other_charges_category_option': [
								{id:1,text:'Dressing'},
								{id:2,text:'Special dressing'},
								{id:3,text:'Strip Method RBS	'},
								{id:4,text:'ECG'},
								{id:5,text:'Enema'},
								{id:6,text:'Urine Sugar (Per Test)'},
								{id:7,text:'Suture Removal'},
								{id:8,text:'Ambulance Charge (Within city limits only)'},
								{id:9,text:'Escort with Ventilator (per hour)'},
								{id:10,text:'Escort without Ventilator (per hour)'},

								],
							'other_charges':'',
							'procedure_charges':'',
		                	'department':''
		                	
                 		}
                 	}
                },
                components: {	
	       			 'date-picker': myDatepicker,	
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
  									$.each(response.data,function(key,value){
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

  							 User.getPatientOPDDetail(patientId).then(
  							 	(response) => { 
  							 		//console.log( response.data.data);
  							 		if(response.data.code == 200){
  							 			
  							 			

  							 			let patientDetails = response.data.data.patient_details;
  							 			//console.log(patientDetails);
  							 			let name = patientDetails.first_name +' '+patientDetails.last_name;
  							 			let pid  = patientDetails.id ;
  							 			let address  = patientDetails.address ;
  							 			let dob  = patientDetails.dob ;
  							 			//let caseType  = patientDetails.case_type ;
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
  							 				 //'case_type' : caseType,
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
  							 	
  							 	vm.patientData.patient_id = pid;
  							 	vm.patientData.reference_dr = consulatant;
  							 	vm.patientData.consult_id = patientDetails.consultant_id;

  							 	
  							 	}
  							    vm.handleDOBChanged();
  							    //vm.ChargesTypeFunction();
  							   /*for getting department*/
  							   //console.log(vm.patientData.consult_id);
						  		 User.getDrDepartmentById(vm.patientData.consult_id).then(
  							 	(response) => { 
  							 		let dept_name=response.data;
  							 		let dept_val  = dept_name.department;
  							 		vm.patientData.department=dept_val;

  							 		/*procedures for deopartment*/
  							 		/*for charges type end*/	
						  				/*for procedures*/
						  			setTimeout(function(){
						  				$('#neurological_procedures').select2({
							          	 	 placeholder: "Select"
							          	  });
						  				 $('#neurological_procedures').on("select2:select", function (e) { 
						          	    	let neurological_procedures_val=$(this).val();
						          	    	vm.patientData.neurological_procedures=neurological_procedures_val;
						          	    	if(neurological_procedures_val==1)
						          	    	{
						          	    		vm.patientData.procedure_charges=1500;
						          	    	}
						          	    	else if(neurological_procedures_val==2)
						          	    	{

						          	    		vm.patientData.procedure_charges=3000;
						          	    	}
						          	    	else if(neurological_procedures_val==3)
						          	    	{
						          	    		vm.patientData.procedure_charges=1200;
						          	    	}
						          	    	else if(neurological_procedures_val==4)
						          	    	{
						          	    		vm.patientData.procedure_charges=1000;
						          	    	}
						          	    	else if(neurological_procedures_val==5)
						          	    	{
						          	    		vm.patientData.procedure_charges=3500;
						          	    	}	
						          	    	else if(neurological_procedures_val==6)
						          	    	{
						          	    		vm.patientData.procedure_charges=2500;
						          	    	}
						          	    	else if(neurological_procedures_val==7)
						          	    	{
						          	    		vm.patientData.procedure_charges=2000;
						          	    	}
						          	    	else if(neurological_procedures_val==8)
						          	    	{
						          	    		vm.patientData.procedure_charges=2000;
						          	    	}
						          	    	else if(neurological_procedures_val==9)
						          	    	{
						          	    		vm.patientData.procedure_charges=2000;
						          	    	}
						          	    	else if(neurological_procedures_val==10)
						          	    	{
						          	    		vm.patientData.procedure_charges=1500;
						          	    	}
						          	    	else if(neurological_procedures_val==11)
						          	    	{
						          	    		vm.patientData.procedure_charges=1500;
						          	    	}
						          	    	else if(neurological_procedures_val==12)
						          	    	{
						          	    		vm.patientData.procedure_charges=2000;
						          	    	}
						          	    	else if(neurological_procedures_val==13)
						          	    	{
						          	    		vm.patientData.procedure_charges=1200;
						          	    	}
						          	    	else if(neurological_procedures_val==14)
						          	    	{
						          	    		vm.patientData.procedure_charges=6000;
						          	    	}
						          	    	else if(neurological_procedures_val==15)
						          	    	{
						          	    		vm.patientData.procedure_charges=3500;
						          	    	}
						          	    	else if(neurological_procedures_val==16)
						          	    	{
						          	    		vm.patientData.procedure_charges=2500;
						          	    	}
						          	    	else if(neurological_procedures_val==17)
						          	    	{
						          	    		vm.patientData.procedure_charges=5000;
						          	    	}
						          	    	
										});
			               	 			$('#vascular_procedures').select2({
							          	 	 placeholder: "Select"
							          	  });
			               	 			$('#vascular_procedures').on("select2:select", function (e) { 
						          	    	let vascular_procedures_val=$(this).val();
						          	    	vm.patientData.vascular_procedures=vascular_procedures_val;
						          	    	if(vascular_procedures_val==1)
						          	    	{
						          	    		vm.patientData.procedure_charges=2400;
						          	    	}
						          	    	else if(vascular_procedures_val==2)
						          	    	{
						          	    		vm.patientData.procedure_charges=2400;
						          	    	}
						          	    	else if(vascular_procedures_val==3)
						          	    	{
						          	    		vm.patientData.procedure_charges=1200;
						          	    	}
						          	    	else if(vascular_procedures_val==4)
						          	    	{
						          	    		vm.patientData.procedure_charges=1200;
						          	    	}
						          	    	else if(vascular_procedures_val==5)
						          	    	{
						          	    		vm.patientData.procedure_charges=1200;
						          	    	}	
						          	    	else if(vascular_procedures_val==6)
						          	    	{
						          	    		vm.patientData.procedure_charges=1200;
						          	    	}
						          	    	else if(vascular_procedures_val==7)
						          	    	{
						          	    		vm.patientData.procedure_charges=1800;
						          	    	}
						          	    	
						          	    	
										});

  							 	},
				               	(error) => {
				            	 	},
  								);
  							    
						  	},2000);	
  								
  							 	},	
				    		(error) => {	
				   			 },
				     		);	
	               	});

	              $('#case_type').on("select2:select", function (e) { 
						let case_type_val=$(this).val();
						vm.patientData.case_type =  case_type_val;
					});
  					/*for receipt charges types start*/
				    User.getChargesTypes().then(
				    	 (response) => {
               	 		let charges_type_data ;
               	 		charges_type_data = response.data;

               	 		$.each(charges_type_data, function(key, value) {
               	 			//console.log(value);
	               	 		let name = value.name;
	               	 		let id  = value.id ;
	               	 		
	               	 		charges_list.push({
	               	 				text:name,
	               	 				id:id,
	               	 				
	               	 		});
               	 		});
               	 			//setTimeout(function(){ 
			               	 			
           	 			$('#charges_type').select2({
			          	 	 placeholder: "Select"
			          	  });
			          	   /*for charges type start*/
								$('#charges_type').on("select2:select", function (e) { 
									let charges_type_val=$(this).val();
									vm.patientData.charges_type=charges_type_val;
									
					  			 if(charges_type_val==2)		
					  			 {
					  			 	setTimeout(function(){
								    	/*for emergency type*/
				       	 				$('#emergency_type').select2({
						          	 	 placeholder: "Select"
						          	    });
						          	    $('#emergency_type').on("select2:select", function (e) {
						          	    	let emergency_type_val=$(this).val();
						          	    	vm.patientData.emergency_type=emergency_type_val;
						          	    	if(emergency_type_val==1)
						          	    	{
						          	    		vm.patientData.chargeAmount=4000;
						          	    	}
						          	    	else if(emergency_type_val==2)
						          	    	{
						          	    		vm.patientData.chargeAmount=6000;
						          	    	} 

						          	    });
				       	 			
				           	 		},500);
					  			 }
					  			 else
					  			 {
					  			 	setTimeout(function(){
								    	 /*for consultation type*/
				       	 				$('#consultation_type').select2({
						          	 	 placeholder: "Select"
						          	 	});		
						          	    $('#consultation_type').on("select2:select", function (e) { 
						          	    	let consultation_type_val=$(this).val();
						          	    	vm.patientData.consultation_type=consultation_type_val;
						          	    	if(consultation_type_val==1)
						          	    	{
						          	    		vm.patientData.chargeAmount=800;
						          	    	}
						          	    	else if(consultation_type_val==2)
						          	    	{
						          	    		vm.patientData.chargeAmount=400;
						          	    	}
						          	    	else if(consultation_type_val==3)
						          	    	{
						          	    		vm.patientData.chargeAmount=2000;
						          	    	}
						          	    	else if(consultation_type_val==4)
						          	    	{
						          	    		vm.patientData.chargeAmount=500;
						          	    	}
						          	    	else if(consultation_type_val==5)
						          	    	{
						          	    		vm.patientData.chargeAmount=250;
						          	    	}	
						          	    	else if(consultation_type_val==6)
						          	    	{
						          	    		vm.patientData.chargeAmount=1000;
						          	    	}

						          	    	
						          	    });
				           	 		},500);
					  			 }
								    
								});
           	 		//},2000);
               	 		
               	 		
               	 	 },
               	 	 (error) => {
            	 	},
					);
  							 				
					/*for receipt charges types end*/
					/*for other cagory*/
					$('#other_charges_category').select2({
						 placeholder: "Select"
					});

       	 			$('#other_charges_category').on("select2:select", function (e) { 
	          	    	let other_charges_category_val=$(this).val();
	          	    	vm.patientData.other_charges_category=other_charges_category_val;
	          	    	if(other_charges_category_val==1)
	          	    	{
	          	    		vm.patientData.other_charges=400;
	          	    	}
	          	    	else if(other_charges_category_val==2)
	          	    	{
	          	    		vm.patientData.other_charges=600;
	          	    	}
	          	    	else if(other_charges_category_val==3)
	          	    	{
	          	    		vm.patientData.other_charges=100;
	          	    	}
	          	    	else if(other_charges_category_val==4)
	          	    	{
	          	    		vm.patientData.other_charges=400;
	          	    	}
	          	    	else if(other_charges_category_val==5)
	          	    	{
	          	    		vm.patientData.other_charges=200;
	          	    	}	
	          	    	else if(other_charges_category_val==6)
	          	    	{
	          	    		vm.patientData.other_charges=100;
	          	    	}
	          	    	else if(other_charges_category_val==7)
	          	    	{
	          	    		vm.patientData.other_charges=400;
	          	    	}
	          	    	else if(other_charges_category_val==8)
	          	    	{
	          	    		vm.patientData.other_charges=500;
	          	    	}
	          	    	else if(other_charges_category_val==9)
	          	    	{
	          	    		vm.patientData.other_charges=3000;
	          	    	}
	          	    	else if(other_charges_category_val==10)
	          	    	{
	          	    		vm.patientData.other_charges=1800;
	          	    	}
	          	    	
	          	    	
					});
					/*for other category end*/
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
	         receiptPrintView: function (e) {
		    	this.$validator.validateAll().then(  	
	            (response) => { 
	            	
	            	if (!this.errors.any()) {
	            		let content = [];
	            		User.generateReceiptData(this.patientData).then(	
		                (response) => {
		                	$("body .js-loader").removeClass('d-none');
		                	$('#printContent').html('');
		                	if(response.data.html!="")
		                	{
		                		
		                		if(this.patientData.chargeAmount != '' || this.patientData.procedure_charges != ''|| this.patientData.other_charges != ''){
		                			$("body .js-loader").addClass('d-none');
		                			$('#receiptModal').modal('show');
			                	 	if ($("#printContent .printReceiptPage" ).length == 0){	
			                			$('#printContent').append(response.data.html);	
				                	}else{	
				                		$('#printContent').append(response.data.html);	
				                	}
				                	$('#receiptModal').on('hidden.bs.modal', function () {
				                		toastr.success('success.', 'receipt success', {timeOut: 5000});
  										location.reload(true);
									});
			                	}
			                	else
			                	{
			                		location.reload(true);
			                		toastr.success('success.', 'Receipt Saved successfully', {timeOut: 600000});
			                		$("body .js-loader").addClass('d-none');

			                	}
			                	
		                	}
		                	 
			                else{
			                	 toastr.error('Please fill require data.', 'receipt error', {timeOut: 5000});
                   						 return false;
			                }	
		                		
	
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
				e.preventDefault();
			},	
				handleDOBChanged() { 	
				   // $('#dob').on('change', function () {	
				   		
				      if (this.isDate(this.patientData.dob)) {	
				        var ageCal = this.calculateAge(this.parseDate(this.patientData.dob), new Date());	
				      	//$("#age").html(age); 
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
					        var printWindow = window.open(windowUrl, windowName, 'left=5000,top=5000,width=0,height=0');	
					        printWindow.document.write(printContent);	
	
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