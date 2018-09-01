<template>
	<div>
		<div v-if="(adviceData.type == 'text' && adviceData != '')">
			<div class='col-md-6 text-left'>
						 				<span class='text-left'><b>Advice :-</b></span>
						 			</div>
						 			<div class='row'>
					 					<div class='col-md-12 text-left' v-if ="(adviceData.type == 'text')">
					 							<span class='text-left' style="padding-left:30px;"> {{advice}}</span>
					 					</div>
									</div>
		    	 	 			</div> 
		    	 	 			<div v-if="(adviceData.type !== 'text' && adviceData.value != null)">
		    	 	 				<div class='col-md-6 text-left'>
						 				<span class='text-left'><b>Advice :-</b></span>
						 			</div>
						 			<div class='row'>
					 					<div class='col-md-12 text-left' v-if ="(adviceData.type != 'text')">
								            <img :src="adviceData.value" title="Advice">
								        </div>  
									</div>
		    	 	 			</div>
	</div>	
</template>
<script>
	export default {
		props:['adviceData'],
	}
</script>
