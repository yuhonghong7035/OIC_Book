<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'TopController@index');
Route::get('/logout',function(){
  Auth::logout();
  return redirect('/');
});

//
//メイン画面
//

    //新規登録
    Route::resource('/signup','SignupController');
    Route::get('/signup_confirm','ConfirmController@signup');

    //商品
    Route::get('/product', 'ProductsController@index');
    Route::get('/detail','DetailController@index');

    //レビュー
    Route::post('/addreview','ReviewController@add');
    Route::get('/getreview','ReviewController@index');

    //商品一覧
    Route::get('/search','SearchController@index');

    //sessionカート
    Route::get('/sessioncart', 'SessioncartController@index');
    Route::post('/addsessioncart','SessioncartController@add');
    Route::post('/delsessioncart','SessioncartController@delete');
    Route::get('/sessionnumchange','SessioncartController@numChange');

    //authカート
    Route::get('/authcart', 'AuthcartController@index');
    Route::post('/addauthcart','AuthcartController@add');
    Route::post('/delauthcart','AuthcartController@delete');
    Route::get('/authnumchange','AuthcartController@numChange');

    //マイページ
    Route::resource('/mypage','MypageController');
    Route::get('buyhistory','BuyhistoryController@index');
    Route::get('buyhistory_point','BuyhistoryController@point');

    //購入
    Route::get('/buy','BuyController@index');
    Route::post('/buy_confirm','ConfirmController@buy');
    Route::get('/buy_confirm','ConfirmController@point');
    Route::post('/buy_done','BuydoneController@index');
    //退会処理
    Route::get('/recede','RecedeController@index');
    Route::get('/recede_confirm','ConfirmController@recode');

//
//管理者ページ
//

    //管理者トップページ
    Route::get('/admin','AdmintopController@index');
    Route::get('/api/admin/genresales','AdmintopController@genre_sales');
    Route::get('/api/admin/monthlysales','AdmintopController@monthly_sales');

    //管理者商品情報
    Route::resource('/admin/stock','AdminstockController');
    Route::post('/admin/stock/{id}/update','AdminstockController@update');
    Route::post('/admin/stock/{id}/delete','AdminstockController@destroy');

    //管理者従業員情報
    Route::resource('/admin/employee','AdminemployeeController');
    Route::post('/admin/employee/{id}/update','AdminemployeeController@update');
    Route::post('/admin/employee/{id}/delete','AdminemployeeController@destroy');
    //ユーザ情報
    Route::resource('/admin/user','AdminuserController');
    Route::post('/admin/user/{id}/update','AdminuserController@update');
    Route::post('/admin/user/{id}/delete','AdminuserController@destroy');

    //仕入先情報
    Route::get('/admin/1', 'AdminvendorController@1');
    Route::resource('/admin/vendor','AdminvendorController');
    Route::post('/admin/vendor/{id}/update','AdminvendorController@update');
    Route::post('/admin/vendor/{id}/delete','AdminvendorController@destroy');

    //ユーザ注文情報
    Route::get('/admin/uoderdetail','AdminuoderdetailController@index');

    //店舗発注情報
    Route::resource('/admin/order','AdminorderController');

    //発注メールフォーム
    Route::get('/admin/mailform','AdminmailController@index');
    Route::post('/admin/mailformdetail','AdminmailController@detail');
    Route::post('/admin/mailform','AdminmailController@send');

    //店舗入荷情報
    Route::get('/admin/arrive/product','AdminarriveController@product_search');
    Route::resource('/admin/arrive','AdminarriveController');

    //入金確認情報
    Route::get('/admin/payment','AdminpaymentController@index');
    Route::get('/admin/payment_form','AdminpaymentController@submit');
    Route::get('/admin/pay_form','AdminpaymentController@cancel');

    Route::get('/admin/login', 'AdminauthController@index');
    Route::post('/admin/login', 'AdminauthController@check');
    Route::get('/admin/logout', 'AdminauthController@logout');

    Route::get('/admin/phone', 'AdminPhoneController@index');
    Route::get('admin/readqr', 'AdminPhoneController@readqr');
    Route::get('/admin/createqr', 'AdminPhoneController@selectqr');
    Route::post('/admin/createqr', 'AdminPhoneController@createqr');
    Route::get('/admin/phone/conf', 'AdminPhoneController@conf');
    Route::post('/admin/phone/done', 'AdminPhoneController@done');
