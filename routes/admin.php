<?php
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BoardController;
use App\Http\Controllers\Backend\StudyController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\VisionController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\MissionController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\RelivingController;
use App\Http\Controllers\Backend\TrainingController;
use App\Http\Controllers\Backend\UpcomingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PlacementController;
use App\Http\Controllers\Backend\TeammemberController;
use App\Http\Controllers\Backend\InformationController;
use App\Http\Controllers\Backend\HostelserviceController;
use App\Http\Controllers\Backend\InfastructureController;
use App\Http\Controllers\Backend\Trainingeventcontroller;

// Dashboard routes
// Route::middleware(['auth', 'IsAdmin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('business-info', 'businessSettings')->name('business-setting');
        Route::post('business-info', 'businessSettingsUpdate')->name('business-setting-update');
        Route::get('profile', 'profile')->name('profile');
        Route::post('profile', 'profileUpdate')->name('profile.update');
    });
// });
// Slider routes
Route::controller(SliderController::class)->group(function () {
    Route::group(['prefix' => 'sliders', 'as' => 'sliders.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

// Board routes
Route::controller(BoardController::class)->group(function () {
    Route::group(['prefix' => 'boardofdirectories', 'as' => 'boardofdirectories.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

// Teammember routes
Route::controller(TeammemberController::class)->group(function () {
    Route::group(['prefix' => 'teammembers', 'as' => 'teammembers.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Teammember routes
Route::controller(TrainingController::class)->group(function () {
    Route::group(['prefix' => 'training', 'as' => 'training.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

// Teammember routes
Route::controller(NewsController::class)->group(function () {
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});




// Teammember routes
Route::controller(UpcomingController::class)->group(function () {
    Route::group(['prefix' => 'upcoming', 'as' => 'upcoming.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

// Information routes
Route::controller(InformationController::class)->group(function () {
    Route::group(['prefix' => 'information', 'as' => 'information.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// placement routes
Route::controller(PlacementController::class)->group(function () {
    Route::group(['prefix' => 'placement', 'as' => 'placement.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Hotelservice routes
Route::controller(HostelserviceController::class)->group(function () {
    Route::group(['prefix' => 'hostelfacility', 'as' => 'hostelfacility.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Banner routes

Route::controller(BannerController::class)->group(function () {
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Upcomimg routes
Route::controller(UpcomingController::class)->group(function () {
    Route::group(['prefix' => 'upcoming', 'as' => 'upcoming.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


Route::controller(Trainingeventcontroller::class)->group(function () {
    Route::group(['prefix' => 'trainingevent', 'as' => 'trainingevent.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(VisionController::class)->group(function () {
    Route::group(['prefix' => 'visions', 'as' => 'visions.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(MissionController::class)->group(function () {
    Route::group(['prefix' => 'missions', 'as' => 'missions.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});
Route::controller(AboutController::class)->group(function () {
    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(RoomController::class)->group(function () {
    Route::group(['prefix' => 'rooms', 'as' => 'rooms.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(InfastructureController::class)->group(function () {
    Route::group(['prefix' => 'infa', 'as' => 'infa.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(GalleryController::class)->group(function () {
    Route::group(['prefix' => 'galleries', 'as' => 'galleries.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});
Route::controller(RelivingController::class)->group(function () {
    Route::group(['prefix' => 'relieve', 'as' => 'relieve.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(StudyController::class)->group(function () {
    Route::group(['prefix' => 'study', 'as' => 'study.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});

Route::controller(FeedbackController::class)->group(function () {
    Route::group(['prefix' => 'feedbacking', 'as' => 'feedbacking.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::post('{id}/edit', 'update')->name('update');
        Route::get('{id}/delete', 'destroy')->name('delete');
    });
});


// Contact routes
Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'index')->name('contact.index');
    Route::delete('contacts/{id}/delete', 'delete')->name('contacts.delete');
});

