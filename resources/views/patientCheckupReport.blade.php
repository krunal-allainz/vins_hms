<div class="container">
------------------------------------------------------------------------------------------------------------------------------------------------------
<table>
	<tr>
		<td><label><b>PULSE -</b></label>
			{{$data['patientCheckupDetail']['pulse']}}</td>
		<td><label><b>TEMP -</b></label>
				{{$data['patientCheckupDetail']['temp']}}</td>
		<td><label><b>BP -</b></label>
				{{$data['patientCheckupDetail']['bp']}}</td>
		<td><label><b>RESP/SPO2 -</b></label>
				{{$data['patientCheckupDetail']['vitals']}}</td>
	</tr>
	<tr>
		<td><label><b>HEIGHT -</b></label>
					{{$data['patientCheckupDetail']['height']}}</td>
		<td><label><b>WEIGHT -</b></label>
					{{$data['patientCheckupDetail']['weight']}}</td>
		<td><label><b>BMI -</b></label>
				{{$data['patientCheckupDetail']['bmi']}}</td>
	</tr>
	<tr>
		<td><label>PAIN ASSESSMENT</label></td>
		<td>
			@if($data['patientCheckupDetail']['pain'] == 0)
			<div>
				<img src="/assets/img/pain/P1.png" class="test" height="50" width="50">
			</div>
			@endif
			@if($data['patientCheckupDetail']['pain'] == 2)
			<div>
				<img src="/assets/img/pain/P2.png" class="test" height="50" width="50">
			</div>
			@endif
			@if($data['patientCheckupDetail']['pain'] == 4)
			<div>
				<img src="/assets/img/pain/P3.png" class="test" height="50" width="50">
			</div>
			@endif
			@if($data['patientCheckupDetail']['pain'] == 6)
			<div>
				<img src="/assets/img/pain/P4.png" class="test" height="50" width="50">
			</div>
			@endif
			@if($data['patientCheckupDetail']['pain'] == 8)
			<div>
				<img src="/assets/img/pain/P5.png" class="test" height="50" width="50">
			</div>
			@endif
			@if($data['patientCheckupDetail']['pain'] == 10)
			<div>
				<img src="/assets/img/pain/P6.png" class="test" height="50" width="50">
			</div>
			@endif
		</td>
	</tr>
</table>
----------------------------------------------------------------------------------------------------------------------------------------------------------	

</div>