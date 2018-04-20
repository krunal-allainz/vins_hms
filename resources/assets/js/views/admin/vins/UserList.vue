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

    export default {
        data() {
            return {
                  'getUserData':''
            }
        },
        mounted() {
            var userData;
            var vm = this;
          User.getAllUsersDetails().then(
            (response)=>{
                            userData=response.data;
                            vm.getUserData = userData;
                        },
            (error)=>{
                     }
            );
        }
    }
</script>
