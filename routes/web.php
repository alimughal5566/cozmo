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


Route::get('/script', 'SubscribersController@script');
Route::get('/my_script', 'HomeController@my_script');


Route::get('competition/{cat}', 'HomeController@category_wise_competitions');
Route::get('all_competition', 'HomeController@all_competitions');

// social links
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/redirect/{id}', 'SocialAuthFacebookController@redirectss');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Route::get('/redirect_google', 'SocialAuthFacebookController@redirect_google');
Route::get('/redirect_google/{id}', 'SocialAuthFacebookController@redirect_googlee');
Route::get('/callback_google', 'SocialAuthFacebookController@callback_google');
Route::get('/template', 'SubscribersController@template');
//end social links
/*Route::post('/sendmail', 'SubscribersController@sendmail');*/
//Route::post('/sendmail', 'SubscribersController@sendmail');

Route::post('/sendmailsub', 'SubscribersController@sendMailToSubscribers');

Route::post('/insert', 'SubscribersController@insert');
Route::get('/insert_zombie_game_sub', 'SubscribersController@insert_zombie_game_sub');

// Route::get('/', 'HomeController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/terms', 'HomeController@terms');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/subscriber', 'HomeController@subscriber');
Route::get('/howtoplay', 'HomeController@howtoplay');
Auth::routes();
Route::get('clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
});

Route::get('/sitemap', function()
{
    return Response::view('sitemap')->header('Content-Type', 'application/xml');
});

Route::get('register','HomeController@index');

Route::post('home/login', 'HomeController@login');

Route::post('landing/login', 'HomeController@ldlogin');

Route::get('/test', 'SubscribersController@test_page');

// Cart
Route::post('ticket/add_to_cart','ProductController@add_to_cart');
Route::post('ticket/remove_from_cart','ProductController@remove_from_cart');



    Route::get('/get_subscribers_list/{key}/{value}', 'SubscribersController@get_subscribers_list');
    Route::post('importExcel', 'SubscribersController@importExcel');
    Route::get('/subscribers', 'SubscribersController@show');
    Route::get('/email_schedule', 'SubscribersController@email_schedule_settings');
    Route::post('/update_email_schedule', 'SubscribersController@update_email_schedule');

    Route::get('/admin', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/home', 'DashboardController@index');

    //start about us
    Route::get('/admin/pages', 'AboutusController@index')->name('pages.admin');
    Route::get('/pages/create', 'AboutusController@create')->name('pages.create');
    Route::post('/pages/store', 'AboutusController@store')->name('pages.store');
    Route::get('/pages/edit/{id}', 'AboutusController@edit')->name('pages.edit');
    Route::post('/pages/update', 'AboutusController@update')->name('pages.update');
    Route::post('/pages/delete', 'AboutusController@destroy')->name('pages.destroy');
    //end about us
    // Agents    [named as users]
    Route::get('/users', 'UsersController@index');
    Route::get('/users/add', 'UsersController@create');
    Route::get('/users/edit/{id}', 'UsersController@edit');
    Route::get('/users/detail/{id}', 'UsersController@detail');
    Route::post('/users/update', 'UsersController@update');
    Route::post('/users/store', 'UsersController@store');
    Route::post('/users/delete', 'UsersController@destroy');
    Route::post('/users/change_status', 'UsersController@change_status');
    // end of agents

    // Packages
    Route::get('/product', 'PackagesController@index')->name('dashboard');
    Route::get('/packages/edit/{id}', 'PackagesController@edit')->name('pakage.edit');
    Route::get('/packages/article/{id}', 'PackagesController@article');
    Route::post('/article/save/', 'PackagesController@arsave');
    Route::post('/packages/store', 'PackagesController@store')->name('package.store');
    Route::get('/packages/add', 'PackagesController@create')->name('add');
    Route::post('/packages/delete', 'PackagesController@destroy');
    Route::post('/package/add_attribute','PackagesController@add_attribute');
    Route::post('/package/edit_attribute','PackagesController@edit_attribute');
    Route::post('/package/add_package_images','PackagesController@add_package_images');
    Route::post('/package/deleteImage','PackagesController@deleteImage');
    Route::post('package/delete_attr','PackagesController@delete_attr');
    Route::post('/package/main_img', 'PackagesController@main_img');
    Route::get('packages/send/{id}', 'PackagesController@send');
    Route::post('/send_email', 'PackagesController@send_email');
    Route::get('buy/ticket/{id}', 'PackagesController@buy_ticket');

    Route::post('/save_images','PackagesController@save_images')->name('save_images');
    Route::post('package/save_related_product','PackagesController@save_related_product');


    Route::get('/activate/{id}', 'PackagesController@activate');
    Route::get('/de_activate/{id}', 'PackagesController@de_activate');

    //blog_category
    Route::get('/blog_category/home', 'BlogController@blogCategoryIndex');

//end of blog category

    //blog portion
    Route::get('/blogs', 'BlogController@index')->name('blog.admin');
    Route::get('/blog/create', 'BlogController@create')->name('blog.create');
    Route::post('/blog/store', 'BlogController@store')->name('blog.store');
    Route::get('/blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
    Route::post('/blog/update', 'BlogController@update')->name('blog.update');
    Route::post('/blog/delete', 'BlogController@destroy')->name('blog.destroy');
    Route::get('/blog/apply_sorting_number/{number}/{blog_id}', 'BlogController@apply_sorting_number');
    //end blog portion
    //start faqs

    Route::post('/freecomp/delete', 'ProductController@destroyfreecompshow');
    Route::get('/admin/faqs', 'FaqController@index')->name('faqs.admin');
    Route::get('/faqs/create', 'FaqController@create')->name('faqs.create');
    Route::post('/faqs/store', 'FaqController@store')->name('faqs.store');
    Route::get('/faqs/edit/{id}', 'FaqController@edit')->name('faqs.edit');
    Route::post('/faqs/update', 'FaqController@update')->name('faqs.update');
    Route::post('/faqs/delete', 'FaqController@destroy')->name('faqs.destroy');
    //end faqs
    //start setting
    Route::get('/admin/setting', 'HomeController@show_setting');
    Route::post('store_setting', 'HomeController@store_setting');

    //end setting
    //Multi Competitions
    Route::get('MultiCompetitions', 'MultiCompetitions@index')->name('mc');
    Route::post('/iframes', 'MultiCompetitions@iframes');
    Route::post('specfic_comptetion', 'MultiCompetitions@specfic')->name('mc.spcomp');
    Route::get('MultiCompetitions/create', 'MultiCompetitions@create')->name('mc.create');
    Route::get('MultiCompetitions/create/{id}', 'MultiCompetitions@create')->name('mc.create.id');
    Route::get('MultiCompetitions/detail/{uniqid}', 'MultiCompetitions@detail')->name('mc.detail.id');
    Route::post('MultiCompetitions/delete', 'MultiCompetitions@destroy')->name('mc.delete');
    Route::post('MultiCompetitions/store', 'MultiCompetitions@store')->name('mc.store');

    //Article Management
    Route::resource('article', 'ArticleManagement');
    Route::get('article_comments', 'ArticleManagement@articleComments');
    Route::get('article_comments/delete/{id}', 'ArticleManagement@articleCommentsDelete');

    Route::resource('writer', 'WriterController');

    ////////discount coupon admin side////
    Route::get('discount_coupon', 'CouponController@index');
    Route::get('discount_coupon/add', 'CouponController@add');
    Route::post('discount_coupon/store', 'CouponController@store');
    Route::post('discount_coupon/delete', 'CouponController@delete');
    Route::get('view_coupon_use/{id}', 'CouponController@view_coupon_use');


Route::post('MultiCompetitions/freecomp', 'MultiCompetitions@freecomp');

    /* Category routes   */
    Route::get('category', 'CategoryController@index')->name('admin.category');
    Route::get('category/create', 'CategoryController@create')->name('category.create');
    Route::post('category/store', 'CategoryController@store')->name('category.store');
    Route::get('category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('category/update', 'CategoryController@update')->name('category.update');
    Route::post('category/delete', 'CategoryController@destroy')->name('category.destroy');


    Route::get('admin/ip_address', 'UsersController@ip_address');

    Route::post('register_as_business',     'HomeController@register_as_business');
    Route::post('approve_business_request', 'UsersController@approve_business_request');
    Route::post('reject_business_request',  'UsersController@reject_business_request');



// Route::get('winners', 'HomeController@winners');
    Route::get('contact', 'HomeController@contact');
    Route::get('profile', 'HomeController@profile');
    Route::get('user/tickets', 'HomeController@product_ticket');
    Route::get('users/freetickets',         'HomeController@product_ticketfree');
    Route::post('register_user',            'HomeController@register_user');
    Route::post('register_free_user',       'HomeController@register_free_user');

    Route::post('register_and_sub_user', 'HomeController@register_and_sub_user');



// Product routes
    Route::get('cart', 'HomeController@cart');
// Route::get('product/detail/{id}', 'ProductController@index');
    Route::get('competition/{id}/{slug}', 'ProductController@show');
    Route::get('product/refer/{slug}/{individual}/{refer_id}/{social}', 'ProductController@refer');

    Route::get('multiCompetitions/detail/{uniqid}', 'HomeController@multiCompetitions');
    Route::get('faqs', 'HomeController@faqs');

//implement payment method
    Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
    Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
    Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));
//endpayment method
    Route::get('freecompshow', 'ProductController@freecompshow');
    Route::get('blog', 'HomeController@blogshow');
    Route::get('competition', 'HomeController@competition');
    Route::get('livecompetition', 'HomeController@livecompetition');
    Route::get('user/checkout', 'HomeController@checkout');
    Route::get('user/check_coupon/{coupon}', 'HomeController@check_coupon');
    Route::post('user/checkout_paytriot', 'HomeController@checkout_paytriot');
    Route::post('user/add_payment', 'HomeController@add_payment');

//Paytriot payment return url
    Route::post('user/handle_paytriot_payment', 'HomeController@handle_paytriot_payment');

    Route::get('cron_payment', 'HomeController@cron_payment');
    Route::get('cron_cart', 'HomeController@cron_cart');


    /* Email Template */
    Route::get('emailtemplate', 'TemplateViewer@EmailView')
        ->name('change_template');

    Route::get('emailtemplate/{template_id}/{product_id}', 'SubscribersController@ShowEmailTemplate')
        ->name('show_template');

    Route::get('show_html/{template_id}/{product_id}', 'SubscribersController@show_html');

    Route::post('send_email_to_subscribers', 'SubscribersController@SendSubscriptionMail')->name('send_subscription_mail');


    Route::get('sendcmptemail', 'CronController@SendMail');
    Route::post('/subs/change_status', 'SubscribersController@change_status');

    Route::get('ShowTemplateSettings', 'Settings@TemplateSettings');
    Route::post('/UpdateTemplateSettings', 'Settings@MakeDefaultTemplate');
    Route::post('/edit_template_settings', 'Settings@edit_template_settings');


    Route::get('unsubscribe/{id}', 'SubscribersController@unsubscribe');



    /* Email Template */


    Route::get('commision_view/{id}', 'HomeController@commision_view');
    Route::get('refer_friend', 'HomeController@refer_friend');
    Route::post('refer_email', 'HomeController@refer_email');
// Route::get('liveDraw', 'HomeController@liveDraw');

    Route::post('profile/update/{id}', 'HomeController@profile_update');
    Route::get('show_refer', 'HomeController@show_refer');
    Route::get('show_win', 'HomeController@show_win');
    Route::get('register_page/{id}/', 'HomeController@register_page');
    Route::get('external_registerr/{id}/', 'HomeController@external_registerr');

    Route::get('login_page', 'HomeController@login_page');
    Route::get('social_register/{id}/{social}/', 'HomeController@social_register');

    Route::post('register_ext_user', 'HomeController@register_ext_user');
    Route::post('home/forgetpassword', 'HomeController@forgetpassword');
    Route::get('reset_password/{id}', 'HomeController@reset_password');
    Route::post('sending_resetpassword', 'HomeController@sending_resetpassword');


    Route::get('winners', 'HomeController@winners');
    Route::get('my-search', 'HomeController@serarch');
    Route::get('livedraws', 'HomeController@livedraws');
    Route::get('livestreaming/{id}', 'HomeController@detail');

    Route::get('/admin/iframe', 'iframeController@index')->name('iframe.admin');
    Route::get('/iframe/create', 'iframeController@create')->name('iframe.create');
    Route::post('/iframe/store', 'iframeController@store')->name('iframe.store');
    Route::get('/iframe/edit/{id}', 'iframeController@edit')->name('iframe.edit');
    Route::post('/iframe/update', 'iframeController@update')->name('iframe.update');
    Route::post('/iframe/delete', 'iframeController@destroy')->name('iframe.destroy');
    Route::post('/iframe', 'PackagesController@iframe');
    Route::post('/packages/update_winner/{id}', 'PackagesController@update_winner')->name('packages.update_winner');
    Route::post('/packages/delete_winner', 'PackagesController@delete_winner')->name('packages.delete_winner');

    Route::post('user/add_credit_payments', 'HomeController@add_credit_payments');
    Route::post('/sendmail', 'SubscribersController@sendmail');
    Route::get('user/detail', 'UsersController@user_detail');
    Route::get('/show_testimonials', 'UsersController@show_testimonials');
    Route::get('/add_testimonials', 'UsersController@add_testimonials');
    Route::get('/edit_testimonials_view/{id}', 'UsersController@edit_testimonials_view');
    Route::post('/edit_testimonials', 'UsersController@edit_testimonials');
    Route::post('store_testimonials', 'UsersController@store_testimonials');
    Route::get('/free_entry/{id}', 'HomeController@free_entry');
    Route::post('/store_free_entry/{id}', 'HomeController@store_free_entry');
    Route::get('/email_confirmation/{id}', 'HomeController@email_confirmation');
    Route::post('package/add_images', 'PackagesController@add_images');
    Route::post('testimonials/delete', 'UsersController@testimonials_delete');

    Route::get('admin/FreeCompetitions', 'FreeCompetitions@index');
    Route::get('free/ticket/{id}', 'FreeCompetitions@select');
    Route::post('freecompetition/delete', 'FreeCompetitions@freecompetition_del');
    Route::post('admin/SelectFreeCompWinner', 'FreeCompetitions@selectWinner');

    Route::get('login_user/{id}', 'UsersController@login_user');

// url_category
    Route::get('article_category', 'UsersController@url_category');
    Route::get('url_category_create', 'UsersController@url_category_create');
    Route::post('url_category_store', 'UsersController@url_category_store');
    Route::get('url_category/edit/{id}', 'UsersController@url_category_edit');
    Route::post('url_category_update/{id}', 'UsersController@url_category_update');
    Route::post('url_category/delete', 'UsersController@url_category_delete');

// $pages = DB::table('aboutuses')->get();
// foreach ($pages as $key => $page) {
//     dd($page->slug);
//     Route::get("$page->slug", 'AboutusController@index');
//     # code...
// }

    Route::post('/register_subscriber', 'HomeController@register_subscriber');


    Route::get('upload_excel', 'UsersController@upload_excel');

    Route::post('store_excel_file', 'UsersController@store_excel_file');

    Route::get('show_all_ticket', 'DashboardController@show_ticket');

    Route::get('show_paid_ticket/{mc_id?}', 'DashboardController@show_paid_ticket');

    Route::get('admin/template', 'UsersController@html_template');

    Route::get('admin/testing_email', 'PackagesController@testing_email');

    Route::post('send_test_email', 'PackagesController@send_test_email');

    Route::get('freeComp_users/edit/{id}', 'FreeCompetitions@freeComp_users');

// Route::get('search_prize', 'HomeController@search_prize');

    Route::post('/template_3_send_email', 'SubscribersController@template_3_send_email');


///////////////purchase_Peers/////////
    Route::get('purchase_Peers', 'DashboardController@purchase_Peers');
    Route::post('purchase_Peers/delete', 'DashboardController@purchase_Peers_delete');
    Route::post('purchase_Peers/email_type', 'DashboardController@email_type');
    Route::post('purchase_Peers/find', 'DashboardController@email_find');
    Route::post('sendmailpurchase', 'DashboardController@sendmailpurchase');
    Route::get('purchase_Peers/show_email', 'DashboardController@show_email');
    Route::post('purchase_Peers/get_coupon', 'DashboardController@get_coupon');
    Route::post('user_activity_email', 'DashboardController@user_activity_email');
    Route::post('purchase_Peers/delete_all_guest', 'DashboardController@delete_all_guest');
     Route::post('purchase_Peers/delete_selected', 'DashboardController@delete_selected');

//html integrations pages
Route::view('/about_us','about_us');
Route::view('/contact_us','contact_us');
Route::view('/events','events');
Route::view('/mailing_list','mailing_list');
Route::view('/charity','charity');
Route::get('/articles','HomeController@articles');
Route::post('/search_event','HomeController@search_event');
Route::post('/article-search','HomeController@article_search');

Route::get('/article-detail/{id}','HomeController@article_detail');
Route::get('/article-write/{id}','HomeController@article_write');
Route::post('/article-update','HomeController@article_upd');

Route::get('/profile-view','HomeController@profile_view');

Route::post('profile-update','HomeController@profile_upd');


Route::get('/', function () {
    return view('layouts.master-frontend');
});