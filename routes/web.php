<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\WhistleController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\MilestoneController;


use App\Http\Controllers\PageController;

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

// Main GET routes with locale
Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
], function(){

    /** Dynamic Routes **/
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/product/{slug?}', [PageController::class, 'product'])->name('product');
    Route::prefix('blog')->group(function () {
        Route::get('/', [PageController::class, 'blog_index'])->name('blog');
        Route::get('/category/{category}', [PageController::class, 'blog_index'])->name('blog.category');
        Route::get('/{blog}', [PageController::class, 'blog_show'])->name('blog.show');
    });
    Route::get('/career/{slug?}', [PageController::class, 'career'])->name('career');
    Route::get('/get-data-saham', [PageController::class, 'get_data_saham'])->name('get_data_saham');

    Route::get('/tentang-perusahaan', [PageController::class, 'about'])->name('about');
    Route::get('/transparansi/anak-perusahaan', function () {
        return view('frontend.pages.transparansi.tata-kelola.anak');
    });
    Route::get('/transparansi', function () {
        return view('frontend.pages.transparansi.index');
    });

    Route::get('/transparansi/tata-kelola-perusahaan/struktur-organisasi', function () {
        return view('frontend.pages.transparansi.tata-kelola.struktur');
    });

    Route::get('/transparansi/tata-kelola-perusahaan/tata-kelola', function () {
        return view('frontend.pages.transparansi.tata-kelola.tata-kelola');
    });

    Route::get('/transparansi/tata-kelola-perusahaan/akta-perusahaan', function () {
        return view('frontend.pages.transparansi.tata-kelola.akta');
    });

    Route::get('/transparansi/tata-kelola-perusahaan/aksi-korporasi', function () {
        return view('frontend.pages.transparansi.tata-kelola.aksi');
    });

    Route::get('/transparansi/whistle-blowing-system', function () {
        return view('frontend.pages.transparansi.tata-kelola.wbs');
    });


    Route::get('/transparansi/tata-kelola-perusahaan/csr', function () {
        return view('frontend.pages.transparansi.tata-kelola.csr');
    });

    Route::get('/transparansi/hubungan-investor/laporan-tahunan', function () {
        return view('frontend.pages.transparansi.investor.tahunan');
    });

    Route::get('/transparansi/hubungan-investor/laporan-keuangan', function () {
        return view('frontend.pages.transparansi.investor.keuangan');
    });

    Route::get('/transparansi/hubungan-investor/berita-investor-korporasi', function () {
        return view('frontend.pages.transparansi.investor.berita');
    });

    Route::get('/transparansi/hubungan-investor/informasi-pemegang-saham', function () {
        return view('frontend.pages.transparansi.investor.pemegang-saham');
    });

    Route::get('/transparansi/hubungan-investor', function () {
        return view('frontend.pages.transparansi.investor.index');
    });
    Route::get('/transparansi/tata-kelola-perusahaan', function () {
        return view('frontend.pages.transparansi.tata-kelola.index');
    });
    Route::get('/transparansi/{category}', [PageController::class, 'transparansi'])->name('transparansi.category');
    Route::post('/get/transparansi/file', [PageController::class, 'transparansi_get_file'])->name('transparansi.auto.file');
    Route::post('/get/transparansi/file/choosing', [PageController::class, 'choosing'])->name('transparansi.auto.file.choosing');
    Route::post('/get/transparansi/file/filter', [PageController::class, 'filter'])->name('transparansi.auto.file.filter');
    Route::get('/get/transparansi/file/test', [PageController::class, 'test'])->name('transparansi.auto.file.test');

    Route::get('/transparansi/{category}/{sub_category}', [PageController::class, 'transparansi_subcategory'])->name('transparansi.category.sub.id');


    /** Static Routes **/
    Route::get('/produk', function () {
        return view('frontend.pages.produk.index');
    });

    Route::get('/produk/jba-indonesia', function () {
        return view('frontend.pages.produk.jba');
    });

    Route::get('/produk/caroline', function () {
        return view('frontend.pages.produk.caroline');
    });

    Route::get('/produk/bursa-mobil', function () {
        return view('frontend.pages.produk.bursa');
    });

    Route::get('/struktur-organisasi-korporasi', function () {
        return view('frontend.pages.company.struktur');
    });


    Route::post('/milestone/get/value', [MilestoneController::class, 'get_value'])->name('transparansi.auto.file');





    Route::get('/hubungi-kami', function () {
        return view('frontend.pages.contact.index');
    });

    Route::get('/hubungi-kami/thank-you', function () {
        return view('frontend.pages.contact.thanks');
    });

    Route::get('/karir/thank-you', function () {
        return view('frontend.pages.karir.thanks');
    });

    Route::get('/wbs/thank-you', function () {
        return view('frontend.pages.transparansi.thanks');
    });

    Route::get('/kebijakan-privasi', function () {
        return view('frontend.pages.kebijakan');
    });

    Route::get('/sitemap', function () {
        return view('frontend.pages.sitemap');
    });

    // Route::get('/email-template', function () {
    //     return view('mail.template');
    // });

    // Route::get('/email-wbs', function () {
    //     return view('mail.wbs_mail');
    // });

    // Route::get('/email-career', function () {
    //     return view('mail.career');
    // });

    // Route::get('/email-contact', function () {
    //     return view('mail.contact_us');
    // });


    /*
        Routing for Herka
        - locahost/karir
        - localhost/transparansi/investor/analisa-saham
    */
    Route::get('/karir', function () { /* Slug untuk view pages */
        return view('frontend.pages.karir.index'); /* Path untuk view pages */
    });
    Route::get('/karir/detail-job', function () {
        return view('frontend.pages.karir.show');
    });
    Route::get('/karir/detail-job/job-form', function () {
        return view('frontend.pages.karir.page-form');
    });

    Route::get('/karir/detail-job/page-form', function () {
        return view('frontend.pages.karir.job-form');
    });

    Route::get('/transparansi/hubungan-investor/analisa-saham', function () { /* Slug untuk view pages */
        return view('frontend.pages.transparansi.investor.analisa-saham'); /* Path untuk view pages */
    });

});

//Auth::routes();
Auth::routes(['login' => false]);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');

    //Management
    Route::get('/management', [ManagementController::class, 'index'])->name('admin.management');
    Route::get('/management/add', [ManagementController::class, 'add_view'])->name('admin.management.add');
    Route::post('/management/add', [ManagementController::class, 'submit'])->name('admin.management.submit');
    Route::get('/management/edit/{slug}', [ManagementController::class, 'edit_view'])->name('admin.management.edit');
    Route::post('/management/edit', [ManagementController::class, 'update'])->name('admin.management.update');
    Route::get('/management/delete/{id}', [ManagementController::class, 'delete'])->name('admin.management.delete');

    //business
    Route::get('/business', [BusinessController::class, 'index'])->name('admin.business');
    Route::get('/business/add', [BusinessController::class, 'add_view'])->name('admin.business.add');
    Route::post('/business/add', [BusinessController::class, 'submit']);
    Route::get('/business/edit/{slug}', [BusinessController::class, 'edit_view'])->name('admin.business.edit');
    Route::post('/business/edit', [BusinessController::class, 'update']);
    Route::get('/business/delete/{id}', [BusinessController::class, 'delete']);

    //business features
    Route::post('/business/features/add', [BusinessController::class, 'submit_features']);
    Route::post('/business/features/edit', [BusinessController::class, 'update_features']);
    Route::post('/business/features/get', [BusinessController::class, 'get_features']);

    //Feedback
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
    Route::get('/feedback/add', [FeedbackController::class, 'add_view'])->name('admin.feedback.add');
    Route::post('/feedback/add', [FeedbackController::class, 'submit']);
    Route::get('/feedback/edit/{id}', [FeedbackController::class, 'edit_view']);
    Route::post('/feedback/edit', [FeedbackController::class, 'update']);
    Route::get('/feedback/delete/{id}', [FeedbackController::class, 'delete']);

    //Blog
    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('/blog/add', [BlogController::class, 'add_view'])->name('admin.blog.add');
    Route::post('/blog/add', [BlogController::class, 'submit'])->name('admin.blog.submit');
    Route::get('/blog/edit/{slug}', [BlogController::class, 'edit_view'])->name('admin.blog.edit');
    Route::post('/blog/edit/', [BlogController::class, 'update']);
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('admin.blog.delete');
    //About
    Route::get('/about', [AboutController::class, 'index'])->name('admin.about');
    Route::post('/about/add', [AboutController::class, 'add'])->name('admin.about.add');

    //Jobs
    Route::get('/job', [JobController::class, 'index'])->name('admin.job');
    Route::get('/job/add', [JobController::class, 'add_view'])->name('admin.add');
    Route::post('/job/add', [JobController::class, 'submit']);
    Route::get('/job/edit/{slug}', [JobController::class, 'edit_view']);
    Route::post('/job/edit', [JobController::class, 'update']);
    Route::get('/job/delete/{id}', [JobController::class, 'delete']);

    //Category
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/category/add', [CategoryController::class, 'add_view'])->name('admin.category.add');
    Route::post('/category/add', [CategoryController::class, 'submit'])->name('admin.category.submit');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit_view'])->name('admin.category.edit');
    Route::post('/category/edit', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');

    //Sub category
    Route::get('/subcategory', [SubCategoryController::class, 'index'])->name('admin.subcategory');
    Route::get('/subcategory/add', [SubCategoryController::class, 'add_view'])->name('admin.subcategory.add');
    Route::post('/subcategory/add', [SubCategoryController::class, 'submit'])->name('admin.subcategory.submit');
    Route::get('/subcategory/edit/{id}', [SubCategoryController::class, 'edit_view'])->name('admin.subcategory.edit');
    Route::post('/subcategory/edit', [SubCategoryController::class, 'update'])->name('admin.subcategory.update');
    Route::get('/subcategory/delete/{id}', [SubCategoryController::class, 'delete'])->name('admin.subcategory.delete');

    //Sub category
    Route::get('/file', [FileController::class, 'index'])->name('admin.file');
    Route::get('/file/add', [FileController::class, 'add_view'])->name('admin.file.add');
    Route::post('/file/add', [FileController::class, 'submit'])->name('admin.file.submit');
    Route::get('/file/edit/{id}', [FileController::class, 'edit_view'])->name('admin.file.edit');
    Route::post('/file/edit', [FileController::class, 'update'])->name('admin.file.update');
    Route::get('/file/delete/{id}', [FileController::class, 'delete'])->name('admin.file.delete');

    //Banners
    Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner');
    Route::get('/banner/add', [BannerController::class, 'add_view'])->name('admin.banner.add');
    Route::post('/banner/add', [BannerController::class, 'submit'])->name('admin.banner.submit');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit_view'])->name('admin.banner.edit');
    Route::post('/banner/edit', [BannerController::class, 'update'])->name('admin.banner.update');
    Route::get('/banner/test', [BannerController::class, 'test'])->name('admin.banner.test');
    Route::get('/banner/delete/{id}', [BannerController::class, 'delete'])->name('admin.banner.delete');

    //BLOG Category
    Route::get('/blog/category', [BlogCategoryController::class, 'index'])->name('admin.blog.category');
    Route::get('/blog/category/add', [BlogCategoryController::class, 'add_view'])->name('admin.blog.category.add');
    Route::post('/blog/category/add', [BlogCategoryController::class, 'submit'])->name('admin.blog.category.submit');
    Route::get('/blog/category/edit/{id}', [BlogCategoryController::class, 'edit_view'])->name('admin.blog.category.edit');
    Route::post('/blog/category/edit', [BlogCategoryController::class, 'update'])->name('admin.blog.category.update');
    Route::get('/blog/category/delete/{id}', [BlogCategoryController::class, 'delete'])->name('admin.blog.category.delete');


    //Milestone
    Route::get('/milestone', [MilestoneController::class, 'index'])->name('admin.milestone');
    Route::get('/milestone/add', [MilestoneController::class, 'add_view'])->name('admin.milestone.add');
    Route::post('/milestone/add', [MilestoneController::class, 'submit'])->name('admin.milestone.submit');
    Route::get('/milestone/edit/{id}', [MilestoneController::class, 'edit_view'])->name('admin.milestone.edit');
    Route::post('/milestone/edit', [MilestoneController::class, 'update'])->name('admin.milestone.update');
    Route::get('/milestone/delete/{id}', [MilestoneController::class, 'delete'])->name('admin.milestone.delete');


    Route::get('/logout', [LoginController::class,'logout'])->name('admin.logout');
    Route::get('/password/change', [UserController::class,'index'])->name('admin.change.password');
    Route::post('/password/change', [UserController::class,'change_password'])->name('admin.change.password.update');

});
//wbs
Route::post('/transparansi/tata-kelola-perusahaan/whistle-blowing-system', [WhistleController::class, 'submit'])->name('admin.whistle.add');
Route::post('/hubungi-kami', [ContactUsController::class, 'submit'])->name('admin.contact.add');

Route::post('/career/apply', [CareerController::class, 'submit'])->name('admin.career.add');

Route::post('/id/career/filter/', [CareerController::class, 'filter'])->name('id.career.filter');
Route::post('/en/career/filter/', [CareerController::class, 'filter'])->name('en.career.filter');


Route::get('/en/search', [SearchController::class, 'index'])->name('en.search');
Route::get('/id/search', [SearchController::class, 'index'])->name('id.search');
Route::get('/login', [UserLoginController::class, 'index'])->name('login');
Route::post('login', [UserLoginController::class, 'login']);

Route::get('/files/view/{id}', [FileController::class, 'view'])->name('files.index');
