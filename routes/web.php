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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get(
    'setlocale/{lang}',
    function ($lang) {

        $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
        $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

        //разбиваем на массив по разделителю
        $segments = explode('/', $parse_url);

        //Если URL (где нажали на переключение языка) содержал корректную метку языка
        if (in_array($segments[1], App\Http\Middleware\Locale::$languages)) {

            unset($segments[1]); //удаляем метку
        }

        //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
        if ($lang != App\Http\Middleware\Locale::$mainLanguage) {
            array_splice($segments, 1, 0, $lang);
        }

        //формируем полный URL
        $url = Request::root().implode("/", $segments);

        //если были еще GET-параметры - добавляем их
        if (parse_url($referer, PHP_URL_QUERY)) {
            $url = $url.'?'.parse_url($referer, PHP_URL_QUERY);
        }

        return redirect($url); //Перенаправляем назад на ту же страницу

    }
)->name('setlocale');

//Локализация
Route::group(
    ['prefix' => App\Http\Middleware\Locale::getLocale()],
    function () {

        Route::get('/', 'Site\SiteController@index')->name('home');
        Route::get('/aids', 'Site\SiteController@aids');
        Route::get('/slide-bubles', 'Site\SiteController@slideBubles');
        Route::get('/slide-rocket', 'Site\SiteController@slideRocket');
        Route::get('/with-who', 'Site\SiteController@withWho');
        Route::get('/bandit', 'Site\SiteController@bandit');
        Route::get('/condoms-white', 'Site\SiteController@condomsWhite');
        Route::get('/consultants', 'Site\SiteController@consultants');
        Route::get('/aids-test', 'Site\SiteController@testPage');
        Route::get('/faq', 'Site\SiteController@faq');
        Route::get('/map', 'Site\SiteController@map');
        Route::get('/about', 'Site\SiteController@about');

        Auth::routes();

        //BLOG
        Route::group(
            ['prefix' => 'blog'],
            function () {
                Route::get('/', 'Site\BlogController@index')->name('blog');
                Route::get('/{category}', 'Site\BlogController@index')->name('blog.fitred');
                Route::get('/{category}/{article}', 'Site\BlogController@view')->name('blogArticle');
            }
        );
    }
);

//Admin
Route::group(
    ['prefix' => 'admin', 'middleware' => 'admin'],
    function () {

        Route::get('/', 'Admin\IndexController@index')->name('admin');
        Route::get('/static', 'Admin\StaticPageController@index')->name(
            'staticPage'
        );
        Route::get(
            '/static/edit/{staticPage}/{name}',
            'Admin\StaticPageController@edit'
        )->name('staticPageView');
        Route::post(
            '/static/edit/{staticPage}/{name}',
            'Admin\StaticPageController@edit'
        )->name('staticPageEdit')->where(['staticPage' => '[0-9]+']);

        Route::resource('/blog', 'Admin\BlogController');
        Route::resource('/blog-category', 'Admin\BlogCategoryController');
        Route::get('/blog/pub/{post}', 'Admin\BlogController@pub')->name('blog.pub');
        Route::delete('/blog/clear/{blog?}', 'Admin\BlogController@removeAll')->name('blog.clear');

    }
);

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

