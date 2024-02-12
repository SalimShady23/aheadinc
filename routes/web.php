<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Donate;
use App\Livewire\DonateHealth;
use App\Livewire\DonateOralHealth;
use App\Livewire\DonateEducation;
use App\Livewire\DonateAgricultureEnvironment;
use App\Livewire\DonateWogo;
use App\Livewire\Home;
use App\Livewire\Vision;
use App\Livewire\BoardOfDirectors;
use App\Livewire\HonoraryBoard;
use App\Livewire\AheadTanzania;
use App\Livewire\Health;
use App\Livewire\WogoHealth;
use App\Livewire\OralHealth;
use App\Livewire\Education;
use App\Livewire\Agriculture;
use App\Livewire\Adventures;
use App\Livewire\Community;
use App\Livewire\ViewPost;
use App\Livewire\Contact;
use App\Livewire\Volunteer;
use App\Http\Controllers\Subscribe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');

Route::get('/about/vision', Vision::class)->name('vision');

Route::get('about/board-of-directors', BoardOfDirectors::class)->name('board-of-directors');

Route::get('about/honorary-board', HonoraryBoard::class)->name('honorary-board');

Route::get('about/ahead-tanzania', AheadTanzania::class)->name('ahead-tanzania');

Route::get('/projects/health', Health::class)->name('health');

Route::get('/projects/aheadinc-wogo-health-proposal', WogoHealth::class)->name('wogo-health');

Route::get('/projects/oral-health', OralHealth::class)->name('oral-health');

Route::get('/projects/education', Education::class)->name('education');

Route::get('/projects/agriculture', Agriculture::class)->name('agriculture');

Route::get('/adventures', Adventures::class)->name('adventures');

Route::get('/community', Community::class)->name('community');

Route::get('/view-post/{id}', ViewPost::class)->name('view-post');

Route::get('/contact', Contact::class)->name('contact');

Route::get('/volunteer', Volunteer::class)->name('volunteer');

Route::get('/donate', Donate::class)->name('donate');

Route::get('/donate-health', DonateHealth::class)->name('donate-health');

Route::get('/donate-oral-health', DonateOralHealth::class)->name('donate-oral-health');

Route::get('/donate-education', DonateEducation::class)->name('donate-education');

Route::get('/donate-agriculture-environment', DonateAgricultureEnvironment::class)->name('donate-agriculture-environment');

Route::get('/donate-wogo', DonateWogo::class)->name('donate-wogo');

Route::post('/subscribe', [Subscribe::class, 'store'])->name('subscribe');
