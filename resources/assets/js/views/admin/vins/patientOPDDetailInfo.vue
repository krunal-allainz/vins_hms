<template>
<table data-v-744e717e="" class="table">
    <tbody>
      <tr v-if="(patientOPDDetail != null)">
        <td>
        	<table>
            <!-- <thead>
            <tr><th>Opd Detail </th></tr>
            </thead> -->
            <tbody>
            	<tr  v-for="patineOpd in patientOPDDetail">
                	<td v-if="(patineOpd.advice != null)">
                    	<div>
                        	<div v-if ="(patineOpd.advice.type == 'text')">
                            	<span class='text-left' style="padding-left:30px;"> {{patineOpd.advice}}</span>
							</div>
                        </div>
                        <div v-if="(patineOpd.advice.type !== 'text' && patineOpd.advice.value != '')">
							<div>
								<div  v-if ="(patineOpd.advice.type != 'text')">
                            		{{patineOpd.advice.value}}  <img :src="patineOpd.advice.value" title="Advice">
                            	</div>  
                        	</div>
                    	</div>
					</td>
					<td>&nbsp;&nbsp;</td>
					<td v-if="(patineOpd.history != null)">
						<div class='row'>
							<div class='col-md-12 text-left' v-if ="(patineOpd.history.type == 'text')">
								<span class='text-left' style="padding-left:30px;"> {{patineOpd.history}}</span>
							</div>
						</div>
						<div v-if="(patineOpd.history.type !== 'text' && patineOpd.history.value != '')">
							<div class='row'>
								<div class='col-md-12 text-left' v-if ="(patineOpd.history.type != 'text')">
									<img :src="patineOpd.history.value" title="History">
								</div>  
							</div>
						</div>
					</td>
					<td>&nbsp;&nbsp;</td>
					<td v-if="(patineOpd.past_history != null)">
						<div class='row'>
							<div class='col-md-12 text-left' v-if ="(patineOpd.past_history.type == 'text')">
								<span class='text-left' style="padding-left:30px;"> {{patineOpd.past_history}}</span>
							</div>
						</div>
						<div v-if="(patineOpd.past_history.type !== 'text' && patineOpd.past_history.value != '')">
							<div class='row'>
								<div class='col-md-12 text-left' v-if ="(patineOpd.past_history.type != 'text')">
									<img :src="patineOpd.past_history.value" title="Past History">
								</div>  
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
</template>
<script>
	export default {
		props: ['patientOPDDetail'],
		}
</script>
