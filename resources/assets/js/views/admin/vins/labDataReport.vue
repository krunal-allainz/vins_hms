<template>
	<div>
	<div v-show="(printType == 'lab')">
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h5>Lab Report</h5>
			</div>
		</div>
		 <div class="form-group" >
			<div class="col-md-12">
				<div class="">
					<table class="table table-striped table-bordered" id="laboratory_table_list">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						<tr :id="res.id" v-for="(res,index) in labReferalData">
							<td>{{++index}}</td> 
							<td>{{res.name}}</td>		
						</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<div v-for="reportName in checkedreportList" v-show="(reportName == 'Investigation Lab' && printType == 'opd_case')">
		<div class='row'>
		<div class='col-md-12 text-center'>
			<h5>Investigation Lab Report</h5>
		</div>
		</div>
		<div class="form-group"  >
			<div class="col-md-12">
				<div class="">
					<table class="table table-striped table-bordered" id="laboratory_table_list">
					<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Date</th>
						<th>Result</th>
					</tr>
			   		 </thead>
					<tbody>
					<tr :id="res.id" v-for="(res,index) in labReportData">
						<td>{{++index}}</td> 
						<td>{{res.name }}</td>
						<td>{{res.date }}</td>
						<td>{{res.result }}</td>
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
		props:['labReferalData','labReportData','printType','checkedreportList']
	}
</script>