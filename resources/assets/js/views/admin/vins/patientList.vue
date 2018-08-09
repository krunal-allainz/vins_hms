<template>
	<div class="col-lg-12 mb-3">
        <div class="card bg-success-card">
            <h4 class="card-header">
                <div>Patient List</div>
            </h4>
            <div class="card-body">
                <div data-v-744e717e="" class="card p-3">
                    <div data-v-744e717e="" class="table-header">
                        <h4 data-v-744e717e="" class="table-title text-center mt-3"></h4>
                    </div>
                  <!--  <div data-v-744e717e="" class="text-left">
                        <div data-v-744e717e="" id="search-input-container">
                            <label data-v-744e717e="">
                                <input data-v-744e717e="" type="search" id="search-input" placeholder="Search data" class="form-control mb-2">
                            </label>
                         <div data-v-744e717e="" class="actions float-right pr-4 mb-3">
                            <a data-v-744e717e="" href="javascript:undefined" title="export excel" class="btn btn-info">
                                <i data-v-744e717e="" class="fa fa-download"></i>
                            </a>
                        </div> 
                    </div>
                </div> --> 
                <div data-v-744e717e="" class="table-responsive">
                    <table data-v-744e717e="" class="table">
                        <thead data-v-744e717e="">
                        <tr data-v-744e717e="">
                            <th data-v-744e717e="" class="sortable sorting-asc" style="width: 200px;">
                                    First Name 
                                <i data-v-744e717e="" class="fa float-right  fa fa-angle-up"></i>
                            </th>
                            <th data-v-744e717e="" class="sortable" style="width: auto;">
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
                                Action
                                <i data-v-744e717e="" class="fa float-right"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody data-v-744e717e="">
                        <tr data-v-744e717e="" v-for="patientData in patientData.patient_list"><td data-v-744e717e="" class="">
                           {{ patientData.first_name}}
                        </td> <!---->
                        <td data-v-744e717e="" class="">
                           {{ patientData.last_name}}
                        </td> <!----><td data-v-744e717e="" class="numeric">
                            <span v-if="(patientData.gender == 'F')">Female</span>
                            <span v-if="(patientData.gender == 'M')">Male</span>
                        </td> <!----><td data-v-744e717e="" class="">
                            {{ patientData.uhid_no}}
                        </td> <!----><!----> <td data-v-744e717e="" class=""><!-- <i class="fa fa-pencil text-info mr-3 text-info mr-3"></i><i class="fa fa-trash text-danger"></i> -->
                            <i class="fa fa-eye text-info mr-3 text-info mr-3"  data-toggle="modal" data-target="#patientDetailModal" @click="getPatientInfo(patientData.id)"></i>
                            <patientDetailInfo ref="modal" :showPatientDetail="patientDetailInfo"></patientDetailInfo>
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
                        <span data-v-744e717e="">Showing </span> 1 - {{perPage}} of {{pagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               <!--  <div data-v-744e717e="" class="float-right">
                    <ul data-v-744e717e="" class="pagination">
                        <li data-v-744e717e="">
                            <a data-v-744e717e="" href="javascript:undefined" tabindex="0" class="btn link"  @click="getPatientsResult(pagination.prev_page_url)"
            :disabled="!pagination.prev_page_url">
                                <i data-v-744e717e="" class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li data-v-744e717e="">
                            <a data-v-744e717e="" href="javascript:undefined" tabindex="0" class="btn link">
                            <i data-v-744e717e="" class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
</div>
</template>
<script >
    import User from '../../../api/users.js';
    import patientDetailInfo from './patientDetailInfo.vue';
     export default {

         data() {
            return {
                'patientData' :{
                    'patient_list' : {}
                },
                'pagination': {},
                'perPage' : 5,
                'patientId' :'',
                'patientDetailInfo' : {},
            }
         },
          components: {
            patientDetailInfo
        },
         mounted(){
            let vm =this;
            vm.getPatientsResult();
         },
         methods: {
             close: function () {
              this.$emit('close');
              this.title = '';
              this.body = '';
            },
            getPatientsResult(page_url){
                var vm =this;
                 page_url = page_url || '/patient/getpatientlist';
                 let type = 'opd';
            let noofRecordperpage = this.perPage;
            User.getAllPatientList(page_url,type,noofRecordperpage).then(
                     (response) => {
                         vm.patientData.patient_list = response.data.data.data;
                         vm.makePagination(response.data.data);
                         },
                        (error) => {
                        },
                     );
            },
            makePagination: function(data){
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url,
                    total : data.total,
                    from : data.from
                }
                this.pagination = pagination;
                //this.$set('pagination', pagination)
            },
          getPatientInfo(patientInfo)   {
             var vm =this;
            vm.patientId = patientInfo;
            User.getPatientDetailInfo(vm.patientId).then(
              (response) => {
                if(response.data.code == 200){
                   this.patientDetailInfo = response.data.data;
                 }else{
                    toastr.error('Record not found', 'Error', {timeOut: 5000});
                 }
              },
              (error) => {
                 },
              );
          },
          setPerPage(e){
               this.getPatientsResult();
          }

         }
     }
</script>