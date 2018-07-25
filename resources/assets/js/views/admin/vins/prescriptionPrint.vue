<template>
	<div class="container">
		<h4>Prtescription Print</h4>

			<div class="form-group" v-if="prescriptData.length>0">
			    <div class="col-md-12">
			      <div class="table-responsive">
			        <table class="table" id="">
			            <tbody>
			             <tr v-for="(res,index) in prescriptData" v-if="res.remove=='false'" :id="res.pid">
    			                <td>{{++index}} ] {{res.name}} :ORAL {{res.clock_quantity_1}}______{{res.clock_quantity_2}}______{{res.clock_quantity_3}} [ {{res.clock_time_1}}______{{res.clock_time_2}}______{{res.clock_time_3}} ] [ {{res.clock_suggest_1}}______{{res.clock_suggest_2}}______{{res.clock_suggest_3}} ] <i class="fa fa-close"></i>
                                 <span v-if="res.total_prescription_days!=''">{{res.total_prescription_days}} DAYS </span>
                                <span v-else>TO BE CONTINUE</span>
                            </td>
                            <td><i class="fa fa-remove" @click="removePrescript(res.pid)"></i></td></td> 
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
                
            }
        },
        mounted() {
			
        },
        filters:{
        	
        },
        methods: {
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
            }
        	
		  }
    }
</script>
