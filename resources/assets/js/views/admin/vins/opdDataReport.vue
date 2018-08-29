<template>
	<div>
		<!-- lab report data start-->
			<labDataReport :labReportData="ReportPageData.labReportData"  :checkedreportList="checkedreportList" ></labDataReport>
		<!-- lab report data end-->

		<!-- Radiology report data start -->
			<radiologyDataReport :radiologyReportData="ReportPageData.radiologyReportData" :checkedreportList="checkedreportList"></radiologyDataReport>
		<!-- Radiology report data end -->
	</div>
</template>
<script>
	import labDataReport from './labDataReport.vue';
	import radiologyDataReport from './radiologyDataReport.vue';
		export default {
		props:['ReportPageData','checkedreportList'],
		components: {
		 labDataReport,
         radiologyDataReport,
		}

	}
</script>
