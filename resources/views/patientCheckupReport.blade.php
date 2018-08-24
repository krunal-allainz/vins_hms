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
		<td class="col-md-3 text-left"><label>PAIN ASSESSMENT</label></td>
		<td class="col-md-9 text-left">
			<div <?php 
			echo ($data['patientCheckupDetail']['pain'] == 0)?'style="float:left;  width:15% !important;
    padding:0px !important;line-height : 22px;border :2px solid red;
 box-shadow :rgba(0, 0, 0, 0.2) 0px 1px 3px 0px;border-radius :2px;
  color:#5f5f5f;display :inline-block;"':''; 
			?>  style="float:left;width:15% !important;
    padding:0px !important;">
				<img src="/assets/img/pain/P1.png" class="test" height="50" width="50" >
			</div>
			
			<div <?php 
			echo ($data['patientCheckupDetail']['pain'] == 2)?'style="float:left;  width:15% !important;
    padding:0px !important;line-height : 22px;border :2px solid red;
 box-shadow :rgba(0, 0, 0, 0.2) 0px 1px 3px 0px;border-radius :2px;
  color:#5f5f5f;display :inline-block;"':'class="report-painassesment"'; 
			?> style="float:left;width:15% !important;
    padding:0px !important;">
				<img src="/assets/img/pain/P2.png" class="test" height="50" width="50">
			</div>
			
			<div <?php 
			echo ($data['patientCheckupDetail']['pain'] == 4)?'style="float:left;  width:15% !important;
    padding:0px !important;line-height : 22px;border :2px solid red;
 box-shadow :rgba(0, 0, 0, 0.2) 0px 1px 3px 0px;border-radius :2px;
  color:#5f5f5f;display :inline-block;"':'class="report-painassesment"'; 
			?> style="float:left;width:15% !important;
    padding:0px !important;">
				<img src="/assets/img/pain/P3.png" class="test" height="50" width="50">
			</div>
			
			<div <?php 
			echo ($data['patientCheckupDetail']['pain'] == 6)?'style="float:left;  width:15% !important;
    padding:0px !important;line-height : 22px;border :2px solid red;
 box-shadow :rgba(0, 0, 0, 0.2) 0px 1px 3px 0px;border-radius :2px;
  color:#5f5f5f;display :inline-block;"':'class="report-painassesment"'; 
			?> style="float:left;width:15% !important;
    padding:0px !important;">
				<img src="/assets/img/pain/P4.png" class="test" height="50" width="50">
			</div>
			
			<div <?php 
			echo ($data['patientCheckupDetail']['pain'] == 8)?'style="float:left;  width:15% !important;
    padding:0px !important;line-height : 22px;border :2px solid red;
 box-shadow :rgba(0, 0, 0, 0.2) 0px 1px 3px 0px;border-radius :2px;
  color:#5f5f5f;display :inline-block;"':'class="report-painassesment"'; 
			?> style="float:left;width:15% !important;
    padding:0px !important;">
				<img src="/assets/img/pain/P5.png" class="test" height="50" width="50">
			</div>
			
			<div <?php 
			echo ($data['patientCheckupDetail']['pain'] == 10)?'style="float:left;  width:15% !important;
    padding:0px !important;line-height : 22px;border :2px solid red;
 box-shadow :rgba(0, 0, 0, 0.2) 0px 1px 3px 0px;border-radius :2px;
  color:#5f5f5f;display :inline-block;"':'class="report-painassesment"'; 
			?> style="float:left;width:15% !important;
    padding:0px !important;">
				<img src="/assets/img/pain/P6.png" class="test" height="50" width="50">
			</div>
		</td>
	</tr>
</table>
----------------------------------------------------------------------------------------------------------------------------------------------------------	</div>