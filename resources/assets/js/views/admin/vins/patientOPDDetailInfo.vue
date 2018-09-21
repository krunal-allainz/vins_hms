<template>
<table data-v-744e717e="" class="table">
    <tbody>
    <tr>
        <td>
        	<table>
            <tbody>
            <tr>
                <td width="30%" >
                	<adviceViewDetail :adviceData="advice"></adviceViewDetail>
				</td>
			<tr>
			<tr>
				<td width="30%" v-if="(history != null)">
					<historyViewdetail :historyData="history"></historyViewdetail>
				</td>
			</tr>
			<tr>
				<td width="30%" v-if="(past_history != null)">
						<pasthistoryViewDetail :past_history="past_history"></pasthistoryViewDetail>
				</td>
			</tr>
			<tr v-if ="(follow_up != '')" >
				<td>
					<followupviewDetail :follow_up="follow_up"></followupviewDetail>
				</td>
			</tr>
			<tr v-if ="(provisonal_daignostic != '')" >
				<td>
					<provisonalDaignosticViewDetail :provisonal_daignostic="provisonal_daignostic"></provisonalDaignosticViewDetail>
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
	import adviceViewDetail from './adviceViewDetail.vue';
	import historyViewdetail from './historyViewdetail.vue';
	import pasthistoryViewDetail from './pasthistoryViewDetail.vue';
	import followupviewDetail from './followupviewDetail.vue';
	import provisonalDaignosticViewDetail from './provisonalDaignosticViewDetail.vue';
	export default {
		props: ['patientOPDDetail','patientAllOpdDetail','advice','history','past_history','follow_up','provisonal_daignostic'],
		 components: {
			adviceViewDetail,
            historyViewdetail,
            pasthistoryViewDetail,
            followupviewDetail,
            provisonalDaignosticViewDetail
          }
		}

</script>
