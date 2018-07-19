<template>
<div class="container">
	<div class="page-header">
	 <div class="row">
			<div class="col-md-6">
				<h3>Examination</h3>
			</div>
		</div>
	</div>

  <form action>
    <div class="row">
      <div class="col-md-6" style="padding: 0px;">
        <!-- <div style="border: 1px solid;height: 100%;border-right:0px; ">
          <div class="text-center" style="font-size: 20px;font-weight: bold;background-color:gray;border-bottom:1px solid;height:35px;"><b>Motor Examination</b></div>
            <canvas id="neuro_signature-pad" height="100%" width="100%" style="background: url('/assets/img/froms/examination_small_2.png') no-repeat; max-width:100%; max-height:100%;width: 90%;height:85%"></canvas>
        </div> -->
          <div class="col-md-6">
          <label for="plantars" class="control-label">Motor Examination : </label>
        </div>
        <div class="col-md-6">
          <textarea  class="form-control"  id="motor_examination" name="motor_examination" value="" v-model="neuroExaminationData.motor_examination"  ></textarea>
        </div>
      </div>
      <div class="col-md-6" style="padding: 0px;">
       <!--  <div style="border: 1px solid;height: 100%">
          <div class="text-center"  style="font-size: 20px;font-weight: bold;border-bottom:1px solid;height:35px;"><b>Sensory Examination</b></div>
        <canvas id="neuro_signature-pad1" height="100%" width="100%" style="background: url('/assets/img/froms/examination_small_2.png') no-repeat; max-width:100%; max-height:100%;width: 90%;height:85%"></canvas>
      </div> -->
        <div class="col-md-6">
          <label for="plantars" class="control-label">Sensory Examination : </label>
        </div>
        <div class="col-md-6">
          <textarea  class="form-control"  id="sensory_examination" name="sensory_examination" value="" v-model="neuroExaminationData.sensory_examination"></textarea>
        </div>
      </div>
    </div>
    <hr />

    <div class="row">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th></th>
              <th>Biceps </th>
              <th>Triceps</th>
              <th>Supinator</th>
              <th>Knee</th>
              <th>Ankle</th>
              <th>Hoffmann</th>
              <th>FF</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Right</th>
              <td><input class="form-control" type="text" name="right_biceps" value="  " v-model="neuroExaminationData.right_biceps" />
  						</td>
              <td><input class="form-control" type="text" name="right_triceps" value="  " v-model="neuroExaminationData.right_triceps" />
  						</td>
              <td><input class="form-control" type="text" name="right_supinator" value="  " v-model="neuroExaminationData.right_supinator" />
  						</td>
              <td><input class="form-control" type="text" name="right_knee" value="  " v-model="neuroExaminationData.right_knee" />
  						</td>
              <td><input class="form-control" type="text" name="right_ankle" value="  " v-model="neuroExaminationData.right_ankle" />
  						</td>
              <td><input class="form-control" type="text" name="right_hoffmann" value="  " v-model="neuroExaminationData.right_hoffmann" />
  						</td>
              <td><input class="form-control" type="text" name="right_ff" value="  " v-model="neuroExaminationData.right_ff" />
  						</td>
            </tr>

  					<tr>
              <th>left</th>
              <td><input class="form-control" type="text" name="left_biceps" value="  " v-model="neuroExaminationData.left_biceps" />
  						</td>
              <td><input class="form-control" type="text" name="left_triceps" value="  " v-model="neuroExaminationData.left_triceps" />
  						</td>
              <td><input class="form-control" type="text" name="left_supinator" value="  " v-model="neuroExaminationData.left_supinator" />
  						</td>
              <td><input class="form-control" type="text" name="left_knee" value="  " v-model="neuroExaminationData.left_knee" />
  						</td>
              <td><input class="form-control" type="text" name="left_ankle" value="  " v-model="neuroExaminationData.left_ankle" />
  						</td>
              <td><input class="form-control" type="text" name="left_hoffmann" value="  " v-model="neuroExaminationData.left_hoffmann" />
  						</td>
              <td><input class="form-control" type="text" name="left_ff" value="  " v-model="neuroExaminationData.left_ff" />
  						</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="plantars" class="control-label">Plantars : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="plantars" name="plantars" value="" v-model="neuroExaminationData.plantars" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="romberg" class="control-label">Romberg's : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="romberg" name="romberg" value="" v-model="neuroExaminationData.romberg"/>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="gait" class="control-label">Gait</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="gait" name="gait" value="" v-model="neuroExaminationData.gait"/>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="cerebellar" class="control-label">Cerebellar Signs : </label>
        </div>
        <div class="col-md-6">
					<select class="form-control ls-select2"  id = "cerebellar" name="cerebellar" value="" :class="{'is-danger': errors.has('cerebellar') }" v-model="neuroExaminationData.cerebellar">
						<option value="no">No</option>
            <option value="truncal">Truncal</option>
            <option value="appendicular">Appendicular</option>
            <option value="tandemwalking">Tandem Walking</option>
          </select>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="neck_stiffness" class="control-label">Neck Stiffness</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="neck_stiffness" name="neck_stiffness" value="" v-model="neuroExaminationData.neck_stiffness" />
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="diagnosis" class="control-label">Diagnosis</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="diagnosis" name="diagnosis" value="" v-model="neuroExaminationData.diagnosis"/>
        </div>
      </div>
    </div>
    <div class="row form-group">
      <!-- <div class="col-md-6">
        <div class="col-md-6">
          <label for="signature" class="control-label">Doctor's Signature</label>
        </div>
        <div class="col-md-6">
          <div id="signature1" class="signature-pad">
                <div class="signature-pad--body">
                  <canvas class="can-img" id="doc_signature" height="200px" width="500px" ></canvas> 
                </div>
                <div><button type="button" id="clear_doctor_signature" class="btn btn-sm btn-danger">Clear</button></div>
              </div>
        </div>
        <span class="help is-danger" id="signaturevalidation" >
            Signature is required
          </span>
      </div> -->
      <div class="col-md-12">
          <div class="col-md-12">
            <label>Follow Up : </label>
          </div>
          <div class="col-md-12">
            <textarea class="form-control" type="text" name="follow_up" id="follow_up" v-model="neuroExaminationData.follow_up"  v-validate="'required'" /></textarea>
              <i v-show="errors.has('follow_up')" class="fa fa-warning"></i>
                  <span class="help is-danger" v-show="errors.has('case')">
                      Please fill follow up.
                  </span>
          </div>
        </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="diagnosis" class="control-label">Doctor's name</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="doctor_name" name="doctor_name" value="" v-model="doctor" readonly="" />
         
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="diagnosis" class="control-label">Date</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" id="cur_datetime" name="cur_datetime" value="" v-model="currentDatetime" readonly="" />
          
        </div>
      </div>
    </div>

    <div class="row form-group">
      <button type="button" class="btn btn-primary btn-submit text-right " @click="prev()" >Previous</button>
      <button class="btn btn-primary btn-submit text-right ml-10" type="button" @click="saveNeuroExamination()">Save Data</button>
    </div>
  </form>

  <!-- <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal> -->
</div>



</template>
<script >
	import User from '../../../api/users.js'
	import addressograph from './addressograph.vue';
	import SelectPatientModal from '../../../components/SelectPatientModal.vue';
  import SignaturePad from 'signature_pad';
  import moment from 'moment';
  import _ from 'lodash';

   
    export default {
      props:['doctor'],
        data() {
            return {
                'footer' : 'footer',
                'currentDatetime': moment().format('DD-MM-YYYY hh:mm A'),

								'type': 'neuroExamination',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'hasError':true,
                'neuroExaminationData': {
                  'right_biceps' : '',
                  'right_triceps' : '',
                  'right_supinator' : '',
                  'right_knee' : '',
                  'right_ankle' : '',
                  'right_hoffmann' : '',
                  'right_ff' : '',
                  'left_biceps' : '',
                  'left_triceps' : '',
                  'left_supinator' : '',
                  'left_knee' : '',
                  'left_ankle' : '',
                  'left_hoffmann' : '',
                  'left_ff' : '',
                  'plantars' : '',
                  'romberg' : '',
                  'gait' : '',
                  'cerebellar' : '',
                  'neck_stiffness' : '',
                  'diagnosis' : '',
                  'motor_examination' : '',
                  'sensory_examination' : '',
                  'signaturePad1':{},
                  'signaturePad2':{},
                  'signaturePad3':{},

                  'follow_up':''


								}
            }
        },
				components: {
					 addressograph,
					 SelectPatientModal
			 },
      
       created: function() {
             this.$root.$on('submitNeuroData',this.submitData);
        },
			 mounted() {
        let vm =this;
				 $('.ls-select2').select2({
						placeholder: "Select",
				 });
        
         setTimeout(function(){
          vm.examinationChangeImage();
          vm.initData();
        },1000)
			 },
				methods: {
          initData(){
            let vm =this;
            vm.neuroExaminationData = _.cloneDeep(this.$store.state.Patient.neuroExaminationData);
          },
          submitData(){

            let vm =this;
           
              // vm.$store.dispatch('saveNeuroExamination',vm.neuroExaminationData);
           
          },
          prev() {
              let vm =this;
                   vm.$store.dispatch('saveNeuroExamination', _.cloneDeep(vm.saveNeuroExamination)) ;

              vm.$root.$emit('prev');
          },
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveNeuroExamination() {
          let vm = this;
		    	this.$validator.validateAll().then(
	            (response) => {
                if (!this.errors.any()) {
	            
              vm.$store.dispatch('saveNeuroExamination', _.cloneDeep(vm.neuroExaminationData)) ;
              let department = this.$store.state.Users.userDetails.department;
              let doctor = this.$store.state.Users.userDetails.id;
              
              var oData = {'opdData':this.$store.state.Patient.opdData,'resultData':this.$store.state.Patient.opd_resultData,'doctor':doctor,'department':department,'radioData':this.$store.state.Patient.radioData,'laboratoryData':this.$store.state.Patient.laboratoryData,'vascExaminationData':this.$store.state.Patient.vascExaminationData,'neuroExaminationData':this.$store.state.Patient.neuroExaminationData,'prescriptionData':this.$store.state.Patient.prescriptionData};
                
                console.log(oData);

                 User.generateAddOpdDetails(oData).then((response) => {
                     $("body .js-loader").addClass('d-none');
                     if(response.data.code == 200) {
                       vm.$router.push({'name':'opd_form_thankyou'});
                        toastr.success('OPD details saved successfully', 'OPD Report', {timeOut: 2000});
                      } else if(response.data.code == 300) {
                       vm.$router.push({'name':'opd_form_thankyou'});

                        toastr.error('Record not found.Please enter valid search value.', 'Error', {timeOut: 5000});
                      } else{
                       vm.$router.push({'name':'opd_form_thankyou'});
                       
                       toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
                      }
                       vm.$router.push({'name':'opd_form_thankyou'});
             
      },

      (error) => {
                  }
      );
        		    	}
        		    },
                (error) => {
                }
                )

			   },
      examinationChangeImage() {
            var vm =this;
            // var canvas = document.getElementById("neuro_signature-pad");
            // var canvas1 = document.getElementById("neuro_signature-pad1");
            // // var canvas2 = document.getElementById("doc_signature");

            // var clear_neuro_scribble = document.getElementById("clear_doctor_signature");
            // var clear_neuro_scribble1 = document.getElementById("clear_neuro_scribble");


            // vm.neuroExaminationData.signaturePad1 = new SignaturePad(canvas, {
            //   backgroundColor: 'rgb(255, 255, 255)',
            // });
            // vm.neuroExaminationData.signaturePad2 = new SignaturePad(canvas1, {
            //   backgroundColor: 'rgb(255, 255, 255)',
            // });
            // vm.neuroExaminationData.signaturePad3 = new SignaturePad(canvas2, {
            //   backgroundColor: 'rgb(255, 255, 255)',
            // });
            // window.onresize = vm.resizeCanvas;
            // vm.resizeCanvas(canvas);
            // vm.resizeCanvas(canvas1);
            // vm.resizeCanvas(canvas2);
            // clear_neuro_scribble.addEventListener("click", function (event) {
            //   vm.neuroExaminationData.signaturePad3.clear();
            // });
              // if (signaturePad.isEmpty()) {
              //   alert("Please provide a signature first.");
              // } else {resizeCanvas
              //   console.log(dataURL);resizeCanvas
              //   // download(dataURL, "signature.png");
              // }
            // });
          },
          resizeCanvas(canvas) {
              var ratio =  Math.max(window.devicePixelRatio || 1, 1);
              canvas.width = canvas.offsetWidth * ratio;
              canvas.height = canvas.offsetHeight * ratio;
               // canvas.getContext("2d").scale(ratio, ratio);
            },
         dataURLToBlob(dataURL) {
              // Code taken from https://github.com/ebidel/filer.js
              var parts = dataURL.split(';base64,');
              var contentType = parts[0].split(":")[1];
              var raw = window.atob(parts[1]);
              var rawLength = raw.length;
              var uInt8Array = new Uint8Array(rawLength);
              for (var i = 0; i < rawLength; ++i) {
                uInt8Array[i] = raw.charCodeAt(i);
              }
              return new Blob([uInt8Array], { type: contentType });
            },
        },
    }
</script>
