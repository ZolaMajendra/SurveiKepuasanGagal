<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/adminhome', 'AdminController@index')->name('adminhome');
    //for Auditee
    Route::get('/adminauditee1', 'AdminController@indexAuditee1')->name('adminauditee1');
    Route::get('/adminauditee2', 'AdminController@indexAuditee2')->name('adminauditee2');
    Route::get('/adminauditee3', 'AdminController@indexAuditee3')->name('adminauditee3');
    Route::get('/adminauditee4', 'AdminController@indexAuditee4')->name('adminauditee4');
    Route::get('/adminauditee5', 'AdminController@indexAuditee5')->name('adminauditee5');
    Route::get('/adminauditee6', 'AdminController@indexAuditee6')->name('adminauditee6');
    Route::get('/adminauditee7', 'AdminController@indexAuditee7')->name('adminauditee7');
    //for Auditor per po
    Route::get('/adminauditor11', 'AdminController@indexAuditorpo1')->name('adminauditor11');
    Route::get('/adminauditor12', 'AdminController@indexAuditorpo2')->name('adminauditor12');
    /*Route::get('/adminauditor13', 'AdminController@indexAuditorpo3')->name('adminauditor13');
    Route::get('/adminauditor14', 'AdminController@indexAuditorpo4')->name('adminauditor14');
    Route::get('/adminauditor15', 'AdminController@indexAuditorpo5')->name('adminauditor15');*/
    //for Auditor per smt
    Route::get('/adminauditor21', 'AdminController@indexAuditorsmt1')->name('adminauditor21');
    Route::get('/adminauditor22', 'AdminController@indexAuditorsmt2')->name('adminauditor22');
    Route::get('/adminauditor23', 'AdminController@indexAuditorsmt3')->name('adminauditor23');
    Route::get('/adminauditor24', 'AdminController@indexAuditorsmt4')->name('adminauditor24');
    Route::get('/adminauditor25', 'AdminController@indexAuditorsmt5')->name('adminauditor25');
    Route::get('/adminauditor26', 'AdminController@indexAuditorsmt6')->name('adminauditor26');
    Route::get('/adminauditor27', 'AdminController@indexAuditorsmt7')->name('adminauditor27');
    Route::get('/adminauditor28', 'AdminController@indexAuditorsmt8')->name('adminauditor28');
    Route::get('/adminauditor29', 'AdminController@indexAuditorsmt9')->name('adminauditor29');
    Route::get('/adminauditor210', 'AdminController@indexAuditorsmt10')->name('adminauditor210');
    Route::get('/adminauditor211', 'AdminController@indexAuditorsmt11')->name('adminauditor211');
    Route::get('/adminauditor212', 'AdminController@indexAuditorsmt12')->name('adminauditor212');
    Route::get('/adminauditor213', 'AdminController@indexAuditorsmt13')->name('adminauditor213');
    Route::get('/adminauditor214', 'AdminController@indexAuditorsmt14')->name('adminauditor214');
    Route::get('/adminauditor215', 'AdminController@indexAuditorsmt15')->name('adminauditor215');
    Route::get('/adminauditor216', 'AdminController@indexAuditorsmt16')->name('adminauditor216');

    //Filter
    Route::post('/admAuditeeFilter', 'FilterIdentitasController@idAuditee')->name('admAuditeeFilter');
    Route::post('/admAuditor1Filter', 'FilterIdentitasController@idAuditor1')->name('admAuditor1Filter');
    Route::post('/admAuditor2Filter', 'FilterIdentitasController@idAuditor2')->name('admAuditor2Filter');

    //Show data
    Route::get('/showAuditeeId/{id}', 'IdentitasShowController@showAuditee')->name('showAuditeeId');
    Route::get('/showAuditor1Id/{id}', 'IdentitasShowController@showAuditor1')->name('showAuditor1Id');
    Route::get('/showAuditor2Id/{id}', 'IdentitasShowController@showAuditor2')->name('showAuditor2Id');

    //Upload LHS
    Route::get('/upAuditee', 'UploadLHSController@indexAuditee')->name('upAuditee');
    Route::get('/upAuditor1', 'UploadLHSController@indexAuditor1')->name('upAuditor1');
    Route::get('/upAuditor2', 'UploadLHSController@indexAuditor2')->name('upAuditor2');
    Route::post('/storeFileAuditee', 'UploadLHSController@storeAuditee')->name('storeFileAuditee');
    Route::post('/storeFileAuditor1', 'UploadLHSController@storeAuditor1')->name('storeFileAuditor1');
    Route::post('/storeFileAuditor2', 'UploadLHSController@storeAuditor2')->name('storeFileAuditor2');

    //Delete hasil
    Route::get('/deleteAuditee/{id}', 'DeleteController@destroyAuditee')->name('deleteAuditee');
    Route::get('/deleteAuditor1/{id}', 'DeleteController@destroyAuditorperpo')->name('deleteAuditor1');
    Route::get('/deleteAuditor2/{id}', 'DeleteController@destroyAuditorpersmt')->name('deleteAuditor2');

    //Delete file
    Route::get('/destFileAuditee/{id}', 'DeleteController@delFileAuditee')->name('destFileAuditee');
    Route::get('/destFileAuditor1/{id}', 'DeleteController@delFileAuditorpo')->name('destFileAuditor1');
    Route::get('/destFileAuditor2/{id}', 'DeleteController@delFileAuditorsmt')->name('destFileAuditor2');

    //Download file
    Route::get('/download/{filename}', function ($filename){
        $path = storage_path('app/data/'.$filename);
        if (file_exists($path)){
            return response()->download($path);
        }
    })->name('download');

    //Covert to excel
        //Auditee
    Route::get('/IdAuditeeToExcel', 'ToExcelController@IdAuditee')->name('IdAuditee');
    Route::get('/kat1AuditeeToExcel', 'ToExcelController@Auditee2')->name('kat1Auditee');
    Route::get('/kat2AuditeeToExcel', 'ToExcelController@Auditee3')->name('kat2Auditee');
    Route::get('/kat3AuditeeToExcel', 'ToExcelController@Auditee4')->name('kat3Auditee');
    Route::get('/kat4AuditeeToExcel', 'ToExcelController@Auditee5')->name('kat4Auditee');
    Route::get('/kat5AuditeeToExcel', 'ToExcelController@Auditee6')->name('kat5Auditee');
    Route::get('/tAuditeeToExcel', 'ToExcelController@tAuditee')->name('tAuditee');
        //Auditorperpo
    Route::get('/IdAuditorPoToExcel', 'ToExcelController@IdAuditorPo')->name('IdAuditorpo');
    /*Route::get('/sebelumAuditorPoToExcel', 'ToExcelController@sblmAuditorPo')->name('sblmAuditorpo');
    Route::get('/selamaAuditorPoToExcel', 'ToExcelController@slmAuditorPo')->name('slmAuditorpo');
    Route::get('/sesudahAuditorPoToExcel', 'ToExcelController@ssdAuditorPo')->name('ssdAuditorpo');*/
    Route::get('/ksAuditorPoToExcel', 'ToExcelController@ksAuditorPo')->name('ksAuditorpo');
        //Auditorpersmt
    Route::get('/IdAuditorSmtToExcel', 'ToExcelController@IdAuditorSmt')->name('IdAuditorsmt');
    Route::get('/cont1AuditorSmtToExcel', 'ToExcelController@cont1AuditorSmt')->name('cont1Auditorsmt');
    Route::get('/cont2AuditorSmtToExcel', 'ToExcelController@cont2AuditorSmt')->name('cont2Auditorsmt');
    Route::get('/cont3AuditorSmtToExcel', 'ToExcelController@cont3AuditorSmt')->name('cont3Auditorsmt');
    Route::get('/cont4AuditorSmtToExcel', 'ToExcelController@cont4AuditorSmt')->name('cont4Auditorsmt');
    Route::get('/cont5AuditorSmtToExcel', 'ToExcelController@cont5AuditorSmt')->name('cont5Auditorsmt');
    Route::get('/cont6AuditorSmtToExcel', 'ToExcelController@cont6AuditorSmt')->name('cont6Auditorsmt');
    Route::get('/cont9AuditorSmtToExcel', 'ToExcelController@cont9AuditorSmt')->name('cont9Auditorsmt');
    Route::get('/cont10AuditorSmtToExcel', 'ToExcelController@cont10AuditorSmt')->name('cont10Auditorsmt');
    Route::get('/cont11AuditorSmtToExcel', 'ToExcelController@cont11AuditorSmt')->name('cont11Auditorsmt');
    Route::get('/cont12AuditorSmtToExcel', 'ToExcelController@cont12AuditorSmt')->name('cont12Auditorsmt');
    Route::get('/cont13AuditorSmtToExcel', 'ToExcelController@cont13AuditorSmt')->name('cont13Auditorsmt');
    Route::get('/cont14AuditorSmtToExcel', 'ToExcelController@cont14AuditorSmt')->name('cont14Auditorsmt');
    Route::get('/cont15AuditorSmtToExcel', 'ToExcelController@cont15AuditorSmt')->name('cont15Auditorsmt');
    Route::get('/cont16AuditorSmtToExcel', 'ToExcelController@cont16AuditorSmt')->name('cont16Auditorsmt');
    Route::get('/ksAuditorSmtToExcel', 'ToExcelController@ksAuditorSmt')->name('ksAuditorsmt');
});

//For Auditee
Route::get('/auditee', 'AuditeeController@index')->name('auditee');
Route::get('/survey1', 'AuditeeController@indexSurvey1')->name('survey1');
Route::get('/survey2', 'AuditeeController@indexSurvey2')->name('survey2');
Route::get('/survey3', 'AuditeeController@indexSurvey3')->name('survey3');
Route::get('/survey4', 'AuditeeController@indexSurvey4')->name('survey4');
Route::get('/survey5', 'AuditeeController@indexSurvey5')->name('survey5');
Route::get('/survey6', 'AuditeeController@indexSurvey6')->name('survey6');
Route::get('/survey7', 'AuditeeController@indexSurvey7')->name('survey7');
Route::post('/survey1store', 'ContentAuditeeController@storesurvey1')->name('survey1store');
Route::post('/survey2store/{id}', 'ContentAuditeeController@storesurvey2')->name('survey2store');
Route::post('/survey3store/{id}', 'ContentAuditeeController@storesurvey3')->name('survey3store');
Route::post('/survey4store/{id}', 'ContentAuditeeController@storesurvey4')->name('survey4store');
Route::post('/survey5store/{id}', 'ContentAuditeeController@storesurvey5')->name('survey5store');
Route::post('/survey6store/{id}', 'ContentAuditeeController@storesurvey6')->name('survey6store');
Route::post('/survey7store/{id}', 'ContentAuditeeController@storesurvey7')->name('survey7store');

//For Auditor
Route::get('/auditor', 'AuditorController@index')->name('auditor');
//Auditor per po
Route::get('/skkaperpo', 'AuditorController@indexPerpo')->name('skkaperpo');
/*Route::get('/skkaperpo1', 'AuditorController@indexPerpo1')->name('skkaperpo1');
Route::get('/skkaperpo2', 'AuditorController@indexPerpo2')->name('skkaperpo2');
Route::get('/skkaperpo3', 'AuditorController@indexPerpo3')->name('skkaperpo3');
Route::get('/skkaperpo4', 'AuditorController@indexPerpo4')->name('skkaperpo4');*/
Route::get('/skkaperpo-pertanyaan-terbuka', 'AuditorController@indexPerpoNew')->name('skkaperpopt');
Route::post('/skkaperpostore', 'ContentAuditor1Controller@skkaperpostore')->name('skkaperpostore');
Route::post('/skkaperponewstore/{id}', 'ContentAuditor1Controller@skkaperponewstore')->name('skkaperponewstore');
/*Route::post('/skkaperpo1store/{id}', 'ContentAuditor1Controller@skkaperpostore1')->name('skkaperpo1store');
Route::post('/skkaperpo2store/{id}', 'ContentAuditor1Controller@skkaperpostore2')->name('skkaperpo2store');
Route::post('/skkaperpo3store/{id}', 'ContentAuditor1Controller@skkaperpostore3')->name('skkaperpo3store');
Route::post('/skkaperpo4store/{id}', 'ContentAuditor1Controller@skkaperpostore4')->name('skkaperpo4store');*/
//Auditor per smt
Route::get('/skkapersmt', 'AuditorController@indexPersmt')->name('skkapersmt');
Route::get('/skkapersmt1', 'AuditorController@indexPersmt1')->name('skkapersmt1');
Route::get('/skkapersmt2', 'AuditorController@indexPersmt2')->name('skkapersmt2');
Route::get('/skkapersmt3', 'AuditorController@indexPersmt3')->name('skkapersmt3');
Route::get('/skkapersmt4', 'AuditorController@indexPersmt4')->name('skkapersmt4');
Route::get('/skkapersmt5', 'AuditorController@indexPersmt5')->name('skkapersmt5');
Route::get('/skkapersmt6', 'AuditorController@indexPersmt6')->name('skkapersmt6');
Route::get('/skkapersmt7', 'AuditorController@indexPersmt7')->name('skkapersmt7');
Route::get('/skkapersmt8', 'AuditorController@indexPersmt8')->name('skkapersmt8');
Route::get('/skkapersmt9', 'AuditorController@indexPersmt9')->name('skkapersmt9');
Route::get('/skkapersmt10', 'AuditorController@indexPersmt10')->name('skkapersmt10');
Route::get('/skkapersmt11', 'AuditorController@indexPersmt11')->name('skkapersmt11');
Route::get('/skkapersmt12', 'AuditorController@indexPersmt12')->name('skkapersmt12');
Route::get('/skkapersmt13', 'AuditorController@indexPersmt13')->name('skkapersmt13');
Route::get('/skkapersmt14', 'AuditorController@indexPersmt14')->name('skkapersmt14');
Route::get('/skkapersmt15', 'AuditorController@indexPersmt15')->name('skkapersmt15');
Route::post('/skkapersmtstore', 'ContentAuditor2Controller@skkapersmtstore')->name('skkapersmtstore');
Route::post('/skkapersmt1store/{id}', 'ContentAuditor2Controller@skkapersmtstore1')->name('skkapersmt1store');
Route::post('/skkapersmt2store/{id}', 'ContentAuditor2Controller@skkapersmtstore2')->name('skkapersmt2store');
Route::post('/skkapersmt3store/{id}', 'ContentAuditor2Controller@skkapersmtstore3')->name('skkapersmt3store');
Route::post('/skkapersmt4store/{id}', 'ContentAuditor2Controller@skkapersmtstore4')->name('skkapersmt4store');
Route::post('/skkapersmt5store/{id}', 'ContentAuditor2Controller@skkapersmtstore5')->name('skkapersmt5store');
Route::post('/skkapersmt6store/{id}', 'ContentAuditor2Controller@skkapersmtstore6')->name('skkapersmt6store');
Route::post('/skkapersmt7store/{id}', 'ContentAuditor2Controller@skkapersmtstore7')->name('skkapersmt7store');
Route::post('/skkapersmt8store/{id}', 'ContentAuditor2Controller@skkapersmtstore8')->name('skkapersmt8store');
Route::post('/skkapersmt9store/{id}', 'ContentAuditor2Controller@skkapersmtstore9')->name('skkapersmt9store');
Route::post('/skkapersmt10store/{id}', 'ContentAuditor2Controller@skkapersmtstore10')->name('skkapersmt10store');
Route::post('/skkapersmt11store/{id}', 'ContentAuditor2Controller@skkapersmtstore11')->name('skkapersmt11store');
Route::post('/skkapersmt12store/{id}', 'ContentAuditor2Controller@skkapersmtstore12')->name('skkapersmt12store');
Route::post('/skkapersmt13store/{id}', 'ContentAuditor2Controller@skkapersmtstore13')->name('skkapersmt13store');
Route::post('/skkapersmt14store/{id}', 'ContentAuditor2Controller@skkapersmtstore14')->name('skkapersmt14store');
Route::post('/skkapersmt15store/{id}', 'ContentAuditor2Controller@skkapersmtstore15')->name('skkapersmt15store');

//For AuditorPlus
Route::get('/auditorplus', 'AuditorController@indexPlus')->name('auditorplus');
Route::get('/downAuditee', 'DownloadFileController@downloadFuncAuditee')->name('downAuditee');
Route::get('/downAuditor1', 'DownloadFileController@downloadFuncAuditor1')->name('downAuditor1');
Route::get('/downAuditor2', 'DownloadFileController@downloadFuncAuditor2')->name('downAuditor2');
Route::get('/delFileAuditee/{id}', 'DeleteForUserController@destFileAuditee')->name('delFileAuditee');
Route::get('/delFileAuditor1/{id}', 'DeleteForUserController@destFileAuditorperpo')->name('delFileAuditor1');
Route::get('/delFileAuditor2/{id}', 'DeleteForUserController@destFileAuditorpersmt')->name('delFileAuditor2');

//Filter AuditorPlus
Route::post('/downAuditeeFilter', 'DownloadFileController@downFilterAuditee')->name('downAuditeeFilter');
Route::post('/downAuditor1Filter', 'DownloadFileController@downFilterAuditor1')->name('downAuditor1Filter');
Route::post('/downAuditor2Filter', 'DownloadFileController@downFilterAuditor2')->name('downAuditor2Filter');

//download
Route::get('/downLoad/{filename}', function ($filename){
    $path = storage_path('app/data/'.$filename);
    if (file_exists($path)){
        return response()->download($path);
    }
})->name('downLoad');