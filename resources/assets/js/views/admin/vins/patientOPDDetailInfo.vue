<template>
<table data-v-744e717e="" class="table" v-if="(patientOPDDetail != 'undefined')">
    <tbody>
    <tr>
        <td>
        	<table>
            <tbody>
            <tr  v-for="patineOpd in patientOPDDetail">
                <td v-if="(patineOpd.advice != null)">
                	<div>
                    	<div v-if ="(patineOpd.advice.type == 'text')">
                    		<label><b>Advice : </b></label>
                        	<span class='text-left' style="padding-left:30px;"> {{patineOpd.advice.value}}</span>
						</div>
                    </div>
                    <div v-if="(patineOpd.advice.type !== 'text' && patineOpd.advice.value != null)">
						<div>
							<div  v-if ="(patineOpd.advice.type != 'text')">
							<label><b>Advice : </b></label>
                            	<img :src="patineOpd.advice.value" title="Advice">
                            </div>  
                        </div>
                    </div>
				</td>
					<td>&nbsp;&nbsp;</td>
					<td v-if="(patineOpd.history != null)">
						<div class='row'>
							<div class='col-md-12 text-left' v-if ="(patineOpd.history.type == 'text')">
								<label><b>History : </b></label>
								<span class='text-left' style="padding-left:30px;"> {{patineOpd.history.value}}</span>
							</div>
						</div>
						<div v-if="(patineOpd.history.type !== 'text' && patineOpd.history.value != null)">
							<div class='row'>
								<div class='col-md-12 text-left' v-if ="(patineOpd.history.type != 'text')">
								<label><b>History : </b></label>
									<img :src="patineOpd.history.value" title="History">
								</div>  
							</div>
						</div>
					</td>
					<td>&nbsp;&nbsp;</td>
					<td v-if="(patineOpd.past_history != null)">
						<div class='row'>
							<div class='col-md-12 text-left' v-if ="(patineOpd.past_history.type == 'text')">
							<label><b>Past History : </b></label>
								<span class='text-left' style="padding-left:30px;"> {{patineOpd.past_history.value}}</span>
							</div>
						</div>
						<div v-if="(patineOpd.past_history.type !== 'text' && patineOpd.past_history.value != null)">
							<div class='row'>
								<div class='col-md-12 text-left' v-if="(patineOpd.past_history.type != 'text')">
								<label><b>Past History : </b></label>
									<img :src="patineOpd.past_history.value" title="Past History">
								</div>  
							</div>
						</div>
					</td>
				</tr>
				<tr v-if ="(patineOpd.followup != '')" v-for="patineOpd in patientOPDDetail">
				<td>
					<div class='row'>
						<div class='col-md-12 text-left' >
								<label><b>Follow Up : </b></label>
							<span class='text-left' style="padding-left:30px;"> {{patineOpd.followup}}</span>
						</div>
					</div>
				</td>
				</tr>
				<tr v-if ="(patineOpd.provisonal_daignostic != '')" v-for="patineOpd in patientOPDDetail">
				<td>
					<div class='row'>
						<div class='col-md-12 text-left' >
								<label><b>provisonal Daignostic : </b></label>
							<span class='text-left' style=""> {{patineOpd.provisonal_daignostic}}</span>
						</div>
					</div>
				</td>
				</tr>
			</tbody>
		</table>
		</td>
	</tr>
	</tbody>
</table>
<table v-if="(patientAllOpdDetail != '')">
	<tr>
		  <td v-if="(patientAllOpdDetail.adviceData != null)">
                	<div>
                    	<div v-if ="(patientAllOpdDetail.adviceData.type == 'text')">
                    		<label><b>Advice : </b></label>
                        	<span class='text-left' style="padding-left:30px;"> {{patientAllOpdDetail.adviceData.value}}</span>
						</div>
                    </div>
                    <div v-if="(patientAllOpdDetail.adviceData.type !== 'text' && patientAllOpdDetail.adviceData.value != null)">
						<div>
							<div  v-if ="(patientAllOpdDetail.adviceData.type != 'text')">
							<label><b>Advice : </b></label>
                            	<img :src="patientAllOpdDetail.adviceData.value" title="Advice">
                            </div>  
                        </div>
                    </div>
				</td>
				<td>&nbsp;&nbsp;</td>
					<td v-if="(patineOpd.history != null)">
						<div class='row'>
							<div class='col-md-12 text-left' v-if ="(patineOpd.history.type == 'text')">
								<label><b>History : </b></label>
								<span class='text-left' style="padding-left:30px;"> {{patineOpd.history.value}}</span>
							</div>
						</div>
						<div v-if="(patineOpd.history.type !== 'text' && patineOpd.history.value != null)">
							<div class='row'>
								<div class='col-md-12 text-left' v-if ="(patineOpd.history.type != 'text')">
								<label><b>History : </b></label>
									<img :src="patineOpd.history.value" title="History">
								</div>  
							</div>
						</div>
					</td>
					<td>&nbsp;&nbsp;</td>
					<td v-if="(patineOpd.past_history != null)">
						<div class='row'>
							<div class='col-md-12 text-left' v-if ="(patineOpd.past_history.type == 'text')">
							<label><b>Past History : </b></label>
								<span class='text-left' style="padding-left:30px;"> {{patineOpd.past_history.value}}</span>
							</div>
						</div>
						<div v-if="(patineOpd.past_history.type !== 'text' && patineOpd.past_history.value != null)">
							<div class='row'>
								<div class='col-md-12 text-left' v-if="(patineOpd.past_history.type != 'text')">
								<label><b>Past History : </b></label>
									<img :src="patineOpd.past_history.value" title="Past History">
								</div>  
							</div>
						</div>
					</td>
	</tr>
</table>
</template>
<script>	
	export default {
		props: ['patientOPDDetail','patientAllOpdDetail'],
		}
</script>
