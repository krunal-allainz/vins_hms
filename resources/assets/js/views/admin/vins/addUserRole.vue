<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h2>Select Role For User</h2>
				</div>
			</div>
		</div>
		<form method="post" enctype="multipart/form-data"> 
          <div class="row form-group">
          		<div class="col-md-6">
           			 <div class="col-md-6 ">
             			 <label for="role">Select Role:</label>
            		</div>
           		 	<div class="col-md-6">
              			<select  class="form-control ls-select2"  id="role" name="role"  v-model="Data.roleId" v-validate="'required'"> 
                   			 <option value="">Select </option>
                  			 <option :value="role.rid" v-for="role in roleOptions">{{role.name}}</option>
               			</select>
                      <i v-show="errors.has('role')" class="fa fa-warning"></i>
                     <span class="help is-danger" v-show="errors.has('role')">Please select Role.</span>
           			 </div>
         		 </div>
         	</div>
          <div class="row form-group">
          		<div class="col-md-6">
           			 <div class="col-md-6 ">
             			 <label for="user">Select User:</label>
            		</div>
           		 	<div class="col-md-6">
              			<select  class="form-control ls-select2"  id="user" name="user"  v-model="Data.userId" v-validate="'required'"> 
                   			 <option value="">Select </option>
                  			 <option :value="user.rid" v-for="user in userOptions">{{user.name}}</option>
               			</select>
                      <i v-show="errors.has('role')" class="fa fa-warning"></i>
                     <span class="help is-danger" v-show="errors.has('role')">Please select User.</span>
           			 </div>
         		 </div>
         	</div>
          <div class="row form-group">
                <div class="col-md-6">
                    <button class="btn btn-success" type="button" @click="validateBeforeSubmit()">{{Page}}</button>
              </div>
        </div>
      </form>
    </div>
</template>
<script>
	import User from '../../../api/users.js';
  
   export default {
        data() {
            return {
              'Page' : 'ADD',
              'Data' : {
                         'roleId':'',
                         'userId': '',
                    },
              'roleOptions':'',
              'userOptions' : '',
            }
        },
          mounted() {
            var vm = this;
            vm.getRoles();
            vm.getUser();
            $('#role').change("select2:select", function (e) {
            let selectedRoleId = $(this).val();
              vm.Data.roleId=selectedRoleId;
          });
          $('#user').change("select2:select", function (e) {
            let selectUserId = $(this).val();
              vm.Data.userId=selectUserId;
             // vm.checkExistUserRole(selectUserId);
          }); 
        },
        methods: {
         getRoles(){
         
        		 var vm =this;
           		 var role_list_new=[];
        		User.getRolesList().then(
        			 (response) => {
        			 	 vm.roleOptions=[];
                      let role_data=response.data.data;
                      $.each(role_data, function(key, value) {
                      let name = value.name;
                      let rid  = value.id ;
                      let slug  = value.slug ;
                      role_list_new.push({
                          name:name,
                          rid:rid,
                          slug:slug
                        });
                      });

                      vm.roleOptions=_.cloneDeep(role_list_new);

        			 },
        			 (error) => {

        			 }
        			);

        		},
            getUser(){
               var vm =this;
           		 var user_list_new=[];
        		User.getUserList().then(
        			 (response) => {
        			 	 vm.userOptions=[];
                      let user_data=response.data.data;
                      $.each(user_data, function(key, value) {
                      let name = value.first_name+''+value.last_name;
                      let uid  = value.id ;
                      user_list_new.push({
                          name:name,
                          uid:uid,
                        });
                      });

                      vm.userOptions=_.cloneDeep(user_list_new);

        			 },
        			 (error) => {

        			 }
        			);
            },
          addUserRole(){
              var vm= this;
              User.addUserRole(vm.Data.roleId,vm.Data.userId).then(
              
                 (response) => {
                    if(response.data.code == 200){
                       toastr.success('User Role added successfully', 'Create User Role', {timeOut: 5000});
                                        this.initialState();
                                        //localStorage.setItem("user_add",1)
                                       // window.location.reload();
                      }else if (response.data.status_code == 301) {
                                        //this.initialState();
                                        toastr.error('something wrong.', 'Add User Role', {timeOut: 5000});

                      }
                 
                 },
                 (error) =>{
                 
                 }
              );
          
          },
          initialState(){
              var vm= this;
              vm.Data.roleId = '';
              vm.Data.userId = '';
              vm.page = 'ADD';
          },
          checkExistUserRole(userId){
          
            User.checkExistUserRole(userId).then(
               (response) => {
                    if(response.data.code == 200){
                        vm.page = 'EDIT';
                         vm.Data.roleId = response.data.role_id;
                         vm.Data.userId = response.data.user_id;
                         return false;
                    }
                    
               },
               (error) => {
               
               }
            );
          
          },
          updateUserRole(roleId,UserId){
              User.updateUserRole(roleId,userId).then(
                (response) => {
                    if(response.data.code == 200){
                        toastr.success('User Role update successfully', 'Update User Role', {timeOut: 5000});
                    }else if (response.data.status_code == 301) {
                                        //this.initialState();
                                        toastr.error('something wrong.', 'update User Role', {timeOut: 5000});

                      }
               },
               (error) => {
               
               }
              );
          
          },
          validateBeforeSubmit() {
                this.$validator.validateAll().then(() => {
                    
                    if (!this.errors.any()) {
                                var vm = this;
                               console.log('if');
                                if(vm.Page == 'Add')
                                {
                                	vm.addUserRole();
                                }else{
                                  vm.updateUserRole(vm.Data.roleId,vm.Data.userId);
                                }
                    }
                });
            }
        }
    }
  
</script>
      
          