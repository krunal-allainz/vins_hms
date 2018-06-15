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
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" data-backdrop="static" href="#printModal">OPD Case</button>
    	 	 <!-- 	</div>
    	 	 	<div class="col-md-4">
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" href="#printModal"  @click="printPriscription()">Prescription</button>
    	 	 	</div>
    	 	 	<div class="col-md-4"> 
    	 	 		<button type="button" class="btn btn-primary btn-submit text-right " data-toggle="modal" href="#printModal"  @click="printReferal()">Referal</button>-->

    	 	 		<button type="button" class="btn btn-primary btn-submit text-right" @click = "GetSelectComponent('patients_receipt_form')">Print Receipts</button>
    	 	 	<!--</div> -->
    	 	 </div>
    	 </div>
    </form>
     <div id="printModal" class="modal fade">
     	<div class="modal-dialog" >
		 		<div class="modal-content" >
		 			<!--<div class="modal-header">
		 				
		 			</div>-->
		 			<div class="modal-body">
		 				<div id="printData">
			 					<div  id="printContent">
			 					</div>
			 					<vinsletterheadheaderpart></vinsletterheadheaderpart>
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
    	 	 			<div v-if="(prescriptiData !== null)">
    	 	 				<div class='col-md-6 text-left'>
				 				<span class='text-left'><b>prescription :-</b></span>
				 			</div>
							<div class="table-responsive">
							        <table class="table" id="prescription_list">
							            <thead>
							            <tr>
							                <th width="8%">#</th>
							                <th>Name</th>
							                <th class="text-center">Quntity</th>
							                <th class="text-center">Unit</th>
							                <th class="text-center">Time For Medicine</th>
							            </tr>
							            </thead>
							            <tbody>
							             <tr  v-for="(res,index) in prescriptiData">
							                <td>{{++index}}</td>
							                <td>{{res.Prescription }}</td>
							                <td class="text-center">{{res.quntity}}</td>
							                <td class="text-center">{{res.unit}}</td>
							                <td class="text-center">{{res.time}}</td>
							              </tr>

							            </tbody>
							        </table>
							      </div>
       
    	 	 			</div>
    	 	 			<br/><br/>
    	 	 			<div v-if="(referalType !== null)"> 
				 			<div class='col-md-6 text-left'>
				 				<span class='text-left'><b>Referal :-</b></span>
				 			</div>
				 		</div>
			 			<div v-if="(referalType == 'cross')">
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
			 			
			 		<div  v-if="(referalType == 'radiology')" class="col-md-12 text-left">	
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
			                  <tr>
			                      <td>{{radiologyData.type}}</td>
			                      <td>{{radiologyData.bodyPart}}</td>
			                      <td>{{radiologyData.qualifier}}</td>
			                      <td>{{radiologyData.special_request}}</td>
			                      <!-- <td>{{res.textData | strLimit}}</td> -->
			                      <!-- <td><a href="javascript:void(0)" @click="viewGallery(res.id)" class="red">View</a></td> -->
			                      <!-- <td><img :src="res.imgData" height="100" width="100" /></td> -->
			                      
			                  </tr>
			                  
			                  </tbody>
			            </table>

		 			</div>
		 			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		 			<div class="row" style="padding-bottom: 10px;padding-right:20px;font-size: 15px;  ">
            				<div class='col-md-12 text-right'>
				 				<span class='text-right'><b>Consultant's Signature</b></span>
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
				'adviceDoctor':'Dr. '+this.$store.state.Users.userDetails.first_name+' '+this.$store.state.Users.userDetails.last_name,
				'referalType':this.$store.state.Patient.opdData.referral,
				'crossType':this.$store.state.Patient.opdData.cross,
				'radiologyData':this.$store.state.Patient.opd_resultData,
				'printType':'',
				'todayDate' : formattedDate,
				'crossSelectedValue' : '',
				'adviceScribleValue' : '',
				'advice' : this.$store.state.Patient.opdData.advice,
				'prescriptiData' : this.$store.state.Patient.opdData.prescriptiData,

			}
		},
		components: {
         vinsletterheadheaderpart,
         vinsletterheadfooterpart,
       },
       mounted(){
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

       },
		methods: {

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
					        var printWindow = window.open(windowUrl, windowName, 'left=10,top=10,width=0, height=0');
					        printWindow.document.write(printContent);	

				        printWindow.document.close();	
				        printWindow.focus();	
				        printWindow.print();	
	
				        printWindow.close();	
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
