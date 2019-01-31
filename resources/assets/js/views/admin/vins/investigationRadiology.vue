<template>
<div>
	<h4>Radiology:</h4>
    	<div class="row form-group" id="radio_div">
    		<div class="col-md-12">
    			
                <div class="row form-group">
                    <div class="col-md-6" >
                        <label>Report details:</label><br>
                        <textarea class="form-control" cols="50" rows="5" v-model="resultData.textData"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label>Select upload type:</label><br>
                        <select class="form-control ls-select2" id = "upload_type" name = "upload_type" v-model="resultData.uploadType"  >
                            <option value="image_web">Image From Web</option>
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
    				<div class="col-md-6">
                        <div v-if="(resultData.uploadType == 'image' || resultData.uploadType == 'video' )">
                            
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
                         <button type="button" class="btn btn-primary btn-lg " :disabled="(resultData.textData == '')" @click="saveReport()">Add</button>
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
                            <th width="2%">#</th>
                            <th width="90%">Details</th>
                            <th width="3%">Gallery</th>
                            <th width="2%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(res,index) in finalResultData" v-if="res.removed!=true">
                                <td width="2%" v-text="getIndex(index)"></td>
                                <td width="90%">{{res.textData}}</td>
                                <td width="3%"><a v-if="(res.imgData.length>0)" href="javascript:void(0)" @click="viewGallery(res.id)" class="red">View</a></td>
                                <td width="2%"> <i class="fa fa-remove" @click="removeReport(res.id)"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </card>
        </div>
    </div>
</div>
</template>

<script>
  
    import User from '../../../api/users.js';
    import _ from 'lodash';
    import card from "./card.vue";

    export default {
        computed:{

        },
        components: {
            card,
            // vueDropzone: vue2Dropzone
        },
        filters: {
          strLimit: function (value) {
            if(value!=null && value!='')
            {
                if(value.length > 50){
                var str50 = value.substr(0,50);
                return str50+'...'; 
                } 
            }
            else {
                    return value; 

                }
            
          }
        },
        data() {
            return {
                'notValid':false,
                'footer' : 'footer',
                'indexRadio':0,
                'resultData': {
                    'id':'',
                    'uploadType':'image',
                    'imgData': '',
                    'textData': '',
                    'removed':false,
                    
                },
                'imgGallery':'',
                'finalResultData':[],
                'radiologyData':[],
            }
        },
        mounted() {
             "use strict"
            let vm =this;
            $("body .js-loader").removeClass('d-none');
            vm.initResData();
             $("body .js-loader").addClass('d-none');
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
            });
            

            $('#radio_div').on("select2:select", '.ls-select2',function (e) {
                if(this.id == 'upload_type') 
                {
                    vm.resultData.uploadType=$('#upload_type').select2('data')[0].id;
                }
            });
            
        },
         methods: {
             getIndex(indData)
            {
                return indData+1;
            },
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
                let resData=vm.radiologyData;
                _.find(resData, function(res) {
                    if(res.id == did) {
                         res.removed = true;
                    }
                });
               /* let resFinalData=_.filter(resData, function(o) { return o.removed==false; });*/
                /* _.remove(vm.radiologyData, function(o) {
                    return o.id==did;
                });*/

                vm.radiologyData=resData;
                vm.finalResultData=_.cloneDeep(vm.radiologyData);
                
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
                if(vm.resultData.textData == ''){
                    toastr.error('Please enter report details.', 'Report error', {timeOut: 5000});
                    return false;
                }
                var resSize=_.filter(resData, function(o) { if (o.removed==false) return o }).length;
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
                    'imgData': '',
                    'textData': '',
                    'removed':false,
                };
                vm.imgGallery = '';
                $('#upload_type').val(vm.resultData.uploadType).trigger('change');
            },
            previewFile(ptype) {
                let vm =this;
                var imgData = [];
                var videoData = [];
                let imgval=0;
                jQuery('.js-loader').removeClass('d-none');

                 if(ptype == 'img') {
                    var fileList = document.querySelector('input[id=img_upload_file]').files;
                    var x= 1;var y=1; 
                    jQuery(fileList).each(function(i){
                        let file = document.querySelector('input[id=img_upload_file]').files[i];
                        var fSize=vm.getFileSize(file.size);
                        if(fSize > 1){
                            jQuery('.js-loader').addClass('d-none');
                            toastr.error('File size must be less than 1MB.', '', {timeOut: 5000});
                            imgval=1;
                            
                        }
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
                if(imgval==0)
                {
                    setTimeout(function(){
                    jQuery('.js-loader').addClass('d-none');
                        vm.resultData.imgData = imgData;
                        vm.imgGallery = {'view':false,'data':imgData};
                        setTimeout(function(){
                            jQuery('[data-toggle="magnify"]').magnify();    
                        },1000)
                    },5000)
                }
                
                
            },
            getFileSize(fSize)
            {
              var _size = fSize;
              return Math.round(_size/(1024*1024));
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