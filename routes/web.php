<?php

use Illuminate\Support\Facades\Route;

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


//HomeRoutes
Route::get('/','HomeController@index');
Route::get('/404','HomeController@broken');
Route::get('/explore-kenya','HomeController@explore_kenya');
Route::get('/explore/{slung}','HomeController@explore_country');
Route::get('/explore-tanzania','HomeController@explore_tanzania');
Route::get('/explore-Kenya','HomeController@explore_kenya');
Route::get('/explore-Tanzania','HomeController@explore_tanzania');
Route::get('/plan-my-safaris','HomeController@plan_my_safaris');
Route::get('/car-hire','HomeController@car');
Route::get('/towns/{town}','HomeController@town');
Route::get('/car-hire/{executive}','HomeController@car_executive');
Route::get('/car/{name}','HomeController@carDescription');
Route::post('/booktour','HomeController@book_now');
Route::get('/credits','HomeController@credits');


Route::get('/itineraries/{slung}','HomeController@itineraries');

Route::get('/car-category/{name}','HomeController@car_category');

// Airport Transfers
Route::get('/transfers','HomeController@transfers');


Route::get('/destinations/{slung}','HomeController@destinations')->name('Destinations');
Route::get('/africa-destinations/extra/{slung}','HomeController@destinations_extra')->name('Extra');


Route::get('/africa-destinations','HomeController@destinations')->name('Destinations');
Route::get('/africa-destinations-landing','HomeController@destinations_landing')->name('Destinations-landing');
Route::get('/africa-destinations/{slung}','HomeController@destination')->name('Destination');
Route::get('/sample-safaris/{slung}','HomeController@sample_safaris')->name('Sample');
Route::get('/adventures-and-experiences','HomeController@experiences')->name('Experiences');
Route::get('/adventures-and-experiences/{slung}','HomeController@experience')->name('Experience');
Route::get('/tour-packages/{category}','HomeController@destination_cat')->name('Destinations');
Route::get('/africa-destinations/{name}','HomeController@destination');

Route::get('/trading-terms','HomeController@trading');


Route::get('/beach-holidays','HomeController@beach_holidays')->name('beach-holidays');


Route::get('/elegant-hotels','HomeController@hotels')->name('elegant-hotels');
Route::get('/hotel/{title}','HomeController@hotel');

// Booking You pass the category and the product id to select the appropriate page
Route::get('/book','HomeController@book');
Route::get('/booking/{cat}/{id}','HomeController@books');
Route::get('/booking/{cat}/{id}','HomeController@books');
Route::get('/book_now/{cat}/{id}','HomeController@book_now');

Route::get('/about-us','HomeController@about');
Route::get('/contact-us','HomeController@contact');

Route::get('/terms-and-conditions','HomeController@terms');
Route::get('/privacy-policy','HomeController@privacy');
Route::get('/copyright','HomeController@copyright');
Route::get('/traveler-infomation','HomeController@guide');


Route::get('/category/{name}','HomeController@category');


Route::get('/commingsoon','HomeController@commingsoon');

Route::post('/submitMessage','HomeController@submitMessage');
Route::post('/submitBooking','HomeController@submitBooking');
Route::post('/submitPlan','HomeController@submitPlan');




//Check If Mail Exists
Route::post('/checkemail','HomeController@checkEmail');
//Subscribers
Route::post('/subscribe','HomeController@subscribe');
//Search Site
Route::post('/search','HomeController@searchsite');
Route::post('/searchCar','HomeController@searchCar');
Route::post('/search_car_filter','HomeController@search_car_filter');
Route::post('/search_hotel_filter','HomeController@search_hotel_filter');
Route::post('/search_experience_filter','HomeController@search_experience_filter');
Route::post('/search_transfer_filter','HomeController@search_transfer_filter');
Route::post('/review','HomeController@review');
Route::post('/signUp','HomeController@signUp');
Route::post('/signIn','HomeController@signIn');
Route::post('/saveData','HomeController@saveData');




//BlogRoutes
Route::get('/latest-News','BlogController@index');
Route::get('/latest-news/{title}','BlogController@blog');
Route::get('/latest-news/cat/{cat}','BlogController@blogCat');
Route::post('/blog/search_blog','BlogController@search_blog');
Route::post('/blog/post_comment','BlogController@post_comment');


// Cart Routes
Route::get('/cart','CartController@index');
Route::get('/cart/destroy/{rowId}','CartController@destroy');
Route::get('/cart/destroy','CartController@destruct');
Route::get('cart/addItem/{id}','CartController@addItem');
Route::get('cart/addCart/{id}','CartController@addCart');
Route::post('/cart/update/{id}', 'CartController@update');
Route::get('cart/addToCart/{id}','CartController@addToCart');



// Checkout Routes
Route::get('/checkout','CheckoutController@index');
Route::post('/checkout/formvalidate', 'CheckoutController@formvalidate');
Route::get('checkout/placeOrder', 'CheckoutController@placeOrder');
Route::get('checkout/signUp', 'CheckoutController@signUp');
Route::post('/sign_up', 'CheckoutController@sign_up');
Route::post('/sign_in', 'CheckoutController@sign_in');




Auth::routes();

Route::group(['prefix'=>'admin'], function(){


//Login route

Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminsController@index')->name('admin.index');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//reset password
Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

//Testimonial
Route::get('/addTestimonial', 'AdminsController@addTestimonial');
Route::post('/add_Testimonial', 'AdminsController@add_Testimonial');
Route::get('/testimonials','AdminsController@testimonials');
Route::get('/editTestimonial/{id}', 'AdminsController@editTestimonial');
Route::get('/deleteTestimonial/{id}', 'AdminsController@deleteTestimonial');
Route::post('/edit_Testimonial/{id}', 'AdminsController@edit_Testimonial');


Route::get('/changecat', 'AdminsController@changecat');

//Terms Privacy copyright
//copyright
Route::get('/copyright','AdminsController@copyright');
Route::post('/edit_copyright', 'AdminsController@edit_copyright');
//Privacy
Route::get('/privacy','AdminsController@privacy');
Route::get('/addPrivacy', 'AdminsController@addPrivacy');
Route::get('/editPrivacy/{id}', 'AdminsController@editPrivacy');
Route::post('/add_privacy', 'AdminsController@add_privacy');
Route::get('/delete_privacy/{id}','AdminsController@delete_privacy');
Route::post('/edit_privacy/{id}', 'AdminsController@edit_privacy');
//Terms
Route::get('/terms','AdminsController@terms');
Route::get('/addTerms', 'AdminsController@addTerms');
Route::get('/editTerm/{id}', 'AdminsController@editTerm');
Route::post('/add_term', 'AdminsController@add_term');
Route::post('/edit_term/{id}', 'AdminsController@edit_term');
Route::get('/delete_term/{id}','AdminsController@delete_term');
//About
Route::get('/about','AdminsController@about');
Route::post('/about_save', 'AdminsController@about_save');
Route::get('/abouts','AdminsController@abouts');
Route::post('/abouts_save', 'AdminsController@abouts_save');
Route::get('/how','AdminsController@how');
Route::post('/how_save', 'AdminsController@how_save');


//Services
Route::get('/services','AdminsController@services');
Route::get('/deleteService/{id}','AdminsController@deleteService');
Route::post('/edit_Services/{id}', 'AdminsController@edit_Services');
Route::get('/editServices/{id}', 'AdminsController@editServices');
Route::get('/addService', 'AdminsController@addService');
Route::post('/add_Service', 'AdminsController@add_Service');

//Countries
Route::get('/countries','AdminsController@countries');
Route::get('/deleteCountries/{id}','AdminsController@deleteCountries');
Route::post('/edit_Countries/{id}', 'AdminsController@edit_Countries');
Route::get('/editCountries/{id}', 'AdminsController@editCountries');
Route::get('/addCountries', 'AdminsController@addCountries');
Route::post('/add_Countries', 'AdminsController@add_Countries');


//Transfers
Route::get('/transfers','AdminsController@transfers');
Route::get('/deleteTransfer/{id}','AdminsController@deleteTransfer');
Route::post('/edit_Transfer/{id}', 'AdminsController@edit_Transfer');
Route::get('/editTransfer/{id}', 'AdminsController@editTransfer');
Route::get('/addTransfer', 'AdminsController@addTransfer');
Route::post('/add_Transfer', 'AdminsController@add_Transfer');


Route::get('/edit_Experiences','AdminsController@edit_Experiences');

//Pricing
Route::get('/pricing','AdminsController@pricing');
Route::get('/deletePricing/{id}','AdminsController@deletePricing');
Route::post('/edit_Pricing/{id}', 'AdminsController@edit_Pricing');
Route::get('/editPricing/{id}', 'AdminsController@editPricing');
Route::get('/addPricing', 'AdminsController@addPricing');
Route::post('/add_Pricing', 'AdminsController@add_Pricing');

//Porfolio
Route::get('/portfolio','AdminsController@portfolio');
Route::get('/deletePortfolio/{id}','AdminsController@deletePortfolio');
Route::post('/edit_Portfolio/{id}', 'AdminsController@edit_Portfolio');
Route::get('/editPortfolio/{id}', 'AdminsController@editPortfolio');
Route::get('/addPortfolio', 'AdminsController@addPortfolio');
Route::post('/add_Portfolio', 'AdminsController@add_Portfolio');

//Gallery
Route::get('/gallery','AdminsController@gallery');
Route::get('/editGallery/{id}','AdminsController@editGallery');
Route::get('/deleteGallery/{id}','AdminsController@deleteGallery');
Route::post('/save_gallery/{id}', 'AdminsController@save_gallery');
Route::get('/addGallery', 'AdminsController@addGallery');
Route::get('/galleryList', 'AdminsController@galleryList');
Route::post('/add_Gallery', 'AdminsController@add_Gallery');

//Slider
Route::get('/slider','AdminsController@slider');
Route::get('/editSlider/{id}','AdminsController@editSlider');
Route::get('/deleteSlider/{id}','AdminsController@deleteSlider');
Route::post('/edit_Slider/{id}', 'AdminsController@edit_Slider');
Route::get('/addSlider', 'AdminsController@addSlider');
Route::post('/add_Slider', 'AdminsController@add_Slider');

//Banner
Route::get('/banner','AdminsController@banners');
Route::get('/editBanner/{id}','AdminsController@editBanner');
Route::post('/edit_Banner/{id}', 'AdminsController@edit_Banner');

//Pages
Route::get('/pages','AdminsController@pages');
Route::get('/editPage/{id}','AdminsController@editPage');
Route::get('/deletePage/{id}','AdminsController@deletePage');
Route::post('/edit_Page/{id}', 'AdminsController@edit_Page');
Route::get('/addPage', 'AdminsController@addPage');
Route::post('/add_Page', 'AdminsController@add_Page');
Route::post('/set_Page/{name}', 'AdminsController@set_Page');
Route::get('/setPage/{name}', 'AdminsController@setPage');


//Priducts
Route::get('/products','AdminsController@products');
Route::get('/editProduct/{id}','AdminsController@editProduct');
Route::get('/deleteProduct/{id}','AdminsController@deleteProduct');
Route::post('/edit_Product/{id}', 'AdminsController@edit_Product');
Route::get('/addProduct', 'AdminsController@addProduct');
Route::post('/add_Product', 'AdminsController@add_Product');

// Destinations
Route::get('/destinations','AdminsController@destinations');
Route::get('/editDestination/{id}','AdminsController@editDestination');
Route::get('/deleteDestination/{id}','AdminsController@deleteDestination');
Route::post('/edit_Destination/{id}', 'AdminsController@edit_Destination');
Route::get('/addDestination', 'AdminsController@addDestination');
Route::post('/add_Destination', 'AdminsController@add_Destination');
Route::get('/swapDestination/{id}', 'AdminsController@swapDestination');
Route::get('/swapSlider/{id}', 'AdminsController@swapSlider');


// Samples
Route::get('/samples','AdminsController@samples');
Route::get('/editSample/{id}','AdminsController@editSample');
Route::get('/deleteSample/{id}','AdminsController@deleteSample');
Route::post('/edit_Sample/{id}', 'AdminsController@edit_Sample');
Route::get('/addSample', 'AdminsController@addSample');
Route::post('/add_Sample', 'AdminsController@add_Sample');
Route::get('/swapSample/{id}', 'AdminsController@swapSample');

// Extras
Route::get('/extras','AdminsController@extras');
Route::get('/editExtra/{id}','AdminsController@editExtra');
Route::get('/deleteExtra/{id}','AdminsController@deleteExtra');
Route::post('/edit_Extra/{id}', 'AdminsController@edit_Extra');
Route::get('/addExtra', 'AdminsController@addExtra');
Route::post('/add_Extra', 'AdminsController@add_Extra');
Route::get('/swapExtra/{id}', 'AdminsController@swapExtra');

// Booking
Route::get('/bookings','AdminsController@bookings');
Route::get('/bookings/explore/{id}','AdminsController@bookings_explore');
Route::get('/swapBooking/{id}', 'AdminsController@swapBooking');
Route::get('/deleteBooking/{id}','AdminsController@deleteBooking');

// Tours or Experiences
Route::get('/experiences','AdminsController@experiences');
Route::get('/editExperience/{id}','AdminsController@editExperience');
Route::get('/deleteExperience/{id}','AdminsController@deleteExperience');
Route::post('/edit_Experience/{id}', 'AdminsController@edit_Experience');
Route::get('/addExperience', 'AdminsController@addExperience');
Route::post('/add_Experience', 'AdminsController@add_Experience');
Route::get('/swapExperience/{id}', 'AdminsController@swapExperience');
Route::get('/swapBeach/{id}', 'AdminsController@swapBeach');


// Car
Route::get('/cars','AdminsController@cars');
Route::get('/editCar/{id}','AdminsController@editCar');
Route::get('/deleteCar/{id}','AdminsController@deleteCar');
Route::post('/edit_Car/{id}', 'AdminsController@edit_Car');
Route::get('/addCar', 'AdminsController@addCar');
Route::post('/add_Car', 'AdminsController@add_Car');
Route::get('/swapCar/{id}', 'AdminsController@swapCar');

// Hotels
Route::get('/hotels','AdminsController@hotels');
Route::get('/editHotel/{id}','AdminsController@editHotel');
Route::get('/deleteHotel/{id}','AdminsController@deleteHotel');
Route::post('/edit_Hotel/{id}', 'AdminsController@edit_Hotel');
Route::get('/addHotel', 'AdminsController@addHotel');
Route::post('/add_Hotel', 'AdminsController@add_Hotel');
Route::get('/swapHotel/{id}', 'AdminsController@swapHotel');

// Rooms
Route::get('/rooms','AdminsController@rooms');
Route::get('/rooms/{id}','AdminsController@room');
Route::get('/editRoom/{id}','AdminsController@editRoom');
Route::get('/deleteRoom/{id}','AdminsController@deleteRoom');
Route::post('/edit_Room/{id}', 'AdminsController@edit_Room');
Route::get('/addRoom', 'AdminsController@addRoom');
Route::post('/add_Room', 'AdminsController@add_Room');
Route::get('/swapRoom/{id}', 'AdminsController@swapRoom');

// Guides
Route::get('/guides','AdminsController@guides');
Route::get('/editGuide/{id}','AdminsController@editGuide');
Route::get('/deleteGuide/{id}','AdminsController@deleteGuide');
Route::post('/edit_Guide/{id}', 'AdminsController@edit_Guide');
Route::get('/addGuide', 'AdminsController@addGuide');
Route::post('/add_Guide', 'AdminsController@add_Guide');
Route::get('/swapGuide/{id}', 'AdminsController@swapGuide');

// Itineries
Route::get('/itineries','AdminsController@itineries');
Route::get('/editItinery/{id}','AdminsController@editItinery');
Route::get('/deleteItinery/{id}','AdminsController@deleteItinery');
Route::post('/edit_Itinery/{id}', 'AdminsController@edit_Itinery');
Route::get('/addItinery/{type}', 'AdminsController@addItinery');
Route::post('/add_Itinery', 'AdminsController@add_Itinery');


//Events Controls
Route::get('/events','AdminsController@events');
Route::get('/editEvent/{id}','AdminsController@editEvent');
Route::get('/delete_Event/{id}','AdminsController@delete_Event');
Route::post('/edit_Event/{id}', 'AdminsController@edit_Event');
Route::get('/addEvent', 'AdminsController@addEvent');
Route::post('/add_Event', 'AdminsController@add_Event');
Route::get('/swapevent/{id}', 'AdminsController@swapevent');

//Admin
Route::get('/admins','AdminsController@admins');
Route::get('/editAdmin/{id}','AdminsController@editAdmin');
Route::get('/deleteAdmin/{id}','AdminsController@deleteAdmin');
Route::post('/edit_Admin/{id}', 'AdminsController@edit_Admin');
Route::get('/addAdmin', 'AdminsController@addAdmin');
Route::post('/add_Admin', 'AdminsController@add_Admin');

//Certificates
Route::get('/certs','AdminsController@certs');
Route::get('/editCert/{id}','AdminsController@editCert');
Route::get('/deleteCert/{id}','AdminsController@deleteCert');
Route::post('/edit_Cert/{id}', 'AdminsController@edit_Cert');
Route::get('/addCert', 'AdminsController@addCert');
Route::post('/add_Cert', 'AdminsController@add_Cert');

//User
Route::get('/users','AdminsController@users');
Route::get('/editUser/{id}','AdminsController@editUser');
Route::get('/deleteUser/{id}','AdminsController@deleteUser');
Route::post('/edit_User/{id}', 'AdminsController@edit_User');
Route::get('/addUser', 'AdminsController@addUser');
Route::post('/add_User', 'AdminsController@add_User');

//Blog Controls
Route::get('/blog','AdminsController@blog');
Route::get('/editBlog/{id}','AdminsController@editBlog');
Route::get('/delete_Blog/{id}','AdminsController@delete_Blog');
Route::post('/edit_Blog/{id}', 'AdminsController@edit_Blog');
Route::get('/addBlog', 'AdminsController@addBlog');
Route::post('/add_Blog', 'AdminsController@add_Blog');

//Categories Control
Route::get('/categories','AdminsController@categories');
Route::get('/editCategories/{id}','AdminsController@editCategories');
Route::get('/deleteCategory/{id}','AdminsController@deleteCategory');
Route::post('/edit_Category/{id}', 'AdminsController@edit_Category');
Route::get('/addCategory', 'AdminsController@addCategory');
Route::post('/add_Category', 'AdminsController@add_Category');

// Car Types
Route::get('/cartypes','AdminsController@cartypes');
Route::get('/editCarType/{id}','AdminsController@editCarType');
Route::post('/edit_CarType/{id}', 'AdminsController@edit_CarType');



//Instructors Control
Route::get('/teachers','AdminsController@teachers');
Route::get('/editTeacher/{id}','AdminsController@editTeacher');
Route::get('/deleteTeacher/{id}','AdminsController@deleteTeacher');
Route::post('/edit_Teacher/{id}', 'AdminsController@edit_Teacher');
Route::get('/addTeacher', 'AdminsController@addTeacher');
Route::post('/add_Teacher', 'AdminsController@add_Teacher');

//Service Renreded Control
Route::get('/service_rendered','AdminsController@service_rendered');
Route::get('/editService_rendered/{id}','AdminsController@editService_rendered');
Route::get('/deleteService_rendered/{id}','AdminsController@deleteService_rendered');
Route::post('/edit_Service_rendered/{id}', 'AdminsController@edit_Service_rendered');
Route::get('/addService_rendered', 'AdminsController@addService_rendered');
Route::post('/add_Service_rendered', 'AdminsController@add_Service_rendered');

//Daily
Route::get('/daily','AdminsController@daily');
Route::get('/editDaily/{id}','AdminsController@editDaily');
Route::get('/deleteDaily/{id}','AdminsController@deleteDaily');
Route::post('/edit_Daily/{id}', 'AdminsController@edit_Daily');
Route::get('/addDaily', 'AdminsController@addDaily');
Route::post('/add_Daily', 'AdminsController@add_Daily');

//Daily
Route::get('/curriculum','AdminsController@curriculum');
Route::get('/material','AdminsController@material');
Route::post('/edit_curriculum/{id}', 'AdminsController@edit_curriculum');
Route::post('/edit_material/{id}', 'AdminsController@edit_material');
Route::get('/editCurriculum/{id}', 'AdminsController@editCurriculum');
Route::get('/editMaterial/{id}', 'AdminsController@editMaterial');
Route::get('/addCurriculum', 'AdminsController@addCurriculum');
Route::get('/addMaterial', 'AdminsController@addMaterial');
Route::post('/add_curriculum', 'AdminsController@add_curriculum');
Route::post('/add_material', 'AdminsController@add_material');
Route::get('/deleteMaterial/{id}', 'AdminsController@deleteMaterial');
Route::get('/deleteCurriculum/{id}', 'AdminsController@deleteCurriculum');

// Lessons & Topics
Route::get('/addLessons', 'AdminsController@addLessons');
Route::get('/addTopic', 'AdminsController@addTopic');
Route::post('/add_Lessons', 'AdminsController@add_Lessons');
Route::post('/add_Topic', 'AdminsController@add_Topic');
Route::post('/edit_topic/{id}', 'AdminsController@edit_topic');
Route::get('/editLesson/{id}', 'AdminsController@editLesson');
Route::get('/editTopic/{id}', 'AdminsController@editTopic');
Route::post('/edit_lesson/{id}', 'AdminsController@edit_lesson');
Route::get('/deleteLesson/{id}', 'AdminsController@deleteLesson');
Route::get('/deleteTopics/{id}', 'AdminsController@deleteTopics');
Route::get('/lessons','AdminsController@lessons');
Route::get('/topics','AdminsController@topics');

//Orders
Route::get('/orders','AdminsController@orders');
Route::get('/editOrders/{id}','AdminsController@editOrders');
Route::get('/deleteOrders/{id}','AdminsController@deleteOrders');
Route::get('/confrimOrder/{id}','AdminsController@confrimOrder');
Route::get('/swapOrder/{id}','AdminsController@swapOrder');
Route::post('/edit_Orders/{id}', 'AdminsController@edit_Orders');
Route::get('/addOrder', 'AdminsController@addOrder');
Route::post('/add_Order', 'AdminsController@add_Order');
Route::get('/orders/explore/{id}','AdminsController@order_explore');

//Sub Categories
Route::get('/subCategories','AdminsController@subCategories');
Route::get('/editSubCategories/{id}','AdminsController@editSubCategories');
Route::get('/deleteSubCategory/{id}','AdminsController@deleteSubCategory');
Route::post('/edit_SubCategory/{id}', 'AdminsController@edit_SubCategory');
Route::get('/addSubCategory', 'AdminsController@addSubCategory');
Route::post('/add_SubCategory', 'AdminsController@add_SubCategory');

//Active Services
Route::get('/traceServices','AdminsController@traceServices');
Route::get('/editTraceServices/{id}','AdminsController@editTraceServices');
Route::get('/deleteTraceServices/{id}','AdminsController@deleteTraceServices');
Route::post('/edit_TraceServices/{id}', 'AdminsController@edit_TraceServices');
Route::get('/addTraceServices', 'AdminsController@addTraceServices');
Route::post('/add_TraceServices', 'AdminsController@add_TraceServices');

// Generic Routes
Route::get('/form','AdminsController@form');
Route::get('/list','AdminsController@list');
Route::get('/formfile','AdminsController@formfile');
Route::get('/formfiletext','AdminsController@formfiletext');

//Payments
Route::get('/payments','AdminsController@payments');
Route::get('/approvepay/{id}/{status}','AdminsController@approvepay');
Route::get('/registrations','AdminsController@registrations');


//Notifications
Route::get('/notifications','AdminsController@notifications');
Route::get('/notification/{id}','AdminsController@notification');

//Service Requests
Route::get('/requests','AdminsController@quoterequeste');
Route::get('/markRequest/{id}/{status}/{type}','AdminsController@markRequest');

//Comments
Route::get('/comments','AdminsController@comments');
Route::get('/approve/{id}','AdminsController@approve');
Route::get('/decline/{id}','AdminsController@decline');

// Error Pages
Route::get('/403','AdminsController@error403');
Route::get('/404','AdminsController@error404');
Route::get('/405','AdminsController@error405');
Route::get('/500','AdminsController@error500');
Route::get('/503','AdminsController@error503');

//Updates
Route::get('/updates','AdminsController@updates');
Route::get('/update/{id}','AdminsController@update');
Route::get('/mark/{id}','AdminsController@mark');

// Gallery
Route::get('/gallery','AdminsController@gallery');

//Under Contruction
Route::get('/under_construction','AdminsController@under_construction');

//Wizard
Route::get('/wizard','AdminsController@wizard');

//Maps
Route::get('/maps','AdminsController@maps');
// SiteSettings
Route::get('/sitesettings','AdminsController@sitesettings');
Route::post('/savesitesettings','AdminsController@savesitesettings');
//Messages
Route::get('/allMessages', 'AdminsController@allMessages');
Route::get('/unread', 'AdminsController@unread');
Route::get('/read/{id}', 'AdminsController@read');
Route::post('/reply/{id}', 'AdminsController@reply');
Route::get('/deleteMessage/{id}', 'AdminsController@deleteMessage');

//Subscribers
Route::get('/subscribers', 'AdminsController@subscribers');
Route::get('/mailSubscribers/{email}', 'AdminsController@mailSubscribers');
Route::get('/mailSubscriber/{email}', 'AdminsController@mailSubscriber');
Route::get('/deleteSubscriber/{id}', 'AdminsController@deleteSubscriber');

//Exams System
Route::get('/exam', 'AdminsController@exams');
Route::get('/questions/{id}', 'AdminsController@questions');
Route::get('/editQuestions/{id}', 'AdminsController@editQuestions');
Route::post('/edit_Questions/{id}', 'AdminsController@edit_Questions');
Route::get('/results', 'AdminsController@results');
Route::get('/action/{id}', 'AdminsController@action');
Route::get('/addQuestion/{quiz_id}', 'AdminsController@addQuestion');
Route::post('/add_Questions', 'AdminsController@add_Questions');

// Sessions Monitoring
Route::get('/checkSessions', 'AdminsController@checkSessions');

// Delete image
Route::get('/deleteImage/{id}/{image}/{table}', 'AdminsController@deleteImage');

});


// Users Routes
Auth::routes();
Route::group(['prefix'=>'clientarea'], function(){

Route::get('/','HomeController@index');
Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/profile','ClientController@profile');
Route::get('/orders','ClientController@orders');
Route::post('/save','ClientController@save')->name('save');
Route::get('/pay/{invoice}','PaymentConroller@pay');
Route::post('/pay','ClientController@pay');
Route::get('/test/{id}', 'ClientController@test');

// SocialMedia
Route::get('/facebook', 'Auth\LoginController@facebook');
Route::get('/facebook/redirect', 'Auth\LoginController@facebookRedirect');
});

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/make-payment','PaymentsController@make_payment');
Route::post('/make-payment','PaymentsController@payment');
Route::group(['prefix' => '/webhooks'], function () {
    //PESAPAL
    Route::get('donepayment', ['as' => 'paymentsuccess', 'uses'=>'PaymentsController@paymentsuccess']);
    Route::get('paymentconfirmation', 'PaymentsController@paymentconfirmation');
});
