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
								 <option :value="opt.id" v-for="opt in laboratoryData.blood_option">{{opt.text}}</option>
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
									 <option :value="urinesample.id" v-for="urinesample in laboratoryData.urine_option">{{urinesample.text}}</option>
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
									 <option :value="bfa.id" v-for="bfa in laboratoryData.bfa_option">{{bfa.text}}</option>
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
									 <option :value="csf_opt.id" v-for="csf_opt in laboratoryData.csf_option">{{csf_opt.text}}</option>
								</select>
						</div>
				</div>
				</div>
			</div>

			
		</form>

		<br><br>

	<radiology></radiology>
		

	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import Radiology from './radiologyInvestigation.vue';
	import _ from 'lodash';
	let blood_list=[];
	let urine_list=[];
	let bfa_list=[];
	let csf_list=[];

    export default {
    	computed:{

    	},
    	components: {
    		Radiology
    	},
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
                	'labReportOption': [
				                	{text:'labReport_1'},
				                	{text:'labReport_2'},
				                	{text:'labReport_3'},
				                	{text:'labReport_4'},
				                	{text:'labReport_5'},
				                	{text:'labReport_6'},
				                	{text:'labReport_7'},
				                	{text:'labReport_8'},
				                	{text:'labReport_9'},
				                	{text:'labReport_10'}
                				],
                	'blood_report':'',
                	'sputum_report':'',
                	'urine_report':'',
                	'csf_report':'',
                	'body_fluid_analysis_report':'',
                	'stool_report':'',
                	'demo':'',
                	// 'selectedLabReport': [{'label_1':''},{'label_2':''}],
                	'blood_option':blood_list,
                	'sputum_option':[{text:'Sputum-Option 1'},
        							 {text:'Sputum-Option 2'},
        							 {text:'Sputum-Option 3'},
        							 {text:'Sputum-Option 4'},
        							 {text:'Sputum-Option 5'},
        							 {text:'Sputum-Option 6'},
        							 {text:'Sputum-Option 7'},
        							 {text:'Sputum-Option 8'},
        							 {text:'Sputum-Option 9'},
        							 {text:'Sputum-Option 10'}
                			],
					'urine_option': urine_list,
                	'stool_option': [{text:'stool-Option 1'},
        							 {text:'stool-Option 2'},
        							 {text:'stool-Option 3'},
        							 {text:'stool-Option 4'},
        							 {text:'stool-Option 5'},
        							 {text:'stool-Option 6'},
        							 {text:'stool-Option 7'},
        							 {text:'stool-Option 8'},
        							 {text:'stool-Option 9'},
        							 {text:'stool-Option 10'}
        					],
        			'bfa_option': bfa_list,
        			'csf_option': csf_list,
					'option_group_1':[{text:'demo-group1-value 1'},
									{text:'demo-group1-value 2'},
									{text:'demo-group1-value 3'},
									{text:'demo-group1-value 4'}
							],
					'option_group_2':[{text:'demo-group2-value 1'},
									{text:'demo-group2-value 2'},
									{text:'demo-group2-value 3'},
									{text:'demo-group2-value 4'}
							],
					'option_group_3':[{text:'demo-group3-value 1'},
									{text:'demo-group3-value 2'},
									{text:'demo-group3-value 3'},
									{text:'demo-group3-value 4'}
							],
					'option_group_4':[{text:'demo-group4-value 1'},
									{text:'demo-group4-value 2'},
									{text:'demo-group4-value 3'},
									{text:'demo-group4-value 4'}
							],
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

	        $('.ls-select2').on("select2:select", function (e) {
	        	// if(this.id == 'radiology_type') {

	        	// 	 $('#radiology_subtype').select2("destroy");
	        	// 	 // console.log(typeData);
	        	// 	vm.resultData.type = $("#radiology_type").select2().val();
	        	// 	vm.radioSubType();

	        	// } if(this.id == 'radiology_subtype') {
	        	// 	vm.resultData.subType = $("#radiology_subtype").select2().val();
	        	// }
	        	// // console.log(vm.resultData,$("#radiology_subtype").select2().val());

	        	vm.laboratoryData.label_1=$("#label_1").select2().val();
	        	vm.laboratoryData.label_2=$("#label_2").select2().val();
	        	vm.laboratoryData.urine=$("#urine").select2().val();
	        	vm.laboratoryData.stone=$("#stone").select2().val();
	        	vm.laboratoryData.demo=$("#demo").select2().val();

	        	// console.log(avail,'avail');selectedLabReport
	        	// if(avail == false){
	        	// 	var labData = [];
	        	// 	labData = vm.laboratoryData.selectedLabReport;
	        	// 	labData.push({'key':vId,'val':vVal});
	        	// 	vm.laboratoryData.selectedLabReport = labData;        		
	        	// }
	        	
	         });

	        /*for blood list start*/
	        var data_obj_blood = {name: 'type', value: '1'};
			User.generateLaboratoryData(data_obj_blood).then(
				(response) => {
					let blood_data ;
					blood_data = response.data.data;
					$.each(blood_data, function(key, value) {
						//console.log(value);
						let name = value.name;
						let id  = value.id ;
						blood_list.push({text:name, id:id });
					});
				},
				(error) => 
				{
				},
			);
			$('#blood_report').on("select2:select", function (e) {
				vm.laboratoryData.blood_report = $(this).val();  
			});
			/*for blood list end*/
			/*for urine list start*/
			var data_obj_urine = {name: 'type', value: '2'};
			User.generateLaboratoryData(data_obj_urine).then(
				(response) => {
					let urine_data ;
					urine_data = response.data.data;
					$.each(urine_data, function(key, value) {
						//console.log(value);
						let name = value.name;
						let id  = value.id ;
						urine_list.push({text:name, id:id });
					});
				},
				(error) => 
				{
				},
			);
			$('#urine').on("select2:select", function (e) {
				vm.laboratoryData.urine_report = $(this).val();  
			});
			/*for urine list end*/
			/*for csf list start*/
			var data_obj_csf = {name: 'type', value: '3'};
			User.generateLaboratoryData(data_obj_csf).then(
				(response) => {
					let csf_data ;
					csf_data = response.data.data;
					$.each(csf_data, function(key, value) {
						//console.log(value);
						let name = value.name;
						let id  = value.id ;
						csf_list.push({text:name, id:id });
					});
				},
				(error) => 
				{
				},
			);
			$('#csf').on("select2:select", function (e) {
				vm.laboratoryData.csf_report = $(this).val();  
			});
			/*for csf list end*/
			/*for bfa list start*/
			var data_obj_bfa = {name: 'type', value: '4'};
			User.generateLaboratoryData(data_obj_bfa).then(
				(response) => {
					let bfa_data ;
					bfa_data = response.data.data;
					$.each(bfa_data, function(key, value) {
						//console.log(value);
						let name = value.name;
						let id  = value.id ;
						bfa_list.push({text:name, id:id });
					});
				},
				(error) => 
				{
				},
			);
			$('#body_fluid_analysis').on("select2:select", function (e) {
				vm.laboratoryData.body_fluid_analysis_report = $(this).val();  
			});
			/*for bfa list end*/
			
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
