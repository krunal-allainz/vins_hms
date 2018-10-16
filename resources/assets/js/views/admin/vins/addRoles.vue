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
                                </div>S
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <button class="btn btn-success" type="button" @click="validateBeforeSubmit()">Add</button>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </form>
	</div>
</template>

<script>
/*if(localStorage.getItem("user_add"))
    {
        toastr.success('User has been added successfully', 'Add User', {timeOut: 5000});
        localStorage.removeItem("user_add");
        //localStorage.clear();
    }*/
	import User from '../../../api/users.js';

    export default {
        data() {
            return {
                    'Data' : {
                            'rolename':'',
                            'slug': '',
                            'description': '',
                    },
                }
        },
        mounted() {
            var vm = this;
             
          		
              
        },
        methods: {
        	addRoles(){
        		  var vm = this;
        		User.addroles(vm.Data).then(
          			 (response) => {
          			 	 if(response.data.code == 200){
          			 	 	 toastr.success('Role added successfully', 'Create Role', {timeOut: 5000});
                                        this.initialState();
          			 	 } else if (response.data.code == 301) {
                                        //this.initialState();
                                        toastr.error('Role already exist.', 'Add Role', {timeOut: 5000});
          			 },
          			  (error) => {
                  },
          			);
        	},
           
             initialState() {
             	  var vm = this;
                this.vm.Data.rolename = '',
                this.vm.Data.slug =  '',
                this.vm.Data.description ='',
            },
           
            validateBeforeSubmit() {
               
                this.$validator.validateAll().then(() => {
                    
                    if (!this.errors.any()) {
                    // if(this.$data.userData.id=="") {
                                // here we add code for Mobile user for create user
                                vm.addRoles();
                                User.createUser(this.userData).then(
                                  (response)=> {
                                    //console.log(response);
                                    if(response.data.status_code == 200){
                                        toastr.success('User added successfully', 'Create User', {timeOut: 5000});
                                        this.initialState();
                                        //localStorage.setItem("user_add",1)
                                       // window.location.reload();
                                    } else if (response.data.status_code == 301) {
                                        //this.initialState();
                                        toastr.error('User already exist.', 'Add User', {timeOut: 5000});

                                    }
                                    // this.$router.push('dashboard');
                                  },
                                  (error)=>{
                                  }

                                )
                        // }
                    }
                })
            }
        }
    }
</script>