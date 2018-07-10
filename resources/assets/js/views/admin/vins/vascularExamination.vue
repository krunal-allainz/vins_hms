<template>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h3>Examination</h3>
				</div>
			</div>
		</div>

		<form action="" method="post">
      <div class="row form-group">
         <div class="col-md-6">
          <div class="col-md-6">
            <label>Pulsations : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="pulsations" id="pulsations" v-model="vascularExaminationData.pulsations" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>RR : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="rr" id="rr" v-model="vascularExaminationData.rr" />
          </div>
        </div>
      </div>

  

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Ulcer : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="ulcer" id="ulcer" v-model="vascularExaminationData.ulcer" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Gangrene : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="gangrene" id="gangrene" v-model="vascularExaminationData.gangrene" />
          </div>
        </div>
      </div>

     

      <div class="row">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <th>CAR</th>
              <th>SCA</th>
              <th>BR</th>
              <th>RAD</th>
              <th>UL</th>
              <th>FEM</th>
              <th>POP</th>
              <th>PT</th>
              <th>DP</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>R</th>
              <td><input class="form-control" type="text" name="car_r" id="car_r" v-model="vascularExaminationData.car_r" /></td>
              <td><input class="form-control" type="text" name="sca_r" id="sca_r" v-model="vascularExaminationData.sca_r" /></td>
              <td><input class="form-control" type="text" name="br_r" id="br_r" v-model="vascularExaminationData.br_r" /></td>
              <td><input class="form-control" type="text" name="rad_r" id="rad_r" v-model="vascularExaminationData.rad_r" /></td>
              <td><input class="form-control" type="text" name="ul_r" id="ul_r" v-model="vascularExaminationData.ul_r" /></td>
              <td><input class="form-control" type="text" name="fem_r" id="fem_r" v-model="vascularExaminationData.fem_r" /></td>
              <td><input class="form-control" type="text" name="pop_r" id="pop_r" v-model="vascularExaminationData.pop_r" /></td>
              <td><input class="form-control" type="text" name="pt_r" id="pt_r" v-model="vascularExaminationData.pt_r" /></td>
              <td><input class="form-control" type="text" name="dp_r" id="dp_r" v-model="vascularExaminationData.dp_r" /></td>
            </tr>
            <tr>
              <th>L</th>
              <td><input class="form-control" type="text" name="car_l" id="car_l" v-model="vascularExaminationData.car_l" /></td>
              <td><input class="form-control" type="text" name="sca_l" id="sca_l" v-model="vascularExaminationData.sca_l" /></td>
              <td><input class="form-control" type="text" name="br_l" id="br_l" v-model="vascularExaminationData.br_l" /></td>
              <td><input class="form-control" type="text" name="rad_l" id="rad_l" v-model="vascularExaminationData.rad_l" /></td>
              <td><input class="form-control" type="text" name="ul_l" id="ul_l" v-model="vascularExaminationData.ul_l" /></td>
              <td><input class="form-control" type="text" name="fem_l" id="fem_l" v-model="vascularExaminationData.fem_l" /></td>
              <td><input class="form-control" type="text" name="pop_l" id="pop_l" v-model="vascularExaminationData.pop_l" /></td>
              <td><input class="form-control" type="text" name="pt_l" id="pt_l" v-model="vascularExaminationData.pt_l" /></td>
              <td><input class="form-control" type="text" name="dp_l" id="dp_l" v-model="vascularExaminationData.dp_l" /></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Doppler ABPi : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="doppler_abpi" id="doppler_abpi" v-model="vascularExaminationData.doppler_abpi" />
          </div>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <label>Varicose Vein Pattern : </label>
        </div>
      </div>

      <div class="row form-check form-inline">
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="gsv" id="gsv" v-model="vascularExaminationData.gsv"/>GSV
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="ssv" id="ssv" v-model="vascularExaminationData.ssv"/>SSV
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="both" id="both" v-model="vascularExaminationData.both"/>BOTH
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input class="form-check-input" type="checkbox" name="ipv" id="ipv" v-model="vascularExaminationData.ipv"/>iPV
          </label>
        </div>
      </div>

      <hr />
      <div class="row form-group" >
        <div class="col-md-4">
        <canvas id="vasc_signature-pad1" height="300" width="600" style="background: url('/assets/img/froms/varicose_vein_1_small_new.png') no-repeat; max-width:100%; max-height:100%;"></canvas>
              <div><button type="button" id="clear_vasc_signature" class="btn btn-sm btn-danger">Clear</button></div>
      </div>
       <div class="col-md-4">
        <canvas id="vasc_signature-pad2" height="300" width="600" style="background: url('/assets/img/froms/varicose_vein_2_small_new.png') no-repeat; max-width:100%; max-height:100%;"></canvas>
              <div><button type="button" id="clear_vasc_signature1" class="btn btn-sm btn-danger">Clear</button></div>
       
      </div>
       <div class="col-md-4">
        <canvas id="vasc_signature-pad3" height="300" width="600" style="background: url('/assets/img/froms/varicose_vein_3_small_new.png') no-repeat; max-width:100%; max-height:100%;"></canvas>
              <div><button type="button" id="clear_vasc_signature2" class="btn btn-sm btn-danger">Clear</button></div>
       
      </div>
    </div>

      <div class="row form-group">
        <div class="col-md-12">
          <div class="col-md-12">
            <label>Clinical Diagnosis : </label>
          </div>
          <div class="col-md-12">
            <input class="form-control" type="text" name="clinical_diagnosis" id="clinical_diagnosis" v-model="vascularExaminationData.clinical_diagnosis" />
          </div>
        </div>
      </div>


      <div class="row form-group">
        <div class="col-md-12">
          <div class="col-md-12">
            <label>Follow Up : </label>
          </div>
          <div class="col-md-12">
            <textarea class="form-control" type="text" name="follow_up" id="follow_up" v-model="vascularExaminationData.follow_up" /></textarea>
          </div>
        </div>
      </div>
          <div class="text-center row form-group">
         <div class="col-md-12">
           <button type="button" class="btn btn-primary btn-submit text-right " @click="prev()" >Previous</button>
          <button class="btn btn-primary btn-submit text-right ml-10" type="button" @click="saveVascularExamination()">Save Examination</button>
        </div>
      </div>

		</form>
		  <!-- <select-patient-modal @confirmed="deleteConfirmed()"></select-patient-modal> -->
	</div>
</template>
<script >
	import User from '../../../api/users.js'
	import addressograph from './addressograph.vue';
	// import SelectPatientModal from '../../../components/SelectPatientModal.vue';
  import SignaturePad from 'signature_pad';
  import _ from 'lodash';
    export default {
        data() {
            return {
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
								'type': 'vascularExamination',
                'patient_id': this.$store.state.Patient.patientId,
               	'ipd_id': this.$store.state.Patient.ipdId,
								'vascularExaminationData': {
                  'vitals' : '',
                  'temp' : '',
                  'pulse' : '',
                  'rr' : '',
                  'bp' : '',
                  'ulcer' : '',
                  'gangrene' : '',
                  'pulsations' : '',
                  'car_r' : '',
                  'sca_r' : '',
                  'br_r' : '',
                  'rad_r' : '',
                  'ul_r' : '',
                  'fem_r' : '',
                  'pop_r' : '',
                  'pt_r' : '',
                  'dp_r' : '',
                  'car_l' : '',
                  'sca_l' : '',
                  'br_l' : '',
                  'rad_l' : '',
                  'ul_l' : '',
                  'fem_l' : '',
                  'pop_l' : '',
                  'pt_l' : '',
                  'dp_l' : '',
                  'doppler_abpi' : '',
                  'gsv' : '',
                  'ssv' : '',
                  'both' : '',
                  'ipv' : '',
                  'clinical_diagnosis' : '',
                  'signaturePad1':{},
                  'signaturePad2':{},
                  'signaturePad3':{},
                  'follow_up':''

								}
            }
        },
				components: {
					 addressograph,
					 // SelectPatientModal
			 },
			 mounted() {
        var vm =this;
        setTimeout(function(){
          vm.examinationChangeImage();
          vm.initData();
        },2000)
			 },
				methods: {
          initData(){
            let vm =this;
            vm.vascularExaminationData = _.cloneDeep(this.$store.state.Patient.vascExaminationData);
          },
          examinationChangeImage() {
            var vm =this;
            var canvas = document.getElementById("vasc_signature-pad1");
            var canvas1 = document.getElementById("vasc_signature-pad2");
            var canvas2 = document.getElementById("vasc_signature-pad3");

            var clear_vasc_signature = document.getElementById("clear_vasc_signature");
            var clear_vasc_signature1 = document.getElementById("clear_vasc_signature1");
            var clear_vasc_signature2 = document.getElementById("clear_vasc_signature2");
            // var clear_neuro_scribble1 = document.getElementById("clear_neuro_scribble");


            vm.vascularExaminationData.signaturePad1 = new SignaturePad(canvas, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            vm.vascularExaminationData.signaturePad2 = new SignaturePad(canvas1, {
              backgroundColor: 'rgb(255, 255, 255)',
            });
            vm.vascularExaminationData.signaturePad3 = new SignaturePad(canvas2, {
              backgroundColor: 'rgb(255, 255, 255)',
            });

            window.onresize = vm.resizeCanvas;
            vm.resizeCanvas(canvas);
            vm.resizeCanvas(canvas1);
            vm.resizeCanvas(canvas2);
            
           
              // if (signaturePad.isEmpty()) {
              //   alert("Please provide a signature first.");
              // } else {resizeCanvas
              //   console.log(dataURL);resizeCanvas
              //   // download(dataURL, "signature.png");
              // }
            // });
          },
          prev() {
              let vm =this;
              vm.$store.dispatch('saveVascularExamination', _.cloneDeep(vm.vascularExaminationData)) ;

              vm.$root.$emit('prev');
          },
          saveVascularExamination() {
          let vm = this;
          this.$validator.validateAll().then(
              (response) => {
                if (!this.errors.any()) {
                   // $("body .js-loader").removeClass('d-none');

                  vm.$store.dispatch('saveVascularExamination', _.cloneDeep(vm.vascularExaminationData)) ;
                  let department = this.$store.state.Users.userDetails.department;
                  let doctor =this.$store.state.Users.userDetails.id;
                  
                  //var oData = {'opdData':this.opdData,'resultData':this.resultData,'doctor':this.doctor_id,'department':this.department};
                  var oData = {'opdData':this.$store.state.Patient.opdData,'resultData':this.$store.state.Patient.opd_resultData,'doctor':doctor,'department':department,'radioData':this.$store.state.Patient.radioData,'laboratoryData':this.$store.state.Patient.laboratoryData,'vascExaminationData':this.$store.state.Patient.vascExaminationData,'neuroExaminationData':this.$store.state.Patient.neuroExaminationData};
                  User.generateAddOpdDetails(oData).then((response) => {
                     $("body .js-loader").addClass('d-none');
                     if(response.data.code == 200) {
                       vm.$router.push({'name':'opd_form_thankyou'});
                        toastr.success('OPD details saved successfully', 'OPD Report', {timeOut: 2000});
                      } else if(response.data.code == 300) {
                        toastr.error('Record not found.Please enter valid search value.', 'Error', {timeOut: 5000});
                       vm.$router.push({'name':'opd_form_thankyou'});


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
          resizeCanvas(canvas) {
              var ratio =  Math.max(window.devicePixelRatio || 1, 1);
              canvas.width = canvas.offsetWidth * ratio;
              canvas.height = canvas.offsetHeight * ratio;
              canvas.getContext("2d").scale(ratio, ratio);
              // var  ctx = canvas.getContext('2d');
              // ctx.drawImage($('#scream').get(0), 0, 0);
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

		    GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		    },

		  },

    }
</script>
