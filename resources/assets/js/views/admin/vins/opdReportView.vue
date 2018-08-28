<template>
</template>
<script>
	import vinsletterheadheaderpart from './vins_letter_header.vue';
	import vinsletterheadfooterpart from './vins_letter_footer.vue';
	import patientDetailReport from './patientDetailReport.vue';
	import patientCheckupReport from './patientCheckupReport.vue';
	import prescriptionData from './prescriptionData.vue';
	import prescriptionPrint from './prescriptionPrint.vue';
	import print from 'print-js'
	import _ from 'lodash';
	
	export default {
		props: ['opdId','patinetId','todayDate'],
		data() {
			return{
				'consultntId' : '',
				'consultName' : '',
				'signatureName' : '',
				'doctoreName' :'',
				'timeStamp' : '',
				'regNo':'',
				'patientDetail' : {},
		      	'patientCheckupDetail' : {},
		      	'department': '',			
		      }
		},
		 mounted(){
       	let vm =this;
       	vm.getOpdData(vm.opdId);
       	vm.getPatientData(vm.patinetId);
       },
		components: {
         vinsletterheadheaderpart,
         vinsletterheadfooterpart,
         prescriptionPrint,
         patientDetailReport,
         patientCheckupReport,
       },
        methods: {
       		getOpdData(opdId){
       			User.getPatientOpdData().then(
       				(response) => {
       					console.log(response.data.data);
       				},
       				(error) => {
       				}
       			);
       		},
       		getPatientData(patinetId)
			{
				var vm=this;
				User.generatePatientDetailsByID(patinetId).then(
	  				(response) => {
	  					
	  					if(response.data.code == 200){
	  						//console.log(response.data.data);
	  						vm.patientDetail = response.data.data;
	  					}
	  				},
	  				(error) => {

	  				}
  				);
  				User.getOPDDetailsByPatientId(patinetId).then(
  					(response) => {
	  					
	  					if(response.data.code == 200){
	  						vm.opdId = response.data.data.id;
	  						vm.sectionOpdId = response.data.data.opd_id;
	  						User.generatePatientCheckUpDetails(vm.opdId).then(
  							(response) => {
	  							if(response.data.code == 200){
	  							vm.patientCheckupDetail = response.data.data;
	  							}
	  							var sectionOpdId = vm.sectionOpdId;
			  				User.getPatientCaseDetailByOpdId(sectionOpdId).then(
			  					(response) => {
			  					console.log(response.data.data);
				  					if(response.data.code == 200){
				  					vm.reference = response.data.data.references;
				  					vm.consultntId = response.data.data.consultant_id;
				  					}
				  					var userType = 1;
						  			User.getDoctoreInfoById(vm.consultntId,userType).then(
						  				(response) => {
						  					if(response.data.code == 200){
						  						var data = response.data.data;
						  						//vm.signatureName = data.name;
						  						vm.doctoreName = data.name;
						  						vm.timeStamp =data.dagree;  
						  						vm.department =data.department;	
						  						vm.regNo =data.regNo;
						  					}
						  				},
						  				(error) => {

						  				}
						  			);
						  			User.generateUserNameById(vm.consultntId).then(
						  				(response) => {
											vm.consultName = response.data;
											vm.signatureName = response.data;
										},
									    (error) => {
									    },
						  			); 
  			
				  				},
				  				(error) => {

				  				}
			  					);
	  						},
	  						(error) => {

	  							}

  							);
	  					}
	  				},
	  				(error) => {

	  				}
  				);
			},
			GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		   	}
       }
</script>