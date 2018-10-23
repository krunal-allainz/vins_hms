<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h2>Add Role</h2>
				</div>
			</div>
		</div>
		<form method="post" enctype="multipart/form-data"> 
            <div class="row">
                <div class="col-md-12">
                        <div class="card-body">
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="roleName" class="control-label float-right txt_media1">Role Name 	:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="rolename"
                                               placeholder="Role Name" v-validate="'required'" v-model="Data.rolename" name="rolename">
                                        <i v-show="errors.has('rolename')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('rolename')">Please enter valid role name.</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="slug" class="control-label float-right txt_media1">Slug :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="slug" name="slug" v-validate="'required'" placeholder="Slug" v-model="Data.slug">
                                        <i v-show="errors.has('slug')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('slug')">Please enter valid slug.</span>
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="slug" class="control-label float-right txt_media1">Description:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="description" name="description" placeholder="Description" v-model="Data.description"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <button class="btn btn-success" type="button" @click="validateBeforeSubmit()">Update</button>
                                    </div>
                                </div>
                        </div>
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
                    'editRoleId' :  this.$route.params.id,
                    'Data' : {
                            'rolename':'',
                            'slug': '',
                            'description': '',
                    },
                }
        },
        mounted() {
            var vm = this;
            vm.getUserRole('edit.role');
            vm.getRoleDetail(vm.editRoleId);
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
          getRoleDetail(roleId){
              var vm = this;  
              User.getRoleDetailById(roleId).then(
                 (response) => {
          			 	 if(response.data.code == 200){
          			 	 	vm.Data.rolename = response.data.data.name;
                    vm.Data.slug = response.data.data.slug;
                    vm.Data.description = response.data.data.description;
                    }
          			 },
          			  (error) => {
                		  },
          			
              );
          },
        	updateRoleDetail(){
        		  var vm = this;
        		User.updateRoleDetail(vm.Data,vm.editRoleId).then(
          			 (response) => {
          			 	 if(response.data.code == 200){
          			 	 	 toastr.success('Role Update successfully', 'Update Role', {timeOut: 5000});
                                        //  router.push('roleList');
                                        //this.initialState();
          			 	 } else if (response.data.code == 301) {
                                        //this.initialState();
                                        toastr.error('Role already exist.', 'Update Role', {timeOut: 5000});
                                    }
          			 },
          			  (error) => {
                		  },
          			);
        	},
             initialState() {
                this.$data.Data.rolename = '',
                this.$data.Data.slug =  '',
                this.$data.Data.description =''
            },
            validateBeforeSubmit() {
               
                this.$validator.validateAll().then(() => {
                    
                    if (!this.errors.any()) {
                   
                                var vm = this;
                                vm.updateRoleDetail();
                    }
                });
            }
        }
    }
</script>