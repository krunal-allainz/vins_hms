<template>
	<div>
		<div v-if="(printType == 'print_perceptions')" 	>
			<div class="row">
				<provisionalDiagnosticReportData :data="ReportPageData.opdData.provisional_diagnosis"></provisionalDiagnosticReportData>
			</div>
			
			<div v-if="presp_count(prescriptData)>0" >
							<prescriptionPrint :prescriptData="prescriptData" :removeBtn="0"> </prescriptionPrint>
			</div>
			<div>
				<adviseReportdata :adviceData="adviceData"></adviseReportdata>
			</div>		
				<crossReportData :CrossReferalData="ReportPageData.CrossReferalData" ></crossReportData>
			<div>
				<followupReportData :followupData="ReportPageData.opdData.follow_up"></followupReportData>
			</div>

		</div>
	</div>
</template>
<script>
	import provisionalDiagnosticReportData from './provisionalDiagnosticReportData.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionPrint.vue';
	import crossReportData from './crossReportData.vue';
	import adviseReportdata from './adviseReportdata.vue';
	import followupReportData from './followupReportData.vue';
	export default {
		props:['ReportPageData','prescriptData','checkedreportList','printType','adviceData'],
		components: {
         provisionalDiagnosticReportData,
          prescriptionPrint,
          crossReportData,
          adviseReportdata,
          followupReportData

       },
       methods: {
       	presp_count(array)
            {
                var vm=this;
                var array_presp=_.filter(array, ['remove', 'false']);
                vm.count_false=array_presp.length;
                return  vm.count_false;

            },
       }
	}
</script>