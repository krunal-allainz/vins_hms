import * as types from '../mutation-types'
import _ from 'lodash'
import user from '../../api/users'
import moment from 'moment'

// initial state
const state = {
	  'patientId':0,
    'doctorId':0,
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
    'prescriptionData':{},
    'curStep':1

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
  SetDoctorId ({commit},doctorId) {
    commit(types.SET_DOCTOR_ID, doctorId)
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
    

  },
  setPrescriptionData({commit},prescriptionData) {
      commit(types.SET_PRESCRIPTION_DATA,prescriptionData);
    
  },
}

// mutations
const mutations = {
  [types.SET_IPD_ID] (state, ipdId) {
    state.ipdId = ipdId
  },
  [types.SET_PATIENT_ID] (state, patientId) {
      state.patientId = patientId
  },
  [types.SET_DOCTOR_ID] (state, doctorId) {
      state.doctorId = doctorId
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
  [types.SET_LAB_REPORT_DATA](state, labData){

      state.laboratoryData = {'type':labData};
  },
    [types.RESET_OPD_FORM] (state) {
    // console.log(patientData)
      state.opdData = {};
      state.opd_resultData = {};
      state.radioData = {};
      state.prescriptionData = {};
      state.laboratoryData = {};
  },
  [types.SAVE_OPD_DATA] (state) {
    // console.log(patientData)
  },
  [types.SAVE_OPD] (state,oData) {
    state.saveOpd = oData;
    // console.log(patientData)
  },
  [types.SET_PRESCRIPTION_DATA] (state,pData) {
    state.prescriptionData = pData;
    // console.log(patientData)
  },
  
  
  
}

export default {
  state,
  // getters,
  actions,
  mutations
}