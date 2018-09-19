<template>
	<div class="report_style">
		<hr style="border-top: dashed  1px;" />
		<div >
			<div class="row">
				<div class='col-md-6 text-left'>
					 	<label ><b>Patient's Name:</b></label>
						<span><b>{{patientDetail.first_name}}
						{{patientDetail.middle_name}}
					    {{patientDetail.last_name}}</b></span>
				</div>
				<div class='col-md-6 text-center'>
					 	<label><b>UHID :</b></label>
						<b>{{patientDetail.uhid_no}}</b>
				</div>
			</div>
			<div class="row">
					<div class="col-md-6 text-left">
					 	<label><b>Address :</b></label>
						{{patientDetail.address}}
					</div>
					<div class="col-md-6 text-center">
					 	<label><b>Date :</b></label>
						<b>{{todayDate}}</b>
					</div>
			</div>
			<div class="row">
					<div class="col-md-4">
					 	<label><b>Mob No:</b></label>
						<b>{{patientDetail.mob_no}}</b>
					</div>
					<div class="col-md-4">
						<label><b>Phone No:</b></label>
							{{patientDetail.ph_no}}
					</div>
					<div class="col-md-4">
					 	<label><b>Age/Sex:</b></label>
						<span v-if="(patientDetail.age > 1000)">
							<span v-if="(((currentYear) - (patientDetail.age)) > 0)">{{(currentYear) - (patientDetail.age)}}</span>	
							<span v-else> 1</span>
						</span>
						<span v-if="(patientDetail.age  < 1000)">{{patientDetail.age}}</span>
						<span v-if="(patientDetail.gender == 'F')"><b>/ Female</b></span>
						<span v-if="(patientDetail.gender == 'M')"><b>/ Male</b></span>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
				 	<label><b>Consulting Dr.:</b></label>
						{{consult_dr}}
				</div>
				<div class="col-md-6 text-center">
				 	<label><b>Ref By Dr.:</b></label>
						{{refer_dr}}
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
				 	<label><b>Speciality:</b></label>
						{{department}}
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
				 	<label><b>Dr. Reg. No:</b></label>
						{{reg_no}}
				</div>
			</div>

			</div>
	</div>
</template>
<script>
     export default {
        props: ['patientDetail','consult_dr','department','reg_no','refer_dr','todayDate'],
        data() {
			return{
				'currentYear': (new Date()).getFullYear(),
			}
		}

    }

</script>