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
				<div class="col-md-6">
					<div class = "row">
					<div class="col-md-6">
						<label class="control-label" for="label_1">Blood </label>
					</div>
					<div class="col-md-6">
							<select class="form-control ls-select2"  id="blood_report" name="blood_report"  v-model="laboratoryData.blood_report">
								 <option :value="opt.id" v-for="opt in labData" v-if="opt.l_type.includes('1')">{{opt.text}}</option>
							</select>
					</div>
				</div>
				</div>

				<div class="col-md-6">
					<div class = "row">
						<div class="col-md-6">
							<label class="control-label" for="urine">Urine </label>
						</div>
						<div class="col-md-6">
								<select class="form-control ls-select2" id="urine" name="urine"  v-model="laboratoryData.urine_report">
									 <option :value="urinesample.id" v-for="urinesample in labData" v-if="urinesample.l_type.includes('2')">{{urinesample.text}}</option>
								</select>
						</div>
				</div>
				</div>

				
			</div>

			<div class = "row form-group">
				<div class="col-md-6">
					<div class = "row">
					<div class="col-md-6">
						<label class="control-label" for="label_2">Body Fluid Analysis </label>
					</div>
					<div class="col-md-6">

							<select class="form-control ls-select2" id="body_fluid_analysis" name="body_fluid_analysis"  v-model="laboratoryData.body_fluid_analysis_report">
									 <option :value="bfa.id" v-for="bfa in labData" v-if="bfa.l_type.includes('4')">{{bfa.text}}</option>
								</select>
					</div>
				</div>
				</div>
				
				<div class="col-md-6">
					<div class = "row">
						<div class="col-md-6">
							<label class="control-label" for="stone">CSF </label>
							</div>
						<div class="col-md-6">
								<select class="form-control ls-select2" id="csf" name="csf"  v-model="laboratoryData.csf_report">
									 <option :value="csf_opt.id" v-for="csf_opt in labData" v-if="csf_opt.l_type.includes('3')">{{csf_opt.text}}</option>
								</select>
						</div>
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
	import _ from 'lodash';
    export default {
    	computed:{

    	},
    	components: {
    		Radiology
    	},
    	props:['labData'],
        data() {
            return {
            	'notValid':false,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
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
                	'blood_report':'',
                	'urine_report':'',
                	'csf_report':'',
                	'body_fluid_analysis_report':'',
                	'blood_report_val':'',
                	'urine_report_val':'',
                	'csf_report_val':'',
                	'body_fluid_analysis_report_val':'',
                	
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



	        /*for lab data start*/
	        
			$('#blood_report').on("select2:select", function (e) {
				vm.laboratoryData.blood_report = $(this).val();
				vm.laboratoryData.blood_report_val = $(this).find("option:selected").text();  
			});
			$('#urine').on("select2:select", function (e) {
				vm.laboratoryData.urine_report = $(this).val();
				vm.laboratoryData.urine_report_val = $(this).find("option:selected").text();
			});
			$('#csf').on("select2:select", function (e) {
				vm.laboratoryData.csf_report = $(this).val(); 
				vm.laboratoryData.csf_report_val = $(this).find("option:selected").text(); 
			
			});
			$('#body_fluid_analysis').on("select2:select", function (e) {
				vm.laboratoryData.body_fluid_analysis_report = $(this).val(); 
				vm.laboratoryData.body_fluid_analysis_report_val = $(this).find("option:selected").text(); 
				
			});
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
