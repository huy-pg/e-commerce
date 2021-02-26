<?php



/* FrontEnd Location */
Route::get('/','IndexController@index');
Route::get('/list-products','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detialpro')->name('product-detail');
////// get Attribute ////////////
Route::get('/get-product-attr','IndexController@getAttrs');

Route::group(['prefix'=>'cart'],function(){
    Route::get('add/{id}','CartController@add')->name('cart.add');
    Route::get('remove/{id}','CartController@remove')->name('cart.remove');
    Route::get('update/{id}','CartController@update')->name('cart.update');
    Route::get('clear/{id}','CartController@clear')->name('cart.clear');
    Route::get('view','CartController@cart_view')->name('cart.view');
    Route::get('checkout','CartController@checkout')->name('cart.checkout');
    Route::post('checkout','CartController@post_checkout')->name('cart.checkout');

});




Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => true]);
// Admin

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
// Categories

Route::resource('categories', 'CategoriesController');
// products

Route::resource('products', 'ProductsController');
Route::get('delete-product/{id}','ProductsController@destroy');
Route::get('delete-image/{id}','ProductsController@deleteImage');

   /// Product Attribute
Route::resource('/product_attr','ProductAtrrController');
Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr')->name('delete-atrr');
/// Product Images Gallery
Route::resource('/image-gallery','ImagesController');
Route::get('delete-image-gallery/{id}','ImagesController@destroy')->name('delete-image');
/// Banners
Route::resource('banners', 'BannersController');
/// Brands
Route::resource('brands', 'BrandsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});

