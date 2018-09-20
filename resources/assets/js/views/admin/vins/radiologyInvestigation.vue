<template>
<div>
	<h4>Radiology:</h4>

    	<div class="row form-group" id="radio_div">
    		<div class="col-md-12">
    			<div class="row form-group">
    				<div class="col-md-6">
    					<label>Select Radiology:</label><br>
    					<select class = "form-control ls-select2" id = "radiology_type" name = "radiology_type" v-validate="'required'">
    						<option v-for="type in investigationData.radiologyType" :value="type.value">{{type.text}}</option>
    					</select>
                        <span class="help is-danger" v-show="errors.has('radiology_type')">
                            Field is required
                        </span>
                    </div>
                     <div class="col-md-6">
                        <div class="col-md-12" v-if="resultData.type=='other'">
                          <label> Other Parts</label>
                          <input type="text" name="radiology_other_text" id="radiology_other_text" class="form-control" v-model="resultData.radiologyOther">
                        </div>
                    </div>
                   
                 </div>
                  <div class="row form-group">
                    <div class="col-md-6">
                        <label>Body Part Side:</label><br>
                        <select class = "form-control ls-select2" id = "body_part_side" name = "body_part_side">
                            <option v-for="bps in investigationData.bodyPartSide" :value="bps.value">{{bps.text}}</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
    				<div class="col-md-6" v-if="resultData.body_part_text==false">
    					<label>Body Parts:</label><br>
    					<select class = "form-control ls-select2" id = "radiology_subtype" name = "radiology_subtype" v-validate="'required'">
    						<option v-for="obj in investigationData.radiologySubType" :value="obj.text">{{obj.text}}</option>
    					</select>
                        <span class="help is-danger" v-show="errors.has('radiology_subtype')">
                            Field is required
                        </span>     
                    </div>
                    <div class="col-md-6" v-if="(resultData.body_part_text)">
                        <label>Body Parts:</label><br>
                        <input type="text" name="radiology_subtype" id="radiology_subtype" class="form-control" v-model="resultData.bodyPart" >
                        <span class="help is-danger" v-show="errors.has('radiology_subtype')">
                            Field is required
                        </span>     
                    </div>

                    <div class="col-md-6" v-if="resultData.subtype_text_enable" v-validate="'required'">
                        <label> Other Parts</label>   
                        <input type="text" name="subType_text" id="subType_text" class="form-control" v-model="resultData.bodyPart_others" >

    			    </div>
                    <div class="col-md-6" v-if="resultData.bodyPart == 'Spine'">
                        <label> Spine option</label>
                        <select class="form-control ls-select2" id="radiology_spine" name="radiology_spine" v-model="resultData.spine_option_value" v-validate="'required'">
                          <option v-for="obj in investigationData.Spine_option" :value="obj.text">{{obj.text}}</option>
                        </select>
                          <span class="help is-danger" v-show="errors.has('radiology_spine')">
                  Field is required
                </span>    
                      </div>
                    
                </div>
                <div class="row form-group">
    				<div class="col-md-6">
    					<label>Select Qualifires:</label><br>
    					<select class = "form-control ls-select2" id = "radiology_qualifier" name = "radiology_qualifier" v-if="(resultData.type == 'MRI' && resultData.bodyPart != 'Spine')"  v-model="resultData.qualifier"  v-validate="'required'">
    						<option v-for="obj in investigationData.radiologyQualifier" :value="obj.text">{{obj.text}}</option>
    					</select>
                        <input type="text" name="qualifier" id="qualifier" class="form-control" v-model="resultData.qualifier" v-else>
                           <span class="help is-danger" v-show="errors.has('radiology_qualifier')">
                                Field is required
                            </span>    
                        
    					
    				</div>
                     <div class="col-md-6">
                        <div class="col-md-12" v-if="resultData.qualifier_radio_text_enable">
                          <label> Other Parts</label>
                          <input type="text" name="qualifier_other_text" id="qualifier_other_text" class="form-control" v-model="resultData.qualifierOtherPart">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div v-if="resultData.type == 'MRI'">
                            <label>Select Special request:</label><br>
                            <select class = "form-control ls-select2" id = "radiology_special_request" name = "radiology_special_request"   v-model="resultData.special_request"  >
                                <option v-for="obj in investigationData.radiologySpecialRequest" :value="obj.text">{{obj.text}}</option>
                            </select>
                        </div>
                        <div v-else>
                            <label>Select Special request:</label><br>
                        
                            <input type="text" name="special_request" id="special_request" class="form-control" v-model="resultData.special_request" >
                            
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6" >
                        <label>Report details:</label><br>
                        <textarea class="form-control" cols="50" rows="5" v-model="resultData.textData"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6"  v-if="(resultData.type != '' && resultData.bodyPart != '')"  >
                        <label>Select upload type:</label><br>
                        <select class = "form-control " id = "upload_type" name = "upload_type" v-model="resultData.uploadType"  >
                            <option value="image_web">Image From Web</option>
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
    				<div class="col-md-6" v-if="(resultData.type != '' && resultData.bodyPart != '')">
                        <div v-if="(resultData.uploadType == 'image' ||resultData.uploadType == 'video' )">
                            
                            <label class="control-label txt_media" for="input-21">
                                Select File
                            </label>
                             <br>
                            <div tabindex="500" class="btn btn-primary " id="btn-img-file" >
                                <i class="fa fa-folder-open"></i>  
                                <span class="hidden-xs">Browse …</span>
                            </div>
                            <input type="file" name="img_upload_video[]" id="img_upload_video" multiple class="file_multi_video" @change="previewFile('video')" accept="video/*" style="display: none;">

                            <input id="img_upload_file" name="imgupload[]" type="file" multiple class="btn btn-info  "  @change="previewFile('img')"  accept="image/*" style="display: none;">                        
                        </div>
                        <div v-if="(resultData.uploadType == 'image_web')">
                              <label class="control-label txt_media" for="input-21">
                                Enter Url:
                            </label>
                             <input type="text" name="img_upload_web[]" id="img_upload_web" multiple class="form-control" @change="previewFile('image_web')" placeholder="Enter image url" />
                               <span class="help is-danger" v-if="(resultData.errorUrl != '')">
                                {{resultData.errorUrl}}
                            </span>   
                        </div>
                    </div>
                   
                    
    			</div>

                <card title="Gallery Preview" v-if="imgGallery">
                    <div class="row form-group">
                        <div class="col-6 col-lg-3 col-sm-6" v-if="img.remove==false" v-for="(img,index) in imgGallery.data" >
                            <div v-if="img.type =='image'">
                                <a class="mag img-fluid">
                                    <br/>
                                    <img data-toggle="magnify" class="mag-style img-fluid" :src="img.data" alt="image">
                                </a>
                                <br>
                            </div>
                            <div  v-else >
                                <a class="mag img-fluid">
                                <video width="200px" height="auto"    controls>
                                  <source :src="img.data" id="video_here">
                                    Your browser does not support HTML5 video.
                                </video>
                                </a>
                            </div>
                            <label v-if="imgGallery.view!=true"  @click="removeImage(img.id)">Remove</label>
                        </div>
                    </div>
                        <!--row-->
                </card>
                <div class="row form-group">
                    <div class="col-md-12">
                         <button type="button" class="btn btn-primary btn-lg " :disabled="(resultData.type == '')" @click="saveReport()">Add</button>
                    </div>
                </div>    


                 
    		</div>
    	</div>
            <div class="row">
        <div class="col-md-12">
             <card title="<i class='ti-layout-cta-left'></i> Reports">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="radio_list">
              
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Body parts</th>
                            <th>Qualifier</th>
                            <th>Special request</th>
                            <th>Details</th>
                            <th>Gallery</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(res,index) in finalResultData">
                                <td>{{++index}}</td>
                                <td>{{res.type}}</td>
                                <td>{{res.bodyPart}}</td>
                                <td>{{res.qualifier}}</td>
                                <td>{{res.special_request}}</td>
                                <td>{{res.textData | strLimit}}</td>
                                <td><a href="javascript:void(0)" @click="viewGallery(res.id)" class="red">View</a></td>
                                <td> <i class="fa fa-remove" @click="removeReport(res.id)"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </card>
        </div>
    </div>
</div>
</template>
<script >
    
	import User from '../../../api/users.js';
	import _ from 'lodash';
    import card from "./card.vue"
    // import vue2Dropzone from 'vue2-dropzone'
    // import 'vue2-dropzone/dist/vue2Dropzone.css'

    export default {
    	computed:{

    	},
        components: {
            card,
            // vueDropzone: vue2Dropzone
        },
        filters: {
          strLimit: function (value) {
            if(value.length > 50){
                var str50 = value.substr(0,50);
                return str50+'...'; 
            } else {
                return value; 

            }
          }
        },
        data() {
            return {
            	'notValid':false,
                'footer' : 'footer',
                'resultData': {
                    'id':'',
                    'uploadType':'image',
                    'bodyPart':'',
                    'bodyPart_others':'',
                	'type': '',
                    // 'x_ray_type':'fixed',
                    'spine_option_value':'',
                	'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'qualifier_radio_text_enable':false,
                    'special_request':'',
                    'removed':false,
                    'qualifierOtherPart':'',
                    'body_part_side':'',
                    'radiologyOther':'',
                    'body_part_text':false,
                    'type_name':'',

                },
                'imgGallery':'',
                'finalResultData':[],
                'radiologyData':[],
               /* 'investigationData' : {
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
                */
                'investigationData':{
                	'radiologyType':[
                		{text:'',value:''},
	                	{text:'X-Rays',value:'X-Rays'},
	                	{text:'CT',value:'CT'},
	                	{text:'MRI',value:'MRI'},
	                	{text:'Ultra Sound',value:'ultra_sound'},
                        {text:'Doppler',value:'Doppler'},
                        {text:'Echo Cardiography',value:'echo_cardiography'},
                        {text:'PET-CT',value:'PET-CT'},
                        {text:'Bone Densitometry (DXA)',value:'bone_densitometry'},
                        {text:'Other',value:'other'},
                	],
                    'bodyPartSide':[
                        {text:'Select',value:''},
                        {text:'Right',value:'Right'},
                        {text:'Left',value:'Left'},
                        {text:'Bilateral',value:'Bilateral'},
                        {text:'AP Lateral Oblique',value:'ap_lateral_oblique'}
                    ],
                	'radiologySubType':[
                			{text:'',value:''},
                			 
						],

                    'radiologyQualifier':[
                            {text:'',value:''},
                            {text:'Stroke protocol',value:'stroke_protocol'},
                            {text:'Epilepsy protocol',value:'epilepsy_protocol'},
                            {text:'Headache protocol',value:'headache_protocol'},
                            {text:'Tumor protocol',value:'tumor_protocol'}
                        ],
                    'radiologyQualifierReal':[
                      {text:'',value:''},
                      {text:'Stroke protocol',value:'stroke_protocol'},
                      {text:'Epilepsy protocol',value:  'epilepsy_protocol'},
                      {text:'Headache protocol',value:'headache_protocol'},
                      {text:'Tumor protocol',value:'tumor_protocol'}
                  ],
                  'brain_options':[
                      {text:'',value:''},
                      {text:'Stroke protocol',value:'stroke_protocol'},
                      {text:'Epilepsy protocol',value:  'epilepsy_protocol'},
                      {text:'Headache protocol',value:'headache_protocol'},
                      {text:'Tumor protocol',value:'tumor_protocol'},
                      {text:'Brain (Routine)',value:'Brain (Routine)'},
                      {text:'Brain with Head &Neck MR Angiography(MRA)',value:'Brain with Head &Neck MR Angiography(MRA)'},
                      {text:'Brain with IntracranialMRA/MR Venography',value:'Brain with IntracranialMRA/MR Venography'},
                      {text:'Brain MR Spectroscopy alone',value:'Brain MR Spectroscopy alone'},
                      {text:'Brain Tumour Protoco',value:'Brain Tumour Protoco'},
                      {text:'Other',value:'Other'},
                  ],
                	'X-Rays':'',
                    // 'xray_type_options': [
                    //     {text:'',value:''},
                    //     {text:'Fixed',value:'fixed','selected':true},
                    //     {text:'Portable',value:'portable','selected':false}
                    // ],
                	'X-Rays_options':[
						    {text:'',value:''},
                            {text:'HIP',value:'hip'},
                            {text:'Knee',value:'knee'},
                            {text:'Shoulder',value:'shoulder'},
                            {text:'Pelvis',value:'pelvis'},
                            {text:'Chest PA',value:'chest_pa'},
                            {text:'Cervical Spine',value:'cervical_spine'},
                            {text:'Dorsal Spine',value:'dorsal_spine'},
                            {text:'Lumbar Spine',value:'lumbar_spine'},
                            {text:'Other',value:'other'},

					 ],
                	'CT':'',		 
                	'CT_options':[
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
                            {text:'Other',value:'other'},
                		 ],
                	'MRI':'',
                	'MRI_options':[
                            {text:'',value:''},
                    		 {text:'Brain', value:'brain'},
                			 {text:'Spine', value:'spine'},
                			 {text:'Joint', value:'joint'},
                			 {text:'Other', value:'other'},
                			 // {text:'Protocol', value:'protocol'}
                		 ],
                    'Spine_option': [
                      {text:'Cervical', value:'Cervical'},
                      {text:'Dorsal', value:'Dorsal'},
                      {text:'Lumbar', value:'Lumbar'},
                      {text:'Whole spine screening', value:'Whole spine screening'},
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
                			 ],
                    'radiologySpecialRequest':[
                        {text:'Neck Angio',value:'neck_angio'},
                        {text:'Brain Angio',value:'brain_angio'},
                        {text:'Spectroscopy',value:'spectroscopy'},
                        {text:'Diffusion',value:'diffusion'},
                        {text:'Flexion',value:'flexion'},
                        {text:'Extension',value:'extension'},
                    ]
                }
            }
        },
        mounted() {
             "use strict"
            let vm =this;
            vm.initResData();

			if(vm.$store.state.Users.userDetails.user_type != '1'){
              vm.$root.$emit('logout','You are not authorise to access this page'); 
            }
            	$('.ls-select2').select2({
					 placeholder: "Select",

			    });
                 
            $('#radio_div').on('click','#btn-img-file',function(){
                if(vm.resultData.uploadType == 'image'){

                    $('#img_upload_file').trigger('click');
                } else if(vm.resultData.uploadType == 'video') {
                    $('#img_upload_video').trigger('click');
                } 
            })
            
	        $('#radio_div').on("select2:select", '.ls-select2',function (e) {
                if(this.id == 'radiology_type') {
	        		vm.resultData.type_name = $("#radiology_type").select2().val();
                    vm.resultData.type = $('#radiology_type').select2('data')[0].text;       
	        		vm.radioSubType();

                } 
                 if(this.id == 'body_part_side') {
                     vm.resultData.body_part_side=$("#body_part_side").select2().val();
                 }
                if(this.id == 'radiology_subtype') {
                     vm.resultData.spine_option_value="";
                    let q_data=vm.investigationData.radiologyQualifierReal;
                    vm.investigationData.radiologyQualifier="";
                    vm.investigationData.radiologyQualifier=q_data;
                    vm.resultData.qualifier_radio_text_enable = false;
                    vm.resultData.subtype_text_enable = false;
                    let radiologySubType_val=$("#radiology_subtype").select2().val();
                    //console.log(radiologySubType_val);
                    vm.investigationData.radiologyQualifier=q_data;
                    if(vm.resultData.type=='MRI')
                    {
                        setTimeout(function(){
                            $('#radiology_qualifier').select2({
                                    placeholder: "Select",
                                    tags:false 
                                  }); 
                        },500);
                    }
                    if(radiologySubType_val=='Spine')
                    {
                        $('#radiology_qualifier').select2("destroy");
                        setTimeout(function(){
                                $('#radiology_spine').select2({
                                  placeholder: "Select",
                                  tags:false 
                                }); 
                        },500);
                         vm.resultData.subtype_text_enable = false;
                         vm.resultData.bodyPart = $("#radiology_subtype").select2().val();
                         vm.resultData.bodyPart_others="";
                    }
                    else if(radiologySubType_val=='Brain')
                    {
                      vm.investigationData.radiologyQualifier=vm.investigationData.brain_options;
                       vm.resultData.subtype_text_enable = false;
                         vm.resultData.bodyPart = $("#radiology_subtype").select2().val();
                    }
                    
                    else if(radiologySubType_val == 'Other' || radiologySubType_val =='Joint' ){
                        $('#radiology_spine').select2("destroy");
                        vm.resultData.bodyPart = radiologySubType_val;
                        vm.resultData.subtype_text_enable = true;
                    } else {
                            vm.resultData.bodyPart = radiologySubType_val;   
                    }
                    
	        	}
                if(this.id == 'radiology_qualifier') {
                   
                    vm.resultData.qualifier = $("#radiology_qualifier").select2().val();
                     let qualy_val=$("#radiology_qualifier").select2().val();
                   
                    if(qualy_val=='Other'  )
                    {
                        vm.resultData.qualifier_radio_text_enable = true;
                        vm.resultData.qualifierOtherPart = '';
                    }
                    else
                    {
                        vm.resultData.qualifier_radio_text_enable = false;
                        vm.resultData.qualifierOtherPart = '';
                    }
                }
                if(this.id == 'radiology_special_request') {
                    vm.resultData.special_request=$("#radiology_special_request").select2().val();
                }
                if(this.id == 'radiology_spine') {
                    vm.resultData.spine_option_value=$("#radiology_spine").select2().val();
                }

	        });
			
        },
        
        methods: {
            initResData()
            {
                let vm=this;
                 var radio_data = _.cloneDeep(vm.$store.state.Patient.radioData);
                 if(radio_data.length)
                 {
                    vm.finalResultData = radio_data;
                    vm.radiologyData=radio_data;
                 }
                
            },
            viewGallery(gid) {

                let vm = this;
                _.find(vm.finalResultData, function(res) {
                    if(res.id == gid) {
                        vm.imgGallery = {'view':true,'data':res.imgData};
                       
                        setTimeout(function(){
                            jQuery('[data-toggle="magnify"]').magnify();    
                        },1000)
                    }
                });
            },
            removeImage(no) {
                let vm = this;
                _.find(vm.resultData.imgData, function(img) {
                    if(img.id == no) {
                        img.remove =true;
                    }
                });
            },
            removeReport(did) {

                let vm =this;
                // _.pullAt(resData, 0);
                /*_.find(vm.finalResultData, function(res) {
                    if(res.id == did) {
                         res.removed = true;
                    }
                });*/
                 _.remove(vm.finalResultData, function(o) {
                    return o.id==did;
                });
                
                vm.initData();
                vm.setRadioData();

            },
            editReport (eid) {
              _.find(vm.finalResultData, function(res) {
                    if(res.id == eid) {
                        vm.resultData = vm.finalResultData;
                         res.removed = true;
                    }
                });
                vm.setRadioData();

            },
            saveReport() {
                let vm =this;
                var resData=vm.radiologyData;
                 // resData.push= vm.finalResultData;
                 $('#radiology_special_request').select2("destroy");
                 $('#radiology_qualifier').select2("destroy");
                vm.resultData.qualifier_radio_text_enable = false;
                if(vm.resultData.type == ''){
                    toastr.error('Please select report data.', 'Report error', {timeOut: 5000});
                    return false;
                }
                vm.resultData.id = resData.length;
                resData.push(vm.resultData); 
                vm.radiologyData=resData;
                vm.finalResultData = _.cloneDeep(vm.radiologyData);

                vm.initData();
                vm.setRadioData();
            },
            setRadioData() {
                let vm =this;
                vm.$store.dispatch('saveRadioData',vm.finalResultData);
            },
            initData() {
                let vm =this;
                
                vm.resultData = {
                     'id':'',
                    'uploadType':'image',
                    'bodyPart':'',
                    'bodyPart_others':'',
                    'type': '',
                    // 'x_ray_type':'fixed',
                    'spine_option_value':'',
                    'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'qualifier_radio_text_enable':false,
                    'special_request':'',
                    'removed':false,
                    'qualifierOtherPart':'',
                    'errorUrl' : ''
                };
                vm.imgGallery = '';
                $('#radio_div .ls-select2').val(null).trigger('change');
                // $('.ls-select2').select2().val('');

            },
            previewFile(ptype) {
                let vm =this;
                var imgData = [];
                var videoData = [];
                 jQuery('.js-loader').removeClass('d-none');

                 if(ptype == 'img') {
                    var fileList = document.querySelector('input[id=img_upload_file]').files;
                    var x= 1;var y=1; 
                    jQuery(fileList).each(function(i){
                        let file = document.querySelector('input[id=img_upload_file]').files[i];
                        var tm = 100*x;
                        setTimeout(function(){
                            var reader  = new FileReader();

                            reader.addEventListener("load", function () {
                                imgData.push({'id':y,'data':reader.result,'remove':false,'view':false,'type':'image'});
                            }, false);
                            reader.readAsDataURL(file); 
                            ++y;             
                        },tm)
                        x++;
                    })
                    
                 }else if(ptype == 'image_web') { 
                      let url = document.querySelector('input[id=img_upload_web]').value;
                      var x= 1;var y=1; 
                         
                    if(url != ''){

                            var tm = 100*x;
                            let imageData = '';
                             User.getImagefromUrl(url).then(
                             (response) => {
                                vm.resultData.errorUrl = '';
                                imageData =   response.data.data;
                                if(response.data.status == 200){
                                    setTimeout(function(){

                                        imgData.push({'id':y,'data':imageData,'remove':false,'view':false,'type':'image'});
                                        ++y;             
                                    },tm)
                                    x++;
                                }else if(response.data.status == 201){
                                     vm.resultData.errorUrl =  response.data.message;
                                }else{
                                    vm.resultData.errorUrl = 'Something wrong';
                                }
                             },
                             (error) => {

                            }
                            );
                    }else{
                         vm.resultData.errorUrl = 'Please enter url.';
                    }

                 }else {
                    var fileList = document.querySelector('input[id=img_upload_video]').files;
                    var x= 1;var y=1; 
                    jQuery(fileList).each(function(i){
                      let file = document.querySelector('input[id=img_upload_video]').files[i];
                      let video_src= URL.createObjectURL(file);
                      imgData.push({'id':y,'data':video_src,'remove':false,'view':false,'type':'video'});
                      // $source.parent()[0].load();
                      x++;
                      ++y;
                    })
                     
                 }
                setTimeout(function(){
                jQuery('.js-loader').addClass('d-none');
                    vm.resultData.imgData = imgData;
                    vm.imgGallery = {'view':false,'data':imgData};
                    setTimeout(function(){
                        jQuery('[data-toggle="magnify"]').magnify();    
                    },1000)
                },5000)
                
            },
    		radioSubType(){
        		let vm =this;
        		let resType = vm.resultData.type;
                let resTypeName = vm.resultData.type_name;


                  $('#radiology_subtype').val('').trigger('change');
                    vm.resultData.subType="";
                    vm.investigationData.radiologyQualifier="";
                    vm.resultData.bodyPart ="";
                    vm.resultData.subtype_text_enable = false;
                    
                    if(resTypeName=='ultra_sound' || resTypeName=='Doppler' || resTypeName=='echo_cardiography' || resTypeName=='PET-CT' || resTypeName=='bone_densitometry')
                    {
                        
                        $('#radiology_subtype').select2("destroy");
                        vm.resultData.body_part_text=true;
                    }
                    else
                    {
                          let x_rayData = '';
                          setTimeout(function(){
                                if(vm.resultData.type != ''){
                                    x_rayData = vm.investigationData[resType+'_options'];
                                    $('#radiology_subtype').select2({
                                        placeholder: "Select",
                                    });
                                }
                                 vm.investigationData.radiologySubType = '';
                                vm.investigationData.radiologySubType = x_rayData;
                            },500);
                           
                           
                        vm.resultData.body_part_text=false;
                    }

                    if(resType=='MRI')
                    {
                   
                      setTimeout(function(){
                              $('#radiology_qualifier').select2({
                                placeholder: "Select",
                                tags:false 
                              }); 
                        $('#radiology_special_request').select2({
                            placeholder: "Select",
                            tags:false 
                          });
                        },500);
                    }
                    else
                    {
                        $('#radiology_qualifier').select2("destroy");
                        $('#radiology_special_request').select2("destroy");
                    }
        		
        	},
        	radioType(){
        	
    			let radData = '';
    			if(this.$store.state.Users.userDetails.department == 'Neurology' || this.$store.state.Users.userDetails.department == 'Neurosurgery' ) {
    				radData = ['x-rays','CT','MRI'];
    			} else if(this.$store.state.users.userDetails.department == 'ortho') {
    				radData = ['x-rays','CT','MRI','Sonography'];
    			}
    			return radData;
    		},
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		}
    }
</script>
<style>
/*image overlapping in magification*/

.magnify .magnify {
    z-index: 2;
}

.magnify .magnify-large {
    z-index:4;
}
</style>