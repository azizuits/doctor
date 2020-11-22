<?php
Route::get('/', function(){
return view('welcome');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
//=========Only Doctor==============
	Route::get('/doctorinfoform','DorctorInformationController@doctor_info_form')->name('doctorinfoform');
	Route::get('/doctorprocess','DorctorInformationController@doctor_info_add')->name('doctorprocess');
	Route::get('/doctorinfoview','DorctorInformationController@doctor_info_view')->name('doctorinfoview');
	Route::get('/doctorinfoedit/{id}','DorctorInformationController@showdata')->name('doctorinfoedit');
	Route::post('/doctorinfoedit','DorctorInformationController@update')->name('doctorinfoedit');
	Route::get('/delete/{id}','DorctorInformationController@delete')->name('delete');
	//=====Doctor Fee=========
	Route::get('/doctorfeeinfoform','DoctorFeeController@doctorfee_info')->name('doctorfeeinfoform');
	Route::get('/doctorfeeprocess','DoctorFeeController@doctorfee_info_add')->name('doctorfeeprocess');
	Route::get('/doctorfeeinfoview','DoctorFeeController@doctorfee_info_view')->name('doctorfeeinfoview');
	//======Employee=====
	Route::get('/employeeinfoform','EmployeeInformationController@employee_info_form')->name('employeeinfoform');
	Route::get('/employeeprocess','EmployeeInformationController@employee_info_add')->name('employeeprocess');
	Route::get('/employeeinfoview','EmployeeInformationController@employee_info_view')->name('employeeinfoview');
	Route::get('/employeeedit/{id}','EmployeeInformationController@showdata')->name('employeeedit');
	Route::post('/employeeedit','EmployeeInformationController@update')->name('employeeedit');
	Route::get('/delete/{id}','EmployeeInformationController@delete')->name('delete');
	//=====Medicine=========
	Route::get('/medicineinfoform','MedicineController@medicine_info')->name('medicineinfoform');
	Route::get('/medicineprocess','MedicineController@medicine_info_add')->name('medicineprocess');
	Route::get('/medicineinfoview','MedicineController@medicine_info_view')->name('medicineinfoview');
	//======Patient========
	Route::get('/patientinfoform','PatientInformationController@patient_info_form')->name('patientinfoform');
	Route::get('/patientprocess','PatientInformationController@patient_info_add')->name('patientprocess');
	Route::get('/patientinfoview','PatientInformationController@patient_info_view')->name('patientinfoview');
	Route::get('/patientedit/{id}','PatientInformationController@showdata')->name('patientedit');
	Route::post('/patientedit','PatientInformationController@update')->name('patientedit');
	Route::get('/delete/{id}','PatientInformationController@delete')->name('delete');
	
	//=====patient test=========
	Route::get('/patienttestinfoform','TestController@patienttest_info')->name('patienttestinfoform');
	Route::get('/patienttestprocdess','TestController@patienttest_info_add')->name('patienttestprocess');
	Route::get('/patienttestinfoview','TestController@patienttest_info_view')->name('patienttestinfoview');
//=====Prescriptions=========
	Route::get('/prescriptioninfoform','PrescriptionController@prescription_info')->name('prescriptioninfoform');
	Route::get('/prescriptionprocess','PrescriptionController@prescription_info_add')->name('prescriptionprocess');
	Route::get('/prescriptioinfoview','PrescriptionController@prescription_info_view')->name('prescriptioinfoview');
	//=====Chamber=========
	Route::get('/chamberinfoform','ChamberController@chamber_info')->name('chamberinfoform');
	Route::get('/chamberprodcess','ChamberController@chamber_info_add')->name('chamberprocess');
	Route::get('/chamberinfoview','ChamberController@chamber_info_view')->name('chamberinfoview');
	//=====Schedule=========
	Route::get('/scheduleinfoform','ScheduleController@schedule_info')->name('scheduleinfoform');
	Route::get('/scheduleprocess','ScheduleController@schedule_info_add')->name('scheduleprocess');
	Route::get('/scheduleinfoview','ScheduleController@schedule_info_view')->name('scheduleinfoview');
	//=====Order Schedule book=========
	Route::get('/orderschedulebookform','OrderScheduleBookController@order_schedule_book')->name('orderschedulebookform');
//	Route::get('/orderschedulebookprocess','OrderScheduleBookController@order_schedule_book_add');
	// Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');
    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');
    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    Route::resource('tentech','TentechController');
});
//=========End Others=============
	Route::redirect('/home', '/admin');
	Auth::routes(['register' => true]);
//======Upload_file======
	Route::get('uploadfile','UploadController@UploadFile');
	Route::post('uploadpfilerocess','UploadController@UploadFileProcess');
