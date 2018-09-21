<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h2>New User Form</h2>
				</div>
			</div>
		</div>
		<form method="post"> 
            <div class="row">
                <div class="col-md-12">
                        <div class="card-body">
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="firstName" class="control-label float-right txt_media1">First Name :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="firstName"
                                               placeholder="First Name" v-validate="'required|alpha'" v-model="userData.fName" name="firstName">
                                        <i v-show="errors.has('firstName')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('firstName')">Please enter valid first name.</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="lastName" class="control-label float-right txt_media1">Last Name :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="lastName" name="lastName" v-validate="'required|alpha'" placeholder="Last Name" v-model="userData.lName">
                                        <i v-show="errors.has('lastName')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('lastName')">Please enter valid last name.</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="userType" class="control-label float-right txt_media1">User Type :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control ls-select2" id="userType" v-model="userData.userType" name="userType" v-validate="'required'">
                                            <option :value="type.id" v-for="type in userData.userTypeOption">{{type.name}}</option>
                                        </select> 
                                        <i v-show="errors.has('userType')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('userType')">Please select User type.</span>
                                    </div>
                                </div>
                                <div class="row form-group" v-if="userData.userType == 1" >
                                    <div class="col-md-3">
                                    <label for="department " class="control-label float-right txt_media1">Department :</label>
                                    </div>
                                    <div class="col-md-9">
                                         <select class="form-control ls-select2" id="department" name="department" v-model="userData.department" v-validate="'required'">
                                            <option :value="dept.text" v-for="dept in userData.departmentOption">{{dept.text}}</option>
                                        </select> 
                                        <i v-show="errors.has('department')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('department')">Please select Department.</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="email" class="control-label float-right txt_media1">Email Id :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" v-model="userData.email" v-validate="'required|email'" @input="checkExistUser('email')">
                                        <i v-show="errors.has('email')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('email')">Please enter valid email.</span>
                                         <span class="help is-danger" v-show="userEmailExist != ''">{{userEmailExist}}</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="mobileNo" class="control-label float-right txt_media1">Mobile No :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="mobileNo" placeholder="Mobile Number" v-model="userData.mobileNo" v-validate="'numeric|min:10|max:10'" name="mobileNo" maxlength="10" @input="checkExistUser('mobile_no')">
                                        <i v-show="errors.has('mobileNo')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('mobileNo')">Please enter valid mobile number.</span>
                                         <span class="help is-danger" v-show="userMobileExist != ''">{{userMobileExist}}</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="address" class="control-label float-right txt_media1">Address :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea rows="3" class="form-control" id="address" v-model="userData.address">
                                        </textarea>
                                    </div>
                                </div>
                                 <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="password" class="control-label float-right txt_media1">Password :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" v-validate="'required|min:6'" v-model="userData.password">
                                        <i v-show="errors.has('password')" class="fa fa-warning"></i>
                                         <span class="help is-danger" v-show="errors.has('password')">Please enter valid password.</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                    <label for="confirmPassword" class="control-label float-right txt_media1">Confirm Password :</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" v-validate="'required|confirmed:password'" name="confirmPassword" v-model="userData.confirmPassword">
                                        <i v-show="errors.has('confirmPassword')" class="fa fa-warning"></i>
                                        <span class="help is-danger" v-show="errors.has('confirmPassword')">Confirm password didn't match.</span>
                                    </div>
                                </div>
                               <!-- <div class="row form-group">
				                    <div class="col-md-3">
				                        <label class="control-label float-right txt_media1" for="uploadImage">
				                            Select File :</label>
				                    </div>
				                    <div class="col-md-9">
				                        <input id="uploadImage" type="file" accept="image/*" class="file-loading">
				                    </div>
				         	  </div> -->
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
                    'userData' : {
                            	'fName':'',
                            	'lName': '',
                            	'email': '',
                            	'password': '',
                                'confirmPassword':'',
                            	'mobileNo': '',
                            	'address': '',
                                'userTypeOption':'',
                                'userType': '',
                                'departmentOption':[{text:'Neurology'},
                                              {text:'Neurosurgery'},
                                              {text:'Cardiology'},
                                              {text:'Vascular'},
                                              {text:'ONCO'},
                                              {text:'Ortho'},
                                              {text:'Others'}
                                            ],
                                'department':''
                           // 	'userIamge': ''
                    },
                    'userEmailExist' : '',
                    'userMobileExist' : ''
                }
        },
        mounted() {
            var vm = this;
            let user_type = [] ;
            //setTimeout(function(){
                $('.ls-select2').select2({
                    placeholder: "Select"
                });

                User.getUserTypesList().then(
                     (response) => {
                    $.each(response.data.data, function(key,value) {

                       user_type.push({
                         'id' : value.id,
                         'name' : value.name,
                      });
                    });

                    vm.userData.userTypeOption=user_type;
                    
                  },
                      (error) => {
                  },
                );
                  $('#userType').on('select2:selecting', function(e) {
                    vm.userData.userType =  e.params.args.data.id;
                    if(e.params.args.data.id==1)
                    {
                        setTimeout(function(){
                            $('#department').select2({
                              placeholder: "Select",
                              tags:false 
                            }); 
                            $('#department').on('select2:selecting', function(e) {
                                vm.userData.department =  e.params.args.data.text;
                            });
                         },500);
                    }
                  });
                  
            //},200);

        },
        methods: {
             initialState() {
                this.$data.userData.fName = '',
                this.$data.userData.lName =  '',
                this.$data.userData.email ='',
                this.$data.userData.password='',
                this.$data.userData.confirmPassword='',
                this.$data.userData.mobileNo ='',
                this.$data.userData.address ='',
                this.$data.userData.department ='',
                this.$data.userData.userType =''    
            },
            checkExistUser(type){ 
                let vm = this;
                if(type == 'email'){
                    var value = vm.userData.email;
                }else{
                    var value = vm.userData.mobileNo;
                }

                 User.checkExistUser(type,value).then(
                    (responce) => {
                        if(responce.data > 0){
                              if(type == 'email'){
                                 vm.userEmailExist = 'Email already exist';
                                }else{
                                    vm.userMobileExist = 'Mobile no already exist';
                                }
                              
                             }else{
                                    vm.userEmailExist ='';
                                    vm.userMobileExist = '';
                                    
                             }
                    },
                    (error) => {

                    }

                 );

             
            },
            validateBeforeSubmit() {
               
                this.$validator.validateAll().then(() => {
                    
                    if (!this.errors.any()) {
                    // if(this.$data.userData.id=="") {
                                // here we add code for Mobile user for create user
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