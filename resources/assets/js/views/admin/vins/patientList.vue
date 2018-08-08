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
                    <div data-v-744e717e="" class="text-left">
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
                </div>
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
                            patientData.firstName
                        </td> <!---->
                        <td data-v-744e717e="" class="">
                            patientData.lastName
                        </td> <!----><td data-v-744e717e="" class="numeric">
                            patientData.gender
                        </td> <!----><td data-v-744e717e="" class="">
                            patientData.uhid_no
                        </td> <!----><!----> <td data-v-744e717e="" class=""><i class="fa fa-pencil text-info mr-3 text-info mr-3"></i><i class="fa fa-trash text-danger"></i></td> </tr></tbody></table></div> <div data-v-744e717e="" class="table-footer"><div data-v-744e717e="" class="datatable-length float-left pl-3"><span data-v-744e717e="">Rows per page:</span> <select data-v-744e717e="" class="custom-select"><option data-v-744e717e="" value="5">5</option><option data-v-744e717e="" value="10">10</option><option data-v-744e717e="" value="20">20</option><option data-v-744e717e="" value="50">50</option> <option data-v-744e717e="" value="-1">All</option></select> <div data-v-744e717e="" class="datatable-info  pb-2 mt-3"><span data-v-744e717e="">Showing </span> 1 -10 of 20 <span data-v-744e717e="">records</span></div></div> <div data-v-744e717e="" class="float-right"><ul data-v-744e717e="" class="pagination"><li data-v-744e717e=""><a data-v-744e717e="" href="javascript:undefined" tabindex="0" class="btn link"><i data-v-744e717e="" class="fa fa-angle-left"></i></a></li> <li data-v-744e717e=""><a data-v-744e717e="" href="javascript:undefined" tabindex="0" class="btn link"><i data-v-744e717e="" class="fa fa-angle-right"></i></a></li></ul></div></div></div></div></div></div>
</template>
<script >
    import User from '../../../api/users.js';
     export default {
         data() {
            return {
                'patientData' :{
                    'patient_list' : ''
                }
            }
         },
         mounted(){
            let vm =this;
            User.getAllPatientName().then(
                     (response) => {
                            let patien_data ;
                            patien_data = response.data;
                            $.each(response.data.data, function(key, value) {
                            let firstName = value.first_name;
                            let lastName = value.last_name;
                            let pid  = value.id ;
                            let uhid_no  = value.uhid_no ;
                            list.push({
                                    firstName:firstName,
                                    lastName:lastName,
                                    gender:gender,
                                    id:pid,
                                    uhid_no:uhid_no,
                                    case_type:case_type,
                                });
                            });
                        setTimeout(function(){
                                  $('#patient').select2({
                                    placeholder: "Select",
                                    tags:false 
                                  }); 

                          },500);
                         vm.patientData.patient_list = list;
                         },
                            (error) => {
                        },
                     );
         }
     }
</script>