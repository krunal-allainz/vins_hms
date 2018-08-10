<template>
	<div class="container" v-if="presp_count(prescriptData)>0">
		<h4>Prescription Print</h4>
			<div class="form-group">
			    <div class="col-md-12">
			      <div class="table-responsive">
			        <table class="table" id="">
			            <tbody>

			             <tr v-for="(res,index) in prescriptData" v-if="res.remove=='false'" :id="res.pid">

    			                <td>{{++index}} ] {{res.name}} :ORAL <span v-if="res.clock_quantity_1!='0'"> {{res.clock_quantity_1}}</span>
                                    <span v-if="res.clock_quantity_2!='0'"> <span v-if="res.clock_quantity_1!='0'"> ______</span>{{res.clock_quantity_2}}</span><span v-if="res.clock_quantity_3!='0'"> <span v-if="res.clock_quantity_1!='0' || res.clock_quantity_2!='0'"> ______</span>{{res.clock_quantity_3}}</span><span v-if="res.clock_quantity_4!='0'"><span v-if="res.clock_quantity_1!='0' || res.clock_quantity_2!='0' || res.clock_quantity_3!='0'">  ______</span>{{res.clock_quantity_4}}</span>
                                    [ <span v-if="res.clock_time_1!='00:00'"> {{res.clock_time_1}}</span><span v-if="res.clock_time_2!='00:00'"><span v-if="res.clock_time_1!='00:00'"> ______</span> {{res.clock_time_2}}</span><span v-if="res.clock_time_3!='00:00'"><span v-if="res.clock_time_1!='00:00' || res.clock_time_2!='00:00'"> ______</span> {{res.clock_time_3}}</span><span v-if="res.clock_time_4!='00:00'"><span v-if="res.clock_time_1!='00:00' || res.clock_time_2!='00:00' || res.clock_time_3!='00:00'"> ______</span>{{res.clock_time_4}}</span> ] [ <span v-if="res.clock_suggest_1!='' && res.clock_suggest_1!='--'"> {{res.clock_suggest_1}}</span><span v-if="res.clock_suggest_2!=''  && res.clock_suggest_2!='--'"> <span v-if="res.clock_suggest_1!='' && res.clock_suggest_1!='--'"> ______</span>{{res.clock_suggest_2}}</span><span v-if="res.clock_suggest_3!=''  && res.clock_suggest_3!='--'"><span v-if="(res.clock_suggest_1!='' && res.clock_suggest_1!='--') || (res.clock_suggest_2!='' && res.clock_suggest_2!='--')"> ______</span>{{res.clock_suggest_3}}</span><span v-if="res.clock_suggest_4!=''  && res.clock_suggest_4!='--'"><span v-if="(res.clock_suggest_1!='' && res.clock_suggest_1!='--') || (res.clock_suggest_2!='' && res.clock_suggest_2!='--') || (res.clock_suggest_3!='' && res.clock_suggest_3!='--')"> ______</span>{{res.clock_suggest_4}}</span> ] <i class="fa fa-close"></i>
                                 <span v-if="res.total_prescription_days!=''">{{res.total_prescription_days}} DAYS </span>
                                <span v-else>TO BE CONTINUE</span>
                            </td>
                            <td><i class="fa fa-remove" @click="removePrescript(res.pid)"></i></td> 
			              </tr>
			            </tbody>
			        </table>
			      </div>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Index</th>
                                <th>Prescription Name</th>
                                <th>How Many Days</th>
                                <th>Total Quantity</th>
                                <th>Total Days</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         <tr v-for="(res2,index) in prescriptData" v-if="res2.remove=='false'" :id="res2.pid">
                                <td>{{++index}} </td>
                                <td>{{res2.name}}</td>
                                <td>{{res2.type}}</td>
                                <td>{{res2.total_quantity}}</td>
                                <td>{{res2.total_prescription_days}}</td>
                            <td><i class="fa fa-remove" @click="removePrescript(res2.pid)"></i></td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
			    </div>
			  </div>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import myDatepicker from 'vue-datepicker';
	import _ from 'lodash';
    export default {
    	computed:{

    	},
    	components: {
    		'date-picker': myDatepicker
    	},
    	props:['prescriptData'],
        data() {
            return {
            	'notValid':false,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'lab_val_size':0,
                'prescriptDataPage': [],
                'count_false':0,
                
            }
        },
        mounted() {
            var vm=this;
          
        },
        filters:{
        	
        },
        methods: {
            presp_count(array)
            {
                var vm=this;
                var array_presp=_.filter(array, ['remove', 'false']);
                vm.count_false=array_presp.length;
                return  vm.count_false;

            },
            removePrescript(pid)
            {
                var vm=this;
                let presp_array=[];
                presp_array=vm.prescriptData;
                vm.$root.$emit('removePrescriptionByName',pid);
                 _.find(presp_array, function(res) {
                    if(res.pid == pid) {
                        res.remove = true;
                    }
                });
                vm.prescriptData=presp_array;
                var array_presp=_.filter(vm.prescriptData, ['remove', 'false']);
                vm.count_false=array_presp.length;
            }
        	
		  }
    }
</script>
