<template>
	<div>
		<div class='col-md-12 text-left'>
			<span class='text-left'><b>Provisional Diagnostic :-</b></span>
		</div>
		<div class='row'>
			<div class='col-md-12 text-left'>
				<span class='text-left' style="padding-left:30px;"> {{data}}</span>
			</div>
		</div>
	</div>	
</template>
<script>
	export default {
		props:['data'],
	}
</script>
