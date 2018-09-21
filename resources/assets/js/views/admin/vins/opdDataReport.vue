<template>
	<div>
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Advice + follow ups')" >
				<adviseReportdata :adviceData="ReportPageData.adviceData"></adviseReportdata>
				<followupReportData :followupData="ReportPageData.opdData.follow_up"></followupReportData>
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Radiology')" >	 
			<!-- Radiology referal start -->
			 	<radiologyDataReport :radiologyReferalReportData="ReportPageData.radiologyReferalReportData" :printType="printType" ></radiologyDataReport>
			 	<!-- Radiology referal end -->
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Laboratory')" >
				<!-- lab referal data start -->
			 	<labDataReport :labReferalData="ReportPageData.labReferalReportData"  :printType="printType" :checkedreportList="checkedreportList" :refferance="0"></labDataReport>
			 	<!-- lab referal data end -->
		</div>

		<!-- <div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Prescription')" >
			 	print Perceptions Report start
			 	<prescriptionPrint :prescriptData="prescriptiData" :removeBtn="0" :checkedreportList="checkedreportList" :printType="printType"> </prescriptionPrint>
			 	print Perceptions Report end
		</div>
		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'History')" >
			<historyReportData :historyData="ReportPageData.historyData"></historyReportData>
		</div>	
		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Past History')" >
			<pastHistoryReportData :past_history="ReportPageData.past_history"></pastHistoryReportData>
		</div>
		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Investigation Lab')" >
		lab report data start
			<labDataReport :labReportData="ReportPageData.labReportData"  :checkedreportList="checkedreportList"   :printType="printType" :refferance="1"></labDataReport>
		lab report data end
		</div>
		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Investigation Radiology')" >
		Radiology report data start
			<radiologyDataReport :radiologyReportData="ReportPageData.radiologyReportData" :checkedreportList="checkedreportList"  :printType="printType"></radiologyDataReport>
		Radiology report data end
		</div>
		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Examination')" >
				<examinationReportData :examData="ReportPageData.examinationData" :checkedreportList="checkedreportList" :printType="printType"></examinationReportData>
		</div> -->

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Referrals')" >
			 	<!-- cross referal report data start  -->
			 	<crossReportData :CrossReferalData="ReportPageData.CrossReferalData" :checkedreportList="checkedreportList" :printType="printType"></crossReportData>
			 	<!-- cross referal  report data end-->
		</div>

		
		
			
	</div>
</template>
<script>
	import labDataReport from './labDataReport.vue';
	import radiologyDataReport from './radiologyDataReport.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionPrint.vue';
	import crossReportData from './crossReportData.vue';
	import adviseReportdata from './adviseReportdata.vue';
	import followupReportData from './followupReportData.vue';
	import historyReportData from './historyReportData.vue';
	import pastHistoryReportData from './pastHistoryReportData.vue';
	import examinationReportData from './examinationOrgReportData.vue';
	
		export default {
		props:['ReportPageData','checkedreportList','printType','prescriptiData','adviceData','historyData','past_history'],
		components: {
		 labDataReport,
         radiologyDataReport,
         crossReportData,
         prescriptionData,
         prescriptionPrint,
          adviseReportdata,
          followupReportData,
          historyReportData,
          pastHistoryReportData,
          examinationReportData
		}

	}
</script>
