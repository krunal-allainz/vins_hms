<template id="">
  <div class="container" style="padding: 170px 0px;">
    <div class="page-header">
      <div class="row text-center">
        <div class="col-md-12">
          <h1>Thank You</h1>
        </div>
      </div>
    </div>
    <form action="" method="post">
    	 <div class="row form-group text-center">
    	 	 <div class="col-md-12">
    	 	 	<!-- <div class="col-md-4"> -->
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal"  @click = "printReport('opd_case')" v-if="(opdReport == true)" id="opd_case_btn">OPD Case</button>
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#generateModal"  @click="printReport('generate_case')" v-if="(opdReport == false)">Generate Report</button>
    	 	 <!-- 	</div>
    	 	 	<div class="col-md-4">
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" href="#printModal"  @click="printPriscription()">Prescription</button>
    	 	 	</div>
    	 	 	<div class="col-md-4"> 
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" href="#printModal"  @click="printReferal()">Referal</button>-->

    	 	 		<button  v-if="(labReportData)" type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal" @click = "printReport('lab')" >Lab Report</button>

    	 	 		<button  v-if="(radioReportData != null)" type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal" @click = "printReport('radiology')" >Radiology Report</button>

    	 	 		<button type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal" @click = "printReport('prescription')">Print Prescription</button>
    	 	 		
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right" @click = "GetSelectComponent('patients_receipt_form')">Print Receipts</button>
    	 	 	<!--</div> -->
    	 	 </div>
    	 </div>
    </form>
    <div id="generateModal" class="modal fade">
    	<div class="modal-dialog" >
    		<div class="modal-content" >
    			<div class="modal-body">
					<div id="demo">
						<label><b>Select Report:</b></label>
						<ul>		
							<li v-for="mainCat in reportList">
								<input type="checkbox" :value="mainCat.reportListId" id="mainCat.reportListId" v-model="checkedreportList" @click="check($event)"> {{mainCat.reportListId}}
						    </li>
						</ul>
						<span class="help is-danger" v-show="(reportListSelect == 1)">
                  			Please select any report Type.
                		</span> 
					</div>
					<button type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal"  @click = "printReport('opd_case')" >OPD Case</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
    </div>
     <div id="printModal" class="modal fade">
     	<div class="modal-dialog" >
		 		<div class="modal-content" >
		 			<!--<div class="modal-header"></div>-->
		 			<div class="modal-body">
		 				<div id="printData">
			 					<div  id="printContent">
			 					</div>
			 					<vinsletterheadheaderpart></vinsletterheadheaderpart>

								 	<div v-if="(printType == 'lab')" style="min-height: 350px;height: 350px;">
								 		<div class='row' style="padding-left: 15px;padding-right:15px;">
							 				<div class='col-md-6 text-left'>
													<span class='text-left'><b>Ref By :</b></span>
														{{this.adviceDoctor}}
				    	 	 				</div>
				    	 	 				<div class='col-md-6 text-right'>
				    	 	 					<span class='text-right'><b>Date :</b> 
				    	 	 							{{ todayDate }}
				    	 	 					</span>
				    	 	 				</div>
				    	 	 			</div>	
				    	 	 			<br/>
				    	 	 			<br/>
								 		<div class='row'>
								 				<div class='col-md-12 text-center'>
								 					<h4>Lab Report</h4>
								 				</div>
								 			</div>
								 			   <div class="form-group" v-if="labReportData.length>0">
									                <div class="col-md-12">
									                  <div class="table-responsive">
									                    <table class="table table-striped table-bordered" id="laboratory_table_list">
									                        <thead>
									                        <tr>
									                            <th>#</th>
									                            <th>Name</th>
									                            <th>Date</th>
									                            <th>Result</th>
									                            <th>Assigning Dr</th>
									                            <!-- <th>Action</th> -->
									                        </tr>
									                        </thead>
									                        <tbody>
									                         <tr v-if="res.removed == false" :id="res.tr_id" v-for="(res,index) in labReportData">
									                            <td>{{++index}}</td> 
									                            <td>{{res.text }}</td>
									                            <td>{{res.lab_date.time}}</td>
									                            <td>{{res.result}}</td>
									                            <td>{{res.assign}}</td>
									                            <!-- <td> <i class="fa fa-remove" @click="removeLaboratory(res.id)"></i></td> -->
									                          </tr>

									                        </tbody>
									                    </table>
									                  </div>
									                  
									                </div>
									              </div>
								 	</div>
			 <div>	
			

			 	<div v-if="(printType == 'radiology')">
			 		<div class='row' style="padding-left: 15px;padding-right:15px;">
			 				<div class='col-md-6 text-left'>
									<span class='text-left'><b>Ref By :</b></span>
										{{this.adviceDoctor}}
    	 	 				</div>
    	 	 				<div class='col-md-6 text-right'>
    	 	 					<span class='text-right'><b>Date :</b> 
    	 	 							{{ todayDate }}
    	 	 					</span>
    	 	 				</div>
    	 	 			</div>	
    	 	 			<br/>
    	 	 			<br/>
			 		<div class='row'>
			 				<div class='col-md-12 text-center'>
			 					<h4>Radiology Report</h4>
			 				</div>
			 		</div>
			 		<div class="row"  style="min-height: 350px;height: 350px;padding-left: 15px;padding-right:15px;">
        				<div class="col-md-12">
        					<div class="table-responsive"">
                    			<table class="table table-striped table-bordered" id="radio_list">
                        		<thead>
                        			<tr>
                            			<th>#</th>
                            			<th>Type</th>
                            			<th>Body parts</th>
			                            <th>Qualifier</th>
			                            <th>Special request</th>
			                            <th>Details</th>
			                            
                        			</tr>
                       			 </thead>
                       			 <tbody>
		                        <tr v-if="res.removed == false" v-for="(res,index) in radioReportData">
		                            <td>{{++index}}</td>
		                            <td>{{res.type}}</td>
		                            <td>{{res.bodyPart}}</td>
		                            <td>{{res.qualifier}}</td>
		                            <td>{{res.special_request}}</td>
		                            <td>{{res.textData | strLimit}}</td>
		                            <!-- <td><img :src="res.imgData" height="100" width="100" /></td> -->
		                            <td></td>
		                        </tr>
                        		</tbody>
                    			</table>
                			</div>
        				</div>
        			</div>
			 	</div>
			 	<div v-if="(printType == 'prescription' && prescriptiData.length != '')"  style="min-height: 350px;height: 350px;">
			 			<div class='row' style="padding-left: 15px;padding-right:15px;">
			 				<div class='col-md-6 text-left'>
									<span class='text-left'><b>Ref By :</b></span>
										{{this.adviceDoctor}}
    	 	 				</div>
    	 	 				<div class='col-md-6 text-right'>
    	 	 					<span class='text-right'><b>Date :</b> 
    	 	 							{{ todayDate }}
    	 	 					</span>
    	 	 				</div>
    	 	 			</div>	
    	 	 			<br/>
    	 	 			<br/>
			 		<div v-if="(prescriptiData != null)" >
    	 	 				<div class='row' v-show="(prescriptiData.length != '')">
				 				<div class='col-md-12 text-center'>
				 					<span class='text-center'><b>Prescription</b></span>
				 				</div>
			 				</div>
							<div class="table-responsive">
							        <table class="table" id="prescription_list">
							        
							            <tbody>
							              <tr v-for="(res,index) in prescriptiData" v-if="res.remove=='false'" :id="res.pid">
    			                <td>{{++index}}]  {{res.name}} :  ORAL {{res.clock_quantity_1}}___{{res.clock_quantity_2}}___{{res.clock_quantity_3}} [ {{res.clock_time_1}}__ {{res.clock_time_2}}___{{res.clock_time_3}} ] [ {{res.clock_suggest_1}}___{{res.clock_suggest_2}}___{{res.clock_suggest_3}} ]
    			                 <i class="fa fa-close"></i> 
                                 <span v-if="res.total_prescription_days!=''">{{res.total_prescription_days}} DAYS </span>
                                <span v-else>TO BE CONTINUE</span>
                            </td>
                           </td> 
			              </tr>
							            </tbody>
							        </table>
							      </div>
    	 	 			</div>
    	 	 			<br/><br/>
    	 	 			<div v-if="(referalType == 'cross' && crossSelectedValue != '')">
			 				
				 			<div class='col-md-12 text-center'>
				 				<span class='text-center'><b>Cross Referal </b></span>
				 			</div>
			 				<div v-if="(crossType == 'internal')">
			 					
			 						<div class='col-md-6 text-left'>
			 							<span class='text-left'><b>Internal</b></span> {{this.$store.state.Patient.opdData.cross_type_int}}
			 						</div>
			 				</div>
			 				<div v-if="(crossType == 'external')">
			 					
			 						<div class='col-md-6 text-left'>
			 								<span class='text-left text-capitalize' style='padding-left:30px;padding-right;20px'><b>External
			 					</b></span>{{this.$store.state.Patient.opdData.cross_type_ext}}
			 						</div>
			 					
			 				</div>
				 		</div>

			 	</div>
			 	<div v-if="(printType == 'opd_case')"  style="min-height: 350px;height: 350px;">
			 			<div class='row'>
			 				<div class='col-md-12 text-center'>
			 					<h4>OPD CASE</h4>
			 				</div>
			 			</div>
				 		
			 			<div class='row' style="padding-left: 15px;padding-right:15px;">
			 				<div class='col-md-6 text-left'>
									<span class='text-left'><b>Ref By :</b></span>
										{{this.adviceDoctor}}
    	 	 				</div>
    	 	 				<div class='col-md-6 text-right'>
    	 	 					<span class='text-right'><b>Date :</b> 
    	 	 							{{ todayDate }}
    	 	 					</span>
    	 	 				</div>
    	 	 			</div>	
    	 	 			<br/>
    	 	 			<br/>
    	 	 			<div v-if="(checkedreportList.includes('Advice + follow ups'))">
    	 	 			<div v-if="(adviceType == 'text' && advice != '')">
    	 	 				<div class='col-md-6 text-left'>
				 				<span class='text-left'><b>Advice :-</b></span>
				 			</div>
				 			<div class='row'>
			 					<div class='col-md-12 text-left' v-if ="(adviceType == 'text')">
			 							<span class='text-left' style="padding-left:30px;"> {{advice}}</span>
			 					</div>
							</div>
    	 	 			</div>
    	 	 			<div v-if="(adviceType !== 'text' && adviceScribleValue != '')">
    	 	 				<div class='col-md-6 text-left'>
				 				<span class='text-left'><b>Advice :-</b></span>
				 			</div>
				 			<div class='row'>
			 					<div class='col-md-12 text-left' v-if ="(adviceType != 'text')">
						            <img :src="adviceScribleValue" title="Advice">
						        </div>  
							</div>
    	 	 			</div>
    	 	 			<br/><br/>
    	 	 			
    	 	 			<div v-if="(followup != '')">
    	 	 				<div class='col-md-6 text-left'>
				 				<span class='text-left'><b>FollowUp :-</b></span>
				 			</div>
				 			<div>
			 					<div class='col-md-12 text-left'>
						           {{followup}}
						        </div>  
							</div>
    	 	 			</div>
    	 	 		</div>
    	 	 		<div v-if="(checkedreportList.includes('Radiology'))">
    	 	 			<div class='row'>
			 				<div class='col-md-12 text-center'>
			 					<h4>Radiology Report</h4>
			 				</div>
			 		</div>
			 		<div class="row"  style="min-height: 350px;height: 350px;padding-left: 15px;padding-right:15px;">
        				<div class="col-md-12">
        					<div class="table-responsive"">
                    			<table class="table table-striped table-bordered" id="radio_list">
                        		<thead>
                        			<tr>
                            			<th>#</th>
                            			<th>Type</th>
                            			<th>Body parts</th>
			                            <th>Qualifier</th>
			                            <th>Special request</th>
			                            <th>Details</th>
			                            
                        			</tr>
                       			 </thead>
                       			 <tbody>
		                        <tr v-if="res.removed == false" v-for="(res,index) in radioReportData">
		                            <td>{{++index}}</td>
		                            <td>{{res.type}}</td>
		                            <td>{{res.bodyPart}}</td>
		                            <td>{{res.qualifier}}</td>
		                            <td>{{res.special_request}}</td>
		                            <td>{{res.textData | strLimit}}</td>
		                            <!-- <td><img :src="res.imgData" height="100" width="100" /></td> -->
		                            <td></td>
		                        </tr>
                        		</tbody>
                    			</table>
                			</div>
        				</div>
        			</div>
    	 	 		</div>
    	 	 		<div v-if="(checkedreportList.includes('Laboratory'))">
    	 	 			<div class='row'>
								 				<div class='col-md-12 text-center'>
								 					<h4>Lab Report</h4>
								 				</div>
								 			</div>
								 			   <div class="form-group" v-if="labReportData.length>0">
									                <div class="col-md-12">
									                  <div class="table-responsive">
									                    <table class="table table-striped table-bordered" id="laboratory_table_list">
									                        <thead>
									                        <tr>
									                            <th>#</th>
									                            <th>Name</th>
									                            <th>Date</th>
									                            <th>Result</th>
									                            <th>Assigning Dr</th>
									                            <!-- <th>Action</th> -->
									                        </tr>
									                        </thead>
									                        <tbody>
									                         <tr v-if="res.removed == false" :id="res.tr_id" v-for="(res,index) in labReportData">
									                            <td>{{++index}}</td> 
									                            <td>{{res.text }}</td>
									                            <td>{{res.lab_date.time}}</td>
									                            <td>{{res.result}}</td>
									                            <td>{{res.assign}}</td>
									                            <!-- <td> <i class="fa fa-remove" @click="removeLaboratory(res.id)"></i></td> -->
									                          </tr>

									                        </tbody>
									                    </table>
									                  </div>
									                  
									                </div>
									              </div>
    	 	 		</div>
    	 	 		<div v-if="(checkedreportList.includes('Prescription'))">
    	 	 			<div v-if="(prescriptiData != null)" >
    	 	 				<div class='row' v-show="(prescriptiData.length != '')">
				 				<div class='col-md-12 text-center'>
				 					<span class='text-center'><b>Prescription</b></span>
				 				</div>
			 				</div>
							<div class="table-responsive">
							        <table class="table" id="prescription_list">
							        
							            <tbody>
							              <tr v-for="(res,index) in prescriptiData" v-if="res.remove=='false'" :id="res.pid">
    			                <td>{{++index}}]  {{res.name}} :  ORAL {{res.clock_quantity_1}}___{{res.clock_quantity_2}}___{{res.clock_quantity_3}} [ {{res.clock_time_1}}__ {{res.clock_time_2}}___{{res.clock_time_3}} ] [ {{res.clock_suggest_1}}___{{res.clock_suggest_2}}___{{res.clock_suggest_3}} ]
    			                 <i class="fa fa-close"></i> 
                                 <span v-if="res.total_prescription_days!=''">{{res.total_prescription_days}} DAYS </span>
                                <span v-else>TO BE CONTINUE</span>
                            </td>
                           </td> 
			              </tr>
							            </tbody>
							        </table>
							      </div>
    	 	 			</div>
    	 	 		</div>
		 		</div>

		 	<div style="position:absolute;bottom:150px;width:100%height:200px;right:30px;">
		 		<img  :src="'/assets/img/signature/'+signatureName+'.png'" height="66" width="182"/>
		 	</div>	
		 	<div style="position:absolute;bottom:150px;width:100%height:200px;right:30px;">
		 		<img  :src="'/assets/img/timestamp/'+timeStamp+'.png'" height="66" width="182"/>
		 	</div>	
		 	<div style="position:absolute;bottom:120px;width:100%height:50px;right:30px;">
		 			<div class="row" style="padding-bottom: 10px;padding-right:20px;font-size: 15px;  ">
            				<div class='col-md-12 text-right'>
				 				<span class='text-right'><b>Consultant's Signature</b></span>
				 			</div>
				 	</div>	
				</div>
			</div>
				<vinsletterheadfooterpart></vinsletterheadfooterpart>
			</div>
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
	import vinsletterheadheaderpart from './vins_letter_header.vue';
	import vinsletterheadfooterpart from './vins_letter_footer.vue';
	import prescriptionData from './prescriptionData.vue';
	import moment from 'moment';
	var myDate = new Date();
				var month = ('0' + (myDate.getMonth() + 1)).slice(-2);
				var date = ('0' + myDate.getDate()).slice(-2);
				var year = myDate.getFullYear();
				var formattedDate = date + '/' + month + '/' + year ;
	export default {
		data() {
			return{
				'adviceType' :this.$store.state.Patient.opdData.adviceType,
				'adviceDoctor':this.$store.state.Users.userDetails.first_name+' '+this.$store.state.Users.userDetails.last_name,
				'referalType':this.$store.state.Patient.opdData.referral,
				'crossType':this.$store.state.Patient.opdData.cross,
				'radiologyData':this.$store.state.Patient.opd_resultData,
				'printType':'opd_case',
				'todayDate' : formattedDate,
				'crossSelectedValue' : '',
				'adviceScribleValue' : '',
				'advice' : this.$store.state.Patient.opdData.advice,
				'prescriptiData' : this.$store.state.Patient.prescriptionData,
				'radioReportData' : this.$store.state.Patient.radioData, 
				'labReportData' : this.$store.state.Patient.laboratoryData.type,
				'consultntId' : this.$store.state.Users.userDetails.id,
				'consultName' : '',
				'signatureName' : '',
				'timeStamp' : '',
				'followup' : this.$store.state.Patient.neuroExaminationData.follow_up,
				'checkedreportList': {},
	    		'reportList': [{
		       		 'reportListId': 'Advice + follow ups'
		      		}, {
		      		  'reportListId': 'Radiology'
		      		}, {
		      		  'reportListId': 'Laboratory'
		      		}, {
		      		  'reportListId': 'Prescription'
		      		}] ,
		      	'opdReport' : false,
		      	'reportListSelect' : 0,
			}
		},
		components: {
         vinsletterheadheaderpart,
         vinsletterheadfooterpart,
       },
       mounted(){
			let vm =this;
       		if(this.referalType == 'cross'){
				if(this.crossType == 'internal'){
					this.crossSelectedValue = this.$store.state.Patient.opdData.cross_type_int;
			    }
				if(this.crossType == 'external'){
					this.crossSelectedValue = this.$store.state.Patient.opdData.cross_type_ext;
				}
			}
			if(this.adviceType != 'text'){
				this.adviceScribleValue = this.$store.state.Patient.opdData.signaturePad2_src;
			}

			User.generateUserNameById(vm.consultntId).then(
  				(response) => {
					vm.consultName = response.data;
					if(vm.consultntId == 1){
						vm.signatureName = 'rakesh_shah';
						vm.timeStamp = 'rakesh_shah';
					}
					else if (vm.consultntId == 2){
						vm.signatureName = 'anand_vaishnav';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 3){
						vm.signatureName = 'suvorit_bhowmick';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 4){
						vm.signatureName = 'monish_malhotra';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 5){
						vm.signatureName = 'suresh_nayak';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 6){
						vm.signatureName = 'viral_mehta';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 7){
						vm.signatureName = 'rakesh_jasani';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 8){
						vm.signatureName = 'vijay_thakore';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 9){
						vm.signatureName = 'kaushik_trivedi';
						vm.timeStamp = 'anand_vaishnav';	
					}else if (vm.consultntId == 10){
						vm.signatureName = 'hemant_mathur';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 11){
						vm.signatureName = 'mihir_acharya';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 12){
						vm.signatureName = 'sumit_kapadia';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 13){
						vm.signatureName = 'ketan_kapashi';	
						vm.timeStamp = 'anand_vaishnav';
					}else if (vm.consultntId == 14){
						vm.signatureName = 'rajesh_kantharia';	
						vm.timeStamp = 'anand_vaishnav';
					}else{
						vm.signatureName = 'test_signature';
						vm.timeStamp = 'test_timestamp';	
					}
				},
			    (error) => {
			    },
  			); 
       },
		methods: {

			 check: function(e) {
	     		 if (e.target.checked) {
	      		  console.log(e.target.value)
	     		 }
	   		 },
			printReport(type){
				let vm = this;
				if(type == 'opd_case'){
						if(vm.checkedreportList.length  == 0){
							vm.reportListSelect = 1;
							return false;
						}else{
							vm.reportListSelect = 0;
							vm.printType = type;
							return true;
						}
				}else{
					vm.printType = type;
					return true;
				}
			},
			ClickHereToPrint() {	
				
				var  OPDCaseData = {
							'advice' : this.advice,
							'adviceType' : this.adviceType,
							'adviceDoctor' : this.adviceDoctor,
							'priscriptionData': this.prescriptiData,
							'referalType' :this.referalType,
							'crossType' : this.crossType,
							'radiologyData' : this.radiologyData,
							'todayDate': this.todayDate,
							'crossSelectedValue' : this.crossSelectedValue,
							'adviceScribleValue' : this.adviceScribleValue,
							'printType' : this.printType,
							'radioReportData' : this.radioReportData,
							'labReportData' : this.labReportData,
							'signatureName' : this.signatureName,
							'timeStamp' : this.timeStamp,
							'followup' : this.followup
						};

				      	User.printOPDCaseData(OPDCaseData).then(	
		                (response) => { 
		                	var printContent = "";
		                	printContent = response.data;	
				        	//$('#receiptModal').modal({show:true}); 
		                	// try {
		                    var windowUrl = '';	
					       // var uniqueName = new Date();	
					        //var windowName = 'Print' + uniqueName.getTime();	
					        var uniqueName = '';/*new Date();	*/
					        var windowName = '';/*'Print' + uniqueName.getTime();	*/
					        var printWindow = window.open('','','left=0,top=0,width=950,height=600,toolbar=0,scrollbars=0,status=0,addressbar=0');
					        
					        var is_chrome = Boolean(printWindow.chrome);
    						printWindow.document.write(printContent);
    						printWindow.document.close(); 
    						 if (is_chrome) {
						        setTimeout(function () { // wait until all resources loaded 
						            printWindow.focus(); // necessary for IE >= 10
						            printWindow.print();  // change window to printWindow
						            return false;
						            printWindow.close();// change window to printWindow
						        }, 250);
						    }
						    else {
						         // necessary for IE >= 10
						        printWindow.focus(); // necessary for IE >= 10
						        printWindow.print();
						        printWindow.close();
						    }
	

				    // 	}	
				    // catch (e) {	
				    //     self.print();	
				    // }	
	
		            	},	
		                (error) => {	
		                	 $("body .js-loader").addClass('d-none');	
	
		                }	
		                )	
	
				    	
				},
				 GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		   	 }
		}
	}
</script>
