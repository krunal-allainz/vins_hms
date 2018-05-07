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
						<label class="control-label" for="label_1">Label 1 </label>
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
						<label class="control-label" for="label_2">Label 2 </label>
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
							<label class="control-label" for="stone">Stone </label>
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
		<h4>Radiology:</h4>


		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#x_rays">X-Rays</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#ct">CT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#mri">MRI</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#doppler">Doppler</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#others">Others</a>
			</li>
		</ul>
		<br><br>
		<div class="tab-content">
			<div id="x_rays" class="tab-pane fade in active">
				<h3 class="">X-Rays</h3>
				<p>
					<table class="table table-bordered table-striped">
						<tr>
							<td>X-Ray 1</td>
							<td>
								<input type="file" class="form-control" name="x_ray_1" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_1_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_1">Save x_ray_1</button>
							</td>
						</tr>
						<tr>
							<td>X-Ray 2</td>
							<td>
								<input type="file" class="form-control" name="x_ray_2" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_2_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_2">Save x_ray_2</button>
							</td>
						</tr>
						<tr>
							<td>X-Ray 3</td>
							<td>
								<input type="file" class="form-control" name="x_ray_3" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_3_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_3">Save x_ray_3</button>
							</td>
						</tr>
						<tr>
							<td>X-Ray 4</td>
							<td>
								<input type="file" class="form-control" name="x_ray_4" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_4_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_4">Save x_ray_4</button>
							</td>
						</tr>
						<tr>
							<td>X-Ray 5</td>
							<td>
								<input type="file" class="form-control" name="x_ray_5" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_5_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_5">Save x_ray_5</button>
							</td>
						</tr>
						<tr>
							<td>X-Ray 6</td>
							<td>
								<input type="file" class="form-control" name="x_ray_6" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_6_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_6">Save x_ray_6</button>
							</td>
						</tr>
						<tr>
							<td>X-Ray 7</td>
							<td>
								<input type="file" class="form-control" name="x_ray_7" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_7_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_7">Save x_ray_7</button>
							</td>
						</tr>
						<tr>
							<td>X-Ray 8</td>
							<td>
								<input type="file" class="form-control" name="x_ray_8" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="x_ray_8_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_x_ray_8">Save x_ray_8</button>
							</td>
						</tr>
					</table>
				</p>
				<div class="row">
					<div class="col-md-3">
						<label>Select </label>
					</div>
					<div class="col-md-6">
						<select class="form-control ls-select2" id="xrays" v-model="investigationData.x_rays">
							<option :value="xray.text"  v-for="xray in investigationData.x_rays_options">{{xray.text}}</option>
						</select>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-6">
						<input type="file" class="form-control" name="ct_1" accept="image/*">
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="ct_1_name" value="" >
						<button class="form-control" name="save_ct_1">Save ct_1</button>
					</div>
				</div>
			</div>
		 	<div id="ct" class="tab-pane fade">
				<h3 class="">CT</h3>
				<p>
					<table class="table table-bordered table-striped">
						<tr>
							<td>CT 1</td>
							<td>
								<input type="file" class="form-control" name="ct_1" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_1_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_ct_1">Save ct_1</button>
							</td>
						</tr>
						<tr>
							<td>CT 2</td>
							<td>
								<input type="file" class="form-control" name="ct_2" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_2_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_ct_2">Save ct_2</button>
							</td>
						</tr>
						<tr>
							<td>CT 3</td>
							<td>
								<input type="file" class="form-control" name="ct_3" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_3_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_ct_3">Save ct_3</button>
							</td>
						</tr>
						<tr>
							<td>CT 4</td>
							<td>
								<input type="file" class="form-control" name="ct_4" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_4_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_ct_4">Save ct_4</button>
							</td>
						</tr>
						<tr>
							<td>CT 5</td>
							<td>
								<input type="file" class="form-control" name="ct_5" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_5_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_ct_5">Save ct_5</button>
							</td>
						</tr>
						<tr>
							<td>CT 6</td>
							<td>
								<input type="file" class="form-control" name="ct_6" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_6_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_ct_6">Save ct_6</button>
							</td>
						</tr>
						<tr>
							<td>CT 7</td>
							<td>
								<input type="file" class="form-control" name="ct_7" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_7_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_ct_7">Save ct_7</button>
							</td>
						</tr>
						<tr>
							<td>CT 8</td>
							<td>
								<input type="file" class="form-control" name="ct_8" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="ct_8_name" value="" >
							</td>
							<td>
								<button class="form-control" name="save_ct_8">Save ct_8</button>
							</td>
						</tr>
					</table>
				</p>
			</div>
			<div id="mri" class="tab-pane fade">
				<h3 class="">MRI</h3>
				<p>
					<table class="table table-bordered table-striped">
						<tr>
							<td>MRI 1</td>
							<td>
								<input type="file" class="form-control" name="mri_1" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_1_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_1">Save mri_1</button>
							</td>
						</tr>
						<tr>
							<td>MRI 2</td>
							<td>
								<input type="file" class="form-control" name="mri_2" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_2_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_2">Save mri_2</button>
							</td>
						</tr>
						<tr>
							<td>MRI 3</td>
							<td>
								<input type="file" class="form-control" name="mri_3" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_3_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_3">Save mri_3</button>
							</td>
						</tr>
						<tr>
							<td>MRI 4</td>
							<td>
								<input type="file" class="form-control" name="mri_4" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_4_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_4">Save mri_4</button>
							</td>
						</tr>
						<tr>
							<td>MRI 5</td>
							<td>
								<input type="file" class="form-control" name="mri_5" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_5_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_5">Save mri_5</button>
							</td>
						</tr>
						<tr>
							<td>MRI 6</td>
							<td>
								<input type="file" class="form-control" name="mri_6" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_6_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_6">Save mri_6</button>
							</td>
						</tr>
						<tr>
							<td>MRI 7</td>
							<td>
								<input type="file" class="form-control" name="mri_7" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_7_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_7">Save mri_7</button>
							</td>
						</tr>
						<tr>
							<td>MRI 8</td>
							<td>
								<input type="file" class="form-control" name="mri_8" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="mri_8_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_mri_8">Save mri_8</button>
							</td>
						</tr>
					</table>
				</p>
			</div>
			<div id="doppler" class="tab-pane fade">
				<h3>Doppler</h3>
				<p>
					<table class="table table-bordered table-striped">
						<tr>
							<td>Doppler 1</td>
							<td>
								<input type="file" class="form-control" name="doppler_1" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_1_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_doppler_1">Save doppler_1</button>
							</td>
						</tr>
						<tr>
							<td>Doppler 2</td>
							<td>
								<input type="file" class="form-control" name="doppler_2" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_2_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_doppler_2">Save doppler_2</button>
							</td>
						</tr>
						<tr>
							<td>Doppler 3</td>
							<td>
								<input type="file" class="form-control" name="doppler_3" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_3_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_doppler_3">Save doppler_3</button>
							</td>
						</tr>
						<tr>
							<td>Doppler 4</td>
							<td>
								<input type="file" class="form-control" name="doppler_4" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_4_name" value="" >
							</td>
							<td>
								<button class="form-control" name="save_doppler_4">Save doppler_4</button>
							</td>
						</tr>
						<tr>
							<td>Doppler 5</td>
							<td>
								<input type="file" class="form-control" name="doppler_5" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_5_name" value="" >
							</td>
							<td>
								<button class="form-control" name="save_doppler_5">Save doppler_5</button>
							</td>
						</tr>
						<tr>
							<td>Doppler 6</td>
							<td>
								<input type="file" class="form-control" name="doppler_6" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_6_name" value="" >
							</td>
							<td>
								<button class="form-control" name="save_doppler_6">Save doppler_6</button>
							</td>
						</tr>
						<tr>
							<td>Doppler 7</td>
							<td>
								<input type="file" class="form-control" name="doppler_7" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_7_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_doppler_7">Save doppler_7</button>
							</td>
						</tr>
						<tr>
							<td>Doppler 8</td>
							<td>
								<input type="file" class="form-control" name="doppler_8" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="doppler_8_name" value="" >
							</td>
							<td>
								<button class="form-control" name="save_doppler_8">Save doppler_8</button>
							</td>
						</tr>
					</table>
				</p>
			</div>
			<div id="others" class="tab-pane fade">
				<h3>Others</h3>
				<p>
					<table class="table table-bordered table-striped">
						<tr>
							<td>Others 1</td>
							<td>
								<input type="file" class="form-control" name="others_1" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="others_1_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_others_1">Save others_1</button>
							</td>
						</tr>
						<tr>
							<td>Others 2</td>
							<td>
								<input type="file" class="form-control" name="others_2" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="others_2_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_others_2">Save others_2</button>
							</td>
						</tr>
						<tr>
							<td>Others 3</td>
							<td>
								<input type="file" class="form-control" name="others_3" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="others_3_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_others_3">Save others_3</button>
							</td>
						</tr>
						<tr>
							<td>Others 4</td>
							<td>
								<input type="file" class="form-control" name="others_4" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="others_4_name" value=">
							</td>
							<td>
								<button class="form-control" name="save_others_4">Save others_4</button>
							</td>
						</tr>
						<tr>
							<td>Others 5</td>
							<td>
								<input type="file" class="form-control" name="others_5" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="others_5_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_others_5">Save others_5</button>
							</td>
						</tr>
						<tr>
							<td>Others 6</td>
							<td>
								<input type="file" class="form-control" name="others_6" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="others_6_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_others_6">Save others_6</button>
							</td>
						</tr>
						<tr>
							<td>Others 7</td>
							<td>
								<input type="file" class="form-control" name="others_7" accept="image/*"  >
							</td>
							<td>
								<input type="text" class="form-control" name="others_7_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_others_7">Save others_7</button>
							</td>
						</tr>
						<tr>
							<td>Others 8</td>
							<td>
								<input type="file" class="form-control" name="others_8" accept="image/*">
							</td>
								<td>
								<input type="text" class="form-control" name="others_8_name" value="">
							</td>
							<td>
								<button class="form-control" name="save_others_8">Save others_8</button>
							</td>
						</tr>
					</table>
				</p>
			</div>
		</div>
	</div>
</template>
<script >
	import User from '../../../api/users.js';
	import _ from 'lodash';

    export default {
        data() {
            return {
            	'notValid':false,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'deleteConfirmMsg': 'Are you sure you would like to delete this referee? All information associated with this referee will be permanently deleted.',
                'investigationData' : {
                	'neurology': {
                		'radiology':{
	                		'x-rays': {
		                		'value': '',
		                		'x-rays-options' : {
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
                	'label_1_option':[{text:'label1-Option 1'},
        							 {text:'label1-Option 2'},
        							 {text:'label1-Option 3'},
        							 {text:'label1-Option 4'},
        							 {text:'label1-Option 5'},
        							 {text:'label1-Option 6'},
        							 {text:'label1-Option 7'},
        							 {text:'label1-Option 8'},
        							 {text:'label1-Option 9'},
        							 {text:'label1-Option 10'}
                			],
                	'label_2_option':[{text:'label2-Option 1'},
        							 {text:'label2-Option 2'},
        							 {text:'label2-Option 3'},
        							 {text:'label2-Option 4'},
        							 {text:'label2-Option 5'},
        							 {text:'label2-Option 6'},
        							 {text:'label2-Option 7'},
        							 {text:'label2-Option 8'},
        							 {text:'label2-Option 9'},
        							 {text:'label2-Option 10'}
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
                	'stone_option': [{text:'stone-Option 1'},
        							 {text:'stone-Option 2'},
        							 {text:'stone-Option 3'},
        							 {text:'stone-Option 4'},
        							 {text:'stone-Option 5'},
        							 {text:'stone-Option 6'},
        							 {text:'stone-Option 7'},
        							 {text:'stone-Option 8'},
        							 {text:'stone-Option 9'},
        							 {text:'stone-Option 10'}
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
                	'x_rays':'',
                	'x_rays_options':[
								 {text:'x-rays-Option 1'},
								 {text:'x-rays-Option 2'},
								 {text:'x-rays-Option 3'},
								 {text:'x-rays-Option 4'},
								 {text:'x-rays-Option 5'},
								 {text:'x-rays-Option 6'},
								 {text:'x-rays-Option 7'},
								 {text:'x-rays-Option 8'}
                			 ],
                	'ct':'',		 
                	'ct_options':[
                			{text:'ct-Option 1'},
							{text:'ct-Option 2'},
							{text:'ct-Option 3'},
							{text:'ct-Option 4'},
							{text:'ct-Option 5'},
							{text:'ct-Option 6'},
							{text:'ct-Option 7'},
							{text:'ct-Option 8'}
                		 ],
                	'mri':'',
                	'mri_options':[
                			 {text:'mri-Option 1'},
							 {text:'mri-Option 2'},
							 {text:'mri-Option 3'},
							 {text:'mri-Option 4'},
							 {text:'mri-Option 5'},
							 {text:'mri-Option 6'},
							 {text:'mri-Option 7'},
							 {text:'mri-Option 8'}
                		 ],
                	'doppler':'',
                	'doppler_options':[
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
	        //   $('.ls-select2').on("select2:select", function (e) { 
	        //     if(this.id == 'label_1'){
	        //     	vm.laboratoryData.label_1=$(this).val();
	        //     }
	        //     else if(this.id == 'label_2'){
	        //     	vm.laboratoryData.label_2=$(this).val();	
	        //     }
	        //     else if(this.id == 'urine'){
	        //     	vm.laboratoryData.urine=$(this).val();		
	        //     }
	        //     else if(this.id == 'stone') {
	        //     	vm.laboratoryData.stone=$(this).val();			
	        //     }
	        //     else if(this.id == 'demo'){
	        //     	vm.laboratoryData.demo=$(this).val();			
	        //     }
	        //     else if(this.id='xrays'){
	        //     	vm.laboratoryData.demo=$(this).val();			
	        //     }

	        // });
	        $('.ls-select2').on("select2:select", function (e) {
	        	// var vId = this.id;
	        	// var vVal = $("#label_1").select2().val();
	    	    // _.find(vm.laboratoryData.selectedLabReport,function(val) {
	        	// 		console.log(val,vId);		
	        	// 	if(val.key  == vId){
	        	// 		console.log(val.key);
	        	// 		val.text = vVal;
	        	// 	}
	        	// });
	        	// vm.laboratoryData.selectedLabReport = $("#label_1").select2().val();
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
