import * as types from '../mutation-types'
import _ from 'lodash'
import user from '../../api/users'
import moment from 'moment'

// initial state
const state = {
	  'patientId':0,
  	'ipdId':'',
    'uhid_no':'',
    'admitDatetime': '',
  	'patientData': {},
    'ipdData': {},
    'opdData':{},
    'opd_resultData':{},
    'radioData':{},
    'neuroExaminationData':{},
    'vascExaminationData':{},
    'laboratoryData':{},
    'saveOpd':false,

 }

 // getters
const getters = {
   getIpdID: state => {
      return state.ipdId
    },
    getUhIDNo: state => {
      return state.uhid_no
    },
  }
// actions  
const actions = {
  SetPatientId ({commit},patientId) {
    commit(types.SET_PATIENT_ID, patientId)
  },
  setOpdData({commit},opdData) {
    commit(types.SET_OPD_DATA, opdData);
  },
  setResData({commit},resultData) {
    commit(types.SET_OPD_RESULT_DATA, resultData);
  },
  saveRadioData({commit},radioData) {
    commit(types.SET_RADIO_DATA, radioData);
  },
  SetIpdId ({commit},ipdId) {
    commit(types.SET_IPD_ID, ipdId)
  },
  SetUhidNo ({commit},uhid_no) {
    // console(uhid_no);
    commit(types.SET_UHID_NO, uhid_no)
  },
  saveNeuroExamination({commit},neuroData) {
    // console(uhid_no);
    commit(types.SET_NEURO_DATA, neuroData)
  },
  saveVascularExamination({commit},vascData) {
    // console(uhid_no);
    commit(types.SET_VASC_DATA, vascData)
  },
  saveLabReportData({commit},labReportData){
    commit(types.SET_LAB_REPORT_DATA,labReportData)
  },
  SetPatientData ({commit},ipdId) {
    
    user.getpatientDetail(ipdId).then(
    (response) => {
      if(response.data.code == 200) {
        commit(types.SET_PATIENT_DATA, response.data.data);
      }
    },)
  },
  GetAllPatientName({commit}) {
        user.getAllPatientName().then(
    (response) => {
      if(response.data.code == 200) {
        commit(types.SET_IPD_DATA, response.data.data);
        
      }
    },
    
    )
  },
  resetOpdForm({commit}) {
      commit(types.RESET_OPD_FORM);
    
  },
  saveOpdData({commit,state}) {
    var vm =this;
   // return false;

   let department = this.state.Users.userDetails.department;
   let doctor = this.state.Users.userDetails.first_name + " "+ this.state.Users.userDetails.last_name ;
    //var oData = {'opdData':this.opdData,'resultData':this.resultData,'doctor':this.doctor_id,'department':this.department};
    var oData = {'opdData':state.opdData,'resultData':state.opd_resultData,'doctor':doctor,'department':department,'radioData':state.radioData,'laboratoryData':state.laboratoryData};
    

     user.generateAddOpdDetails(oData).then((response) => {
         $("body .js-loader").addClass('d-none');
         if(response.data.code == 200) {
           commit(types.SAVE_OPD,true);
            toastr.success('OPD details saved successfully', 'OPD Report', {timeOut: 2000});
          } else if(response.data.code == 300) {
            toastr.error('Record not found.Please enter valid search value.', 'Error', {timeOut: 5000});
          } else{
           
           toastr.error('Something goes wrong', 'Error', {timeOut: 5000});
          }
          return 'failed';
           
    },
    (error) => {
                }
    );

  }
}

// mutations
const mutations = {
  [types.SET_IPD_ID] (state, ipdId) {
    state.ipdId = ipdId
  },
  [types.SET_PATIENT_ID] (state, patientId) {
      state.patientId = patientId
  },
  [types.SET_UHID_NO] (state, uhid_no) {
      state.uhid_no = uhid_no
  },
  [types.SET_PATIENT_DATA] (state, patientData) {
    // console.log(patientData)
      state.patientData = patientData.patient_details;
      state.admitDatetime = patientData.admit_datetime;
      state.patientId = patientData.patient_details.id;
      state.ipdId = patientData.id;
  },
  [types.SET_IPD_DATA] (state, ipdData) {
    // console.log(patientData)
      state.ipdData = ipdData;
  },
  [types.SET_OPD_DATA] (state, opdData) {
    // console.log(patientData)
      state.opdData = opdData;
  },
  [types.SET_OPD_RESULT_DATA] (state, resultData) {
    // console.log(patientData)
      state.opd_resultData = resultData;
  },
  [types.SET_RADIO_DATA] (state, radioData) {
    // console.log(patientData)
      state.radioData = radioData;
  },
  [types.SET_NEURO_DATA] (state, neuroData) {
    // console.log(patientData)
      state.neuroExaminationData = neuroData;
  },
  [types.SET_VASC_DATA] (state, vascData) {
    // console.log(patientData)
      state.vascExaminationData = vascData;
  },
  [types.SET_LAB_REPORT_DATA](state, laboratoryData){
      state.laboratoryData = laboratoryData;
  },
    [types.RESET_OPD_FORM] (state) {
    // console.log(patientData)
      state.opdData = {};
      state.opd_resultData = {};
      state.radioData = {};
  },
  [types.SAVE_OPD_DATA] (state) {
    // console.log(patientData)
  },
  [types.SAVE_OPD] (state,oData) {
    state.saveOpd = oData;
    // console.log(patientData)
  },
  
  
  
}

export default {
  state,
  // getters,
  actions,
  mutations
}