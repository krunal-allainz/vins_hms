<template>
	<div class="container">
----------------------------------------------------------------------------------------------------------------------------
		<div class="row">
			<div class="col-md-3 text-left">
					<label><b>PULSE -</b></label>
						{{patientCheckupDetail.pulse}}
			</div>
			<div class="col-md-3 text-left">
			<label><b>TEMP -</b></label>
				{{patientCheckupDetail.temp}}
			</div>
			<div class="col-md-3 text-left">
			<label><b>BP -</b></label>
				{{patientCheckupDetail.bp}}
			</div>
			<div class="col-md-3 text-left">
			<label><b>RESP/SPO2 -</b></label>
				{{patientCheckupDetail.vitals}}
			</div>

		</div>

		<div class="row">
			<div class="col-md-3 text-left">
					<label><b>HEIGHT -</b></label>
					{{patientCheckupDetail.height}}
			</div>
			<div class="col-md-3 text-left">
					<label><b>WEIGHT -</b></label>
					{{patientCheckupDetail.weight}}
			</div>
			<div class="col-md-3 text-left">
					<label><b>BMI -</b></label>
					{{patientCheckupDetail.bmi}}
			</div>

		</div>
		<div class="row">
			<label>PAIN ASSESSMENT</label>
			
			<div v-if="(patientCheckupDetail.pain == 0)">
				<img src="/assets/img/pain/P1.png" class="test" height="50" width="50">
			</div>
			<div v-if="(patientCheckupDetail.pain == 2)">
				<img src="/assets/img/pain/P2.png" class="test" height="50" width="50">
			</div>
			<div v-if="(patientCheckupDetail.pain == 4)">
				<img src="/assets/img/pain/P3.png" class="test" height="50" width="50">
			</div>
			<div v-if="(patientCheckupDetail.pain == 6)">
				<img src="/assets/img/pain/P4.png" class="test" height="50" width="50">
			</div>
			<div v-if="(patientCheckupDetail.pain == 8)">
				<img src="/assets/img/pain/P5.png" class="test" height="50" width="50">
			</div>
			<div v-if="(patientCheckupDetail.pain == 10)">
				<img src="/assets/img/pain/P6.png" class="test" height="50" width="50">
			</div>
		</div>
	</div>
</template>
<script>
     export default {
        props: ['patientCheckupDetail'],
    }

</script>