<div class="">
------------------------------------------------------------------------------------------------------------------------------------------------------
	<table>
		<tbody>
			<tr>
				<td class="text-left"><label><b>Patient's Name:</b></label><span><b>{{$data['patientDetail']['first_name']}}
								{{$data['patientDetail']['middle_name']}}
							    {{$data['patientDetail']['last_name']}}</b></span></td>
							    <td></td>
				<td class="text-right"><label><b>UHID :</b></label><b>{{$data['patientDetail']['uhid_no']}}</b></td>
			</tr>
			<tr>
				<td><label><b>Address :</b></label>{{$data['patientDetail']['address']}}</td>
				<td></td>
				<td><label><b>Date :</b></label><b>{{$data['todayDate']}}</b></td>
			</tr>
			<tr>
				<td class="text-left"><label><b>Mob No:</b></label><b>{{$data['patientDetail']['mob_no']}}</b></td>
				<td class="text-center"><label><b>Phone No:</b></label>{{$data['patientDetail']['ph_no']}}</td>
				<td class="text-right"><label><b>Age/Sex:</b></label>
					<span>
						@if($data['patientDetail']['age'] > 1000)
							@if(((now()->year) - ($data['patientDetail']['age'])) > 0)
									{{ (now()->year) - ($data['patientDetail']['age'])}}
							@else
								1
							@endif
						@endif
						@if($data['patientDetail']['age'] < 1000)
								{{$data['patientDetail']['age']}}
						@endif
						</span>
						@if($data['patientDetail']['gender'] == 'F')
						<span><b>/ Female</b></span>
						@else
						<span ><b>/ Male</b></span>
						@endif</td>
			</tr>
			<tr>
				<td><label><b>Consulting Dr.:</b></label>
						{{$data['doctoreName']}}
				</td>
				<td></td>
				<td>	<label><b>Ref By Dr.:</b></label>
				{{ $data['reference']}}</td>
			</tr>
			<tr>
				<td>	<label><b>Speciality:</b></label>
						{{$data['department']}}</td>
						<td></td>
				<td></td>
			</tr>
			<tr>
				<td> 	<label><b>Dr. Reg. No:</b></label>
						{{$data['regNo']}}</td>
						<td></td>
						<td></td>
			</tr>
		</tbody>
	</table>
</div>


