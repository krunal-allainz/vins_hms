<template>
	<div>
		<div v-show="(CrossReferalData.length != 0)">
			 <div class='row'>
			 	<div class='col-md-12 text-center'>
			 		<h5>Cross Referrals</h5>
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
                            <th>Name</th>
			            </tr>
						</thead>
						<tbody>
						<tr  v-for="(res,index) in CrossReferalData">
		                    <td>{{++index}}</td>
		                    <td>{{res.cross_type}}</td>
		                    <td>{{res.cross_value}}</td>
		                    
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
		props:['CrossReferalData','printType','checkedreportList']
	}
</script>
