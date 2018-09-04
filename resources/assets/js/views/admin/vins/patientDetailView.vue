<template>
	<table width="500">
    	<thead>
        	<tr v-if="(patientinfo != null)">
               <th>{{patientinfo.first_name}}    {{patientinfo.middle_name}}  {{patientinfo.last_name}} </th>
            </tr>
            </thead>
              <tbody>
            	 <tr v-if="(patientinfo != null)">
                   <td v-if="(patientinfo.gender != null)">
                       <b>Gender : </b>
                       <span v-if="(patientinfo.gender == 'F')">Female</span>
                       <span v-if="(patientinfo.gender == 'M')">Male</span>
                   </td>
                   <td v-if="(patientinfo.uhid_no != null)">
                     <b>UHID No :</b> 
                     <span>{{patientinfo.uhid_no}}</span>
                   </td>
                 </tr>	
                 <tr>
                 	<td>
                 	 <b>Address :</b> 
                     <span>{{patientinfo.address}}</span>
                    </td>
                 	<td>
                 	<b>Age :</b> 
                     <span>{{patientinfo.age}}</span>
                     <span v-if="(patientinfo.age > 1000)">
							<span v-if="(((currentYear) - (patientinfo.age)) > 0)">{{(currentYear) - (patientDetail.age)}}</span>	
							<span v-else> 1</span>
						</span>
						<span v-if="(patientinfo.age  < 1000)">{{patientinfo.age}}</span>
                 	</td>
                 </tr>
                 <tr>
                 	<td>
                 	 <b>Mob No : </b> 
                     <span>{{patientinfo.mob_no}}</span></td>
                 	<td>
                 	 <b>Phone No:</b> 
                     <span>{{patientinfo.ph_no}}</span></td>
                 </tr>
             </tbody>
            </table>
</template>
<script>
	export default {
		props: ['patientinfo'],
		data() {
			return{
				'currentYear': (new Date()).getFullYear(),
			}
		}
	}
</script>
