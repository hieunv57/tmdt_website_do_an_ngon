<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'User\HomeController@index');
Route::get('dang-ky', 'Auth\AuthController@getRegister');
Route::post('dang-ky', 'Auth\AuthController@postRegister');
Route::get('dang-nhap', 'Auth\AuthController@getLogin');
Route::post('dang-nhap', 'Auth\AuthController@postLogin');
//Đăng nhập bằng facebook

Route::get('home', array('as' => 'home', 'uses' => function(){
  return view('home');
}));
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
//google
Route::get('login/google', 'Auth\AuthController@google');
Route::get('google/callback', 'Auth\AuthController@callbackgoogle');

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

//route danh muc dia diem
Route::get('danh-muc/{link}', 'User\HomeController@category');

//route show dia diem
Route::get('dia-diem/{link}', 'User\HomeController@show');

Route::get('mon-ngon/{link}', 'User\HomeController@showfood');

Route::get('danh-sach/mon-ngon-moi-nhat', 'User\HomeController@newfood');

//
Route::get('lay-lai-mat-khau', 'User\UserController@lostpassword');

//Route cac trang
Route::get('danh-sach/dia-diem-duoc-quan-tam', 'User\HomeController@placemostview');



//route tim kiem
Route::post('tag','User\HomeController@tag');
Route::get('tim-kiem','User\HomeController@search');

Route::group(array('middleware'=> 'auth'),function(){
		Route::get('dang-xuat', 'Auth\AuthController@getLogout');
		Route::get('dang-dia-diem', 'User\PlaceController@create');
		Route::post('dang-dia-diem','User\PlaceController@store');
		Route::get('thong-tin-ca-nhan','User\UserController@show');
		Route::patch('thong-tin-ca-nhan/cap-nhat','User\UserController@update');
		Route::get('doi-mat-khau','User\UserController@editPassword');
		Route::patch('doi-mat-khau','User\UserController@changePassword');
		// Route::get('thong-tin-ca-nhan/kich-hoat','User\UsersController@sendMail');
		// Route::get('yeu-thich/{id}','User\ProductController@addWishList');
		// Route::get('yeu-thich','User\ProductController@wishList');
		// Route::get('xoa-yeu-thich/{id}','User\ProductController@delWishList');
		//Route quản lý địa điểm của người dùng
		Route::get('nguoi-dung/dia-diem-da-dang', 'User\PlaceController@postedplace');\
		Route::get('nguoi-dung/xem-dia-diem/{id}', 'User\PlaceController@show');
		Route::get('nguoi-dung/xoa-dia-diem/{id}', 'User\PlaceController@destroy');

		//Route quan ly dia diem cua người dùng
		Route::get('thong-tin-nguoi-dung/{id}', 'User\UserController@showotheruser');
		//them địa điểm vào yêu thích
		
		Route::get('them-vao-yeu-thich/{id}','User\PlaceController@addWishListPlace');
		Route::get('dia-diem-yeu-thich','User\PlaceController@wishListPlace');

		Route::get('dang-mon-ngon', 'User\FoodController@create');
		Route::post('dang-mon-ngon', 'User\FoodController@store');

		//Binh luan
		Route::post('dia-diem/binh-luan/{link}', 'User\PlaceController@comment');

		//xem thong tin nguoi dung khac

	});
Route::group(array('before' => 'admin', 'middleware'=> 'auth'),function(){

		Route::get('admin', 'Admin\HomeController@index');
	// Route Quản lý thành viên
		Route::get('admin/thanh-vien/danh-sach', 'Admin\UserController@index');
		Route::get('admin/thanh-vien/xoa/{id}/', 'Admin\UserController@destroy');
		Route::get('admin/thanh-vien/them-moi', 'Admin\UserController@create');
		Route::post('admin/thanh-vien/them-moi', 'Admin\UserController@store');
		Route::get('admin/thanh-vien/xem/{id}', 'Admin\UserController@show');
		Route::patch('admin/thanh-vien/cap-nhat/{id}', 'Admin\UserController@update');
		Route::post('admin/thanh-vien/tim-kiem','Admin\UserController@search');
		Route::get('admin/thanh-vien/ket-qua-tim-kiem','Admin\UserController@searchResult');
		Route::get('admin/thanh-vien/them-moi-tu-file', 'Admin\UserController@createfromfile');
		Route::post('admin/thanh-vien/them-moi-tu-file', 'Admin\UserController@storefromfile');
		//cate
		
		Route::get('admin/danh-muc/danh-sach', 'Admin\CategoryController@index');
		Route::get('admin/danh-muc/danh-sach-2', 'Admin\CategoryController@index2');
		Route::get('admin/danh-muc/them-moi', 'Admin\CategoryController@create');
		Route::post('admin/danh-muc/them-moi', 'Admin\CategoryController@store');
		Route::get('admin/danh-muc/xoa/{id}', 'Admin\CategoryController@destroy');
		Route::get('admin/danh-muc/cap-nhat/{id}', 'Admin\CategoryController@edit');
		Route::patch('admin/danh-muc/cap-nhat/{id}', 'Admin\CategoryController@update');
		//place
		Route::group(array('before' => 'admin', 'middleware'=> 'auth'),function(){
			Route::get('admin/dia-diem/danh-sach', 'Admin\PlaceController@index');
			Route::get('admin/dia-diem/them-moi', 'Admin\PlaceController@create');
			Route::post('admin/dia-diem/them-moi', 'Admin\PlaceController@store');

			Route::get('admin/dia-diem/them-moi-tu-file', 'Admin\PlaceController@insert');
			Route::post('admin/dia-diem/them-moi-tu-file', 'Admin\PlaceController@insertnew');
			
			Route::get('admin/dia-diem/xem/{id}', 'Admin\PlaceController@show');
			Route::get('admin/dia-diem/xoa/{id}', 'Admin\PlaceController@destroy');
			// Route::get('admin/dia-diem/cap-nhat/{id}', 'Admin\PlaceController@show');
			Route::patch('admin/dia-diem/cap-nhat/{id}', 'Admin\PlaceController@update');
			Route::post('admin/danh-muc/dia-diem', 'Admin\PlaceController@getList');
			Route::get('admin/dia-diem/theo-danh-muc', 'Admin\PlaceController@showList');
			Route::post('admin/dia-diem/tim-kiem','Admin\PlaceController@search');
			Route::get('admin/dia-diem/ket-qua-tim-kiem','Admin\PlaceController@searchResult');
		});
		//foods
		Route::group(array('before' => 'admin', 'middleware'=> 'auth'),function(){
			Route::get('admin/mon-an/danh-sach', 'Admin\FoodController@index');
			Route::get('admin/mon-an/them-moi', 'Admin\FoodController@create');
			Route::post('admin/mon-an/them-moi', 'Admin\FoodController@store');

			Route::get('admin/mon-an/them-moi-tu-file', 'Admin\FoodController@insert');
			Route::post('admin/mon-an/them-moi-tu-file', 'Admin\FoodController@insertnew');
			
			Route::get('admin/mon-an/xem/{id}', 'Admin\FoodController@show');
			Route::get('admin/mon-an/xoa/{id}', 'Admin\FoodController@destroy');
			Route::get('admin/mon-an/cap-nhat/{id}', 'Admin\FoodController@edit');
			Route::patch('admin/mon-an/cap-nhat/{id}', 'Admin\FoodController@update');
			Route::post('admin/danh-muc/dia-diem', 'Admin\FoodController@getList');
			Route::get('admin/mon-an/theo-danh-muc', 'Admin\FoodController@showList');
			Route::post('admin/mon-an/tim-kiem','Admin\FoodController@search');
			Route::get('admin/mon-an/ket-qua-tim-kiem','Admin\FoodController@searchResult');
		});
		//news
		Route::get('admin/tin-tuc/danh-sach', 'Admin\NewsController@index');
		Route::get('admin/tin-tuc/them-moi', 'Admin\NewsController@create');
		Route::post('admin/tin-tuc/them-moi', 'Admin\NewsController@store');
	});

