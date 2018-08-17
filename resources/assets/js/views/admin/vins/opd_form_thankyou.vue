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
    	 	 		
    	 	 		<!-- <button type="button" class="btn btn-primary btn-submit text-right" @click = "GetSelectComponent('patients_receipt_form')">Generate Receipts</button>  -->
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
						<span class="help is-danger" v-if="(reportListSelect == 1)">
                  			Please select any report Type.
                		</span> 
					</div>
					<button type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal"  v-show="(checkedreportList.length != 0)" @click = "printReport('opd_case')" >OPD Case</button>
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
									                            <!-- <th>Assigning Dr</th> -->
									                            <!-- <th>Action</th> -->
									                        </tr>
									                        </thead>
									                        <tbody>
									                         <tr v-if="res.removed == false" :id="res.tr_id" v-for="(res,index) in labReportData">
									                            <td>{{++index}}</td> 
									                            <td>{{res.text }}</td>
									                            <td>{{res.lab_date.time}}</td>
									                            <td>{{res.result}}</td>
									                            <!-- <td>{{res.assign}}</td> -->
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
    	 	 			
			 			<div v-if="presp_count(prescriptiData)>0" >
    	 	 				<div class='row' v-show="presp_count(prescriptiData)>0">
				 				<div class='col-md-12 text-center'>
				 					<span class='text-center'><b>Prescription</b></span>
				 				</div>
			 				</div>
							<prescriptionPrint :prescriptData="prescriptiData" :removeBtn="0"> </prescriptionPrint>
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
			 	<div v-if="(printType == 'opd_case')"  style="min-height: 350px;height: auto;margin-bottom:300px">
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
    	 	 			<div v-for="reportName in checkedreportList">
	    	 	 			<div v-if="(reportName == 'Advice + follow ups')">
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
	    	 	 			<div v-if="(reportName == 'Radiology')">
	    	 	 				<div class='row'>
				 					<div class='col-md-12 text-center'>
				 							<h4>Radiology Report</h4>
				 					</div>
				 				</div>
			 					<div class="row"  style="padding-left: 15px;padding-right:15px;">
        							<div class="col-md-12">
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
    	 	 					<div v-if="(reportName == 'Laboratory')">
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
									                    <!-- <th>Assigning Dr</th> -->
									                    <!-- <th>Action</th> -->
									                    </tr>
									                </thead>
									                <tbody>
									                    <tr v-if="res.removed == false" :id="res.tr_id" v-for="(res,index) in labReportData">
									                            <td>{{++index}}</td> 
									                            <td>{{res.text }}</td>
									                            <td>{{res.lab_date.time}}</td>
									                            <td>{{res.result}}</td>
									                           <!--  <td>{{res.assign}}</td> -->
									                            <!-- <td> <i class="fa fa-remove" @click="removeLaboratory(res.id)"></i></td> -->
									                    </tr>

									                </tbody>
									            </table>
									        </div>
									    </div>
									</div>
    	 	 					</div>
    	 	 					<div v-if="(reportName == 'Prescription')">
    	 	 			         	<div v-if="(prescriptiData != null)" >
    	 	 							<div class='row' v-show="(prescriptiData.length != '')">
				 							<div class='col-md-12 text-center'>
				 								<span class='text-center'><b>Prescription</b></span>
				 							</div>
			 							</div>
										<prescriptionPrint :prescriptData="prescriptiData" :removeBtn="0"> </prescriptionPrint>
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
	 					<div style="position:absolute;bottom:120px;width:100%height:50px;right:30px;">		 							<div class="row" style="padding-bottom: 10px;padding-right:20px;font-size: 15px;  ">
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
	import prescriptionPrint from './prescriptionPrint.vue';
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
				'checkedreportList': [],
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
         prescriptionPrint
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
			if(vm.checkedreportList != null){
				vm.reportListSelect = 0;
	       }else{
				vm.reportListSelect = 1;
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
			presp_count(array)
            {
                var vm=this;
                var array_presp=_.filter(array, ['remove', 'false']);
                vm.count_false=array_presp.length;
                return  vm.count_false;

            },
			 check: function(e) {
			 	let vm=this;
	     		 if (e.target.checked) {
	      		  vm.reportListSelect = 0;
	     		 }else{
	     		 	 vm.reportListSelect = 1;
	     		 }
	   		 },
			printReport(type){
				let vm = this;
					vm.printType = type;
				
				if(type == 'opd_case'){
						$('#generateModal').modal({ show: false})
						
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
							'followup' : this.followup,
							'checkedreportList' : this.checkedreportList
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
