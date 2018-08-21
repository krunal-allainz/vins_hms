<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'auth'], function () {
    Route::post('login','AuthController@authenticate');
    Route::get('logout','AuthController@logout');
    Route::get('check','AuthController@check');


});


/*Route::get('password/reset/{token}', '\euro_hms\Api\Controllers\PasswordController@getReset');
Route::post('password/reset', '\euro_hms\Api\Controllers\PasswordController@postReset');*/

// Route::get('password/reset/{token}', '\euro_hms\Api\Controllers\PasswordController@getReset');
// Route::post('password/reset', '\euro_hms\Api\Controllers\PasswordController@postReset');

//Route::post('password/email', 'euro_hms\Api\Controllers\PasswordController@postEmail');
Route::get('/mlogin', '\euro_hms\Http\Controllers\Auth\ResetPasswordController@userMlogin');

//Route::post('password/reset', '\euro_hms\Http\Controllers\Auth\ForgotPasswordController@resetLink');
Route::post('password/reset/link', '\euro_hms\Api\Controllers\Auth\ForgotPasswordController@resetLink');



$api = app('Dingo\Api\Routing\Router');


$api->version('v1',['middleware' => 'jwt.auth'], function ($api) {

     // for localization
    $locale = \Request::header('locale');

    if($locale != '') {
        App::setLocale($locale);
    }


    // TODO: Move Method from web to api for Mobile App
         $api->post('doctorsInitialAssessment/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('doctorsInitialAssessment.store');
         $api->post('patient/create', '\euro_hms\Api\Controllers\PatientsDetailFormController@store')->name('patient.create');
         $api->post('adverseDrugReaction/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('adverseDrugReaction.create');
         $api->post('appointmentBook/create', '\euro_hms\Api\Controllers\AppointmentBookController@store')->name('appointmentBook.create');
         $api->post('bloodSugarMonitoringChart/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('bloodSugarMonitoringChart.create');
         $api->post('bloodTransfusionDetails/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('bloodTransfusionDetails.create');
         $api->post('briefOperativeNote/create', '\euro_hms\Api\Controllers\BriefOperativeNoteController@store')->name('briefOperativeNote.create');
         $api->post('testFile/create', '\euro_hms\Api\Controllers\TestFileController@store')->name('testFile.create');
         $api->post('codeBlueEvaluationForm/create', '\euro_hms\Api\Controllers\CodeBlueEvaluationFormController@store')->name('codeBlueEvaluationForm.create');
         $api->post('completeNursingAssessment/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('completeNursingAssessment.create');
         $api->post('cprFormat/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('cprFormat.create');
         $api->post('cultureBiopsyForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('cultureBiopsyForm.create');
         $api->post('dailyDietForm/create', '\euro_hms\Api\Controllers\DailyDietFormController@store')->name('dailyDietForm.create');
         $api->post('dischargeGatepass/create', '\euro_hms\Api\Controllers\DischargeGatepassController@store')->name('dischargeGatepass.create');
         $api->post('dischargeSummary/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('dischargeSummary.create');
         $api->post('doctorsDailyNotes/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('doctorsDailyNotes.create');
         $api->post('surgicalSafetyChecklist/create', '\euro_hms\Api\Controllers\SurgicalSafetyChecklistController@store')->name('surgicalSafetyChecklist.create');
         $api->post('LabSheet/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('LabSheet.create');
         $api->post('NurseProgressNotes/create','\euro_hms\Api\Controllers\NurseProgressNotesController@store')->name('NurseProgressNotes.create');
         $api->post('NursingDutyOver/create','\euro_hms\Api\Controllers\NursingDutyOverController@store')->name('NursingDutyOver.create');
         $api->post('NutritionalAssessmentForm/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('NutritionalAssessmentForm.create');
         $api->post('OperativeDetailSheet/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('OperativeDetailSheet.create');
         $api->post('PatientAdmissionSheet/create','\euro_hms\Api\Controllers\PatientAdmissionSheetController@store')->name('PatientAdmissionSheet.create');
         $api->post('PatientDietRecord/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('PatientDietRecord.create');
         $api->post('PatientValuableForm/create','\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('PatientValuableForm.create');
         $api->post('PhysiotherapyAssessment/create','\euro_hms\Api\Controllers\PhysiotherapyAssessmentController@store')->name('PhysiotherapyAssessment.create');
         $api->post('RestraintAdministration/create','\euro_hms\Api\Controllers\RestraintAdministrationController@store')->name('RestraintAdministration.create');
         $api->post('planOfCare/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('planOfCare.create');
         $api->post('preAnaesthesiaCheckupForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('preAnaesthesiaCheckupForm.create');
         $api->post('postAnaesthesiaEvaluation/create', '\euro_hms\Api\Controllers\postAnaesthesiaEvaluationController@store')->name('postAnaesthesiaEvaluation.create');
         $api->post('preAngiographyAngioplastyChecklist/create', '\euro_hms\Api\Controllers\PreAngiographyAngioplastyChecklistController@store')->name('preAngiographyAngioplastyChecklist.create');
         $api->post('preOTChecklist/create', '\euro_hms\Api\Controllers\PreOTChecklistController@store')->name('preOTChecklist.create');
         $api->post('provisionalDischargeSummary/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('provisionalDischargeSummary.create');
         $api->post('radiologyRequisition/create', '\euro_hms\Api\Controllers\RadiologyRequisitionController@store')->name('radiologyRequisition.create');
         $api->post('transferChecklistForNurses/create', '\euro_hms\Api\Controllers\TransferChecklistForNursesontroller@store')->name('transferChecklistForNurses.create');
         $api->post('transfusionReactionForm/create', '\euro_hms\Api\Controllers\TransfusionReactionFormController@store')->name('transfusionReactionForm.create');
         $api->post('ventilatorChargeSheet/create', '\euro_hms\Api\Controllers\VentilatorChargeSheetController@store')->name('ventilatorChargeSheet.create');
         $api->post('wardProcedureRecord/create', '\euro_hms\Api\Controllers\WardProcedureRecordController@store')->name('wardProcedureRecord.create');
         $api->post('doctorsHandover/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('doctorsHandover.create');
         $api->post('investigationSheet/create', '\euro_hms\Api\Controllers\InvestigationSheetController@store')->name('investigationSheet.create');
         $api->post('glassGow/create', '\euro_hms\Api\Controllers\GlassGowController@store')->name('glassGow.create');
         $api->post('infusionTherapyChart/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('infusionTherapyChart.create');
         $api->post('erObservation/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('erObservation.create');
         $api->post('gatePass/create', '\euro_hms\Api\Controllers\GatePassController@store')->name('gatePass.create');
         $api->post('historyForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('historyForm.create');
         $api->post('informationForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('informationForm.create');
         $api->post('durgRequisition/create', '\euro_hms\Api\Controllers\DurgRequisitionController@store')->name('durgRequisition.create');
         $api->post('intraoperativeEventManagement/create', '\euro_hms\Api\Controllers\IntraoperativeEventManagementController@store')->name('intraoperativeEventManagement.create');
         $api->post('counsellingForm/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('counsellingForm.create');
         $api->post('centralLineBundleChecklist/create', '\euro_hms\Api\Controllers\FormsOptionsDataController@store')->name('centralLineBundleChecklist.create');
        $api->post('patient/getDetails/{id}', '\euro_hms\Api\Controllers\PatientsDetailFormController@getDetails');
        $api->post('patient/getAll', '\euro_hms\Api\Controllers\PatientsDetailFormController@getAllPatientName');
        $api->get('user/getUserDetails', '\euro_hms\Api\Controllers\UserController@getUserDetails');
        $api->post('user/create', '\euro_hms\Api\Controllers\UserController@createUser')->name('create.users'); 

        $api->post('patient/OPDDetails/{patientId}', '\euro_hms\Api\Controllers\OPDDetailsFromController@getDetails');

        $api->post('user/getDetails', '\euro_hms\Api\Controllers\UserController@getUserDetailsByID')->name('user.getUserDetails');
        $api->post('opd/saveData', '\euro_hms\Api\Controllers\OPDDetailsFromController@saveData'); 
        $api->post('patient/getDetails', '\euro_hms\Api\Controllers\PatientsDetailFormController@getPatientDetailBysearch');    
        $api->post('provison/getDiagnosis', '\euro_hms\Api\Controllers\DiagnosisController@getDiagnosis'); 
        $api->post('prescription/getDetails', '\euro_hms\Api\Controllers\PrescriptionDrugController@getDetails'); 
        $api->post('print/receipt', '\euro_hms\Api\Controllers\PatientsDetailFormController@printReceipt');     
        $api->post('generate/receipt', '\euro_hms\Api\Controllers\PatientsDetailFormController@saveReceiptData'); 
        $api->post('print/opdcase','\euro_hms\Api\Controllers\OPDDetailsFromController@printCaseData');
        $api->post('doctor/patientlist','\euro_hms\Api\Controllers\PatientsDetailFormController@getAllPatientNameByConsultDoctor');

        //for receipt list of opd
       /* $api->post('opd/receiptlist', '\euro_hms\Api\Controllers\OPDDetailsFromController@receiptlist');*/
        $api->post('patient/receiptlist','\euro_hms\Api\Controllers\ReceiptController@getPatientReceiptList');
        $api->post('patient/receipt/remove','\euro_hms\Api\Controllers\ReceiptController@deleteReceipt');
        $api->post('patient/receipt/view','\euro_hms\Api\Controllers\ReceiptController@viewReceipt');

        //for getting details of perticular receipt by id(receipt autogenerated id)
        $api->post('patient/getreceiptDetails/{id}', '\euro_hms\Api\Controllers\OPDDetailsFromController@getreceiptDetails');

        /*for delete receipt . paramater : id(receipt autogenerated id)*/

        $api->post('patient/deletereceipt/{id}', '\euro_hms\Api\Controllers\OPDDetailsFromController@deletereceipt');

        //for getting charges types for patient receipt form 
        $api->post('receipt/getchargestypes', '\euro_hms\Api\Controllers\ReceiptController@getChargesTypes');

        //for getting department types for dr 
        $api->post('user/getDepartmentByName', '\euro_hms\Api\Controllers\UserController@getDepartmentByName');


        $api->post('patient/deletereceipt', '\euro_hms\Api\Controllers\OPDDetailsFromController@deletereceipt');

        /*getting user details by status and type*/
        $api->post('user/getUserDetailByUserType', '\euro_hms\Api\Controllers\UserController@getUserDetailsByType');

        //for getting department types by id for dr 
        $api->post('user/getDepartmentById', '\euro_hms\Api\Controllers\UserController@getDepartmentById');

         //for getting username by id 
        $api->post('user/getUserNameById', '\euro_hms\Api\Controllers\UserController@getUserNameById');

        //for getting laboratoey list  by type and id 
        $api->post('opd/getLaboratoryData', '\euro_hms\Api\Controllers\OPDDetailsFromController@getLaboratoryData');

        //get patient details by id
         $api->post('patient/getPatientDetailsById', '\euro_hms\Api\Controllers\PatientsDetailFormController@getPatientDetailsById');
         
         //for getting laboratoey list  All
        $api->post('opd/getAllLaboratoryList', '\euro_hms\Api\Controllers\OPDDetailsFromController@getAllLaboratoryList');


         //for getting OPD No list by patient id
        $api->post('patient/getOPDIdByPatientId', '\euro_hms\Api\Controllers\PatientsDetailFormController@getOPDIdByPatientId');

         //for getting patient check up details by opd id
        $api->post('patient/getpatientCheckUpDetails', '\euro_hms\Api\Controllers\PatientsDetailFormController@patientCheckUpDetails');

         //for adding opd details
        $api->post('opd/addOpdDetails', '\euro_hms\Api\Controllers\OPDDetailsFromController@addDetails');
        

        /* get total number of patient by type*/
        $api->post('patient/total','\euro_hms\Api\Controllers\PatientsDetailFormController@getNumberOfPatient');

        /* get total number of opd */
        $api->post('opd/opdtotal','\euro_hms\Api\Controllers\OPDDetailsFromController@getOPDCounters');

        $api->post('patient/list','\euro_hms\Api\Controllers\PatientsDetailFormController@getPatientListByDoctor');


           $api->post('user/types','\euro_hms\Api\Controllers\UserController@getUserType');

        //get patient list by search
        $api->post('patient/getListBySearch', '\euro_hms\Api\Controllers\PatientsDetailFormController@getListBySearch');  

         //for getting laboratoey list  By children
        $api->post('opd/getLabListByChildren', '\euro_hms\Api\Controllers\OPDDetailsFromController@getLabListByChildren');

        $api->post('patient/save_patient_checkup_data','\euro_hms\Api\Controllers\PatientsDetailFormController@savePatientCheckup');

        /*for saving physiotherapy assistant*/
        $api->post('opd/savePhysiotherapy','\euro_hms\Api\Controllers\OPDDetailsFromController@savePhysiotherapy');

         $api->post('user/getimagefromurl', '\euro_hms\Api\Controllers\CustomersController@getImagefromUrl');

        $api->post('patient/token_exist','\euro_hms\Api\Controllers\PatientsDetailFormController@tokenExist');

        $api->post('user/user_exist','\euro_hms\Api\Controllers\UserController@checkExistUser');

         //for getting OPD No list by patient id
        $api->post('patient/getLastOPDIdByPatientId', '\euro_hms\Api\Controllers\PatientsDetailFormController@getLastOPDIdByPatientId');

         $api->post('patient/getpatientlist', '\euro_hms\Api\Controllers\PatientsDetailFormController@getPatientList');

         $api->post('patient/patientDetailInfo', '\euro_hms\Api\Controllers\PatientsDetailFormController@getPatientDetailInfo');

         //getting vitals info of patient
          $api->post('patient/getVitalsInfoByPatientId', '\euro_hms\Api\Controllers\PatientsDetailFormController@getVitalsInfoByPatientId');

          //check vitals validity of six months
          $api->post('patient/getVitalsValidity', '\euro_hms\Api\Controllers\PatientsDetailFormController@getVitalsValidity');

          //for getting username by id any type
        $api->post('user/getdoctoreinfobyid', '\euro_hms\Api\Controllers\UserController@getDoctoreInfoById');

        });

        

        
        

