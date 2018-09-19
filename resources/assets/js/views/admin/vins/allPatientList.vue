<template>
</template>
<script>
	import User from '../../api/users.js';
	export default {
		 data() {
		 	return {
		 	  'doctor':this.$store.state.Users.userDetails.first_name + " "+ this.$store.state.Users.userDetails.last_name ,
              'doctor_id':this.$store.state.Users.userDetails.id,
              'user_type':this.$store.state.Users.userDetails.user_type,
              'getPatientList' : '',
		 	}
		 },
		 methods : {
		 	getPatientList(userType,userId){
		 		let vm = this;
		 		User.getAllPatientName(userType,userId).then(
		 			 (response) => {
		 			 	vm.getPatientList = response.data.data;
		 			 },
		 			 (error) => {
                  	 },
		 		);
		 		
		 	}
		 },
		 mounted(){
		 	let vm = this;
		 	let userId = vm.doctor_id;
		 	let userType = vm.user_type;
		 	vm.getPatientList(userType,userId);
		 },
	}
</script>