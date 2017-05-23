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

// Ecommerce
Route::get('/', 'Ecommerce\PagesController@showHomePage')->name('home');
Route::group(['middleware' => ['unauthenticated']], function () {
    Route::get('/login', 'Ecommerce\AuthController@showLoginPage')->name('ecommerceLoginPage');
    Route::post('/login', 'Ecommerce\AuthController@login')->name('ecommerceLogin');
    Route::get('/register', 'Ecommerce\AuthController@showRegisterPage')->name('ecommerceRegisterPage');
    Route::post('/register', 'Ecommerce\AuthController@register')->name('ecommerceRegister');
    Route::get('/auth/{provider}', 'Ecommerce\AuthController@redirectToProvider')->name('redirectProvider');
    Route::get('/auth/{provider}/callback', 'Ecommerce\AuthController@handleProviderCallback')->name('callbackProvider');
});
Route::get('/logout', 'Ecommerce\AuthController@logout')->name('ecommerceLogout');

//dashboard
Route::get('/user', 'Ecommerce\UserController@showDashboardPage')->name('ecommerceDashboardPage');

// manage address and account
Route::get('/user/address', 'Ecommerce\UserController@showAddressPage')->name('ecommerceAddressPage');
Route::get('/user/account', 'Ecommerce\UserController@showAccountPage')->name('ecommerceAccountPage');
Route::post('/user/address/store', 'Ecommerce\UserController@storeAddress')->name('ecommerceStoreAddress');
Route::post('/user/address/{id}/edit', 'Ecommerce\UserController@editAddress')->name('ecommerceEditAddress');
Route::post('/user/address/{id}/delete', 'Ecommerce\UserController@deleteAddress')->name('ecommerceDeleteAddress');
Route::post('/user/account/store', 'Ecommerce\UserController@storeAccount')->name('ecommerceStoreAccount');
Route::post('/user/account/{id}/edit', 'Ecommerce\UserController@editAccount')->name('ecommerceEditAccount');
Route::post('/user/address/{id}/delete}', 'Ecommerce\UserController@deleteAccount')->name('ecommerceDeleteAccount');

Route::get('/checkout', 'Ecommerce\OrderController@showOrderDetailPage')->name('ecommerceCheckoutPage');
Route::post('/checkout', 'Ecommerce\OrderController@checkout')->name('ecommerceCheckout');

// search
Route::get('/search', 'Ecommerce\FilterController@searchProduct')->name('ecommerceSearchProduct');
Route::get('/filter', 'Ecommerce\FilterController@searchFilterProduct')->name('ecommerceFilterProduct');
Route::get('/product/{nama}/{id}/detail', 'Ecommerce\PagesController@showProductDetailPage')->name('ecommerceProductDetail');

// cart
Route::get('/cart', 'Ecommerce\PagesController@showCartPage')->name('ecommerceCartPage');
Route::get('/addcart/{id}', 'Ecommerce\PagesController@addToCart')->name('addcart');

// payment
Route::get('/payment/notification/handling', 'Ecommerce\OrderController@midtransAPIWebhook')->name('midtransWebhook');
Route::get('/payment/finish', 'Ecommerce\OrderController@redirectFinishPayment')->name('midtransFinish');
Route::get('/payment/unfinish', 'Ecommerce\OrderController@redirectUnfinishPayment')->name('midtransUnfinish');
Route::get('/payment/error', 'Ecommerce\OrderController@redirectErrorPayment')->name('midtransError');

// Admin
Route::get('/admin/login', 'Admin\AuthController@showLoginPage')->name('adminLoginPage');
Route::post('/admin/login', 'Admin\AuthController@login')->name('adminLogin');
Route::post('/admin/logout', 'Admin\AuthController@logout')->name('adminLogout');
Route::get('/admin/product', 'Admin\ProductController@index')->name('indexProduct');
Route::get('/admin/order', 'Admin\OrderController@index')->name('indexOrder');
Route::get('/admin/order/packing', 'Admin\OrderController@showPackingSectionPage')->name('packingOrderSection');
Route::get('/admin/order/end', 'Admin\OrderController@showSuccessSectionPage')->name('endOrderSection');
Route::get('/admin/retur', 'Admin\ReturController@index')->name('indexRetur');

// Dump Data 4 Development
Route::get('dev/dump/product', 'DevelopmentController@dump_data_product');
Route::get('dev/dump/user', 'DevelopmentController@dump_data_user');
Route::get('dev/dump/province', 'DevelopmentController@api_province');
Route::get('dev/dump/city', 'DevelopmentController@api_city');
Route::get('dev/dump/shipper', 'DevelopmentController@dump_data_shipper');
Route::get('dev/dump/category', 'DevelopmentController@dump_data_category');
Route::get('dev/dump/attribute', 'DevelopmentController@dump_data_attribute');
Route::get('dev/dump/attribute_detail', 'DevelopmentController@dump_data_attribute_detail');
Route::get('dev/dump/category_detail', 'DevelopmentController@dump_data_category_detail');
