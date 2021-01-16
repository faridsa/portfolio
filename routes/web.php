<?php

Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/fotos/{category}/{serie}', 'Front\FotosController@showSerie')
->name('fotos.serie');
Route::get('/spots', 'Front\SpotsController@index')
->name('spots');
/*Route::get(
    '/spots', function () {
        return view("front.vuespots");
    }
)->name('spots');*/
Route::get('/fadispots', 'Front\SpotsController@index');
Route::get('/blog', 'Front\BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'Front\BlogController@show')->name('blog.show');
Route::get('/escuela', 'Front\EscuelaController@index')->name('escuela');
Route::resource('/contacto', 'Front\ContactFormsController')
->only(['create', 'store']);
Route::get('/bio', 'Front\BlogController@bio')->name('bio');

Auth::routes(['register' => false]);

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => ['auth']
    ],
    function () {
        Route::get('/', 'HomeController@index')
        ->name('home');
        Route::delete('users/destroy', 'UsersController@massDestroy')
        ->name('users.massDestroy');
        Route::resource('users', 'UsersController');
        Route::resource('contact-forms', 'ContactFormsController');
        Route::delete('contact-forms/destroy', 'ContactFormsController@massDestroy')
        ->name('contact-forms.massDestroy');
        Route::resource('posts', 'PostController');
    }
);


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
