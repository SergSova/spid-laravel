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


use Illuminate\Support\Facades\Route;

Route::get( '/', 'Site\SiteController@index' );

Route::group(
	[],
	function () {
		Route::get( '/aids', 'Site\SiteController@aids' );
		Route::get( '/slide-bubles', 'Site\SiteController@slideBubles' );
		Route::get( '/slide-rocket', 'Site\SiteController@slideRocket' );
		Route::get( '/with-who', 'Site\SiteController@withWho' );
		Route::get( '/bandit', 'Site\SiteController@bandit' );
		Route::get( '/condoms-white', 'Site\SiteController@condomsWhite' );
		Route::get( '/consultants', 'Site\SiteController@consultants' );
		Route::get( '/aids-test', 'Site\SiteController@testPage' );
		Route::get( '/faq', 'Site\SiteController@faq' );
	}
);

Route::group(
	[ 'prefix' => 'blog' ],
	function () {
		Route::get( '/', 'Site\BlogController@index' )->name( 'blog' );
	}
);

Route::group(
	[ 'prefix' => 'admin' ],
	function () {
		Route::get( '/', 'Admin\IndexController@index' )->name( 'admin' );
		Route::get( '/static', 'Admin\StaticPageController@index' )->name(
			'staticPage'
		);
		Route::get(
			'/static/edit/{staticPage}/{name}',
			'Admin\StaticPageController@edit'
		)->name( 'staticPageView' );
		Route::post(
			'/static/edit/{staticPage}/{name}',
			'Admin\StaticPageController@edit'
		)->name( 'staticPageEdit' )->where( [ 'staticPage' => '[0-9]+' ] );


		Route::group( [ 'prefix' => 'blog' ], function () {
			Route::get( '/', 'Admin\BlogController@index' )->name( 'adminBlog' );

			Route::get( '/blog/edit-static', 'Admin\BlogController@editStatic' )->name( 'staticBlogView' );
			Route::post( '/blog/edit-static', 'Admin\BlogController@editStatic' )->name( 'editStaticBlog' );

			Route::get('/blog/edit/{post}', 'Admin\BlogController@editPost')->name('postPageView');
			Route::post('/blog/edit/{post}', 'Admin\BlogController@editPost')->name('postPageEdit');
		} );
	}
);

Route::get( 'home', 'Site\SiteController@index' );
Route::get( 'auth/register', 'Auth\RegisterController@register' )->name( 'register' );
Route::get( 'auth/login', 'Auth\LoginController@login' )->name( 'login' );
Route::get( 'logout', 'Auth\LoginController@logout' )->name( 'logout' );
// Social Auth
Route::get( 'auth/social', 'Auth\SocialAuthController@show' )->name( 'social.login' );
Route::get( 'oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider' )->name( 'social.oauth' );
Route::get( 'oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback' )->name( 'social.callback' );

