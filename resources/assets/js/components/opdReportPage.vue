<template>
	<div class="container">
		<div class="page-header">
      		<div class="row text-center">
        		<div class="col-md-12">
          			<h1>Report</h1>
        		</div>
      		</div>
    	</div>
    	<div class="page-body">
    		<form action="" method="post">
    			<div class="row form-group text-center">
    	 	 		<div class="col-md-12">
    	 	 			<button type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#generateModal"  @click="printReport('generate_case')" v-if="(opdReport == false)"> Print Report</button>
    	 	 			<button type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal"  @click = "printReport('print_perceptions')"  id="opd_case_btn">Print Perceptions</button>
    	 	 			<button  v-if="(labReportData)" type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal" @click = "printReport('lab')" >Lab Report</button>
    	 	 			<button  v-if="(radioReportData)" type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal" @click = "printReport('radiology')" >Radiology Report</button>
    	 	 			<button v-if="(prescriptiData)" type="button" class="btn btn-primary btn-submit text-right" data-toggle="modal" data-backdrop="static" href="#printModal" @click = "printReport('prescription')">Print Prescription</button>
    	 	 		</div>
    	 	 	</div>
    		</form>
    		<div id="printModal" class="modal fade">
     			<div class="modal-dialog" >
		 			<div class="modal-content" >
		 				<!--<div class="modal-header"></div>-->
		 				<div class="modal-body">
		 					<div id="printData" style="height: 1500px;min-height: 700px;">
			 				<div  id="printContent"></div>
    							<opdReportView :opdId="opdId" :patinetId="patinetId" :todayDate="todayDate"></opdReportView>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
	</div>
</template>
<script>
	import User from '../../../api/users.js';
	import moment from 'moment';
	import opdReportView from './opdReportView.vue';
	var myDate = new Date();
	var month = ('0' + (myDate.getMonth() + 1)).slice(-2);
	var date = ('0' + myDate.getDate()).slice(-2);
	var year = myDate.getFullYear();
	var formattedDate = date + '/' + month + '/' + year ;
	export default {
		data() {
			return{
				'todayDate' : formattedDate,
				'opdId' : 8,
				'patinetId' : this.$store.state.Patient.patientId,
			}
		},
       mounted(){
       	let vm =this;
       },
       components: {
         opdReportView,
     }
      
	}
</script>