<template>
	<div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'History' && ReportPageData.historyData.value != null)" >
		<historyReportData :historyData="ReportPageData.historyData"></historyReportData>
		</div>	
		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Past History' && ReportPageData.past_history.value != null)" >
			<pastHistoryReportData :past_history="ReportPageData.past_history"></pastHistoryReportData>
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Examination' && ReportPageData.examinationData != '')">
				<examinationReportData :examData="ReportPageData.examinationData" :checkedreportList="checkedreportList" :printType="printType"></examinationReportData>
		</div> 

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Investigation Lab' && ReportPageData.labReportData.length > 0)" >
		<!-- lab report data start -->
			<labDataReport :labReportData="ReportPageData.labReportData"  :checkedreportList="checkedreportList"   :printType="printType" :refferance="1"></labDataReport>
		<!-- lab report data end -->
		</div>
		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Investigation Radiology' && ReportPageData.radiologyReportData.length > 0)" >
		<!-- Radiology report data start -->
		
			<radiologyDataReport :radiologyReportData="ReportPageData.radiologyReportData" :checkedreportList="checkedreportList"  :printType="printType" :refferance="1"></radiologyDataReport>
		
		
		<!-- Radiology report data end -->
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Diagnosis' && ReportPageData.opdData.diagnosis != null)" >
				<diagnosisReportData :data="ReportPageData.opdData.diagnosis"></diagnosisReportData>
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Advice + follow ups' && ReportPageData.adviceData.value != null && ReportPageData.adviceData.value != '')" >
				<adviseReportdata :adviceData="ReportPageData.adviceData"></adviseReportdata>
		</div>

		 <div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Prescription' && ReportPageData.prescriptionReportData.length > 0)" >
			 	<!-- print Perceptions Report start -->
			 	<prescriptionPrint :prescriptData="ReportPageData.prescriptionReportData" :removeBtn="0" :checkedreportList="checkedreportList" :printType="printType"> </prescriptionPrint>
			 	<!-- print Perceptions Report end -->
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Referrals' && ReportPageData.CrossReferalData.length > 0)" >
			 	<!-- cross referal report data start  -->
			 	<crossReportData :CrossReferalData="ReportPageData.CrossReferalData" :checkedreportList="checkedreportList" :printType="printType"></crossReportData>
			
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Radiology' && ReportPageData.radiologyReferalReportData.length > 0)" >	 
			<!-- Radiology referal start -->
			 	<radiologyDataReport :radiologyReferalReportData="ReportPageData.radiologyReferalReportData" :printType="printType" ></radiologyDataReport>
			 	<!-- Radiology referal end -->
		</div>

		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Laboratory' && ReportPageData.labReferalReportData.length > 0)" >
				<!-- lab referal data start -->
			 	<labDataReport :labReferalData="ReportPageData.labReferalReportData"  :printType="printType" :checkedreportList="checkedreportList" :refferance="0"></labDataReport>
			 	<!-- lab referal data end -->
		</div>


		
		<div class="report_space" v-for="reportName in checkedreportList" v-show="(reportName == 'Advice + follow ups' && ReportPageData.opdData.follow_up != '')" >
				<followupReportData :followupData="ReportPageData.opdData.follow_up"></followupReportData>
		</div>

		

	</div>
</template>
<script>
	import labDataReport from './labDataReport.vue';
	import radiologyDataReport from './radiologyDataReport.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionReportData.vue';
	import crossReportData from './crossReportData.vue';
	import adviseReportdata from './adviseReportdata.vue';
	import followupReportData from './followupReportData.vue';
	import historyReportData from './historyReportData.vue';
	import pastHistoryReportData from './pastHistoryReportData.vue';
	import examinationReportData from './examinationOrgReportData.vue';
	import diagnosisReportData from './diagnosisReportData.vue';
	
		export default {
		props:['ReportPageData','checkedreportList','printType','adviceData','historyData','past_history'],
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
          examinationReportData,
          diagnosisReportData
		}

	}
</script>
