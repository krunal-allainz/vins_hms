<template>
	<div>
		<div v-if="(printType == 'radiology')" class="row">
			<div class='col-md-12' >
			<span class="report_title">Radiology Report:-</span>
		</div>
		
		 <div class="form-group col-md-12" >
			<div class="">
				<div class="" v-if="radiologyReferalReportData.length>0">
					<table class="mt-10 table table-striped table-bordered report_table" id="radio_list">
						<thead>
							<tr>
								  <th>#</th>
	                            <th>Type</th>
	                            <th>Body parts</th>
				                <th>Qualifier</th>
				                <th>Special request</th>
				                <th>Details</th>
							</tr>
						</thead>
						<tbody>
							<tr :id="res.id" v-for="(res,index) in radiologyReferalReportData" v-if="res.removed==false">
								<td>{{++index}}</td>
				                    <td v-if="res.type=='Other'">{{res.radiology_other}}</td>
	                                <td v-else>{{res.type}}</td>
				                    <td v-if="res.bodyparts=='Other'">{{res.bodyparts_other}}</td>
	                                <td v-else>{{res.bodyparts}}</td>
	                                <td v-if="res.qualifiers=='Other'">{{res.qualifiers_other}}</td>
	                                <td v-else>{{res.qualifiers}}</td>
				                    <td>{{res.special_request}}</td>
				                    <td>{{res.details | strLimit}}</td>		
				                   
							</tr>
						</tbody>
					</table>
				</div>
				<div v-else>
	                <span class="report_details">No record found.</span>
			    </div>
			</div>
		</div>
		</div>
		
		<div v-for="reportName in checkedreportList" v-if="(reportName == 'Radiology' && refferance=='0')" class="row"> 
			
			<div class='col-md-12'>
		 		<span class="report_title"> Radiology Report:-</span>
		 	</div>
		 	<div class="form-group col-md-12">
        	<div class="">
        		<div class="" v-if="orgRadiologyReffData.length>0">
            		<table class="mt-10 table table-striped table-bordered report_table" id="radio_list" >
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Type</th>
	                            <th>Body parts</th>
				                <th>Qualifier</th>
				                <th>Special request</th>
				                <th>Details</th>
				            </tr>
						</thead>
						<tbody>
							<tr v-for="(res,index) in orgRadiologyReffData" v-if="res.removed==false">
				                    <td>{{++index}}</td>
				                    <td v-if="res.type=='Other'">{{res.radiology_other}}</td>
	                                <td v-else>{{res.type}}</td>
				                    <td v-if="res.bodyparts=='Other'">{{res.bodyparts_other}}</td>
	                                <td v-else>{{res.bodyparts}}</td>
	                                <td v-if="res.qualifiers=='Other'">{{res.qualifiers_other}}</td>
	                                <td v-else>{{res.qualifiers}}</td>
				                    <td>{{res.special_request}}</td>
				                    <td>{{res.details |strLimit}}</td>
				            </tr>
		                </tbody>
					</table>
				</div>
				<div v-else>
    				<span class="report_details">No record found.</span>
				</div> 
			</div>
			</div>
		</div> 	
		<div v-for="reportName in checkedreportList" v-if="(reportName == 'Investigation Radiology'  && refferance=='1')" class="row">  
		 	<div class='col-md-12'>
		 		<span class="report_title">Investigation Radiology Report:-</span>
		 	</div>
		 	 <div class="form-group col-md-12">
        	<div class="">
        		<div class="" v-if="orgRadiologyReportData.length>0">
            		<table class="mt-10 table table-striped table-bordered report_table" id="radio_list">
	                    <thead>
	                        <tr>
	                            <th width="4%">#</th>
	                           <!--  <th>Type</th>
	                            <th>Body parts</th>
				                <th>Qualifier</th>
				                <th>Special request</th> -->
				                <th>Details</th>
				            </tr>
						</thead>
						<tbody>
							<tr  v-for="(res,index) in orgRadiologyReportData" v-if="res.removed==false">
				                <td width="4%">{{++index}}</td>
					           <!--  <td v-if="res.type=='Other'">{{res.radiology_other}}</td>
	                            <td v-else>{{res.type}}</td>
				                <td v-if="res.bodyparts=='Other'">{{res.bodyparts_other}}</td>
	                            <td v-else>{{res.bodyparts}}</td>
	                            <td v-if="res.qualifiers=='Other'">{{res.qualifiers_other}}</td>
	                            <td v-else>{{res.qualifiers}}</td>
				                <td>{{res.special_request}}</td> -->

				                <td>{{res.details |strLimit }}</td>
				            </tr>
		                </tbody>
					</table>
				</div>
				<div v-else>
    				<span class="report_details">No record found.</span>
				</div> 
			</div>
		</div>
	</div> 
</div>
</template>
<script>
	export default {
		props:['radiologyReferalReportData','radiologyReportData','printType','checkedreportList','refferance'],
		data() {
			return{
				'orgRadiologyReffData' : {},
				'orgRadiologyReportData':{}
				
		      }
		},
		mounted(){
       		let vm =this;
       		vm.getAllValues();
        },
		filters: {
          strLimit: function (value) {
          	   if(value!=null && value!='')
            {
	            if(value.length > 1500){
	                var str50 = value.substr(0,1500);
	                return str50+'...'; 
	            } else {
	                return value; 

	            }
	        }
          }
        },
        methods: {
			GetSelectComponent(componentName) {
		       this.$router.push({name: componentName})
		   	},
		   	getAllValues()
		   	{
		   		let vm =this;
		   		if(!(jQuery.isEmptyObject(vm.radiologyReferalReportData)))
		   		{
		   			vm.orgRadiologyReffData=vm.radiologyReferalReportData;
		   		}
		   		if(!(jQuery.isEmptyObject(vm.radiologyReportData)))
		   		{
		   			vm.orgRadiologyReportData=vm.radiologyReportData;
		   		}
		   		
		   		
		   	}
        }
	}
</script>