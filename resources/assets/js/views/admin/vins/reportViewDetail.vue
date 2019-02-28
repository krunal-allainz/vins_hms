<template>
	<div>
		<div  v-show="(printType == 'radio')" v-if="(radiologyReferalReportData)">
			 
		 	<div class='col-md-12'>
		 		<span class="report_title">Radiology Request:-</span>
		 	</div>
        		<div class="col-md-12">
        			<div class="">
                		<table class="table table-striped table-bordered report_table" id="radio_list" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Body parts</th>
                            <th>Spine</th>
			                <th>Qualifier</th>
			                <th>Special request</th>
			                <th>Details</th>
			            </tr>
						</thead>

						<tbody v-if="radiologyReferalReportData.length>0">
							<tr v-for="(res,index) in radiologyReferalReportData" >
			                    <td>{{++index}}</td>
			                    <td v-if="res.type=='Other'">{{res.radiology_other}}</td>
                                <td v-else>{{res.type}}</td>
			                    <td v-if="res.bodyparts=='Other'">{{res.bodyparts_other}}</td>
                                <td v-else>{{res.bodyparts}}</td>
                                <td>{{res.spine_option_text}}</td>
                                <td v-if="res.qualifiers=='Other'">{{res.qualifiers_other}}</td>
                                <td v-else>{{res.qualifiers}}</td>
			                    <td>{{res.special_request}}</td>
			                    <td>{{res.details | strLimit}}</td>
			                </tr>
                    </tbody>
                    <tbody v-else>
                    	<tr>
			               <td colspan="6">No data found.</td>
			            </tr>
                	</tbody>
					</table>
					</div>
				</div>
			
		</div>	
		<div  v-show="(printType == 'investigationRadio')" v-if="(radiologyReportData)">
			
		 	<div class='col-md-12'>
		 		<span class="report_title">Investigation Radiology Request:-</span>
		 	</div>
        		<div class="col-md-12">
        			<div class="">
                		<table class="table table-striped table-bordered report_table" id="radio_list">
                        <thead>
                        <tr>
                            <th width="2%">#</th>
                            <!-- <th>Type</th>
                            <th>Body parts</th>
			                <th>Qualifier</th>
			                <th>Special request</th> -->
			                <th>Details</th>
			            </tr>
						</thead>
						<tbody v-if="radiologyReportData.length>0">
						<tr  v-for="(res,index) in radiologyReportData">
		                    <td width="2%">{{++index}}</td>
		                   <!--  <td v-if="res.type=='Other'">{{res.radiology_other}}</td>
                            <td v-else>{{res.type}}</td>
		                    <td v-if="res.bodyparts=='Other'">{{res.bodyparts_other}}</td>
                            <td v-else>{{res.bodyparts}}</td>
                            <td v-if="res.qualifiers=='Other'">{{res.qualifiers_other}}</td>
                            <td v-else>{{res.qualifiers}}</td>
		                    <td>{{res.special_request}}</td> -->
		                    <td>{{res.details }}</td>
		                </tr>
	                    </tbody>
	                     <tbody v-else>
	                    	<tr>
				               <td colspan="6">No data found.</td>
				            </tr>
	                	</tbody>
					</table>
					</div>
				</div>
			
		</div> 	
	</div>
</template>
<script>
	export default {
		props:['radiologyReferalReportData','radiologyReportData','printType','checkedreportList'],
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
	}
</script>