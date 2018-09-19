<template>
	<div>
		<div>
			<allPatientList ></allPatientList>
		</div>
	</div>
</template>
<script>
	import allPatientList from './allPatientList.vue';


    export default {
        data() {
            return {
            	
            }
        },
         components: {
         	allPatientList
         }
    }
</script>