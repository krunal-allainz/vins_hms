<template>
	<div class="row">
		<div class='col-md-12 text-left'>
			<span class="report_title">FollowUp:-</span>
		</div>
		
		<div class='col-md-12 report_details'>
			<span class="report_details">{{followupData}}</span>
		</div> 
		
	</div>
</template>
<script>
export default {
		props:['followupData'],
	}
</script>