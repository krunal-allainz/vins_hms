<template>
	<div class="row">
		<div class='col-md-12 text-left'>
			<span class='report_title'>Examination Details :-</span>
		</div>
		

			<div class='col-md-12' v-if="examData.length>0 && examData!=null">
				<span class="report_details">{{examData}}</span>
			</div> 
			<div class='col-md-12' v-else>
				<span class="report_details">No record found.</span>
			</div>
		
	</div>
</template>
<script>
export default {
		props:['examData'],
	}
</script>



