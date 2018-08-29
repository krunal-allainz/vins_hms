<template>
	<div>
		<div id="printData" style="height: 1500px;min-height: 700px;">
			 			<div  id="printContent"></div>
			<div>
				<vinsletterheadheaderpart></vinsletterheadheaderpart>
				<patientDetailReport :patientDetail="patientDetail" :consult_dr="doctoreName" :todayDate="todayDate"  :department="department" :reg_no="regNo" :refer_dr="reference">
				</patientDetailReport>
			 	<patientCheckupReport :patientCheckupDetail="patientCheckupDetail">
			 	</patientCheckupReport>
				<vinsletterheadfooterpart></vinsletterheadfooterpart>
			</div>
		</div>
		
	</div>

</template>
<script>
	import vinsletterheadheaderpart from './vins_letter_header.vue';
	import vinsletterheadfooterpart from './vins_letter_footer.vue';
	import patientDetailReport from './patientDetailReport.vue';
	import patientCheckupReport from './patientCheckupReport.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionPrint.vue';
	import print from 'print-js'
	import _ from 'lodash';
	
	export default {
		props: ['opdId','patinetId','todayDate','patientDetail','patientCheckupDetail','department','regNo','doctoreName','signatureName','consultntId','reference'],
		data() {
			return{
			
		      }
		},
		 mounted(){
       	let vm =this;
       },
		components: {
         vinsletterheadheaderpart,
         vinsletterheadfooterpart,
         prescriptionPrint,
         patientDetailReport,
         patientCheckupReport,
       },
        methods: {
			GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		   	}
       }
   }
</script>