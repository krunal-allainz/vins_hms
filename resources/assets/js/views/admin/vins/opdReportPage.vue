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
    	 	 	</div>s
    		</form>
    	</div>
	</div>
</template>
<script>
	import User from '../../../api/users.js';
	import vinsletterheadheaderpart from './vins_letter_header.vue';
	import vinsletterheadfooterpart from './vins_letter_footer.vue';
	import patientDetailReport from './patientDetailReport.vue';
	import patientCheckupReport from './patientCheckupReport.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionPrint.vue';
	import moment from 'moment';
	import print from 'print-js'
	import _ from 'lodash';
	var myDate = new Date();
	var month = ('0' + (myDate.getMonth() + 1)).slice(-2);
	var date = ('0' + myDate.getDate()).slice(-2);
	var year = myDate.getFullYear();
	var formattedDate = date + '/' + month + '/' + year ;
	export default {
		data() {
			return{
				'opdId' : 8,
			}
		},
		components: {
         vinsletterheadheaderpart,
         vinsletterheadfooterpart,
         prescriptionPrint,
         patientDetailReport,
         patientCheckupReport,
       },
       mounted(){

       },
       methods: {
       		User.getPatientOpdData().then(
       			(response) => {
       			},
       			(error) => {
       			}
       			);
       		}
       }
	}
</script>