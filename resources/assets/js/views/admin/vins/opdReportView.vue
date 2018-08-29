<template>
	<div>
		<div id="printData" style="height: 1500px;min-height: 700px;">
			<div  id="printContent"></div>
			<div>
				<vinsletterheadheaderpart></vinsletterheadheaderpart>
				<!-- Patient Detail Start -->
				<patientDetailReport :patientDetail="patientDetail" :consult_dr="doctoreName" :todayDate="todayDate"  :department="department" :reg_no="regNo" :refer_dr="reference">
				</patientDetailReport>
				<!-- patient Detail Report End -->

				<!-- patient checkup detail start -->
			 	<patientCheckupReport :patientCheckupDetail="patientCheckupDetail">
			 	</patientCheckupReport>
			 	<!-- patient checkup detail end -->

			 	<!-- lab referal data start -->
			 	<labDataReport :labReferalData="ReportPageData.labReferalReportData"  :printType="printType" ></labDataReport>
			 	<!-- lab referal data end -->

			 	<!-- Radiology referal start -->
			 	<radiologyDataReport :ReportPageData="ReportPageData.radiologyReferalReportData" :checkedreportList="checkedreportList" ></radiologyDataReport>
			 	<!-- Radiology referal end -->

			 	<!-- cross referal report data start  -->
			 	<crossReportData :crossReportData="crossReportData" :checkedreportList="checkedreportList" ></crossReportData>
			 	<!-- cross referal  report data end-->

			 	<!-- opd data start -->
			 	<opdDataReport :ReportPageData="ReportPageData" :checkedreportList="checkedreportList"></opdDataReport>
			 	<!-- opd data end -->


				<vinsletterheadfooterpart></vinsletterheadfooterpart >
			</div>
		</div>
		
	</div>

</template>
<script>
	import vinsletterheadheaderpart from './vins_letter_header.vue';
	import vinsletterheadfooterpart from './vins_letter_footer.vue';
	import patientDetailReport from './patientDetailReport.vue';
	import patientCheckupReport from './patientCheckupReport.vue';
	import labDataReport from './labDataReport.vue';
	import radiologyDataReport from './radiologyDataReport.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionPrint.vue';
	import crossReportData from './crossReportData.vue';
	import opdDataReport from './opdDataReport.vue';
	import print from 'print-js'
	import _ from 'lodash';
	
	export default {
		props: ['opdId','patinetId','todayDate','patientDetail','patientCheckupDetail','department','regNo','doctoreName','signatureName','consultntId','reference','ReportPageData','printType','checkedreportList','reportListSelect'],
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
         labDataReport,
         radiologyDataReport,
         opdDataReport,
         crossReportData
       },
        methods: {
			GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		   	}
       }
   }
</script>