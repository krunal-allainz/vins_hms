<template>
   <div class="container">
   	   <div class="page-header">
      	  <div class="row">
             <div class="col-md-6">
               <h1>Patient Receipt From </h1>
             </div>
          </div>
       </div>	
       <form action="" method="post" enctype="multipart/formdata">
    	   <div class="row form-group">	
    	   		<div class="col-md-6">
    	   			<div class="col-md-6">
			          <label for="date">Select Patient:</label>
			        </div>
    	   		

    	   		<div class="col-md-6">
	          		<select  class="form-control ls-select2" v-validate="'required'" id = "patient" name="patient" value="" v-model="patientData.patient"   v-on:change="myFunction()">
	            		 <option :value="patient.id" v-for="patient in patientData.patient_option">{{patient.text}}</option>
	          		</select>	
         							
	          		<span class="help is-danger" v-show="errors.has('patient_list')">
	            		Field is required
	          		</span>
	          	</div>
	          </div>

	          <div class="col-md-6">
			        <div class="col-md-6">
			          <label for="date">OPD CASE NO:</label>
			        </div>
			        <div class="col-md-6">
			         <select  class="form-control ls-select2" type = "text" v-validate="'required'" id = "case_no" name="case_no" value=""  v-model="patientData.case_detail">
			           <option :value="case_no.id" v-for="case_no in patientData.case_detail">{{case_no.text}}</option>
			          </select>
			          <span class="help is-danger" v-show="errors.has('case_no')">
			            Field is required
			          </span>
			        
			        </div>
			     </div>
	          	<div class="col-md-6">
			        <div class="col-md-3 ">
			          <label for="date">Gender:</label>
			        </div>
			        <div class="col-md-6">
			       
			        </div>
			     </div>

			     <div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="consulting_dr">Consulting Dr..: </label>
					</div>
					<div class="col-md-6">

						<!-- <input type="text" name=""> -->
			      
			      		<!--span class="help is-danger" v-show="errors.has('consulting_dr')">
		                	Field is required
		                </span-->
					</div>
				</div>
        </div>
       </form>		
   </div>
</template>
<script >
	import User from '../../../api/users.js';
	
	let list=[];
	let opdDetail=[];
	let patient_data_detail=[];

	 export default {
        data() {
            return {
            	post: null,
                'footer' : 'footer',
                'currentYear': new Date().getFullYear(),
                'patientData' : {
                	'gender': '',
                	'case_no': '',
                	'reference_dr': '',
                	'patient':'',
                	'patient_option':list,
                	'case_detail': opdDetail,
                	'select_patient_detail':patient_data_detail,
                }
            }
        },

        mounted(){
       
          $('.ls-select2').select2({
           placeholder: "Select"
          }); 

          let vm =this;
          $('.ls-select2').on("select2:select", function (e) { 
            if(this.id == 'referral'){
              vm.patientData.referral=$(this).val();
            }
            else if(this.id== 'internal'){
              vm.patientData.cross_type_int = $(this).val();
            }
            else{
              vm.patientData.case_type = $(this).val(); 
            }
             if($(this).val() == 'old') {
             } 
             else {
                setTimeout(function(){
                $('#createPatientDetail').modal('show');  
             },500)
            }
            

          });
           $('.ls-select2').on("select2:select", function (e) { 
  			let patientId = $(this).val();
  			 User.getPatientOPDDetail(patientId).then(
  			 	(response) => { 
  			 		if(response.data.code == 200){
  			 			if(response.data.data.length != 0){
  			 				$.each(response.data.data,function(key,value){
  			 					let opdId = value.id;
  			 					let opdNumber =  value.id;
  			 					opdDetail.push({
  			 							text :opdNumber,
  			 							id :opdId,
  			 					});
  			 				});

  			 		}
  			 	}
  			 		
		      	},
			    (error) => {
			    },
  			 );

  			/*User.getpatientDetail(patientId).then(
  				(response) => { 
  					if(response.data.code == 200){
  					
  					$.each(response.data.data,function(index,data){console.log(data);
	  					let name = data.patient_details.first_name +' '+data.patient_details.last_name;
							let pid  = data.patient_details.id ;
							let address  = data.patient_details.address ;
							let caseType  = data.patient_details.case_type ;
							let consulatant  = data.patient_details.consultant ;
							let gender  = data.patient_details.gender ;
							let mob  = data.patient_details.mob_no ;
							let phone  = data.patient_details.phone ;
							let references  = data.patient_details.references ;
							let uhid_no  = data.patient_details.uhid_no ;
			      			patient_data_detail.push({text:name,
			      					   id:pid,
			      					   add:address,
			      					   case_type:caseType,
			      					   consult:consulatant,
			      					   gender:gender,
			      					   mob:mob,
			      					   phone:phone,
			      					   references:references,
			      					   uhid_no:uhid_no
			      					  });
			      		});
  					console.log(patient_data_detail);
  					}
  				},
			    (error) => {
			    },
  			 );*/
		});

          User.getAllPatientName().then(
		    (response) => {
		    	let patien_data ;
		      	patien_data = response.data;
		      	$.each(response.data.data, function(key, value) {
						let name = value.patient_details.first_name +' '+value.patient_details.last_name;
						let pid  = value.patient_details.id ;
						let address  = value.patient_details.address ;
						let caseType  = value.patient_details.case_type ;
						let consulatant  = value.patient_details.consultant ;
						let gender  = value.patient_details.gender ;
						let mob  = value.patient_details.mob_no ;
						let phone  = value.patient_details.phone ;
						let references  = value.patient_details.references ;
						let uhid_no  = value.patient_details.uhid_no ;
		      			list.push({
		      				text:name,
							id:pid,
		      					   add:address,
		      					   case_type:caseType,
		      					   consult:consulatant,
		      					   gender:gender,
		      					   mob:mob,
		      					   phone:phone,
		      					   references:references,
		      					   uhid_no:uhid_no
		      					  });
  				 });
  				
		    },
		    (error) => {
		    },
		);

		
        }
        

    }

</script>