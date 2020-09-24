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

//blog portion
Route::get('/blogs', 'BlogController@index')->name('blogHomeView');
Route::get('/blog/add', 'BlogController@blogAdd')->name('blog.add');
Route::post('/blog/store', 'BlogController@blogStore')->name('blog.store');
Route::get('/blog/edit/{id}', 'BlogController@blogEdit')->name('blog.edit');
Route::post('/blog/update', 'BlogController@blogUpdate')->name('blog.update');
Route::post('/blog/delete', 'BlogController@blogDestroy')->name('blog.destroy');

Route::get('/blog/removeFeature/{id}', 'BlogController@removeFeature')->name('blog.removeFeature');
Route::get('/blog/setToMainFeature/{id}', 'BlogController@setToMainFeature')->name('blog.setMainFeature');
Route::get('/blog/setToFeature/{id}', 'BlogController@setToFeature')->name('blog.setFeature');
//Route::get('/blog/apply_sorting_number/{number}/{blog_id}', 'BlogController@apply_sorting_number');
Route::get('/sub_category/load/{id}', 'BlogController@blogSubCatLoad')->name('sub-cat-load');


//end blog portion
    //blog_category
    Route::get('/blog_category/home', 'Blog_categoryController@blogCategoryIndex')->name('blog_category.home');
    Route::get('/blogCategory/add', 'Blog_categoryController@blogCategoryAdd')->name('blog_category.add');
    Route::post('/blog_category/store', 'Blog_categoryController@blogCategoryStore')->name('blog_category.store');
    Route::get('/blog_category/edit/{id}', 'Blog_categoryController@blogCategoryEdit')->name('blog_category.edit');
    Route::post('/blog_category/update', 'Blog_categoryController@blogCategoryUpdate')->name('blog_category.update');
    Route::post('/blog_category/delete', 'Blog_categoryController@blogCategoryDestroy')->name('blogCategoryDestroy');
    //end of blog category

    //Blog Sub Category Portion
    // Note: blog sub category add view is in blog_category/add
    Route::post('/sub_category/store', 'Blog_categoryController@blogSubCatAdd')->name('blog_sub_category.store');

// End of blog sub category



    //Rental Price History
    Route::get('/rental_price_history', 'Rental_price_historyController@index')->name('rentalPriceHistoryHomeView');
    Route::get('/rental_price_history/add', 'Rental_price_historyController@rentalAdd')->name('rentalPriceHistory.add');
    Route::post('/rental_price_history/store', 'Rental_price_historyController@rentalStore')->name('rentalPriceHistory.store');
    Route::get('/rental_price_history/edit/{id}', 'Rental_price_historyController@rentalEdit')->name('rentalPriceHistory.edit');
    Route::post('/rental_price_history/update', 'Rental_price_historyController@rentalUpdate')->name('rentalPriceHistory.update');
    Route::post('/rental_price_history/delete', 'Rental_price_historyController@rentalDestroy')->name('rentalPriceHistory.destroy');

//End of Rental Price of history

//departments
Route::get('/departments', 'DepartmentController@index')->name('departmentsHomeView');
Route::get('/departments/add', 'DepartmentController@departmentAdd')->name('department.add');
Route::post('/departments/store', 'DepartmentController@departmentStore')->name('department.store');
Route::get('/departments/edit/{id}', 'DepartmentController@departmentEdit')->name('department.edit');
Route::post('/departments/update', 'DepartmentController@departmentUpdate')->name('department.update');
Route::post('/departments/delete', 'DepartmentController@departmentDestroy')->name('department.destroy');

//
//Property open Days
Route::get('/property_open_days', 'Property_open_daysController@index')->name('propertyOpenDaysHomeView');
Route::get('/property_open_days/add', 'Property_open_daysController@dayAdd')->name('propertyOpenDays.add');
Route::post('/property_open_days/store', 'Property_open_daysController@dayStore')->name('propertyOpenDays.store');
Route::get('/property_open_days/edit/{id}', 'Property_open_daysController@dayEdit')->name('propertyOpenDays.edit');
Route::post('/property_open_days/update', 'Property_open_daysController@dayUpdate')->name('propertyOpenDays.update');
Route::post('/property_open_days/delete', 'Property_open_daysController@dayDestroy')->name('propertyOpenDays.destroy');


//end of property open days


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

//property type

Route::get('add-property-type','ProprtyTypeController@addPropertyType')->name('addPropertyType');
Route::post('create-property-type','ProprtyTypeController@createPropertyType')->name('createPropertyType');
Route::get('update-property-type/{id}','ProprtyTypeController@updatePropertyType')->name('updatePropertyType');
Route::get('property-home-view','ProprtyTypeController@propertyHomeView')->name('propertyHomeView');
Route::post('delete-property-type','ProprtyTypeController@deletePropertyType')->name('deletePropertyType');
Route::post('store-update-property-type','ProprtyTypeController@storeUpdatePropertyType')->name('storeUpdatePropertyType');


//property sale type

Route::get('sale-home-view','ProprtyTypeController@saleHomeView')->name('saleHomeView');
Route::get('add-sale-type','ProprtyTypeController@addSaleType')->name('addSaleType');
Route::post('create-sale-type','ProprtyTypeController@createSaleType')->name('createSaleType');
Route::get('update-sale-type/{id}','ProprtyTypeController@updateSaleType')->name('updateSaleType');
Route::post('delete-sale-type','ProprtyTypeController@deleteSaleType')->name('deleteSaleType');
Route::post('store-update-sale-type','ProprtyTypeController@storeUpdateSaleType')->name('storeUpdateSaleType');

//Resource Category

Route::get('resource-category-home','ResourceController@resourceCategoryHome')->name('resourceCategoryHome');
Route::get('add-resource-category','ResourceController@addResourceCategory')->name('addResourceCategory');
Route::post('create-resource-category','ResourceController@createResourceCategory')->name('createResourceCategory');
Route::get('update-resource-category/{id}','ResourceController@updateResourceCategory')->name('updateResourceCategory');
Route::post('delete-resource-category','ResourceController@deleteResourceCategory')->name('deleteResourceCategory');
Route::post('store-resource-category','ResourceController@storeResourceCategory')->name('storeResourceCategory');

//Resources

Route::get('resource-home','ResourceController@resourceHome')->name('resourceHome');
Route::get('add-resources','ResourceController@addResources')->name('addResources');
Route::post('create-resource','ResourceController@createResource')->name('createResource');
Route::get('update-resource/{id}','ResourceController@updateResource')->name('updateResource');
Route::post('delete-resource','ResourceController@deleteResource')->name('deleteResource');
Route::post('store-resource','ResourceController@storeResource')->name('storeResource');


// FrontEnd

   // Front End Blog Portion
Route::get('/UserBlog', 'frontend\BlogController@index')->name('UserblogHomeView');
Route::get('/BlogDetail/{id}', 'frontend\BlogController@detail')->name('blog.detail');

   // End of BLog Portion

   // Front End Properties Portion
Route::get('/', 'frontend\PropertiesController@index')->name('UserblogHomeView');
Route::get('/UserSales', 'frontend\PropertiesController@index')->name('UserblogHomeView');
Route::get('/UserRentals', 'frontend\PropertiesController@rentalsIndex')->name('UserblogHomeView-rentals');
Route::get('/property/detail/{id}', 'frontend\PropertiesController@propertyDetail')->name('propertyDetails');

   // End of Properties Portion







Route::get('/UserRental', function () {
    return view('frontend.rentals');
});

Route::get('/UserBuilding', function () {
    return view('frontend.building');
});


//

//Company route

Route::get('companies','HomeController@index_companies')->name('index_companies');
Route::get('/companies/add', 'CompaniesController@companies');
Route::post('/company/store', 'CompaniesController@store')->name('company.store');
Route::get('/company/edit/{id}', 'CompaniesController@edit')->name('companies.edit');
Route::post('/company/update', 'CompaniesController@update')->name('company.update');
Route::get('/company/delete/{id}', 'CompaniesController@delete')->name('company.delete');

//Building info route

Route::get('building_info','Building_infoController@index_building_info')->name('index_building_info');
Route::get('/building_info/add', 'Building_infoController@building');
Route::post('/building_info/store', 'Building_infoController@store')->name('building_info.store');
Route::get('/building_info/edit/{id}', 'Building_infoController@edit')->name('building_info.edit');
Route::post('/building_info/update', 'Building_infoController@update')->name('building_info.update');
Route::get('/building_info/delete/{id}', 'Building_infoController@delete')->name('Building_info.delete');

//Building description route

Route::get('building_documents','Building_documentController@index_building_documents')->name('index_building_documents');
Route::get('/building_document/add', 'Building_documentController@building');
Route::post('/building_document/store', 'Building_documentController@store')->name('building_document.store');
Route::get('/building_document/edit/{id}', 'Building_documentController@edit')->name('building_document.edit');
Route::post('/building_document/update', 'Building_documentController@update')->name('building_document.update');
Route::get('/building_document/delete/{id}', 'Building_documentController@delete')->name('Building_document.delete');

//Building amenities

Route::get('building_amenities','Building_amenitiesController@index_building_amenities')->name('index_building_amenities');
Route::get('/building_amenities/add', 'Building_amenitiesController@building');
Route::post('/building_amenities/store', 'Building_amenitiesController@store')->name('building_amenities.store');
Route::get('/building_amenities/edit/{id}', 'Building_amenitiesController@edit')->name('building_amenities.edit');
Route::post('/building_amenities/update', 'Building_amenitiesController@update')->name('building_amenities.update');
Route::get('/building_amenities/delete/{id}', 'Building_amenitiesController@delete')->name('Building_amenities.delete');

//Property Address

Route::get('add-property-address','Property_addressController@addPropertyAddress')->name('addPropertyAddress');
Route::get('address-home-view','Property_addressController@addressHomeView')->name('addressHomeView');
Route::post('/property_address/store', 'Property_addressController@store')->name('propertyAddressStore');
Route::get('/property_address/edit/{id}', 'Property_addressController@edit')->name('property_address.edit');
Route::post('update-property-address','Property_addressController@updatePropertyAddress')->name('updatePropertyAddress');
Route::post('delete-property-address','Property_addressController@delete')->name('deletePropertyAddress');

//Property Images

Route::get('property_image','Property_imagesController@index_property_image')->name('index_property_image');
Route::get('/property_image/add', 'Property_imagesController@property');
Route::post('/property_image/store', 'Property_imagesController@store')->name('property_image.store');
Route::get('/property_image/edit/{id}', 'Property_imagesController@edit')->name('property_image.edit');
Route::post('/property_image/update', 'Property_imagesController@update')->name('property_image.update');
Route::get('/property_image/delete/{id}', 'Property_imagesController@delete')->name('property_image.delete');

//Properties

Route::get('/properties/home', 'PropertiesController@propertiesIndex')->name('properties.home');
Route::get('/properties/add', 'PropertiesController@propertiesAdd')->name('properties.add');
Route::post('/properties/store', 'PropertiesController@propertiesStore')->name('properties.store');
Route::get('/properties/edit/{id}', 'PropertiesController@propertiesEdit')->name('properties.edit');
Route::post('/properties/update', 'PropertiesController@propertiesUpdate')->name('properties.update');
Route::post('/properties/delete', 'PropertiesController@delete')->name('properties.delete');

//Properties Listing Amenities

Route::get('/property_listing_amenities/home','Property_listing_amenitiesController@property_listing_amenities_index')->name('property_listing_amenities.home');
Route::get('/property_listing_amenities/add', 'Property_listing_amenitiesController@amenitiesAdd')->name('property_listing_amenities.add');
Route::post('/property_listing_amenities/store', 'Property_listing_amenitiesController@amenitiesStore')->name('property_listing_amenities.store');
Route::get('/property_listing_amenities/edit/{id}', 'Property_listing_amenitiesController@amenitiesEdit')->name('property_listing_amenities.edit');
Route::post('/property_listing_amenities/update', 'Property_listing_amenitiesController@amenitiesUpdate')->name('property_listing_amenities.update');
Route::post('/property_listing_amenities/delete', 'Property_listing_amenitiesController@amenitiesDelete')->name('property_listing_amenities.delete');

//Properties Options

Route::get('/property_options/home','Property_optionsController@propertyOptionsIndex')->name('property_options.home');
Route::get('/property_options/add', 'Property_optionsController@optionsAdd')->name('property_options.add');
Route::post('/property_options/store', 'Property_optionsController@optionsStore')->name('property_options.store');
Route::get('/property_options/edit/{id}', 'Property_optionsController@edit')->name('property_options.edit');
Route::post('/property_options/update', 'Property_optionsController@update')->name('property_options.update');
Route::post('/property_options/delete', 'Property_optionsController@optionsDelete')->name('property_options.delete');

//Properties Sale Price Changes

Route::get('/listing_sale_price_changes/home','Listing_sale_price_changesController@listingSaleIndex')->name('listing_sale_price_changes.home');
Route::get('/listing_sale_price_changes/add', 'Listing_sale_price_changesController@listingAdd')->name('listing_sale_price_changes.add');
Route::post('/listing_sale_price_changes/store', 'Listing_sale_price_changesController@listingStore')->name('listing_sale_price_changes.store');
Route::get('/listing_sale_price_changes/edit/{id}', 'Listing_sale_price_changesController@listingEdit')->name('listing_sale_price_changes.edit');
Route::post('/listing_sale_price_changes/update', 'Listing_sale_price_changesController@listingUpdate')->name('listing_sale_price_changes.update');
Route::post('/listing_sale_price_changes/delete', 'Listing_sale_price_changesController@listingDelete')->name('listing_sale_price_changes.delete');

//Nearby Transit Lines

Route::get('/nearby_transit_lines/home','Nearby_transit_linesController@transitIndex')->name('nearby_transit_lines.home');
Route::get('/nearby_transit_lines/add', 'Nearby_transit_linesController@transitAdd')->name('nearby_transit_lines.add');
Route::post('/nearby_transit_lines/store', 'Nearby_transit_linesController@transitStore')->name('nearby_transit_lines.store');
Route::get('/nearby_transit_lines/edit/{id}', 'Nearby_transit_linesController@transitEdit')->name('nearby_transit_lines.edit');
Route::post('/nearby_transit_lines/update', 'Nearby_transit_linesController@transitUpdate')->name('nearby_transit_lines.update');
Route::post('/nearby_transit_lines/delete', 'Nearby_transit_linesController@transitDelete')->name('nearby_transit_lines.delete');


Route::get('/header', 'headerController@index')->name('header.data');








