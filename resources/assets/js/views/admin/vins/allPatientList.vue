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
                            			UHID.No
                            			<i data-v-744e717e="" class="fa float-right"></i>
                        			</th>                        			
                        			<th data-v-744e717e="" class="sortable" style="width: auto;">
                            			Age
                            			<i data-v-744e717e="" class="fa float-right"></i>
                        			</th>
                                     <th data-v-744e717e="" class="sortable" style="width: auto;">
                            			Gender
                                       <i data-v-744e717e="" class="fa float-right"></i>
                        			 </th>
                         			 
                        			 <th data-v-744e717e="" class="sortable" style="width: auto;">
                           				 Action
                            			<i data-v-744e717e="" class="fa float-right"></i>
                        			 </th>
                        		</tr>
                  			</thead>
                  			<tbody data-v-744e717e="">
                  				 <tr data-v-744e717e="" v-for="patientData in getPatientData">
                  				 	<td data-v-744e717e="" class="">
                       					{{ patientData.fname}}
                      				</td>
                      				<td data-v-744e717e="" class="">
                       					{{ patientData.lname}}
                      				</td>
                      				<td data-v-744e717e="" class="">
                        				{{ patientData.uhid_no}}
                      				</td>
                      				<td data-v-744e717e="" class="">

                        		 	<span class="text-uppercase" v-if="(patientData.age > 1000)">
									<span class="text-uppercase" v-if="(((currentYear) - (patientData.age)) > 0)">{{(currentYear) - (patientData.age) - 1}}</span>	
									<span class="text-uppercase" v-if="(((currentYear) - (patientData.age)) == 0)"> 1</span>
									</span>
									<span v-if="(patientData.age  < 1000)">{{patientData.age}}</span>
                      				</td>
                      				<td data-v-744e717e="" class="numeric">
                        				<span v-if="(patientData.gender == 'F')">Female</span>
                        				<span v-if="(patientData.gender == 'M')">Male</span>
                      				</td> 
                      				
                      				<td data-v-744e717e="" class="">
                      					<a :href="'/patient_detail_edit'"> <i class="fa fa-user-md text-info mr-3 text-info mr-3" @click="setPatientId(patientData.patient_id)" title="patient detail form"></i></a>
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
                     		<div data-v-744e717e="" class="datatable-info  pb-2 mt-3" v-show="(pagination.current_page > 0)">
                        		<span data-v-744e717e="">Showing </span> {{pagination.current_page}} - {{pagination.to}} of {{pagination.total}}
                        		<span data-v-744e717e="">records</span>
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
	export default {
		 data() {
		 	return {
		 	  'currentYear': (new Date()).getFullYear(),
		 	  'user':this.$store.state.Users.userDetails.first_name + " "+ this.$store.state.Users.userDetails.last_name ,
              'user_id':0,
              'user_type':this.$store.state.Users.userDetails.user_type,
              'getPatientData' : '',
              'pagination': {},
              'perPage' : 5,
              'patientId' :'',
		 	}
		 },
		  mounted(){
		 	let vm = this;
		 	 if(vm.$store.state.Users.userDetails.user_type != '4'){
              vm.$root.$emit('logout','You are not authorise to access this page'); 
          	}
		 	let page_url = '/patient/getallpatientlist';
		 	vm.getPatientList(page_url);
		 },
		 methods:{
		 	getPatientList(page_url){
		 		let vm = this;
		 		let userId = vm.user_id;
		 		let userType = vm.user_type;
		 		let status = '';
		 		let no_of_page = vm.perPage;
		 		User.getAllPatientListWithPaggination(page_url,userType,no_of_page,userId,status).then(
		 			 (response) => {
		 			 	vm.getPatientData = response.data.data.data;
		 			 	vm.makePagination( response.data.data);
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
                    from : data.from,
                    to : data.to
                }
              
                  this.pagination = pagination;

                //this.$set('pagination', pagination)
            },
          setPatientId(patientInfo){
             var vm =this;
            vm.patientId = patientInfo;
            vm.$store.dispatch('SetPatientId', vm.patientId);             // 
          },
          setPerPage(e){
            let vm =this;
                vm.getPatientList('/patient/getallpatientlist');
          }

		 },
		
	}
</script>