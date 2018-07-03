import api from './siteconfig'

export default { 
  getUserDetails(userData) {
  	return api.post('user/getDetails',{'userId':userData})
  },
  getEditUser(id) {
  	return api.get('user/edit/'+id)
  },
  savePatient(patientData) {
    return api.post('patient/create',{patientData})
  },
  saveAdverseDrugReaction(adverseDrugReaction) {
    return api.post('adverseDrugReaction/create',{'resData': adverseDrugReaction})
  },
  saveAppointmentBook(appointmentBook) {
    return api.post('appointmentBook/create',{'resData': appointmentBook})
  },
  saveBloodSugarMonitoringChart(bloodSugarMonitoringChart) {
    return api.post('bloodSugarMonitoringChart/create',{'resData': bloodSugarMonitoringChart})
  },
  saveBloodTransfusion(bloodTransfusionDetails) {
    return api.post('bloodTransfusionDetails/create',{'resData': bloodTransfusionDetails})
  },
  saveBreifOperativeNote(briefOperativeNoteData) {
    return api.post('briefOperativeNote/create',{'briefOperativeNoteData': briefOperativeNoteData})
  },
  testFunction(testData) {
    return api.post('testFile/create',{'resData': testData})
  },
  saveCodeBlueEvaluationForm(codeBlueEvaluationData) {
    return api.post('codeBlueEvaluationForm/create',{'codeBlueEvaluationData': codeBlueEvaluationData})
  },
  saveCompleteNursingAssessment(completeNursingAssessmentData) {
    return api.post('completeNursingAssessment/create',{'resData': completeNursingAssessmentData})
  },
  saveCounsellingForm(counsellingFormData) {
    return api.post('counsellingForm/create',{'resData': counsellingFormData})
  },
  saveCprFormat(cprFormatData) {
    return api.post('cprFormat/create',{'resData': cprFormatData})
  },
  saveCultureBiopsy(cultureBiopsyData) {
    return api.post('cultureBiopsyForm/create',{'resData': cultureBiopsyData})
  },
  saveDailyDietForm(dailyDietData) {
    return api.post('dailyDietForm/create',{'resData': dailyDietData})
  },
  saveDischargeGatepass(dischargeGatepassData) {
    return api.post('dischargeGatepass/create',{'resData': dischargeGatepassData})
  },
  saveDischargeSummary(dischargeSummaryData) {
    return api.post('dischargeSummary/create',{'resData': dischargeSummaryData})
  },
  saveDoctorsDailyNotes(doctorsDailyNotesData) {
    return api.post('doctorsDailyNotes/create',{'resData': doctorsDailyNotesData})
  },
  saveSurgicalSafetyChecklist(surgicalSafetyChecklistData) {
    return api.post('surgicalSafetyChecklist/create',{'resData': surgicalSafetyChecklistData})
  },
  saveLabSheet(LabSheet) {
    return api.post('LabSheet/create',{'resData': LabSheet})
  },
  saveNurseProgressNotes(NurseProgressNotes) {
    return api.post('NurseProgressNotes/create',{'resData':NurseProgressNotes})
  },

  saveNursingDutyOver(NursingDutyOver) {
    return api.post('NursingDutyOver/create',{'resData':NursingDutyOver})
  },

  saveNutritionalAssessmentForm(NutritionalAssessmentForm) {
    return api.post('NutritionalAssessmentForm/create',{'resData':NutritionalAssessmentForm})
  },

  saveNutritionalScreeningForm(NutritionalScreeningForm) {
    return api.post('NutritionalScreeningForm/create',{'resData':NutritionalScreeningForm})
  },

  saveOperativeDetailSheet(operativeDetailSheetData) {
    return api.post('OperativeDetailSheet/create',{'resData':operativeDetailSheetData})
  },

  savePatientAdmissionSheet(PatientAdmissionSheet) {
    return api.post('PatientAdmissionSheet/create',{'resData':PatientAdmissionSheet})
  },

  savePatientDietRecord(patientDietRecordData) {
    return api.post('PatientDietRecord/create',{'resData':patientDietRecordData})
  },

  savePatientValuableForm(patientValuableFormData) {
    return api.post('PatientValuableForm/create',{'resData':patientValuableFormData})
  },

  savePhysiotherapyAssessment(PhysiotherapyAssessment) {
    return api.post('PhysiotherapyAssessment/create',{'resData':PhysiotherapyAssessment})
  },

  saveRestraintAdministration(RestraintAdministration) {
    return api.post('RestraintAdministration/create',{'resData':RestraintAdministration})
  },
  savePlanOfCare(planOfCareData) {
    return api.post('planOfCare/create',{'resData': planOfCareData})
  },
  savePreAnaesthesiaCheckupForm(preAnaesthesiaCheckupFormData) {
    return api.post('preAnaesthesiaCheckupForm/create',{'resData': preAnaesthesiaCheckupFormData})
  },
  savePostAnaesthesiaEvaluation(postAnaesthesiaEvaluationData) {
    return api.post('postAnaesthesiaEvaluation/create',{'resData': postAnaesthesiaEvaluationData})
  },
  savePreAngiographyAngioplastyChecklist(preAngiographyAngioplastyChecklistData) {
    return api.post('preAngiographyAngioplastyChecklist/create',{'resData': preAngiographyAngioplastyChecklistData})
  },
  savePreOTChecklist(preOTChecklistData) {
    return api.post('savePreOTChecklist/create',{'resData': preOTChecklistData})
  },
  saveProvisionalDischargeSummary(provisionalDischargeSummaryData) {
    return api.post('provisionalDischargeSummary/create',{'resData': provisionalDischargeSummaryData})
  },
  saveRadiologyRequisition(radiologyRequisitionData) {
    return api.post('radiologyRequisition/create',{'resData': radiologyRequisitionData})
  },
  saveTransferChecklistForNurses(transferChecklistForNursesData) {
    return api.post('transferChecklistForNurses/create',{'resData': transferChecklistForNursesData})
  },
  saveTransfusionReactionForm(transfusionReactionFormData) {
    return api.post('transfusionReactionForm/create',{'resData': transfusionReactionFormData})
  },
  saveVentilatorChargeSheet(ventilatorChargeSheetData) {
    return api.post('ventilatorChargeSheet/create',{'resData': ventilatorChargeSheetData})
  },
  saveWardProcedureRecord(wardProcedureRecordData) {
    return api.post('wardProcedureRecord/create',{'resData': wardProcedureRecordData})
  },
  saveDoctorsHandover(doctorsHandoverData) {
    return api.post('doctorsHandover/create',{'resData': doctorsHandoverData})
  },
  saveDrugRequisition(drugRequisitionData) {
    return api.post('drugRequisition/create',{'resData': drugRequisitionData})
  },
  saveerObservation(erObservationData) {
    return api.post('erObservation/create',{'resData': erObservationData})
  },
  savegatePass(gatePassData) {
    return api.post('gatePass/create',{'resData': gatePassData})
  },
  saveglassGow(glassGow) {
    return api.post('glassGow/create',{'resData': glassGowData})
  },
  saveHistoryForm(historyFormData) {
    return api.post('historyForm/create',{'resData': historyFormData})
  },
  saveInformationForm(informationFormData) {
    return api.post('informationForm/create',{'resData': informationFormData})
  },
  saveinvestigationSheet(investigationSheet) {
    return api.post('investigationSheet/create',{'resData': investigationSheetData})
  },
  saveIntraoperativeEventManagement(intraoperativeEventManagementData) {
    return api.post('intraoperativeEventManagement/create',{'resData': intraoperativeEventManagementData})
  },
  saveinfusionTherapyChart(infusionTherapyChartData) {
    return api.post('infusionTherapyChart/create',{'resData': infusionTherapyChartData})
  },

  saveDoctorsInitialAssessment(doctorsInitialAssessmentData) {
    return api.post('doctorsInitialAssessment/create',{'resData': doctorsInitialAssessmentData})
  },

  saveAppointmentBook(appointmentBook) {
    return api.post('appointmentBook/create',{'appointmentBook':appointmentBook})
  },

  saveSurgicalSafetyChecklist(surgicalSafetyChecklistData) {
      return api.post('surgicalSafetyChecklist/create',{'surgicalSafetyChecklistData':surgicalSafetyChecklistData})
    },

  saveNurseProgressNotes(NurseProgressNotes) {
      return api.post('NurseProgressNotes/create',{'NurseProgressNotes':NurseProgressNotes})
    },

  saveWardProcedureRecord(wardProcedureRecordData) {
      return api.post('wardProcedureRecord/create',{'wardProcedureRecordData':wardProcedureRecordData})
    },

  saveIntraoperativeEventManagement(intraoperativeEventManagementData) {
      return api.post('intraoperativeEventManagement/create',{'intraoperativeEventManagement':intraoperativeEventManagementData})
    },
  saveMARFlowSheet(MARFlowSheet) {
    return api.post('MARFlowSheet/create',{'MARFlowSheet': MARFlowSheet})
  },

  getpatientDetail(ipdId) { 
    return api.post('patient/getDetails/'+ipdId)
  },
  saveCentralLineBundleChecklist(CentralLineBundleChecklistData) {
      return api.post('centralLineBundleChecklist/create',{'resData':CentralLineBundleChecklistData})
    },
  submitReport(reportData) {
    return api.post('report/create',{'reportData':reportData})
  },
  getAllPatientName() {
      return api.get('patient/getAll');
  },
  createUser(userData) {
      return api.post('user/create',{'userData':userData})

  },
  getPatientOPDDetail(patientId) {
    return api.post('patient/OPDDetails/'+patientId)
  },
  saveOpdData(opdData) {                                                            
        return api.post('opd/saveData',{'opdData':opdData})
  },             
  sendResetLinkInMail(requestData) {  
    return api.post('password/reset/link',{'email':requestData})
  },
  savePatientDetailBySearch(searchData) {
      return api.post('patient/getDetails',{'searchData':searchData})
  },
  getDiagnosis(data) {
      return api.post('provison/getDiagnosis',{'data':data})
  },
  getPrescription(data) {
      return api.post('prescription/getDetails',{'data':data})
  },
  printReceiptPreview(fromData,content){ 
     return api.post('print/receipt',{'fromData':fromData,'content':content})  
  }, 
  generateReceiptData(formData,type){  
    return api.post('generate/receipt',{'formData':formData})  
  },
  printOPDCaseData(OPDCaseData){
      return api.post('print/opdcase',{'OPDCaseData':OPDCaseData})  
  },
  getAllPatientNameByConsultDoctor(doctor,section) {
      return api.post('doctor/patientlist',{'doctor' :doctor,'section':section});
  },
  getReceiptList(page_url){
     return api.post(page_url);
  },
   getChargesTypes(){
     return api.post('receipt/getchargestypes');
  },
   getConsultationCategoryDetails(chargeID) {
    return api.post('receipt/getconsultationcategory/'+chargeID)
  },
  getConsultationCategoryCharges(categoryId,typeId) {
    return api.post('receipt/getconsultationcategorycharges/'+categoryId+'/'+typeId)
  },
   getEmergencyTypes(chargeID) {
    return api.post('receipt/getemergencytypes/'+categoryId+'/'+typeId)
  },
   getEmergencyCharges(typeId) {
    return api.post('receipt/getemergencycharges/'+typeId)
  },
  getDrDepartment(name) {
    return api.post('user/getDepartmentByName',{'name' :name})
  },
  
  removeReceipt(id){
     return api.post('patient/receipt/remove',{'id':id});
  },
  generateReceiptDataById(id,type){
      return api.post('patient/receipt/view',{'id':id,'type':type});
  },
  generateUserDetailsByType(type,status){
      return api.post('user/getUserDetailByUserType',{'type':type,'status':status});
  },
  getDrDepartmentById(consult_id) {
    return api.post('user/getDepartmentById',{'id' :consult_id});
  },
  generateUserNameById(consult_id) {
    return api.post('user/getUserNameById',{'id' :consult_id});
  },
  generateLaboratoryData(data_obj) {
    return api.post('opd/getLaboratoryData',{'data' :data_obj});
  },
  generatePatientDetailsByID(id) {
      return api.post('patient/getPatientDetailsById',{'id':id});
  },
  generateAllLaboratoryList(data_obj) {
    return api.post('opd/getAllLaboratoryList');
  },
  generateOpdIdByPatirntID(patient_id) {
    return api.post('patient/getOPDIdByPatientId',{'patient_id':patient_id})
  },
  generatePatientCheckUpDetails(opd_id) {
    return api.post('patient/getpatientCheckUpDetails',{'opd_id':opd_id})
  },
  generateAddOpdDetails(opd_data) {
    return api.post('opd/addOpdDetails',{'data':opd_data})
  },
  getNumberOfPatient(type){
    return api.post('patient/total',{'type':type});
  },
  getOPDCounters(){
    return api.post('opd/opdtotal');
  }

}