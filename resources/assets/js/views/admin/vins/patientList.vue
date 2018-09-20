<template>
	<div class="col-lg-12 mb-3">
        <div class="card bg-success-card">
            <h4 class="card-header">
                <div v-if="user_type == 3">Waiting patient list</div>
                <div v-else>Patient List</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3">
              <div data-v-744e717e="" class="table-header">
                  <h4 data-v-744e717e="" class="table-title text-center mt-3"></h4>
              </div>

              <div data-v-744e717e="" class="table-responsive">
                <table data-v-744e717e="" class="table">
                  <thead data-v-744e717e="">
                    <tr data-v-744e717e="">
                        <th data-v-744e717e="" class="sortable sorting-asc" style="width: 200px;">
                                First Name 
                        </th>
                        <th style="width: auto;">
                            Last Name
                             <i data-v-744e717e="" class="fa float-right"></i>
                         </th>
                         <th data-v-744e717e="" class="sortable" style="width: auto;">
                            Gender
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            UHID.No
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            Token No
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 3">
                            Consultant doctor
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 1">
                            Action
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="">
                    <tr data-v-744e717e=""     v-for="patientData in patientData.patient_list">
                      <td data-v-744e717e="" class="">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="">
                        {{ patientData.uhid_no}}
                      </td>
                      <td data-v-744e717e="" class="">
                        {{ patientData.token_id}}
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 3" v-text="consultantName(patientData.user_details)">
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 1">
                      <a :href="'/opd_form'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id)" title="opd form"></i></a>
                        <i class="fa fa-table text-info mr-3 text-info mr-3"  @click="getPatientOPDInfo(patientData.patient_id)" ></i>
                      
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div data-v-744e717e="" class="table-footer">
                <div data-v-744e717e="" class="datatable-length float-left pl-3">
                  <span data-v-744e717e="">Rows per page:</span>
                    <select data-v-744e717e="" class="custom-select" id="perPageNo"  @change="setPerPage" v-model="perPage">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3">
                        <span data-v-744e717e="">Showing </span> 1 - {{pagination.to}} of {{pagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
          </div>
        </div>
        <div class="card bg-success-card" v-if="user_type == 3">
            <h4 class="card-header">
               <div>Pending patient List</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3">
              <div data-v-744e717e="" class="table-header">
                  <h4 data-v-744e717e="" class="table-title text-center mt-3"></h4>
              </div>

              <div data-v-744e717e="" class="table-responsive">
                <table data-v-744e717e="" class="table">
                  <thead data-v-744e717e="">
                    <tr data-v-744e717e="">
                        <th data-v-744e717e="" class="sortable sorting-asc" style="width: 200px;">
                                First Name 
                        </th>
                        <th style="width: auto;">
                            Last Name
                             <i data-v-744e717e="" class="fa float-right"></i>
                         </th>
                         <th data-v-744e717e="" class="sortable" style="width: auto;">
                            Gender
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            UHID.No
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            Token No
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 3">
                            Consultant doctor
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 1">
                            Action
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="">
                    <tr data-v-744e717e="" v-for="patientData in patientDataPending.patient_list">
                      <td data-v-744e717e="" class="">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="">
                        {{ patientData.uhid_no}}
                      </td>
                      <td data-v-744e717e="" class="">
                        {{ patientData.token_id}}
                      </td>
                      
                      <td data-v-744e717e="" class="" v-text="consultantName(patientData.user_details)">
                       
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 1">
                      <a :href="'/opd_form'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id)" title="opd form"></i></a>
                      
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div data-v-744e717e="" class="table-footer">
                <div data-v-744e717e="" class="datatable-length float-left pl-3">
                  <span data-v-744e717e="">Rows per page:</span>
                    <select data-v-744e717e="" class="custom-select" id="perPageNo"  @change="setPerPage" v-model="perPage">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3">
                        <span data-v-744e717e="">Showing </span> 1 - {{pendingPagination.to}} of {{pendingPagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
          </div>
        </div>
         <!-- examine patient list -->
        <div class="card bg-success-card" v-if="user_type == 1">
            <h4 class="card-header">
               <div>Examined Patient List</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3">
              <div data-v-744e717e="" class="table-header">
                  <h4 data-v-744e717e="" class="table-title text-center mt-3"></h4>
              </div>

              <div data-v-744e717e="" class="table-responsive">
                <table data-v-744e717e="" class="table">
                  <thead data-v-744e717e="">
                    <tr data-v-744e717e="">
                        <th data-v-744e717e="" class="sortable sorting-asc" style="width: 200px;">
                                First Name 
                        </th>
                        <th style="width: auto;">
                            Last Name
                             <i data-v-744e717e="" class="fa float-right"></i>
                         </th>
                         <th data-v-744e717e="" class="sortable" style="width: auto;">
                            Gender
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            UHID.No
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            Token No
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 3">
                            Consultant doctor
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 1">
                            Action
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="">
                    <tr data-v-744e717e="" v-for="patientData in patientDataExamine.patient_list">
                      <td data-v-744e717e="" class="">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="">
                        {{ patientData.uhid_no}}
                      </td>
                      <td data-v-744e717e="" class="">
                        {{ patientData.token_id}}
                      </td>
                      
                      <td data-v-744e717e="" class="" v-if="user_type == 3" v-text="consultantName(patientData.user_details)">
                       
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 1">

                      <a :href="'/opd_form'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id)" title="opd form"></i></a>
                      
                      <i class="fa fa-table text-info mr-3 text-info mr-3"  @click="getPatientOPDInfo(patientData.patient_id)" ></i>
                     
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div data-v-744e717e="" class="table-footer">
                <div data-v-744e717e="" class="datatable-length float-left pl-3">
                  <span data-v-744e717e="">Rows per page:</span>
                    <select data-v-744e717e="" class="custom-select" id="perPageNo"  @change="setPerPage" v-model="perPage">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3">
                        <span data-v-744e717e="">Showing </span> 1 - {{examinePagination.to}} of {{examinePagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
          </div>
        </div>
         <!-- Report patient LIst -->
          <div class="card bg-success-card" v-if="user_type == 1">
            <h4 class="card-header">
               <div>Report Patient List</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3">
              <div data-v-744e717e="" class="table-header">
                  <h4 data-v-744e717e="" class="table-title text-center mt-3"></h4>
              </div>

              <div data-v-744e717e="" class="table-responsive">
                <table data-v-744e717e="" class="table">
                  <thead data-v-744e717e="">
                    <tr data-v-744e717e="">
                        <th data-v-744e717e="" class="sortable sorting-asc" style="width: 200px;">
                                First Name 
                        </th>
                        <th style="width: auto;">
                            Last Name
                             <i data-v-744e717e="" class="fa float-right"></i>
                         </th>
                         <th data-v-744e717e="" class="sortable" style="width: auto;">
                            Gender
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;">
                            UHID.No
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                       <!--  <th data-v-744e717e="" class="sortable" style="width: auto;">
                           Token No
                           <i data-v-744e717e="" class="fa float-right"></i>
                       </th> -->
                        
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 3">
                            Consultant doctor
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 1">
                            Action
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="">
                    <tr data-v-744e717e="" v-for="patientData in patientDataReport.patient_list">
                      <td data-v-744e717e="" class="">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="">
                        {{ patientData.uhid_no}}
                      </td>
                     <!--  <td data-v-744e717e="" class="">
                       {{ patientData.token_id}}
                     </td> -->
                      
                      <td data-v-744e717e="" class="" v-if="user_type == 3" v-text="consultantName(patientData.user_details)">
                       
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 1">

                      <!-- <a :href="'/opd_form'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id)" title="opd form"></i></a> -->
                      
                      <i class="fa fa-table text-info mr-3 text-info mr-3"  @click="getPatientOPDInfo(patientData.patient_id)" ></i>
                     
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div data-v-744e717e="" class="table-footer">
                <div data-v-744e717e="" class="datatable-length float-left pl-3">
                  <span data-v-744e717e="">Rows per page:</span>
                    <select data-v-744e717e="" class="custom-select" id="perPageNo"  @change="setPerPage" v-model="perPage">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3">
                        <span data-v-744e717e="">Showing </span> 1 - {{reportPagination.to}} of {{reportPagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
          </div>
        </div>
        <span v-if="open_opd_modal"> 
          <patientOPDInfoTable ref="modal" :patientDataID="pid"></patientOPDInfoTable>
        </span> 

</div>
</template>
<script >
    import User from '../../../api/users.js';
    import patientOPDInfoTable from './patientOPDInfoTable.vue';
     export default {
        props: {
            'action' : {
              'view' : 1 ,
              'select' : 0
            },
          },
         data() {
            return {
                'patientData' :{
                    'patient_list' : {}
                },
                'patientDataPending' :{
                    'patient_list' : {}
                },
                'patientDataExamine' :{
                    'patient_list' : {}
                },
                'patientDataReport' :{
                    'patient_list' : {}
                },
                'pagination': {},
                'pendingPagination': {},
                'examinePagination': {},
                'reportPagination': {},
                'perPage' : 5,
                'patientId' :'',
                'pid':'',
                'open_opd_modal':false,
                'doctore_Id' : this.$store.state.Users.userDetails.id,
                'user_type':this.$store.state.Users.userDetails.user_type,
            }
         },
          components: {
            patientOPDInfoTable
        },
         mounted(){
            let vm =this;
            if(vm.user_type == 3){
             vm.getPatientsResult('/patient/getpatientlist','waiting');
             vm.getPatientsResult('/patient/getpatientlist','pending');
            } 
            if(vm.user_type == 1){
              vm.getPatientsResult('/patient/getpatientlist','waiting');
              vm.getPatientsResult('/patient/getpatientlist','examine');
              vm.getPatientsResult('/patient/getpatientlist','reports');
            }
            else if(vm.user_type == 2){
              vm.getPatientsResult('/patient/getpatientlist','waiting');
            }
           // vm.newPatient();
         },
         created: function() {
             this.$root.$on('close_modal', this.close_modal);
        },
         methods: {
          close_modal()
          {
              this.pid='';
              this.open_opd_modal=false;
          },
          getPatientOPDInfo(p_id)
          {
              this.pid=p_id;
              this.open_opd_modal=true;
              setTimeout(function(){
                $('#patientOPDModal').modal('show');
              },500)
          },
          close: function () {
              this.$emit('close');
              this.title = '';
              this.body = '';
            },
            isWaiting(patient,type) {
              if(this.user_type == 3){
                if(patient.status == type){
                  return true;
                } else {
                  return false
                }
              }
              return true;
            },
            consultantName(doctor){
              if(doctor){
                return "Dr "+ doctor.first_name + ' ' + doctor.last_name;
              } 
              return "";
              // console.log(doctor,'doctor') ;
            },
            newPatient()
            {
                var vm =this;
                setInterval(function() {
                  if(vm.user_type == 3){
                   vm.getPatientsResult('/patient/getpatientlist','waiting');
                   vm.getPatientsResult('/patient/getpatientlist','pending');
                  } 
                  if(vm.user_type == 1){
                    vm.getPatientsResult('/patient/getpatientlist','waiting');
                    vm.getPatientsResult('/patient/getpatientlist','examine');
                    vm.getPatientsResult('/patient/getpatientlist','reports');
                  }
                  else if(vm.user_type == 2){
                   vm.getPatientsResult('/patient/getpatientlist','waiting');
                  }
                }, 8000);
            },
            getPatientsResult(page_url="/patient/getpatientlist",$status){
                var vm =this;
                 page_url = page_url ;
            let type = this.user_type;
            let noofRecordperpage = this.perPage;
            User.getAllPatientListByDoctoreIdAndPaggination(page_url,type,noofRecordperpage,vm.doctore_Id,$status).then(
                     (response) => {
                        if($status == 'waiting'){
                          vm.patientData.patient_list = response.data.data.data;
                        }if($status == 'examine'){
                          vm.patientDataExamine.patient_list = response.data.data.data;
                        } if($status == 'reports'){
                          vm.patientDataReport.patient_list = response.data.data.data;
                        }else {
                            vm.patientDataPending.patient_list = response.data.data.data;
                        }
                         
                          vm.makePagination(response.data.data,$status);
                         },
                        (error) => {
                        },
                     );
            },
            makePagination: function(data,status='waiting'){
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url,
                    total : data.total,
                    from : data.from,
                    to : data.to
                }
                if(status == 'waiting') {

                  this.pagination = pagination;
                }
                 if(status == 'examine') { 

                  this.examinePagination = pagination;
                }
                if(status == 'reports') {

                  this.reportPagination = pagination;
                }
                else {
                  this.pendingPagination = pagination;

                }
                //this.$set('pagination', pagination)
            },
          setPatientId(patientInfo){
             var vm =this;
            vm.patientId = patientInfo;
            vm.$store.dispatch('SetPatientId', vm.patientId);             // 
          },
          setPerPage(e){
            let vm =this;
                if(vm.user_type == 3){
                   vm.getPatientsResult('/patient/getpatientlist','waiting');
                   vm.getPatientsResult('/patient/getpatientlist','pending');
                  } 
                  if(vm.user_type == 1){
                    vm.getPatientsResult('/patient/getpatientlist','waiting');
                    vm.getPatientsResult('/patient/getpatientlist','examine');
                    vm.getPatientsResult('/patient/getpatientlist','examine');
                  }
                   else if(vm.user_type == 2) {
                   vm.getPatientsResult('/patient/getpatientlist','waiting');

                  }
          }

         }
     }
</script>
