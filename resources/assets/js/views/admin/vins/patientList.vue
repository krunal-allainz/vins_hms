<template>
	<div class="col-lg-12 mb-3">
        <div class="card bg-success-card">
            <h4 class="card-header">
                <div v-if="user_type == 3">Waiting patient list</div>
                <div v-else>Waiting patient list</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3" v-if="patientData.patient_list.length>0">
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
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 1 || user_type == 2">
                            Action
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 3">
                            Change Status
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="" v-for="patientData in patientData.patient_list">
                    
                    <tr data-v-744e717e="" >
                        
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric text-uppercase">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.uhid_no}}
                      </td>
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.token_id}}
                      </td>
                      <td data-v-744e717e="" class="text-uppercase" v-if="user_type == 3" v-text="consultantName(patientData.user_details)">
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 1">
                          <a :href="'/opd_form'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id,'PLIST')" title="opd form"></i></a>
                          <i class="fa fa-table text-info mr-3 text-info mr-3"  @click="getPatientOPDInfo(patientData.patient_id)" ></i>
                      </td>
                       <td data-v-744e717e="" class="" v-if="user_type == 2">
                           <a :href="'/vitalsinfo'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id,'VITALS')" title="Vitals Info"></i></a>
                       </td>
                      <td v-if="user_type == 3"><button value="pending" @click="statusChange('pending',patientData.patient_id)" class="btn btn-primary btn-danger">Pending</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div data-v-744e717e="" class="table-footer">
                <div data-v-744e717e="" class="datatable-length float-left pl-3">
                  <span data-v-744e717e="">Rows per page:</span>
                    <select data-v-744e717e="" class="custom-select" id="perPageNo"  @change="setPerPageWaiting" v-model="perPage">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                    <div data-v-744e717e="" class="datatable-info  pb-2 mt-6">
                      <ul class="pagination">
                         <li> <a href="javascript:void(0)"  @click="getPatientsResult('/patient/getpatientlist?page=1','waiting')" class="previous" v-if="pagination.current_page!=1">&laquo; First</a></li>
                        <li> <a href="javascript:void(0)"  @click="getPatientsResult(pagination.prev_page_url,'waiting')" class="previous" v-if="pagination.current_page!=1">&laquo; Prev</a></li>
                       <!--  <li  v-for="record_pagination,index in pagination.last_page" v-if="index<=2"><a v-bind:class="[pagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'waiting')">{{index}}</a></li> -->
                        <li v-for="record_pagination,index in pagination.last_page" >
                                <span v-if="Math.abs(record_pagination - pagination.current_page)<3">
                                    <a v-bind:class="[pagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'waiting')">{{index}}</a>
                                </span>
                              </li> 
                        <li><a href="javascript:void(0)"  v-if="pagination.current_page!=pagination.last_page" @click="getPatientsResult(pagination.next_page_url,'waiting')" class="next">Next &raquo;</a></li>
                        <li><a href="javascript:void(0)"  v-if="pagination.current_page!=pagination.last_page" @click="getPatientsResult('/patient/getpatientlist?page='+pagination.last_page,'waiting')" class="next">Last &raquo;</a></li>
                      </ul>
                    </div>
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(pagination.total>0)">
                        <span data-v-744e717e="">Showing </span> {{pagination.from}} - {{pagination.to}} of {{pagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
            <div v-else>
              <h6 class="card-header">
               <div>No records available</div>
            </h6>
            </div>
          </div>
        </div>
       
        <div class="card bg-success-card" v-if="user_type == 3">
            <h4 class="card-header">
               <div>Pending patient list</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3" v-if="patientDataPending.patient_list.length>0">
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
                         <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 3">
                            Change Status
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="">
                    <tr data-v-744e717e="" v-for="patientData in patientDataPending.patient_list">
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric text-uppercase">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.uhid_no}}
                      </td>
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.token_id}}
                      </td>
                      
                      <td data-v-744e717e="" class="" v-text="consultantName(patientData.user_details)">
                       
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 1">
                      <a :href="'/opd_form'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id,'PLIST')" title="opd form"></i></a>
                      
                      </td>
                        <td v-if="user_type == 3"><button value="waiting" @click="statusChange('waiting',patientData.patient_id)" class="btn btn-warning">Waiting</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div data-v-744e717e="" class="table-footer">
                <div data-v-744e717e="" class="datatable-length float-left pl-3" v-show="(pendingPagination.total>0)">
                  <span data-v-744e717e="">Rows per page:</span>
                    <select data-v-744e717e="" class="custom-select" id="perPagePendingNo"  @change="setPerPagePending" v-model="perPagePending">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                    <div data-v-744e717e="" class="datatable-info  pb-2 mt-6">
                      <ul class="pagination">
                        <li> <a href="javascript:void(0)"  @click="getPatientsResult('/patient/getpatientlist?page=1','pending')" class="previous" v-if="pendingPagination.current_page!=1">&laquo; First</a></li>
                        <li> <a href="javascript:void(0)"  @click="getPatientsResult(pendingPagination.prev_page_url,'pending')" class="previous" v-if="pendingPagination.current_page!=1">&laquo; Prev</a></li>
                       <!--  <li  v-for="record_pagination,index in pendingPagination.last_page" v-if="index<=2"><a v-bind:class="[pendingPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="√('/patient/getpatientlist?page='+index,'pending')">{{index}}</a></li> -->
                        <li v-for="record_pagination,index in pendingPagination.last_page" >
                                <span v-if="Math.abs(record_pagination - pendingPagination.current_page)<3">
                                    <a v-bind:class="[pendingPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'pending')">{{index}}</a>
                                </span>
                              </li> 
                        <li><a href="javascript:void(0)"  v-if="pendingPagination.current_page!=pendingPagination.last_page" @click="getPatientsResult(pendingPagination.next_page_url,'pending')" class="next">Next &raquo;</a></li>
                         <li><a href="javascript:void(0)"  v-if="pendingPagination.current_page!=pendingPagination.last_page" @click="getPatientsResult('/patient/getpatientlist?page='+pendingPagination.last_page,'pending')" class="next">Last &raquo;</a></li>
                      </ul>
                    </div>
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(pendingPagination.total>0)">
                        <span data-v-744e717e="">Showing </span> {{pendingPagination.from}}  - {{pendingPagination.to}} of {{pendingPagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
            <div v-else>
              <h6 class="card-header">
               <div>No records available</div>
            </h6>
            </div>
          </div>
        </div>
        
        <!-- vital patient list -->
          <div class="card bg-success-card" v-if="user_type == 3">
            <h4 class="card-header">
               <div>Vital patient list</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3" v-if="patientDataVital.patient_list.length>0">
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
                        <th data-v-744e717e="" class="sortable" style="width: auto;" v-if="user_type == 1 || user_type == 2">
                            Action
                            <i data-v-744e717e="" class="fa float-right"></i>
                        </th>
                    </tr>
                  </thead>
                  <tbody data-v-744e717e="">
                    <tr data-v-744e717e="" v-for="patientData in patientDataVital.patient_list">
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric text-uppercase">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.uhid_no}}
                      </td>
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.token_id}}
                      </td>
                      
                      <td data-v-744e717e="" class="" v-text="consultantName(patientData.user_details)">
                       
                      </td>
                      <td data-v-744e717e="" class="" v-if="user_type == 1">
                      <a :href="'/opd_form'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id,'PLIST')" title="opd form"></i></a>
                      
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div data-v-744e717e="" class="table-footer">
                <div data-v-744e717e="" class="datatable-length float-left pl-3">
                  <span data-v-744e717e="">Rows per page:</span>
                    <select data-v-744e717e="" class="custom-select" id="perPageVitalNo"  @change="setPerPageVitals" v-model="perPageVital">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                    <div data-v-744e717e="" class="datatable-info  pb-2 mt-6">
                      <ul class="pagination">
                          <li> <a href="javascript:void(0)"  @click="getPatientsResult('/patient/getpatientlist?page=1','vital')" class="previous" v-if="vitalPagination.current_page!=1">&laquo; First</a></li>
                        <li> <a href="javascript:void(0)"  @click="getPatientsResult(vitalPagination.prev_page_url,'vital')" class="previous" v-if="vitalPagination.current_page!=1">&laquo; Prev</a></li>
                       <!--  <li  v-for="record_pagination,index in vitalPagination.last_page" v-if="index<=2"><a v-bind:class="[vitalPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'vital')">{{index}}</a></li> -->
                        <li v-for="record_pagination,index in vitalPagination.last_page" >
                                <span v-if="Math.abs(record_pagination - vitalPagination.current_page)<3">
                                    <a v-bind:class="[vitalPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'vital')">{{index}}</a>
                                </span>
                              </li> 
                        <li><a href="javascript:void(0)"  v-if="vitalPagination.current_page!=vitalPagination.last_page" @click="getPatientsResult(vitalPagination.next_page_url,'vital')" class="next">Next &raquo;</a></li>
                         <li><a href="javascript:void(0)"  v-if="vitalPagination.current_page!=vitalPagination.last_page" @click="getPatientsResult('/patient/getpatientlist?page='+vitalPagination.last_page,'vital')" class="next">Last &raquo;</a></li>
                      </ul>
                    </div>
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(vitalPagination.total>0)">
                        <span data-v-744e717e="">Showing </span> {{vitalPagination.from}} - {{vitalPagination.to}} of {{vitalPagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
            <div v-else>
              <h6 class="card-header">
               <div>No records available</div>
            </h6>
            </div>
          </div>
        </div>
         <!-- examine patient list -->
        <div class="card bg-success-card" v-if="user_type == 1">
            <h4 class="card-header">
               <div>Examined patient list</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3" v-if="patientDataExamine.patient_list.length>0">
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
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric text-uppercase">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.uhid_no}}
                      </td>
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.token_id}}
                      </td>
                      
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
                    <select data-v-744e717e="" class="custom-select" id="perPageExamineNo"  @change="setPerPageExamine" v-model="perPageExamine">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select> 
                    <div data-v-744e717e="" class="datatable-info  pb-2 mt-6">
                      <ul class="pagination">
                         <li> <a href="javascript:void(0)"  @click="getPatientsResult('/patient/getpatientlist?page=1','examine')" class="previous" v-if="examinePagination.current_page!=1">&laquo; First</a></li>
                        <li> <a href="javascript:void(0)"  @click="getPatientsResult(examinePagination.prev_page_url,'examine')" class="previous" v-if="examinePagination.current_page!=1">&laquo; Prev</a></li>
                       <!--  <li  v-for="record_pagination,index in examinePagination.last_page" v-if="index<=2"><a v-bind:class="[examinePagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'examine')">{{index}}</a></li> -->
                        <li v-for="record_pagination,index in examinePagination.last_page" >
                                <span v-if="Math.abs(record_pagination - examinePagination.current_page)<3">
                                    <a v-bind:class="[examinePagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'examine')">{{index}}</a>
                                </span>
                        </li> 
                        <li><a href="javascript:void(0)"  v-if="examinePagination.current_page!=examinePagination.last_page" @click="getPatientsResult(examinePagination.next_page_url,'examine')" class="next">Next &raquo;</a></li>
                        <li><a href="javascript:void(0)"  v-if="examinePagination.current_page!=examinePagination.last_page" @click="getPatientsResult('/patient/getpatientlist?page='+examinePagination.last_page,'examine')" class="next">Last &raquo;</a></li>
                      </ul>
                    </div>
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(examinePagination.total>0)">
                        <span data-v-744e717e="">Showing </span> {{examinePagination.from}} - {{examinePagination.to}} of {{examinePagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
            <div v-else>
              <h6 class="card-header">
               <div>No records available</div>
            </h6>
            </div>
          </div>
        </div>
         <!-- Report patient LIst -->
          <div class="card bg-success-card" v-if="user_type == 1">
            <h4 class="card-header">
               <div>Report patient list</div>
            </h4>
          <div class="card-body">
            <div data-v-744e717e="" class="card p-3" v-if="patientDataReport.patient_list.length>0">
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
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.first_name}}
                      </td> <!---->
                      <td data-v-744e717e="" class="text-uppercase">
                       {{ patientData.last_name}}
                      </td>
                      <td data-v-744e717e="" class="numeric text-uppercase">
                        <span v-if="(patientData.gender == 'F')">Female</span>
                        <span v-if="(patientData.gender == 'M')">Male</span>
                      </td> 
                      <td data-v-744e717e="" class="text-uppercase">
                        {{ patientData.uhid_no}}
                      </td>
                     <!--  <td data-v-744e717e="" class="">
                       {{ patientData.token_id}}
                     </td> -->
                      
                      <td data-v-744e717e="" class="text-uppercase" v-if="user_type == 3" v-text="consultantName(patientData.user_details)">
                       
                      </td>
                      <td data-v-744e717e="" class="text-uppercase" v-if="user_type == 1">

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
                    <select data-v-744e717e="" class="custom-select" id="perPageReportNo"  @change="setPerPageReport" v-model="perPageReport">
                    <option data-v-744e717e="" value="2">2</option>
                      <option data-v-744e717e="" value="5">5</option>
                      <option data-v-744e717e="" value="10">10</option>
                      <option data-v-744e717e="" value="20">20</option>
                      <option data-v-744e717e="" value="50">50</option>
                   <!--     <option data-v-744e717e="" value="-1">All</option> -->
                    </select>
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-6">
                      <ul class="pagination">
                        <li> <a href="javascript:void(0)"  @click="getPatientsResult('/patient/getpatientlist?page=1','reports')" class="previous" v-if="reportPagination.current_page!=1">&laquo; First</a></li>
                        <li> <a href="javascript:void(0)"  @click="getPatientsResult(reportPagination.prev_page_url,'reports')" class="previous" v-if="reportPagination.current_page!=1">&laquo; Prev</a></li>
                        <!-- <li  v-for="record_pagination,index in reportPagination.last_page" v-if="index<=2"><a v-bind:class="[reportPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'reports')">{{index}}</a></li> -->
                         <li v-for="record_pagination,index in reportPagination.last_page" >
                                <span v-if="Math.abs(record_pagination - reportPagination.current_page)<3">
                                    <a v-bind:class="[reportPagination.current_page==++index ? 'active' : '']" href="javascript:void(0)" @click="getPatientsResult('/patient/getpatientlist?page='+index,'reports')">{{index}}</a>
                                </span>
                              </li> 
                        <li><a href="javascript:void(0)"  v-if="reportPagination.current_page!=reportPagination.last_page" @click="getPatientsResult(reportPagination.next_page_url,'reports')" class="next">Next &raquo;</a></li>
                        <li><a href="javascript:void(0)"  v-if="reportPagination.current_page!=reportPagination.last_page" @click="getPatientsResult('/patient/getpatientlist?page='+reportPagination.last_page,'reports')" class="next">Last &raquo;</a></li>
                      </ul>
                    </div> 
                     <div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(reportPagination.total>0)">
                        <span data-v-744e717e="">Showing </span> {{reportPagination.from}} - {{reportPagination.to}} of {{reportPagination.total}}
                        <span data-v-744e717e="">records</span>
                    </div>
                </div>
               </div>
            </div>
            <div v-else>
              <h6 class="card-header">
               <div>No records available</div>
            </h6>
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
                'login_user_id' :this.$store.state.Users.userDetails.id,
                'patientData' :{
                    'patient_list' : {}
                },
                'patientDataPending' :{
                    'patient_list' : {}
                },
                'patientDataVital' :{
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
                'vitalPagination': {},
                'examinePagination': {},
                'reportPagination': {},
                'perPage' : 10,
                'perPagePending' : 10,
                'perPageVital' : 10,
                'perPageExamine' : 10,
                'perPageReport' : 10,
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
             vm.getUserRole('list.patient','list','','');
            if(vm.user_type == 3){
             vm.getPatientsResult('/patient/getpatientlist','waiting');
              vm.getPatientsResult('/patient/getpatientlist','vital');
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
           getUserRole(permission,type,status,patientId){
                 var vm = this;
                User.getUserRole(vm.login_user_id,permission).then(
                    (responce) => {
                       if(responce.data.data == ''){
                         vm.$root.$emit('logout','You are not authorise to access this page');
                       }
                       else
                       {
                            if(type=='status')
                            {
                              vm.statusChangeAllow(status,patientId);
                            }
                       }
                    },
                    (error) =>{

                    }
                    );
            },
          statusChange (status,patientId){
              let vm=this;
              vm.getUserRole('statuschnage.patient','status',status,patientId);
             
          },
          statusChangeAllow(status,patientId)
          {
              let vm=this;
               User.patientCaseStatusChage(patientId,status).then(
                   (response) => {
                     if( response.data.code == 200){
                       let vm =this;
                         if(vm.user_type == 3){
                            vm.getPatientsResult('/patient/getpatientlist','waiting');
                            vm.getPatientsResult('/patient/getpatientlist','vital');
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
                     }
                   },
                   (error) => {

                   }
                );
          },
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
                   vm.getPatientsResult('/patient/getpatientlist','vital');
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
            getPatientsResult(page_url,$status){
                var vm =this;
                 page_url = page_url ;
            let type = this.user_type;
            let noofRecordperpage = this.perPage;
             if($status == 'vital'){
                 noofRecordperpage = this.perPageVital;
             }
             if($status == 'waiting'){
                 noofRecordperpage = this.perPage;
             }
             if($status == 'examine'){
                 noofRecordperpage = this.perPageExamine;
             }
              if($status == 'reports'){
                 noofRecordperpage = this.perPageReport;
             }
             if($status == 'pending'){
                 noofRecordperpage = this.perPagePending;
             }
            
            User.getAllPatientListByDoctoreIdAndPaggination(page_url,type,noofRecordperpage,vm.doctore_Id,$status).then(
                     (response) => {
                        if($status == 'vital'){
                          vm.patientDataVital.patient_list = response.data.data.data;
                        }
                        if($status == 'waiting'){
                          vm.patientData.patient_list = response.data.data.data;
                        }if($status == 'examine'){
                          vm.patientDataExamine.patient_list = response.data.data.data;
                        } if($status == 'reports'){
                          vm.patientDataReport.patient_list = response.data.data.data;
                        }else if($status == 'pending'){
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
                
                 if(status == 'vital') {

                  this.vitalPagination = pagination;
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
                else if(status == 'pending') {
                  this.pendingPagination = pagination;

                }
                //this.$set('pagination', pagination)
            },
          setPatientId(patientInfo,page){
             var vm =this;
              vm.patientId = patientInfo;
              vm.$store.dispatch('SetPatientId', vm.patientId);
              if(page=='VITALS') 
              {
                  vm.$store.dispatch('SetPage', 'VITALS');  
              }
              else
              {
                  vm.$store.dispatch('SetPage', 'PLIST');  
              }
                          
          },
          setPerPageWaiting(e){
            let vm =this;
            vm.getPatientsResult('/patient/getpatientlist','waiting');
          },
          setPerPagePending(e){
            let vm =this;
            vm.getPatientsResult('/patient/getpatientlist','pending');
          },
          setPerPageVitals(e){
            let vm =this;
            vm.getPatientsResult('/patient/getpatientlist','vital');
          },
           setPerPageExamine(e){
            let vm =this;
            vm.getPatientsResult('/patient/getpatientlist','examine');
          },
          setPerPageReport(e){
            let vm =this;
           vm.getPatientsResult('/patient/getpatientlist','reports');
          },

         }
     }
</script>
