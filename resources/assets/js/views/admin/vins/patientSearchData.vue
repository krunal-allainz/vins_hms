<template>
	<div >
		<div class="row form-group" >
            <div class="col-md-6" >
                <div class="col-md-6 ">
                    <label for="selectType">Select Type:</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control ls-select2"  placeholder="Please select" id="select_type" name="select_type" v-model="patientSearchData.select_type">
                        <option> Select </option>
                        <option value="uhidNo">UHID No.</option>
                        <option value="mobileNo">Mobile No.</option>
                        <option value="firstName">First Name</option>
                        <option value="lastName">Last Name</option>
                        <option value="dob">DOB</option>
                    </select>
                    <i v-show="errors.has('select_type')" class="fa fa-warning"></i>
                    <span class="help is-danger" v-show="errors.has('select_type')">
                        Please select  search type.
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-6">
                    <label>Value:</label>
                </div>

                <div class="col-md-6" style="display: flex;">
                    <date-picker  :date.sync="patientSearchData.select_type_dob" :option="option" id = "select_type_dob" class="" type="date" name="select_value" :limit="limit" v-model="patientSearchData.select_type_dob.time"  :disabled="patientSearchData.case == 'old'" v-if="patientSearchData.select_type=='dob'"></date-picker>
                    
                    <input class="form-control" type="text" id="select_value" name="select_value" v-model="patientSearchData.select_value" v-else>
                    
                    <span  @click="getPatientDetailsBySearch()">
                        <i class="fa fa-search fa-2x red m-1" aria-hidden="true" style="cursor: pointer;" title="search"></i>
                    </span>
                    <i v-show="errors.has('select_value')" class="fa fa-warning"></i>
                    <span class="help is-danger" v-show="errors.has('select_value')">
                        Please enter valid value.
                    </span>
                </div>
            </div>
        </div>
         <div class="row form-group" v-if="userListLength>0">
            <div class="col-md-12">
                 <userlist :userlistData="userlistData" ></userlist>
            </div>
          </div>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import myDatepicker from 'vue-datepicker';
    import userlist from './userlistData.vue';
	import _ from 'lodash';
    export default {
    	computed:{
            
           
    	},
    	components: {
    		'date-picker': myDatepicker,
             userlist,
    	},
    	props:[],
        data() {
            return {
            	'notValid':false,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'userlistData':{},
                'userListLength':0,
                'option': {
                    type: 'day',
                    week: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
                    month: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    format: 'DD-MM-YYYY',
                    placeholder: 'Select Date',
                    inputStyle: {
                        'display': 'inline-block',
                        'padding': '6px',
                        'line-height': '22px',
                        'font-size': '16px',
                        'border': '2px solid #fff',
                        'box-shadow': '0 1px 3px 0 rgba(0, 0, 0, 0.2)',
                        'border-radius': '2px',
                        'color': '#5F5F5F',
                        'width':'100%',
                    },

                  },
                  limit: [
                  {
                    type: 'fromto',
                    to: new Date()
                  }],
                  'patientSearchData' : {
                    'select_type': '',
                    'select_value':'',
                    'select_type_dob': {
                        time:''
                    },
                    }
                
            }
        },
        mounted() {
            $('.ls-select2').select2({
                    placeholder: "Select",
                    tags: false,
                });
                let vm =this;
                $('#select_type').select2({
                                    placeholder: "Select",
                                    tags: false,
                                });
                $('#select_type').on("select2:select", function (e) {
                    vm.userlistData={};
                    vm.$root.$emit('patientEmpty',1);
                    vm.patientSearchData.select_value="";
                    vm.patientSearchData.select_type=$(this).val();
                });
			
        },
        filters:{
        	
        },
        methods: {
            getPatientDetailsBySearch(){
                var vm =this;
                var select_val="";
                if(vm.patientSearchData.select_type=='dob')
                {
                    vm.patientSearchData.select_value=vm.patientSearchData.select_type_dob.time;
                }
                
                 if(vm.patientSearchData.select_type == '' || vm.patientSearchData.select_value == '') {
                    toastr.error('Please select search type & value.', 'Search error', {timeOut: 5000});
                    return false;
                 }
                  $("body .js-loader").removeClass('d-none');
                 
                 let patData = {'select_type':vm.patientSearchData.select_type,'select_value':vm.patientSearchData.select_value,'user_id':0};
                User.generatePatientListBySearch(patData).then(
                        (response) => {
                            vm.userlistData={};
                            if(response.data.code == 200) {
                                let pData = {};
                                var pData = [{"searchdata": response.data.data,'select_type':vm.patientSearchData.select_type,'select_value':vm.patientSearchData.select_value}];
                                vm.userListLength=_.size(pData[0].searchdata);
                                vm.userlistData=pData;
                            } else if(response.data.code == 300) {
                                toastr.error('Record not found', 'Error', {timeOut: 5000});
                                this.$root.$emit('patientEmpty',1);
                            } else{
                                toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
                                this.$root.$emit('patientEmpty',1);
                            }
                             $("body .js-loader").addClass('d-none');
                        },
                        (error) => {
                             $("body .js-loader").addClass('d-none');

                })
             },
              GetSelectComponent(componentName) {
            this.$router.push({name: componentName})
          },
        	
		  }
    }
</script>
