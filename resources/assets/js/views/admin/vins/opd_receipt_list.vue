<template>
  <div class="container">
    <div class="page-header">
      <div class="row">
        <div class="col-md-6">
        <h1>OPD Receipt List</h1>
        </div>
        
      </div>
    </div>
    <!-- jnmbnmb -->

    
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Receipt No.</th>
              <th>Case No.</th>
              <th>Patient Name</th>
              <th>Doctor Name</th>
              <th>Admit Date</th>
              <th>Discharge Date</th>
              <th>Action</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td><button type="button" class="btn btn-success">Print</button>
                <button type="button" class="btn btn-danger">Delete</button></td>
              
            </tr>

          </tbody>
        </table>
      </div>
    
  </div>
</template>

<script >
  import User from '../../../api/users.js';
  import moment from 'moment';

  export default {

       data() {
            return {
              'login_user_id' :this.$store.state.Users.userDetails.id,
            }
        },
        mounted(){
            let vm = this;
            vm.getUserRole('view.receipt');
         
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
