<template>
	<div v-if="(patientCaseDetail != '')">
		<table>
			<thead>
			<tr>
				<th width="70px;"></th>
				<th class="text-center" width="70px;">Case Type</th>
				<th class="text-center"  width="150px;">Last Vist</th>
				<th class="text-center"   width="150px;">Reference Dr</th>
				<th class="text-center"   width="150px;">Consultant Dr</th>
					
			</tr>
			</thead>
			<tbody>
				<tr v-for="patientCase in patientCaseDetail" >
					<td><i class="fa fa-user-md text-info mr-3 text-info mr-3"  @click="getOpdDetail(patientCase.opdId)" data-toggle="collapse" data-target="#collapseOpdDetail" aria-expanded="true" aria-controls="collapseOpdDetail"></i> </td>
					<td class="text-center">
						<span v-if="(patientCase.case_type == 'new_case')">new</span>
						<span v-if="(patientCase.case_type == 'cross_reference')">Cross Reference</span>
						<span v-if="(patientCase.case_type == 'follow_ups')">Follow Up</span>
						<span v-if="(patientCase.case_type == 'reports')">Reports</span>
					</td>
					<td class="text-center">
						<span>{{patientCase.appointment_datetime}}</span>
					</td>
					<td class="text-center">
						<span>{{patientCase.references}}</span>
					</td>
					<td class="text-center"	>
						<span>{{patientCase.first_name}} {{patientCase.last_name}}</span>
					</td>

					</tr>
					<tr><td>
						 <div id="collapseOpdDetail" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						 	  <patientOPDDetailInfo :patientAllOpdDetail="patientOPDDetail"></patientOPDDetailInfo> 
						 </div></td></tr>
			</tbody>
		</table>
	</div>
</template>
<script>
	import User from '../../../api/users.js';
	import patientOPDDetailInfo from './patientOPDDetailInfo.vue';
	export default {
		props: ['patientCaseDetail','patientOPDDetail'],
		data(){
			return {
				'opdDetailById': '',
			}
		},
		 components : {
            patientOPDDetailInfo,
          },
         methods :{
			getOpdDetail(opdId){
				let vm = this;
				User.getPatientOpdDetailByOpdId(opdId).then(
					  (response) => {
					  	vm.opdDetailById = response.data.data;
					  },
					  (error) => {
                       },
				);

			}
		},
	}
	
</script>
