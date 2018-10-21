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
         	<div class="row form-group">
         		<div class="col-md-6" >
         			 <div class="col-md-6 ">
						<label>Select Permission:</label>
					 </div>
					<ul>
						<li><input type="checkbox" id="ckbCheckAll"  @click="checkAll(this)"/><b> Select All</b></li>		
						<li v-for="permission in permissionList" class="col-md-6">
							<input type="checkbox" class="checkBoxClass" :value="permission.id" id="permission.id" v-model="checkedPermisiontList" @click="check($event)" :checked="selectedPerlissionList != '' && selectedPerlissionList.includes(permission.id)"> {{permission.name}}
						</li>
					</ul>
					<span class="help is-danger" v-if="(permissionListSelect == 0)">
                  			Please select any permission .
                	</span> 
				</div>
         	</div>
         	 <div class="row form-group">
                <div class="col-md-9">
                    <button class="btn btn-success" type="button" @click="validateBeforeSubmit()">Add</button>
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
                    'page' : 'Add',   
                    'Data' : {
                         'roleId':'',
                         'permission_id': '',
                    },
                    'roleOptions' : '',
                    'permissionList' : '',
                    'checkedPermisiontList' : '',
                    'permissionListSelect' : 1,
                    'selectedPerlissionList' : ''
                }	
        },
        mounted() {
            var vm = this;
            vm.getRoles();
            vm.getPermissionList();	

            $('#role').change("select2:select", function (e) {
            let selectedRoleId = $(this).val();
              vm.Data.roleId=selectedRoleId;
              vm.checkRolesPermission(selectedRoleId);
          }); 
        },
        methods: {
          checkRolesPermission($roleId){
          var vm= this;
          var permissionSelectedList = [];
              User.checkRolesPermission($roleId).then(
                (response) => {
                  if(response.data.code == 200){
                    if(response.data.data != ''){
                      vm.page = 'Edit';
                      var getPermissionList = response.data.data;
                      
                       $.each(getPermissionList, function(key, value) {
                          let getPermissionId = getPermissionList.permissionId;
                          let getRoleId = getPermissionList.roleId;
                          permissionSelectedList.push(
                            {
                                'permissionId' : getPermissionId,
                                'roleId' : getRoleId,
                            }
                          );
                          vm.selectedPerlissionList = _.cloneDeep(permissionSelectedList);
                        });                      

                    }else{
                      vm.page = 'Add';
                      vm.selectedPerlissionList = '';
                    }  
                  }
                  
                },
                (error) => {
                }
                );
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
                                        toastr.error('Role permission already exist.', 'Add Role Permission', {timeOut: 5000});
                                    }
          			 },
          			  (error) => {
                		  },
	   		 	);
	   		 },
	   		 validateBeforeSubmit() {
               
                this.$validator.validateAll().then(() => {
                    
                    if (!this.errors.any()) {
                   				console.log('test');
                                var vm = this;
                               
                                if(vm.checkedPermisiontList.length != null || vm.checkedPermisiontList.length != 0 )
                                {
                                	vm.permissionListSelect == 1;
                                	vm.addRolesPermission();
                                }else{
                                	vm.permissionListSelect == 0;
                                	return false;
                                }
                    }
                });
            }
        	}
        }
</script>