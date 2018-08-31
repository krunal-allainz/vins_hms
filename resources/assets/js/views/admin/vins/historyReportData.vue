<template>
	<div>
		
		<div v-if="(historyData.type == 'text' && historyData != '')">
			<div class='col-md-6 text-left'>
				<span class='text-left'><b>History :-</b></span>
			</div>
			<div class='row'>
				<div class='col-md-12 text-left' v-if ="(historyData.type == 'text')">
					<span class='text-left' style="padding-left:30px;">{{historyData.value}} </span>
				</div>
			</div>
		</div> 
		 <div v-if="(historyData.type !== 'text' && historyData.value != '')">
		   	<div class='col-md-6 text-left'>
				<span class='text-left'><b>History :-</b></span>
			</div>
			<div class='row'>
				<div class='col-md-12 text-left' v-if ="(historyData.type != 'text')">
					<img :src="historyData.value" title="History">
				</div>  
			</div>
		</div>
	
	</div>	
</template>
<script>
	export default {
		props:['historyData'],
	}
</script>
