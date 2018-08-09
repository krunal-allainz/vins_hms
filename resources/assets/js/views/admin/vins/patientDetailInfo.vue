<template>
    <!-- Modal -->
    <div class="modal fade" id="patientDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Patient Detail</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           
            <div data-v-744e717e="" class="table-responsive">
                    <table data-v-744e717e="" class="table">
                        <thead>
                            <tr v-if="(showPatientDetail.patientDetail != null)">
                                <th>{{showPatientDetail.patientDetail.first_name}}    {{showPatientDetail.patientDetail.middle_name}}  {{showPatientDetail.patientDetail.last_name}} </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <b>Gender : </b>
                                    <span v-if="(showPatientDetail.patientDetail.gender == 'F')">Female</span>
                                     <span v-if="(showPatientDetail.patientDetail.gender == 'M')">Male</span>
                                </td>
                                <td>
                                   <b>UHID No :</b> 
                                   <span>{{showPatientDetail.patientDetail.uhid_no}}</span>
                                </td>
                            </tr>
                            <tr v-if="(showPatientDetail.opdDetails != null)">
                                <td>
                                    <table>
                                        <thead>
                                            <tr><th>Opd Detail</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr  v-for="patineOpd in showPatientDetail.opdDetails">
                                                <td v-if="(patineOpd.advice != null)">
                                                    <div class='row'>
                                                      <div class='col-md-12 text-left' v-if ="(patineOpd.advice.type == 'text')">
                                                        <span class='text-left' style="padding-left:30px;"> {{patineOpd.advice}}</span>
                                                      </div>
                                                    </div>
                                                    <div v-if="(patineOpd.advice.type !== 'text' && patineOpd.advice.value != '')">
                                    
                                                    <div class='row'>
                                                     <div class='col-md-12 text-left' v-if ="(patineOpd.advice.type != 'text')">
                                                         <img :src="patineOpd.advice.value" title="Advice">
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
                            <tr v-if="(showPatientDetail.caseDetail != null)">
                                <td>
                                    <table>
                                        <thead>
                                            <tr><th>Case Detail</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="patineCase in showPatientDetail.caseDetail">
                                                <td>{{patineCase.case_type}}</td>
                                                <td>&nbsp;&nbsp;</td>
                                                <td>{{patineCase.created_at}}</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
</template>
<script>
     export default {
        props: ['showPatientDetail'],
    }

</script>