<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h2>Select Permission</h2>
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
              			<select  class="form-control ls-select2"  id="role" name="role" value="" v-model="Data.roleId" v-validate="'required'"> 
                   			 <option value="">Select </option>
                  			 <option :value="role.rid" v-for="role in roleOptions">{{role.name}}</option>
               			</select>
                    
                    <i v-show="errors.has('role')" class="fa fa-warning"></i>
                     <span class="help is-danger" v-show="errors.has('role')">Please select Role.</span>
           			 </div>
         		 </div>
         	</div>
         	<div class="row form-group" >
         		<div class="col-md-6" >
         			 <div class="col-md-6 ">
						<label>Select Permission:</label>
					 </div>
					<ul class="list">
						<li><input type="checkbox" id="ckbCheckAll"  @click="checkAll(this)" :disabled="(roleName == 'Admin' || roleName == 'admin')"/><b> Select All</b></li>		
						<li v-for="permission,index in permissionList" class="col-md-6">
							<input type="checkbox" name="checkboxPermission" class="checkBoxClass" :value="permission.id" 
              :id="permission.id" v-model="checkedPermisiontList" @click="check($event)" :disabled="(roleName == 'Admin' || roleName == 'admin')"  > {{permission.name}}
						</li>
					</ul>
					<span class="help is-danger" v-if="(permissionListSelect == 0)">
                  			Please select any permission .
                	</span> 
				</div>
         	</div>
         	 <div class="row form-group">
                <div class="col-md-9">
                    <button class="btn btn-success" type="button" @click="validateBeforeSubmit()" :disabled="(roleName == 'Admin' || roleName == 'admin')">{{page}}</button>
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
                    'login_user_id' :this.$store.state.Users.userDetails.id,
                    'page' : 'ADD',   
                    'Data' : {
                         'roleId':'',
                         'permission_id': '',
                    },
                    'roleOptions' : '',
                    'permissionList' : '',
                    'checkedPermisiontList' : {},
                    'permissionListSelect' : 1,
                    'selectedPerlissionList' : '',
                    'roleName' : ''
                }	
        },
        mounted() {
            var vm = this;
            vm.getUserRole('addeditrole.permission');
            vm.getRoles();
            vm.getPermissionList();	
           $(".checkBoxClass").prop('checked', false);
           vm.checkedPermisiontList = [];
           vm.Data.roleId = '';
            $('#role').change("select2:select", function (e) {
            let selectedRoleId = $(this).val();
              vm.Data.roleId=selectedRoleId;
              vm.checkRolesPermission(selectedRoleId);
              vm.checkRoleName(selectedRoleId);

          }); 
          
           
        },
        methods: {
          getUserRole(permission){
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
            checkRoleName(selectedRoleId){
               var vm = this;
               $(".checkBoxClass").prop('checked', false);
                User.getRoleName(selectedRoleId).then(
                    (responce) => {
                       if(responce.data.code == 200){
                        vm.roleName = responce.data.data.name;
                       }
                    },
                    (error) =>{

                    }
                    );
            },    
          checkRolesPermission($roleId){
          var vm= this;
          var permissionSelectedList = [];
          var check_list=[];
              User.checkRolesPermission($roleId).then(
                (response) => {
                  if(response.data.code == 200){
                    if(response.data.data != ''){
                     vm.page = 'EDIT';
                      var getPermissionList = response.data.data;
                      $(".checkBoxClass").prop('checked', false);    
                       $.each(getPermissionList, function(key, value) {

                          let getPermissionId = value.permissionId;
                          let getRoleId = value.roleId;
                          check_list.push(value.permissionId);
                        
                        });                      

                    }else{
                      vm.page = 'ADD';
                      vm.selectedPerlissionList = '';
                       vm.checkedPermisiontList = [];
                      check_list = [];
                    }  
                  }
                  
                },
                (error) => {
                   check_list = [];
                }
                );
                vm.checkedPermisiontList=check_list;

          },
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
        
        		getPermissionList(){
        		 	var vm =this;
        			User.getPermissionList().then(
        			 	(response) => {
        			 		vm.permissionList = response.data.data;
        			 	},
        				 (error) => {

        			 	}
        				);
        		},
        		checkAll(test)
			{	
				let vm=this;
				if($('#ckbCheckAll').is(':checked'))
				{
					vm.permissionListSelect = 1;
					var check_list_data=[];
					_.forEach(vm.permissionList,function(value){
						check_list_data.push(value.id);
					});
					vm.checkedPermisiontList=check_list_data;
					$(".checkBoxClass").prop('checked', true);
				}
				else
				{
					vm.checkedPermisiontList=[];
					vm.permissionListSelect = 0;
					$(".checkBoxClass").prop('checked', false);
				}
				
			},
       	 	check: function(e) {
			 	let vm=this;
	     		 if (e.target.checked) {
	      		  //vm.reportListSelect = 0;
	     		 }else{
	     		 	 vm.permissionListSelect = 1;
	     		 }
	   		 },
	   		 addRolesPermission(){
	   		 	var vm = this;
	   		 	User.addRolesPermission(vm.Data.roleId,vm.checkedPermisiontList).then(
	   		 		 (response) => {
          			 	 if(response.data.code == 200){
          			 	 	 toastr.success('Role permission added successfully', 'Create Role Permission', {timeOut: 5000});
                                     //   this.initialState();
          			 	 } else if (response.data.code == 301) {
                                        //this.initialState();
                                        toastr.error('something wrong.', 'Add Role Permission', {timeOut: 5000});
                                    }
          			 },
          			  (error) => {
                		  },
	   		 	);
	   		 },
         updateRolesPermission(){
          var vm = this;
          User.updateRolesPermission(vm.Data.roleId,vm.checkedPermisiontList).then(
             (response) => {
                   if(response.data.code == 200){
                     toastr.success('Role permission update successfully', 'Update Role Permission', {timeOut: 5000});
                                     //   this.initialState();
                   } else if (response.data.code == 301) {
                                        //this.initialState();
                                        toastr.error('something wrong.', 'update Role Permission', {timeOut: 5000});
                                    }
                 },
                  (error) => {
                      },
          );
         },
	   		 validateBeforeSubmit() {
               
                this.$validator.validateAll().then(() => {
                    
                    if (!this.errors.any()) {
                   				
                                var vm = this;
                               
                                if( vm.page == 'ADD')
                                {
                                  if(vm.checkedPermisiontList.length != null || vm.checkedPermisiontList.length != 0){
                                	     vm.permissionListSelect == 1;
                                	     vm.addRolesPermission();
                                    
                                  }else{
                                	   vm.permissionListSelect == 0;
                                	   return false;
                                  }
                                }else{
                                  if(vm.checkedPermisiontList.length != null || vm.checkedPermisiontList.length != 0){
                                       vm.permissionListSelect == 1;
                                       vm.updateRolesPermission();
                                    
                                  }else{
                                     vm.permissionListSelect == 0;
                                    
                                     return false;
                                  }
                                }
                    }
                });
            }
        	}
        }
</script>