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
        <div style="border: 1px solid;height: 75%;border-right:0px; ">
          <div class="text-center" style="font-size: 20px;font-weight: bold;background-color:gray;border-bottom:1px solid;height:35px;"><b>Motor Examination</b></div>
            <canvas id="neuro_signature-pad" height="500" width="600" style="background: url('/assets/img/froms/examination_small_2.png') no-repeat; max-width:100%; max-height:100%;width: 85%"></canvas>
        </div>
      </div>
      <div class="col-md-6" style="padding: 0px;">
        <div style="border: 1px solid;height: 75%">
          <div class="text-center"  style="font-size: 20px;font-weight: bold;border-bottom:1px solid;height:35px;"><b>Sensory Examination</b></div>
        <canvas id="neuro_signature-pad1" height="500" width="600" style="background: url('/assets/img/froms/examination_small_2.png') no-repeat; max-width:100%; max-height:100%;width: 85%"></canvas>
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
              <th>Biceps 123456</th>
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
					<input class="form-control" type="text" id="plantars" name="plantars" value="" v-model="neuroExaminationData.plantars" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('plantars')">
						Field is required
					</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="romberg" class="control-label">Romberg's : </label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="romberg" name="romberg" value="" v-model="neuroExaminationData.romberg" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('romberg')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="gait" class="control-label">Gait</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="gait" name="gait" value="" v-model="neuroExaminationData.gait" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('gait')">
						Field is required
					</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="cerebellar" class="control-label">Cerebellar Signs : </label>
        </div>
        <div class="col-md-6">
					<select class="form-control ls-select2" v-validate="'required'" id = "cerebellar" name="cerebellar" value="" :class="{'is-danger': errors.has('cerebellar') }" v-model="neuroExaminationData.cerebellar">
						<option value="no">No</option>
            <option value="truncal">Truncal</option>
            <option value="appendicular">Appendicular</option>
            <option value="tandemwalking">Tandem Walking</option>
          </select>
					<span class="help is-danger" v-show="errors.has('cerebellar')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="neck_stiffness" class="control-label">Neck Stiffness</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="neck_stiffness" name="neck_stiffness" value="" v-model="neuroExaminationData.neck_stiffness" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('neck_stiffness')">
						Field is required
					</span>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="diagnosis" class="control-label">Diagnosis</label>
        </div>
        <div class="col-md-6">
					<input class="form-control" type="text" id="diagnosis" name="diagnosis" value="" v-model="neuroExaminationData.diagnosis" v-validate="'required'"/>
					<span class="help is-danger" v-show="errors.has('diagnosis')">
						Field is required
					</span>
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
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
      <button class=" btn btn-success" type="button" @click="saveNeuroExamination()">Submit</button>
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
   
    export default {
      props:['doctor'],
        data() {
            return {
                'footer' : 'footer',
                'currentDatetime': moment().format('DD-MM-YYYY hh:mm A'),

								'type': 'neuroExamination',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
                'signaturePad1':{},
                'signaturePad2':{},
                'signaturePad3':{},
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


								}
            }
        },
				components: {
					 addressograph,
					 SelectPatientModal
			 },
			 mounted() {
        let vm =this;
				 $('.ls-select2').select2({
						placeholder: "Select",
				 });
         setTimeout(function(){
          vm.examinationChangeImage();
 
        },2000)
			 },
				methods: {
		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },
		    saveNeuroExamination() {
          let vm = this;
		    	this.$validator.validateAll().then(
	            (response) => {
	            	if (!this.errors.any()) {
	            		 $("body .js-loader").removeClass('d-none');
                   var neuroExaminationData = {'type':this.type,'patient_id':this.patient_id,'ipd_id':this.ipd_id,'form_data':this.neuroExaminationData};
        			    	User.saveNeuroExamination(neuroExaminationData).then(
        	                (response) => {
        	                	if(response.data.status == 200) {
        	                		toastr.success('Neuro Examination has been saved', 'Neuro Examination', {timeOut: 5000});
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

			   },
      examinationChangeImage() {
            var vm =this;
            var canvas = document.getElementById("neuro_signature-pad");
            var canvas1 = document.getElementById("neuro_signature-pad1");
            var canvas2 = document.getElementById("doc_signature");

            var clear_neuro_scribble = document.getElementById("clear_doctor_signature");
            // var clear_neuro_scribble1 = document.getElementById("clear_neuro_scribble");


            vm.signaturePad1 = new SignaturePad(canvas, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            vm.signaturePad2 = new SignaturePad(canvas1, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            vm.signaturePad3 = new SignaturePad(canvas2, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            window.onresize = vm.resizeCanvas;
            vm.resizeCanvas(canvas);
            vm.resizeCanvas(canvas1);
            vm.resizeCanvas(canvas2);
            clear_neuro_scribble.addEventListener("click", function (event) {
              vm.signaturePad3.clear();
            });
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
               canvas.getContext("2d").scale(ratio, ratio);
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
