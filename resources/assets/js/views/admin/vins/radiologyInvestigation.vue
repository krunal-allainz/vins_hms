<template>
<div>
	<h4>Radiology:</h4>
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
                        <tr v-if="res.removed == false" v-for="(res,index) in finalResultData">
                            <td>{{++index}}</td>
                            <td>{{res.type}}</td>
                            <td>{{res.bodyPart}}</td>
                            <td>{{res.qualifier}}</td>
                            <td>{{res.special_request}}</td>
                            <td>{{res.textData | strLimit}}</td>
                            <td><a href="javascript:void(0)" @click="viewGallery(res.id)" class="red">View</a></td>
                            <!-- <td><img :src="res.imgData" height="100" width="100" /></td> -->
                            <td> <i class="fa fa-remove" @click="removeReport(res.id)"></i></td>

                            
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </card>
        </div>
    </div>
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
                    <div class="col-md-6" v-show="resultData.type == 'X-Rays'">
                        <label> Select Type:</label>   
                        <select class = "form-control ls-select2" id = "xray_type" name = "xray_type" v-model="resultData.x_ray_type" v-validate="'required'">
                            <option v-for="type in investigationData.xray_type_options" :value="type.value" >{{type.text}}</option>
                        </select>      
                        <span class="help is-danger" v-show="errors.has('xray_type')">
                  Field is required
                </span>              
                        
    				</div>
                </div>
                <div class="row form-group">

    				<div class="col-md-6">
    					<label>Body Parts:</label><br>
    					<select class = "form-control ls-select2" id = "radiology_subtype" name = "radiology_subtype" v-validate="'required'">
    						<option v-for="obj in investigationData.radiologySubType" :value="obj.text">{{obj.text}}</option>
    					</select>
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
                      <!-- <div class="col-md-6" v-if="resultData.bodyPart == 'Joint' || resultData.bodyPart == 'Others'">
                        <label> Others</label>
                        
                         <input type="text" name="radiology_bodypart_other" id="radiology_bodypart_other" class="form-control" v-model="resultData.qualifier" >
                            <span class="help is-danger" v-show="errors.has('radiology_bodypart_other')">
                              Field is required
                            </span>    
                      </div> -->
                </div>
                <div class="row form-group">
    				<div class="col-md-6">
    					<label>Select Qualifires:</label><br>
    					<select class = "form-control ls-select2" id = "radiology_qualifier" name = "radiology_qualifier" v-if="resultData.type == 'MRI'"  v-model="resultData.qualifier"  v-validate="'required'">
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
                            <select class = "form-control" id = "radiology_special_request" name = "radiology_special_request"   v-model="resultData.special_request"  >
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
                            <div tabindex="500" class="btn btn-primary " id="btn-img-file"  >
                                <i class="fa fa-folder-open"></i>  
                                <span class="hidden-xs">Browse …</span>
                                
                            </div>
                            <input type="file" name="img_upload_video[]" id="img_upload_video" multiple class="file_multi_video" @change="previewFile('video')" accept="video/*" style="display: none;">

                            <input id="img_upload_file" name="imgupload[]" type="file" multiple class="btn btn-info  "  @change="previewFile('img')"  accept="image/*" style="display: none;">                        
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                         <img src="http://place-hold.it/100x100" id="img_preview" height="100" width="100" alt="Image preview..." v-if="resultData.imgData==''">
                         <img :src="resultData.imgData[0].data" id="img_preview" height="100" width="100" alt="Image preview..." v-else>
                         
                    </div> -->
                    
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
                         <button type="button" class="btn btn-primary btn-lg " :disabled="(resultData.type == '' || resultData.bodyPart == '')" @click="saveReport()">Add</button>
                    </div>
                </div>    


                 
    		</div>
    	</div>
</div>
</template>
<script >
    var resData=[];
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
                    'x_ray_type':'fixed',
                    'spine_option_value':'',
                	'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'qualifier_radio_text_enable':false,
                    'special_request':'',
                    'removed':false,
                    'qualifierOtherPart':''

                },
                'imgGallery':'',
                'finalResultData':[],
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
                
                'investigationData':{
                	'radiologyType':[
                		{text:'',value:''},
	                	{text:'X-Rays',value:'X-Rays'},
	                	{text:'CT',value:'CT'},
	                	{text:'MRI',value:'MRI'},
	                	// {text:'Doppler',value:'doppler'},
	                	// {text:'Other',value:'other'}
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
                    'xray_type_options': [
                        {text:'',value:''},
                        {text:'Fixed',value:'fixed','selected':true},
                        {text:'Portable',value:'portable','selected':false}
                    ],
                	'X-Rays_options':[
						    {text:'',value:''},
                            {text:'HIP',value:'hip'},
                            {text:'Knee',value:'knee'},
                            {text:'Shoulder',value:'shoulder'},
                            {text:'Pelvis',value:'pelvis'},
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
				$('.ls-select2').select2({
					 placeholder: "Select",

			    });
                 vm.finalResultData = _.cloneDeep(vm.$store.state.Patient.radioData);
            $('#radio_div').on('click','#btn-img-file',function(){
                if(vm.resultData.uploadType == 'image'){

                    $('#img_upload_file').trigger('click');
                } else if(vm.resultData.uploadType == 'video') {
                    $('#img_upload_video').trigger('click');
                } 
            })
            
	        $('#radio_div').on("select2:select", '.ls-select2',function (e) {
                if(this.id == 'radiology_type') {
                    console.log('id',this.id)
	        	     $('#radiology_subtype').val('').trigger('change');
                    // $('#radiology_qualifier').select2("destroy");
	        		vm.resultData.type = $("#radiology_type").select2().val();
                    let type_opd_val=$("#radiology_type").select2().val();
                    // $("#radiology_subtype").select2('destroy');
                    vm.investigationData.radiologyQualifier="";
                    $('#radiology_qualifier').select2("destroy");
                    $('#radiology_special_request').select2("destroy");
                    if(type_opd_val=='MRI')
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
                    
	        		vm.radioSubType();

                } 
                if(this.id == 'radiology_subtype') {
                    let q_data=vm.investigationData.radiologyQualifierReal;
                    vm.investigationData.radiologyQualifier="";
                     vm.investigationData.radiologyQualifier=q_data;
                        vm.resultData.qualifier_radio_text_enable = false;
                    let radiologySubType_val=$("#radiology_subtype").select2().val();
                    //console.log(radiologySubType_val);
                    vm.investigationData.radiologyQualifier=q_data;
                    if(radiologySubType_val=='Spine')
                    {
                        // setTimeout(function(){
                        //         $('#radiology_spine').select2({
                        //           placeholder: "Select",
                        //           tags:false 
                        //         }); 
                        // },500);
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
                    
                    else if($("#radiology_subtype").select2().val() == 'Other' || $("#radiology_subtype").select2().val() =='Joint' ){
                         vm.resultData.bodyPart = $("#radiology_subtype").select2().val();
                        vm.resultData.subtype_text_enable = true;
                        $('#radiology_spine').select2("destroy");
                       
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

	        });
			
        },
        
        methods: {
            
            // viewGallery(gid) {
            //     let vm =this;
            //   _.find(vm.finalResultData, function(res) {
            //         if(res.id == gid) {
            //             vm.imgGallery =res.imgData;
            //             vm.imgGallery.view = true;
            //         }
            //     }
            // },
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
                _.find(vm.finalResultData, function(res) {
                    if(res.id == did) {
                         res.removed = true;
                    }
                });
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
                // var resData=[];
                let vm =this;
                 // resData.push= vm.finalResultData;
                 $('#radiology_special_request').select2("destroy");
                 $('#radiology_qualifier').select2("destroy");
                vm.resultData.qualifier_radio_text_enable = false;
                if(vm.resultData.type == '' || vm.resultData.bodyPart == '' ){
                    toastr.error('Please select report data.', 'Report error', {timeOut: 5000});
                    return false;
                }
                vm.resultData.id = resData.length;
                resData.push(vm.resultData);
                
                vm.finalResultData = _.cloneDeep(resData);

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
                    'x_ray_type':'fixed',
                    'spine_option_value':'',
                    'subType': '',
                    'qualifier':'',
                    'imgData': '',
                    'textData': '',
                    'subtype_text_enable':false,
                    'qualifier_radio_text_enable':false,
                    'special_request':'',
                    'removed':false,
                    'qualifierOtherPart':''
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
                    
                 } else {
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
        		let x_rayData = '';
        		if(vm.resultData.type != ''){
        			x_rayData = vm.investigationData[resType+'_options'];
        			$('#radiology_subtype').select2({
						placeholder: "Select",
			  		});
        		}
        		vm.investigationData.radiologySubType = '';
        		setTimeout(function(){
					vm.investigationData.radiologySubType = x_rayData;
        		},200)
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