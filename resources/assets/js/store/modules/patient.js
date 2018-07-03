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
    let oData = state.radioData;
    user.saveOpdData(oData).then((response) => {
      commit(types.SAVE_OPD_DATA);
    });

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
  
  
  
}

export default {
  state,
  // getters,
  actions,
  mutations
}