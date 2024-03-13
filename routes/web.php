<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Rating;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('landing_page.home');
});

// landing page
Route::get('/page-custom', [HomeController::class, 'custom_page'])->name('custom_page');

Route::get('/part-pricelist', function () {
    return view('landing_page.part-pricelist');
});
// // pricelist
// Route::get('/price-list', function () {
//     return view('landing_page.part-pricelist');
// });



// Route::get('/part-pricelist', function () {
//     return view('landing_page.part-pricelist');
// });

// about
// Route::get('/about', function () {
//     return view('landing_page.about');
// });

// latest result
// Route::get('/result', function () {
//     return view('landing_page.result');
// });

// cara pemesanan
// Route::get('/pemesanan', function () {
//     return view('landing_page.pemesanan');
// });

// pricelist
// Route::get('/price-list', function () {
//     return view('landing_page.part-pricelist');
// });
// Route::post('/store-price-list', function (Request $request) {
//     return view('landing_page.pricelist');
// })
Route::controller(PriceListController::class)->group(function () {
    Route::post('/store-price-list', 'store')->name('sotre');
});
Route::controller(HomeController::class)->group(function () {
    // Route::get('/price-list', 'priceList')->name('priceList');
    Route::get('/price-list/{id}', 'priceList')->name('priceList');
    Route::post('/daftar/actiondaftar', 'actionregister')->name('actionregister');
});
// location
// Route::get('/location', function () {
//     return view('landing_page.location');
// });


// // form-order
// Route::get('/form-order', function () {
//     return view('landing_page.form-order');
// });
// // form-2
// Route::get('/form-2', function () {
//     return view('landing_page.form-2');
// });
// // form-2
// Route::get('/form-3', function () {
//     return view('landing_page.form-3');
// });


Route::controller(PesananController::class)->group(function () {
    // Route::get('/form-1/{kd_part}', 'form_1')->name('form_1');
    Route::post('/form-1/order', 'order')->name('order');
    Route::post('/save-selected-text', 'saveSelectedText')->name('saveSelectedText');
    Route::get('/form-1/generate/t', 'generate')->name('generate');
    Route::post('/form-1/quotation', 'quotation')->name('quotation');
    Route::get('/form-1/quotation/{id}', 'quotation_view')->name('quotation_view');
    // Route::get('/form-1/invoice/{id}', 'invoice')->name('invoice');
    Route::post('/form-1/action/{kd_step}', 'addForm1')->name('addForm1');
    Route::get('/form-2/{id}', 'form_2')->name('form_2');
    Route::post('/form-2/add', 'upload')->name('addForm2');
    Route::get('/form-3/{id}', 'form_3')->name('form_3');
    Route::post('/form-3/add', 'addForm3')->name('addForm3');
    Route::get('/form-4/{id}', 'form_4')->name('form_4');
    Route::get('/downloadPdf', 'downloadPdf')->name('downloadPdf');
    Route::post('/form-4/pemain', 'tambahDataPesanan')->name('tambahDataPesanan');
    Route::get('/invoice/{id}', 'invoice')->name('invoice');
    Route::get('/export/{kode?}', 'export')->name('export');
    Route::get('/form-4/delete/{id?}', 'deleteStep4')->name('form-4.delete');

    // Route::get('/invoice')->name('invoice');
    // Route::get('/form-1/orderNew', 'orderNew')->name('orderNew');
});

// Route::get('/form/orderStep1', function () {
//     return view('landing_page.form-orderStep1');
// });
// Route::get('/form/orderStep2', function () {
//     return view('landing_page.form-orderStep2');
// });
// Route::get('/form/orderStep3', function () {
//     return view('landing_page.form-orderStep3');
// });
// Route::get('/form/orderStep4', function () {
//     return view('landing_page.form-orderStep4');
// });

// contact us
Route::get('/contact', function () {
    return view('landing_page.contact');
});
Route::get('/part-pricelist', function () {
    // return view('landing_page.price-list-part');
    return view('landing_page.part-pricelist');
});

Route::controller(loginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('loginprocess');
    Route::post('login/actionlogin', 'actionlogin')->name('actionlogin');
    Route::get('actionlogout', 'actionlogout')->name('actionlogout');
});
Route::controller(registerController::class)->group(function () {
    Route::get('/daftar', 'daftar')->name('daftar');
    Route::post('/daftar/actiondaftar', 'actionregister')->name('actionregister');
});

Route::controller(adminController::class)->group(function () {
    Route::middleware('web','auth')->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/admin_landingpage', 'landingpage')->name('admin.landingpage');
        Route::post('/admin_landingpage', 'landingpage')->name('admin.landingpage.edit');
        Route::post('/admin_landingpage/about_us', 'landingpage_about_us')->name('admin.landingpage.about_us');
        Route::post('/admin_landingpage/location/add', 'landingpage_location_add')->name('admin.landingpage.location.add');
        Route::post('/admin_landingpage/linkweb/add', 'landingpage_linkweb_add')->name('admin.landingpage.linkweb.add');
        Route::post('/admin_landingpage/instagram/add', 'landingpage_instagram_add')->name('admin.landingpage.instagram.add');
        Route::post('/admin_landingpage/how_to_order/add', 'landingpage_how_to_order_add')->name('admin.landingpage.how_to_order.add');
        Route::post('/admin_landingpage/faq/add', 'landingpage_faq_add')->name('admin.landingpage.faq.add');
        Route::post('/admin_landingpage/about_us/upload', 'landingpage_media_upload')->name('admin.landingpage.media_upload');
        Route::post('/finance/upload', 'finance_media_upload')->name('finance.media_upload');
        Route::get('/admin_landingpage/about_us/media/delete/{id}', 'landingpage_file_delete')->name('admin.landingpage.media.delete');
        Route::get('/admin_landingpage/linkweb/delete/{id}', 'landingpage_linkweb_delete')->name('admin.landingpage.linkweb.delete');
        Route::get('/view-order', 'vieworder')->name('vieworder');
        Route::get('/production', 'production')->name('production');
        Route::post('/production/update_progress', 'update_progress')->name('update_progress');
        Route::get('/production/{id}', 'production_edit')->name('production_edit');
        Route::get('/production/generate/{id}', 'production_generate')->name('production_generate');
        Route::post('/production/approval', 'approval_edit')->name('production.approval');
        Route::get('/production/design/{id}', 'production_design')->name('production_design');
        Route::post('/production/design/update', 'production_design_update')->name('update_production_desain');
        Route::get('/finance', 'finance')->name('finance');
        Route::post('/finance/add', 'financeAdd')->name('finance.add');
        Route::post('/finance/edit', 'financeEdit')->name('finance.edit');
        Route::post('/finance/import', 'importExcel')->name('excel.import');
        Route::post('/finance/target/add', 'financeTargetAdd')->name('finance.target.add');
        Route::post('/finance', 'finance')->name('finance.update.chart');
        Route::get('/master', 'master')->name('master');
        Route::post('/master/updateHargaBahan', 'updateHargaBahan')->name('updateHargaBahan');
        Route::post('/master/updateHargaLogo', 'updateHargaLogo')->name('updateHargaLogo');
        Route::post('/approval/action', 'approval_action')->name('approval_action');
        Route::delete('/data/invoice/{id}', 'destroyInvoice')->name('data.destroyInv');
        Route::delete('/data/quotation/{id}', 'destroyQuo')->name('data.destroyQuo');
        Route::get('/progress/{id}', 'progress_edit')->name('progress_edit');
        Route::get('/progress/generate/{kd_step}', 'progress_generate')->name('progress.generate');
        Route::get('/rating_view', 'rating_view')->name('rating_view');
        Route::post('/create-invoice', 'create_invoice')->name('create_invoice');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/rating', [Rating::class, 'index'])->name('rating');
Route::post('/rating/add', [Rating::class, 'add'])->name('rating.add');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
