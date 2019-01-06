<?php

Route::get('/homeindex',[
   'uses'=>'Controller@index',
    'as'=>'home'
]);
Route::get('/', function () {
    return view('frontEnd.home.home');
});


// THIS IS USER  PART

Route::get('/registration/customer',[
    'uses'=>'user@registration',
    'as'=>'userRegistration'
]);

//Route::resource('customer', 'CustomerController');

//Admin pannel

Route::post('/registration/admin',[
    'uses'=>'admin@forminsert',
    'as'=>'adminform'
]);

Route::get('adminlogin',[
    'uses'=>'admin@loginview',
    'as'=>'adminloginview'

]);

Route::post('/admin/login',[
    'uses'=>'admin@adminlogin',
    'as'=>'adminlogin'
]);

Route::get('/dashbord',[
    'uses'=>'admin@dashbord',
    'as'=>'dashbord'
]);

//Route::get('/adminpharmacylist',[
//    'uses'=>'admin@',
//    'as'=>'adminpharmacylist'
//]);



Route::get('/area',[
    'uses'=>'addController@addarea',
    'as'=>'addarea'
]);


Route::post('/area_list',[
    'uses'=>'addController@areaadd',
    'as'=>'areaadd'
]);

Route::get('/area/list',[
    'uses'=>'addController@arealist',
    'as'=>'arealist'
]);

//Admin

Route::get('/registerlist',[
    'uses'=>'admin@registerlist',
    'as'=>'registerlist'
]);

Route::post('/updateregister',[
    'uses'=>'admin@updateregister',
    'as'=>'updateregister'
]);


Route::get('/individual/{id}',[
    'uses'=>'admin@individual',
    'as'=>'individual'
]);




Route::get('/pharmacy view',[
    'uses'=>'addController@pharmacyadd',
    'as'=>'pharmacyview'
]);

Route::post('/pharmacy_List',[
    'uses'=>'addController@pharmacylistadd',
    'as'=>'pharmacyadd'
]);


//frontend

Route::get('/listpharmacy',[
    'uses'=>'Controller@listpharmacy',
    'as'=>'listpharmacy'
]);


Route::get('/individualpharmacy/{area}',[
    'uses'=>'user@individualpharmacy',
    'as'=>'individualpharmacy'
]);







Route::get('/adminpannel',[
    'uses'=>'admin@adminpannel'

]);

//Route::post('adminlogin', 'admin@adminlogin')->name('adminlogin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
