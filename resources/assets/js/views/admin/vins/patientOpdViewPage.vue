<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h3>Patient Details Page</h3>
				</div>
			</div>
		</div>
		<div>
			  <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Personal  Info
                        </button>
                      </h5>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                       <patientDetailView :patientinfo="showPatientDetail.patientDetail"></patientDetailView>
                        </div>
                    </div>
                    <h5 class="mb-0">
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                           Case Detail
                         </button>
                     </h5>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                        <patientCaseDetail :patientCaseDetail="showPatientDetail.patientCaseDetail"></patientCaseDetail>
                        </div>
                    </div>
                      <h5 class="mb-0" >
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           OPD Details
                         </button>
                     </h5>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                         <patientOPDDetailInfo :patientOPDDetail="showPatientDetail.opdOptionDetails"></patientOPDDetailInfo> 
                        </div>
                    </div>

                      <h5 class="mb-0" >
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Referal Data
                         </button>
                     </h5>
                     <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                        <labDataViewDetail :labReferalData="showPatientDetail.opdReferalLaboraryData"></labDataViewDetail>
                        <reportViewDetail :radiologyReferalReportData="showPatientDetail.opdReferalLaboraryData"></reportViewDetail>
                        </div>
                    </div>
                      <h5 class="mb-0" >
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Investigation 
                         </button>
                     </h5>
                     <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                        <labDataViewDetail :labReportData="showPatientDetail.opdLabData"></labDataViewDetail>
                        <reportViewDetail :radiologyReportData="showPatientDetail.opdRadiologyData"></reportViewDetail>
                        </div>
                    </div>
                      <h5 class="mb-0" >
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           Examination
                         </button>
                     </h5>
                     <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <examinationviewDetail :examination="showPatientDetail.opdExaminationData"></examinationviewDetail>
                        </div>
                    </div>
                    <h5 class="mb-0" >
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                           Prescription
                         </button>
                     </h5>
                     <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                        <patientPrescriptionDetail :prescriptData="showPatientDetail.opdprescriptionData"></patientPrescriptionDetail>
                        
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
	import patientDetailView from './patientDetailView.vue';
    import patientOPDDetailInfo from './patientOPDDetailInfo.vue';
    import patientCaseDetail from './patientCaseDetail.vue';
    import patientPrescriptionDetail from './patientPrescriptionDetail.vue';
    import examinationviewDetail from './examinationviewDetail.vue';
    import labDataViewDetail from './labDataViewDetail.vue';
    import reportViewDetail from './reportViewDetail.vue';
	    export default {
       // props: ['patientId','opdId','showPatientDetail'],
        data() {
            return {
                'patientId' : this.$store.state.Patient.patientId,
                'opdId' :this.$store.state.Patient.opdId, 
                'page' :this.$store.state.Patient.setPage,
                'showPatientDetail' : {
                    'opdDetails' : '',
                    'patientCaseDetail' : '',
                    'patientDetail' : '',
                    'opdOptionDetails' : '',
                    'opdReferalphysioData': '',
                    'opdExaminationData': '',
                    'opdReferalCrossData' : '',
                    'opdReferalLaboraryData' : '',
                    'opdReferalRadiologyData': '',
                    'opdLabData' : '',
                    'opdRadiologyData' : '',
                    'opdprescriptionData' : '',
                }
            }
        },
         components: {
            patientDetailView,
            patientOPDDetailInfo,
            patientCaseDetail,
            examinationviewDetail,
            labDataViewDetail,
            reportViewDetail,
            patientPrescriptionDetail
          },
         mounted(){
            var vm = this;
            if(vm.page == 'VIEW'){
                vm.getPatientInfo(vm.patientId,vm.opdId)
            }
         },
         methods: {

             getPatientInfo(patientInfo,opdId)   {
                var vm =this;
               // let opdId = opdId;
                vm.patientId = patientInfo;
                User.getPatientDetailAndOpdInfo(vm.patientId,vm.opdId).then(
                  (response) => { 
                    if(response.data.code == 200){
                        var vm = this;
                       this.showPatientDetail.patientDetail = response.data.data.patientDetail;
                       this.showPatientDetail.patientCaseDetail = response.data.data.caseDetail;
                       this.showPatientDetail.opdprescriptionData =  response.data.data.opdprescriptionData;
             

                      if(response.data.data.opdExaminationData){
                      vm.showPatientDetail.opdExaminationData = response.data.data.opdExaminationData;
                    }
                    if(response.data.data.opdReferalLaboraryData){
                      vm.showPatientDetail.labReferalReportData = response.data.data.opdReferalLaboraryData;
                    }
                    if(response.data.data.opdReferalRadiologyData){
                        vm.showPatientDetail.radiologyReferalReportData = response.data.data.opdReferalRadiologyData;
                    }
                    if(response.data.data.opdReferalCrossData){
                      vm.showPatientDetail.CrossReferalData = response.data.data.opdReferalCrossData;
                    }
                    if(response.data.data.opdLabData){
                      vm.showPatientDetail.labReportData = response.data.data.opdLabData;
                    }
                    if(response.data.data.opdRadiologyData){
                      vm.showPatientDetail.radiologyReportData = response.data.data.opdRadiologyData;
                    }
                       var opdDetailList = [];
                        $.each(response.data.data.opdOptionDetails, function(key, value) {
                          let advice = JSON.parse(value.advice);
                          let history  = JSON.parse(value.history) ;
                          let past_history  = JSON.parse(value.past_history) ;
                          let followup = value.follow_up;
                          let provisonal_daignostic = value.provisional_diagnosis;
                          opdDetailList.push({
                              advice:advice,
                              history:history,
                              past_history:past_history,
                              followup :followup,
                              provisonal_daignostic : provisonal_daignostic
                            });
                        });
                         this.showPatientDetail.opdOptionDetails = opdDetailList;

                     }else{
                        toastr.error('Record not found', 'Error', {timeOut: 5000});
                     }
                  },
                  (error) => {
                     },
                  );
              },
           }
      }
</script>