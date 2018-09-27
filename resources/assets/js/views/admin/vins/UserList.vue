<template>
    <div>
        <!--First Table-->
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table2" data-toggle="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Department</th>
                                <th>Email Id </th>
                                <th>Address</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in getUserData">
                                <td>{{user.id}}</td>
                                <td>{{user.first_name }}</td>
                                <td>{{user.last_name }}</td>
                                <td>{{user.department }}</td>
                                <td>{{user.email }}</td>
                                <td>{{user.address}}</td>
                                <td>{{user.mobile_no}}</td>
                                <td>
                                      <a  :href="'/user/edit/'+user.id"> <i class="fa fa-pencil"  title="User edit"></i></a>
                                      <a > <i class="fa fa-trash"  title="User delete" @click="deleteUser(user.id)"  ></i></a>


                                </td>
                              </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     </template>
<script>
    import User from '../../../api/users.js';
    import userDetailEdit from './userDetailEdit.vue'

    export default {
        data() {
            return {
                  'deleteConfirmMsg':'Are you sure you want to delete this user?',
                  'getUserData':'',
            }
        },
        mounted() {
            var vm = this;
            vm.getAllUsers();
        },
        methods: {
            getAllUsers(){
                var vm = this;
                 var userData;
                  User.getAllUsersDetails().then(
                     (response)=>{
                            userData=response.data.data;
                            vm.getUserData = userData;
                        },
                    (error)=>{
                     }
                );
            },
            deleteUser(userId){
                let vm = this;
                if(confirm(vm.deleteConfirmMsg))
                {
                    User.deleteUserById(userId).then(
                     (response) => {
                        if(response.data.code == 200){
                              toastr.success('User Delete successfully', 'Delete User', {timeOut: 5000});
                             vm.getAllUsers();
                        }
                     },
                     (error) => {

                     }
                );
                }
       
        
               

            }
        }
    }
</script>
