<template>
	<div class="container">
		<div class="page-header">

			<div class=" row col-md-6">
			<h1>Laboratory Form</h1>
			</div>

		</div>

		<form method = "post" >
			<div class="row form-group">
				<div class="col-md-6">
					<div class = "row">
					<div class="col-md-6">
						<label class="control-label" for="label_1">Blood </label>
					</div>
					<div class="col-md-6">
							<select class="form-control ls-select2"  id="label_1" name="label_1"  v-model="laboratoryData.label_1">
								 <option :value="label1.text" v-for="label1 in laboratoryData.label_1_option">{{label1.text}}</option>
							</select>
					</div>
				</div>
				</div>

				<div class="col-md-6">
					<div class = "row">
					<div class="col-md-6">
						<label class="control-label" for="label_2">Sputum </label>
					</div>
					<div class="col-md-6">

							<select class="form-control ls-select2"  id="label_2" name="label_2" multiple="multiple" >
								 <option :value="label_2.text"  v-for="label_2 in laboratoryData.label_2_option">{{label_2.text}}</option>
								 <option></option>
							</select>
					</div>
				</div>
				</div>
			</div>

			<div class = "row form-group">

				<div class="col-md-6">
					<div class = "row">
						<div class="col-md-6">
							<label class="control-label" for="urine">Urine </label>
						</div>
						<div class="col-md-6">
								<select class="form-control ls-select2" multiple="multiple" id="urine" name="urine" >
									 <option :value="urinesample.text" v-for="urinesample in laboratoryData.urine_option">{{urinesample.text}}</option>
								</select>
						</div>
				</div>
				</div>
				<div class="col-md-6">
					<div class = "row">
						<div class="col-md-6">
							<label class="control-label" for="stone">Stool </label>
							</div>
						<div class="col-md-6">
								<select class="form-control ls-select2"  id="stone" name="stone" multiple="multiple" >
									 <option :value="stonesample.text" v-for="stonesample in laboratoryData.stone_option">{{stonesample.text}}</option>
								</select>
						</div>
				</div>
				</div>
			</div>

			<div class = "row form-group">
				<div class = "col-md-6">
				<div class = "row">
				<div class = "col-md-6">
					<label class = "control-label" for = "demo"> Demo </label>
				</div>
					<div class = "col-md-6">
					<select class = "form-control ls-select2" id = "demo" name = "demo"  multiple="multiple">
						<optgroup label = "Option-Group1">
							<option :value = "optGroup1.text" v-for="optGroup1 in laboratoryData.option_group_1">{{optGroup1.text}}
							</option>
						</optgroup>
						<optgroup label = "Option-Group2">
							<option :value = "optGroup2.text" v-for="optGroup2 in laboratoryData.option_group_2">{{optGroup2.text}}
							</option>
						</optgroup>
						<optgroup label = "Option-Group3">
							<option :value = "optGroup3.text" v-for="optGroup3 in laboratoryData.option_group_3">{{optGroup3.text}}
							</option>
						</optgroup>
						<optgroup label = "Option-Group4">
							<option :value = "optGroup4.text" v-for="optGroup4 in laboratoryData.option_group_4">{{optGroup4.text}}
							</option>
						</optgroup>
					</select>
				</div>
			</div>
		</div>
	</div>
		</form>

		<br><br>
		<div class="row form-group">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h3>Suggested Reports: </h3>
							</div>
							<div class="col-md-6">
								<hr>
									<span v-for="(list1,index in laboratoryData.label_1">{{list1 | reportDisplay(index)}}</span>
									<span v-for="(list2,index in laboratoryData.label_2">{{list2 | reportDisplay(index)}}</span>
									<span v-for="(urineList,index in laboratoryData.urine">{{urineList | reportDisplay(index)}}</span>
									<span v-for="(stoneList,index in laboratoryData.stone">{{stoneList | reportDisplay(index)}}</span>
									<span v-for="(demoList,index in laboratoryData.demo">{{demoList | reportDisplay(index)}}</span>
									
									<span v-for="(listData,index) in laboratoryData.checkboxList">
										<span>{{listData | reportDisplay(index)}}</span>
									</span>
								<hr>
							</div>
						</div>
					</div>
				</div>
		<hr>
		<!-- <h4>Radiology:</h4> -->

	<!-- <div class="row form-group">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<label>Select Radiology:</label><br>
					<select class = "form-control ls-select2" id = "radiology_type" name = "radiology_type" >
						<option v-for="type in investigationData.radiologyType" :value="type.value">{{type.text}}</option>
					</select>
				</div>

				<div class="col-md-2">
					<label>Select SubType:</label><br>
					<select class = "form-control ls-select2" id = "radiology_subtype" name = "radiology_subtype" >
						<option v-for="obj in investigationData.radiologySubType" :value="obj.text">{{obj.text}}</option>
					</select>
					
				</div>
				<div class="col-md-2">
					<label>Select Qualifires:</label><br>
					<select class = "form-control ls-select2" id = "radiology_qualifier" name = "radiology_qualifier" >
						<option v-for="obj in investigationData.radiologySubType" :value="obj.text">{{obj.text}}</option>
					</select>
					
				</div>
			</div>
		</div>
	</div> -->
	<radiology></radiology>
		

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
                	'label_1':'',
                	'label_2':'',
                	'urine':'',
                	'stone':'',
                	'demo':'',
                	// 'selectedLabReport': [{'label_1':''},{'label_2':''}],
                	'blood_option':[{text:'Blood-Option 1'},
        							 {text:'Blood-Option 2'},
        							 {text:'Blood-Option 3'},
        							 {text:'Blood-Option 4'},
        							 {text:'Blood-Option 5'},
        							 {text:'Blood-Option 6'},
        							 {text:'Blood-Option 7'},
        							 {text:'Blood-Option 8'},
        							 {text:'Blood-Option 9'},
        							 {text:'Blood-Option 10'}
                			],
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
					'urine_option': [{text:'urine-Option 1'},
									 {text:'urine-Option 2'},
									 {text:'urine-Option 3'},
									 {text:'urine-Option 4'},
									 {text:'urine-Option 5'},
									 {text:'urine-Option 6'},
									 {text:'urine-Option 7'},
									 {text:'urine-Option 8'},
									 {text:'urine-Option 9'},
									 {text:'urine-Option 10'}
							 ],
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
