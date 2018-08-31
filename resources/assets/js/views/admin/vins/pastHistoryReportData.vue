<template>
	<div>
		
		<div v-if="(past_history.type == 'text')">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>Past History :-</b></span>
			</div>
			<div class='row'>
				<div class='col-md-12 text-left' v-if ="(past_history.type == 'text')">
					<span class='text-left' style="padding-left:30px;"> {{past_history}}</span>
				</div>
			</div>
		</div> 
		 <div v-if="(past_history.type !== 'text' && past_history.value != '')">
		   	<div class='col-md-6 text-left'>
				<span class='text-left'><b>Past History :-</b></span>
			</div>
			<div class='row'>
				<div class='col-md-12 text-left' v-if ="(past_history.type != 'text')">
					<img :src="past_history.value" title="Past History">
				</div>  
			</div>
		
	</div>
	</div>	
</template>
<script>
	export default {
		props:['past_history'],
	}
</script>
