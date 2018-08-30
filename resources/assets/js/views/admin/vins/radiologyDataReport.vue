<template>
	<div>
		<div v-if="(printType == 'radiology')" >
			 <div class='row'>
			 	<div class='col-md-12 text-center'>
			 		<h4>Radiology Report</h4>
			 	</div>
			 </div>
			 <div class="row">
        		<div class="col-md-12">
        			<div class="">
                		<table class="table table-striped table-bordered" id="radio_list">
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
						<tr v-if="res.removed == false" v-for="(res,index) in radiologyReferalData">
		                    <td>{{++index}}</td>
		                    <td>{{res.type}}</td>
		                    <td>{{res.bodyparts}}</td>
		                    <td>{{res.qualifiers}}</td>
		                    <td>{{res.special_request}}</td>
		                    <td>{{res.details | strLimit}}</td>
		                    <!-- <td><img :src="res.imgData" height="100" width="100" /></td> -->
		                </tr>
                    </tbody>
					</table>
					</div>
				</div>
			</div>
		</div>	
		<div v-for="reportName in checkedreportList" v-show="(reportName == 'Investigation Radiology' )">
			<div class='row'>
			 	<div class='col-md-12 text-center'>
			 	<h4>Investigation Radiology Report</h4>
			 	</div>
			 </div>
			 <div class="row">
        		<div class="col-md-12">
        			<div class="">
                		<table class="table table-striped table-bordered" id="radio_list">
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
						<tr  v-for="(res,index) in radiologyReportData">
		                    <td>{{++index}}</td>
		                    <td>{{res.type}}</td>
		                    <td>{{res.bodyparts}}</td>
		                    <td>{{res.qualifiers}}</td>
		                    <td>{{res.special_request}}</td>
		                    <td>{{res.details | strLimit}}</td>
		                    <!-- <td><img :src="res.imgData" height="100" width="100" /></td> -->
		                </tr>
                    </tbody>
					</table>
					</div>
				</div>
			</div>
		</div> 	
	</div>
</template>
<script>
		export default {
		props:['radiologyReferalData','radiologyReportData','printType','checkedreportList']
	}
</script>