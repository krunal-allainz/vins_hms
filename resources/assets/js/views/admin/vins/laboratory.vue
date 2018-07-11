<template>
	<div class="container">
		<div class="page-header">

			<div class=" row text-center">
			<h3>Investigation</h3>
			</div>

		</div>
		<h4>Lab Report</h4>
		<form method = "post" >
			<div class="row form-group">
				<div class="col-md-12">
					<div class = "row">
					<div class="col-md-3">
						<label class="control-label" for="label_1">Laboratory </label>
					</div>
					<div class="col-md-9">
							<select class="form-control ls-select2"  id="laboratory_report" name="laboratory_report[]" multiple="multiple">
							</select>
					</div>
				</div>
				</div>
			</div>
			<div id="TextBoxContainer">
    				<!--Textboxes will be added here -->
			</div>
			<div v-if='lab_val_size>0'>
				<div class="row form-group">
					<div class="col-md-12">
						<div class="col-md-12">
							<input type="button" name="add_lab" class="btn btn-primary" value="Add" @click="saveLaboratoryTable()">
						</div>
					</div>
				</div>
			</div>
			<div class="form-group" v-if="finalLaboratoryData.length>0">
			    <div class="col-md-12">
			      <div class="table-responsive">
			        <table class="table table-striped table-bordered" id="laboratory_table_list">
			            <thead>
			            <tr>
			                <th>#</th>
			                <th>Name</th>
			                <th>Date</th>
			                <th>Result</th>
			                <th>Assigning Dr</th>
			                <!-- <th>Action</th> -->
			            </tr>
			            </thead>
			            <tbody>
			             <tr v-if="res.removed == false" :id="res.tr_id" v-for="(res,index) in finalLaboratoryData">
			                <td>{{res.id}}</td> 
			                <td>{{res.name }}</td>
			                <td>{{res.date}}</td>
			                <td>{{res.result}}</td>
			                <td>{{res.assigning_dr}}</td>
			                <!-- <td> <i class="fa fa-remove" @click="removeLaboratory(res.id)"></i></td> -->
			              </tr>

			            </tbody>
			        </table>
			      </div>
			      
			    </div>
			  </div>
			
		</form>

		<br><br>

	<radiology></radiology>
		<div class="row form-group">
        <div class="col-md-6">
          <button type="button" class="btn btn-primary btn-submit text-right " @click="prev()" >Previous</button>
          <button type="button" class="btn btn-primary btn-submit text-right ml-10" @click="next()" >Next</button>
         <!--  <button type="button" class="btn btn-primary btn-submit text-right " v-if="curStep==3" @click="saveInformation()">Submit</button> -->
        </div>
      </div>

	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import Radiology from './radiologyInvestigation.vue';
	import myDatepicker from 'vue-datepicker';
	import _ from 'lodash';
    export default {
    	computed:{

    	},
    	components: {
    		'date-picker': myDatepicker,
    		Radiology
    	},
    	props:['labData'],
        data() {
            return {
            	'notValid':false,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'lab_val_size':0,
                'finalLaboratoryData':[],
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
                'resultData': {
                	'type': '',
                	'subType': ''

                },
                'investigationData' : {
                	'neurology': {
                		'radiology':{
	                		'x-rays': {
		                		'value': '',
		                		'x-rays_options' : {
		                			text:'fixed',
		                			text:'portable'
		                		}
		                	}
                		}
                	},
                	'ortho': {

                	},
                	'vascular': {

                	},
                	'cardio': {

                	},
                },
                'laboratoryData': {
                	'checkboxList':[],
                	'laboratory_report':[],
                	'laboratory_report_val':[],
                	'lab_date':[],
                	'lab_name':[],
                	'lab_result':[],
                	'lab_assigning_dr':[],
                },
                'investigationData':{
                	'radiologyType':[
                		{text:'',value:''},
	                	{text:'X-Rays',value:'x_rays'},
	                	{text:'CT',value:'ct'},
	                	{text:'MRI',value:'mri'},
	                	{text:'Doppler',value:'doppler'},
	                	{text:'Other',value:'other'}
                	],
                	'radiologySubType':[
                			{text:'',value:''},
                			{text:'Fixed',value:'fixed'},
							{text:'Portable',value:'portable'}
						],
                	'x_rays':'',
                	'x_rays_options':[
						 {text:'', value:''},
						 {text:'Fixed', value:'fixed'},
						 {text:'Portable', value:'portable'},
					 ],
                	'ct':'',		 
                	'ct_options':[
                			{text:'',value:''},
                			{text:'Brain (Plain)', value:'brain_plain'},
                			{text:'Brain (Plain & Contrast)', value:'brain_plain_contrast'},
                			{text:'Neck', value:'neck'},
                			{text:'Chest', value:'chest'},
                			{text:'Upper Abdomen', value:'upper_abdomen'},
                			{text:'Pelvis', value:'pelvis'},
                			{text:'Whole Abdomen', value:'whole_abdomen'},
                			{text:'CT Angiography', value:'ct_angiography'},
                			{text:'Guided Procedure:Biopsy', value:'guided_procedure'},
                		 ],
                	'mri':'',
                	'mri_options':[
                			{text:'',value:''},
                			 {text:'Brain', value:'brain'},
                			 {text:'Spine', value:'spine'},
                			 {text:'Joint', value:'joint'},
                			 {text:'Other', value:'other'},
                			 {text:'Protocol', value:'protocol'}
                		 ],
                	'doppler':'',
                	'doppler_options':[
                				{text:'',value:''},
                			 	 {text:'doppler-Option 1'},
								 {text:'doppler-Option 2'},
								 {text:'doppler-Option 3'},
								 {text:'doppler-Option 4'},
								 {text:'doppler-Option 5'},
								 {text:'doppler-Option 6'},
								 {text:'doppler-Option 7'},
								 {text:'doppler-Option 8'}
                			  ],
                	'others':'',
                	'others_options':[
                			 	{text:'',value:''},
                			 	 {text:'other-Option 1'},
								 {text:'other-Option 2'},
								 {text:'other-Option 3'},
								 {text:'other-Option 4'},
								 {text:'other-Option 5'},
								 {text:'other-Option 6'},
								 {text:'other-Option 7'},
								 {text:'other-Option 8'}
                			 ]
                }
            }
        },
        mounted() {
        	let vm =this;
				$('.ls-select2').select2({
					 placeholder: "Select",

			  });

			$('#laboratory_report').select2({data:this.labData});

	        /*for lab data start*/
	        
			$('#laboratory_report').on("select2:select", function (e) {
				vm.laboratoryData.laboratory_report=$(this).val();
				vm.labDataDetails($(this).val());
				  
			});
			$('#laboratory_report').on("select2:unselecting", function (e) {
				 var  unselected_value= e.params.args.data.id;
				 $('#lab_div_'+unselected_value).remove();
				 $('#lab_tr_'+unselected_value).remove();
			}).trigger('change');

			/*for lab data end*/
			setTimeout(function(){
				vm.initData();
			},1000)
			
        },
        filters:{
        	reportDisplay: function (value,index){	
        		if (!value) 	return '';
        		if(index > 0){
	        		return "," + value ;
	        	} else {
	        		return value;
	        	}
        	}
        },
        methods: {
        	labDataDetails(lab_val)
        	{
        		let vm =this;
        		if(lab_val.length>0)
        		{
        			vm.lab_val_size=lab_val.length;
        			
        				let div = document.createElement('DIV');
        				let lab_final_val=lab_val[lab_val.length-1];
    					div.innerHTML = this.getDynamicTextBox(lab_final_val);
    					document.getElementById("TextBoxContainer").appendChild(div);
        			
        		}
        	},
        	getDynamicTextBox(value)
        	{
        		var lab_name= $("#laboratory_report option[value='"+value+"']").text();
        		let lab_data='<div id="lab_div_'+value+'"> <div class="row form-group"> <div class="col-md-3"> <div class="col-md-12"> <label class="control-label" for="label_1">Name </label> </div> <div class="col-md-12"> <input type="text"  name="lab_name[]" id="lab_name_id" value="'+lab_name+'" class="form-control lab_name" readonly="readonly"> </div> </div> <div class="col-md-3"> <div class="col-md-12"> <label class="control-label" for="label_1">Date </label> </div> <div class="col-md-12"> <date-picker :date.sync="laboratoryData.lab_date"  :option="option" id = "lab_date_id" class="lab_date" type="text" name="lab_date[]" :limit="limit"></date-picker> </div> </div> <div class="col-md-3"> <div class="col-md-12"> <label class="control-label" for="label_1">Result </label> </div> <div class="col-md-12"> <input type="text"   name="lab_result[]" id="lab_result_id" class="form-control lab_result" > </div> </div> <div class="col-md-3"> <div class="col-md-12"> <label class="control-label" for="label_1">Assign Dr </label> </div> <div class="col-md-12"> <input type="text" name="lab_assign_dr[]"   id="lab_assign_dr_id" class="form-control lab_assign_dr" v-model="opdData.lab_assign_dr"> </div> </div>  </div>'; return lab_data; 
        	},
        	 saveLaboratoryTable() {
             	let vm =this;
                let lab_report_array=[];
                lab_report_array=vm.laboratoryData.laboratory_report;
                let i=0;
                //for lab date
                let lab_date_array=[];
				$('.lab_date').each(function(){
						lab_date_array.push($(this).val());
				});
        		vm.laboratoryData.lab_date=lab_date_array;
        		let lab_date_val_array=vm.laboratoryData.lab_date;
        		//for lab result
        		let lab_result_array=[];
				$('.lab_result').each(function(){
						lab_result_array.push($(this).val());
				});
        		vm.laboratoryData.lab_result=lab_result_array;
        		let lab_result_val_array=vm.laboratoryData.lab_result;
        		//for assigning dr
        		let lab_assigning_dr_array=[];
				$('.lab_assign_dr').each(function(){
						lab_assigning_dr_array.push($(this).val());
				});
        		vm.laboratoryData.lab_assigning_dr=lab_assigning_dr_array;
        		let lab_assigning_dr_val_array=vm.laboratoryData.lab_assigning_dr;

                if(lab_report_array.length>0)
                {
                	let finalLaboratoryDataAll=[];
                	for(i=0;i<lab_report_array.length;i++)
                	{

						var lab_text= $("#laboratory_report option[value='"+lab_report_array[i]+"']").text();
                		finalLaboratoryDataAll.push({
                            'id' : lab_report_array[i],
                            'name' : lab_text,
                            'date' : lab_date_val_array[i],
                            'result' : lab_result_val_array[i],
                            'assigning_dr'  :lab_assigning_dr_val_array[i],
                            'removed': false,
                            'tr_id': 'lab_tr_'+lab_report_array[i],
                		});
                		vm.finalLaboratoryData=finalLaboratoryDataAll;
                	}
                }
          },
          removeLaboratory(did) {
                let vm =this;
                _.find(vm.finalLaboratoryData, function(res) {
                    if(res.id == did) {
                      var index = vm.finalLaboratoryData.indexOf(res);
                      vm.finalLaboratoryData.splice(index, 1);
                      $('#lab_div_'+res.id).remove();
                      //$('#laboratory_report').select2('val', res.id);
                    }
                });
          },
			prev() {
              let vm =this;
			vm.$store.dispatch('saveLabReportData',vm.laboratoryData);

              vm.$root.$emit('prev');
          },
          next() {

          	let vm =this;
			vm.$store.dispatch('saveLabReportData',vm.laboratoryData);
          	
              vm.$root.$emit('next');

          },
         initData() {
          	let vm =this;
          	vm.laboratoryData.blood_report = _.cloneDeep(this.$store.state.Patient.laboratoryData.blood_report);
          	vm.laboratoryData.urine_report = _.cloneDeep(this.$store.state.Patient.laboratoryData.urine_report);
          	vm.laboratoryData.csf_report = _.cloneDeep(this.$store.state.Patient.laboratoryData.csf_report);
          	vm.laboratoryData.body_fluid_analysis_report = _.cloneDeep(this.$store.state.Patient.laboratoryData.body_fluid_analysis_report);
          	$('#blood_report').val(this.$store.state.Patient.laboratoryData.blood_report).trigger('change');
          	$('#urine').val(this.$store.state.Patient.laboratoryData.urine_report).trigger('change');
          	$('#csf').val(this.$store.state.Patient.laboratoryData.csf_report).trigger('change');
          	$('#body_fluid_analysis').val(this.$store.state.Patient.laboratoryData.body_fluid_analysis_report).trigger('change');



          },
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveLaboratory() {
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
				    	User.saveLaboratory(this.laboratoryData).then(
		                (response) => {
		                	if(response.data.code == 200) {
		                		toastr.success('Laboratory data has been successfully saved', 'laboratory detail', {timeOut: 5000});
		                	} else if(response.data.code == 300) {
		                		toastr.error('Record not found', 'Error', {timeOut: 5000});
		                	} else{
		                	 toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
		                	}
		                	 $("body .js-loader").addClass('d-none');
		                },
		                (error) => {
		        	       	 $("body .js-loader").addClass('d-none');
		                }
		                )
			    	}
			    },
                (error) => {
                }
                )
			}
		  }
    }
</script>
