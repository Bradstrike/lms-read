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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/giris-yap', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/giris-yap', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/guvenli-cikis', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth', 'prefix' => 'uygulama', 'as' => 'app.'], function() {

	Route::get('/', App\Http\Livewire\App\Dashboard::class)->name('dashboard');

	Route::group(['prefix' => 'yonetim', 'as' => 'manage.'], function() {
		Route::group(['prefix' => 'kurumlar', 'as' => 'branches.'], function() {
			Route::get('/', App\Http\Livewire\App\Manage\Branches\Index::class)->name('index');
			Route::get('olustur', App\Http\Livewire\App\Manage\Branches\Create::class)->name('create');
			Route::get('goruntule/{id}', App\Http\Livewire\App\Manage\Branches\Show::class)->name('show');
		});

		Route::group(['prefix' => 'yetkilendirme', 'as' => 'authorization.'], function() {
			Route::get('roller', App\Http\Livewire\App\Manage\Authorization\Roles\Index::class)->name('roles.index');
			Route::get('yetkiler', App\Http\Livewire\App\Manage\Authorization\Permissions\Index::class)->name('permissions.index');
		});

		Route::group(['prefix' => 'kullanicilar', 'as' => 'users.'], function() {
			Route::get('/', App\Http\Livewire\App\Manage\Users\Index::class)->name('index');
			Route::get('egitmenler', App\Http\Livewire\App\Manage\Users\Index::class)->name('teachers');
			Route::get('goruntule/{id}/profil', App\Http\Livewire\App\Manage\Users\Show::class)->name('show');
			Route::get('goruntule/{id}/aktiviteler', App\Http\Livewire\App\Manage\Users\Activity::class)->name('activity');
			Route::get('goruntule/{id}/ayarlar', App\Http\Livewire\App\Manage\Users\Settings::class)->name('settings');
		});

		Route::group(['prefix' => 'egitim', 'as' => 'education.'], function() {
			Route::get('egitimler', App\Http\Livewire\App\Manage\Education\Lessons::class)->name('index');
			Route::get('egitimler/detay/{id}', App\Http\Livewire\App\Manage\Education\Lesson::class)->name('show');
		});

		Route::group(['prefix' => 'siparisler', 'as' => 'orders.'], function() {
			Route::get('/', App\Http\Livewire\App\Manage\Orders\Index::class)->name('index');
		});

	});

	Route::group(['prefix' => 'uyeler', 'as' => 'members.'], function() {
		Route::get('', App\Http\Livewire\App\Manage\Users\Index::class)->name('index');
	});

	Route::get('egitimlerim', App\Http\Livewire\App\Education\Lessons::class)->name('lessons');
	//buraya yeni route gelecek
	Route::get('startedu', App\Http\Livewire\App\Education\Startedu::class)->name('basla');
	
	
	Route::group(['prefix' => 'tanimlamalar', 'as' => 'definitions.'], function() {
		Route::group(['prefix' => 'entegrasyon', 'as' => 'integrations.'], function() {
			Route::get('sms', App\Http\Livewire\App\Definitions\Integrations\Sms::class)->name('sms');
			Route::get('pos', App\Http\Livewire\App\Definitions\Integrations\Pos::class)->name('pos');
			Route::get('email', App\Http\Livewire\App\Definitions\Integrations\Email::class)->name('email');
			
		});
		Route::group(['prefix' => 'egitim', 'as' => 'education.'], function() {
			Route::get('json', App\Http\Livewire\App\Definitions\Education\Json::class)->name('json');
			Route::get('egzersizler', App\Http\Livewire\App\Definitions\Education\Exercises::class)->name('exercises');
			
		});
	});

	Route::group(['prefix' => 'fiyatlandirma', 'as' => 'pricing.'], function() {
		Route::get('planlar', App\Http\Livewire\App\Pricing\Plan::class)->name('plans');
		Route::get('planlar/{id}', App\Http\Livewire\App\Pricing\Plan::class)->name('plan');
		Route::get('odeme-yontemleri', App\Http\Livewire\App\Pricing\PaymentMethods::class)->name('payment-methods');
		Route::get('kredi-karti', App\Http\Livewire\App\Pricing\Ccpayment::class)->name('credit-card');
		Route::get('banka-havale', App\Http\Livewire\App\Pricing\BankTransfer::class)->name('bank-transfer');
		Route::get('egitim-satin-al', App\Http\Livewire\App\Education\BuyLesson::class)->name('buy'); //satın alınabilir eğitimlerin listelendiği sayfa
		Route::any('sonuc', App\Http\Livewire\App\Pricing\Result::class)->name('result'); 
		Route::get('goruntule', App\Http\Livewire\App\Pricing\Show::class)->name('show'); 
		Route::get('siparislerim', App\Http\Livewire\App\Pricing\Orders::class)->name('orders'); 
	});

	Route::group(['prefix' => 'egzersizler', 'as' => 'exercises.'], function() {
		Route::get('egzersiz/{id}', App\Http\Livewire\App\Education\Exercises::class)->name('show');
	});

	Route::get('unite', App\Http\Livewire\App\Education\Lecture::class)->name('unite');

	Route::get('egzersiz', App\Http\Livewire\App\Education\Exerciselist::class)->name('exercise');

	Route::get('free-mode', App\Http\Livewire\App\Education\Freemode::class)->name('free-mode');

	Route::get('iletisim', App\Http\Livewire\App\Contact::class)->name('contact');
	
	

	// Route::group(['prefix' => 'games', 'as' => 'games.'], function() {
	// 	Route::get('egzersizler', App\Http\Livewire\App\Games\Exercises::class)->name('exercises');
	// 	Route::get('egzersizler/{id}', App\Http\Livewire\App\Games\Exercise::class)->name('exercise');
	// });


	Route::group(['prefix' => 'okuma', 'as' => 'reading.'], function() {
		Route::get('kitap', App\Http\Livewire\App\Education\Book::class)->name('booklist');
		Route::get('kitap/{id}', App\Http\Livewire\App\Education\Readpage::class)->name('readpage');
	});

});