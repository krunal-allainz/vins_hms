<template>
	<div>
		<div>
			<allPatientList ></allPatientList>
		</div>
	</div>
</template>
<script>
    import User from '../../../api/users.js';
	import allPatientList from './allPatientList.vue';


    export default {
        data() {
            return {
            	'login_user_id' :this.$store.state.Users.userDetails.id,
            }
        },
         mounted(){
            let vm = this;
            //vm.getUserRole();
            //  if(vm.$store.state.Users.userDetails.user_type != '4'){
            //   vm.$root.$emit('logout','You are not authorise to access this page'); 
            // }
         
         },
         components: {
         	allPatientList
         },
          methods: {
             getUserRole(permission = ''){
                 var vm = this;
                User.getUserRole(vm.login_user_id,permission).then(
                    (responce) => {
                       if(responce.data.data == ''){
                         vm.$root.$emit('logout','You are not authorise to access this page');
                       }
                    },
                    (error) =>{

                    }
                    );
            },
        }
    }
</script>