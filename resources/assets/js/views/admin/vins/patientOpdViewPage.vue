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
                      <h5 class="mb-0" v-if="(showPatientDetail.opdDetails != null)">
                        <button class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           OPD Details
                         </button>
                     </h5>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                        <patientOPDDetailInfo :patientOPDDetail="showPatientDetail.opdDetails"></patientOPDDetailInfo> 
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
	    export default {
        props: ['patientId','opdId','showPatientDetail'],
        data() {
            return {
            }
        },
         components: {
            patientDetailView,
            patientOPDDetailInfo,
            patientCaseDetail
          },
         mounted(){

         },
         methods: {
           }
      }
</script>