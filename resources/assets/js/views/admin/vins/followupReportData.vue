<template>
	<div>
		<div class='col-md-6 text-left'>
			<span class='text-left'><b>FollowUp :-</b></span>
		</div>
		<div>
		<div class='col-md-12 text-left'>
			{{followupData}}
		</div> 
		</div> 
	</div>
</template>
<script>
export default {
		props:['followupData'],
	}
</script>