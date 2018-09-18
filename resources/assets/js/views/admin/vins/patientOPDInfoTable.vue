<template>
    <!-- Modal -->
    <div class="modal fade" id="patientOPDModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Patient OPD Detail</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="getClose()">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
             <div id="accordion">
                <div class="">
                    <div class="col-md-12" v-if="opdPatientData.length>0">
                     <card title="<i class='ti-layout-cta-left'></i> OPD Details"  class="filterable">
                       <div class="table-responsive">
                          <table class="table table-striped table-bordered" id="">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Patient Name</th>
                                  <th>UHID No</th>
                                  <th>Token No</th>
                                  <th>Last Visit</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                <tr v-for="(opd_data, index) in opdPatientData">
                                    <td>{{++index}}</td>
                                    <td>{{opd_data.first_name}} {{opd_data.last_name}}</td>
                                    <td>{{opd_data.uhid_no}}</td>
                                    <td>{{opd_data.token_no}}</td>
                                    <td>{{opd_data.last_visit}}</td>
                                    <td>
                                      <i class="fa fa-eye" data-toggle="modal" data-target="#patientDetailModal" @click="getPatientInfo(opd_data.patient_id)"></i>
                                      <patientDetailInfo ref="modal" :showPatientDetail="patientDetailInfo"></patientDetailInfo>
                                      <a  v-if="opd_data.t_status=='examine' || opd_data.is_report==1" :href="'/opd_form'"> <i class="fa fa-pencil" @click="setPatientInfo(opd_data.patient_id,opd_data.opd_id)" title="opd form"></i></a>
                                    </td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                      </card>
                  </div>
            </div>
        </div>
        </div>  
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="getClose()">Close</button>
        </div>
        </div>
    </div>
    </div>
</template>
<script >
    import User from '../../../api/users.js';
    import card from "./card.vue";
    import patientDetailInfo from './patientDetailInfo.vue';
     export default {
        
         data() {
            return {
              'doctore_Id' : this.$store.state.Users.userDetails.id,
              'user_type':this.$store.state.Users.userDetails.user_type,
              'opdPatientData':{},
              'patientDetailInfo' : {
                  'patientDetail' : '',
                  'opdDetails' : '',
                  'patientCaseDetail' : ''
              },
              'patientId':''

            }
         },
         props: ['patientDataID'],
        components: {
            card,
            patientDetailInfo
        },
        mounted(){
            let vm =this;
            vm.getOPDDetailsByPatientID(vm.patientDataID);
         },
         methods: {
          getClose()
          {
              var vm =this;
              vm.$root.$emit('close_modal');
          },
            getOPDDetailsByPatientID(pid)
            {
                let vm =this;
                User.getOPDDetailsByPatient(pid).then(
                   (response) => {
                      if(response.data.code==200)
                      {
                          vm.opdPatientData=response.data.data;
                          
                          //$('#patientOPDModal').modal('show');
                      }
                        
                        
                       },
                      (error) => {
                      },
                   );
            },
             getPatientInfo(patientInfo)   {
                var vm =this;
                vm.patientId = patientInfo;
                User.getPatientDetailInfo(vm.patientId).then(
                  (response) => { 
                    if(response.data.code == 200){
                       this.patientDetailInfo.patientDetail = response.data.data.patientDetail;
                       this.patientDetailInfo.patientCaseDetail = response.data.data.caseDetail;
                       var opdDetailList = [];
                        $.each(response.data.data.opdDetails, function(key, value) {
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
                         this.patientDetailInfo.opdDetails = opdDetailList;

                     }else{
                        toastr.error('Record not found', 'Error', {timeOut: 5000});
                     }
                  },
                  (error) => {
                     },
                  );
              },
              setPatientInfo(patient_id,opd_id){
                var vm =this;
                vm.$store.dispatch('SetPatientId', patient_id);
                vm.$store.dispatch('SetOpdId', opd_id);
                vm.$store.dispatch('SetPage', 'EDIT');
              },
        }
     }
</script>
<style>
.fa {cursor:pointer}
</style>