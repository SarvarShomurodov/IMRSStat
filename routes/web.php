<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StatisticController;

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

Route::get('/',[NewsController::class,'clientindex']);
Route::get('/yuqorimaosh',[\App\Http\Controllers\Client\MaoshController::class,'index']);
Route::get('/osish',[\App\Http\Controllers\Client\MaoshController::class,'index_prog']);
Route::get('/faqs', [\App\Http\Controllers\Client\FaqController::class, 'index'])->name('faqs.index');
Route::get('/kasbguruhlari',[\App\Http\Controllers\Client\KasbGuruhController::class,'index']);
Route::get('/items/{letter?}', [\App\Http\Controllers\Client\KasbGuruhController::class, 'getItemsByInitialLetter']);
Route::get('/guruhs/search', [\App\Http\Controllers\Client\KasbGuruhController::class, 'search'])->name('guruhs.search');
Route::get('/expected',[\App\Http\Controllers\Client\ExpectedController::class,'index'])->name('expects.index');;

Route::get('/maosh', function () {
    return view('client.yuqori_maosh');
});
Route::get('/404', function () {
    return view('client.karyera');
});
Route::get('/team', function () {
    return view('client.mehnat');
});
Route::get('/about', function () {
    return view('client.about');
});
Route::get('/pragnoz', function () {
    return view('client.prognoz');
});
Route::get('/kelajakish', function () {
    return view('client.kelajakish');
});
Route::get('/kasbprofile', function () {
    return view('client.profile');
});
Route::get('/maqolalar', function () {
    return view('client.maqolalar.index');
});
Route::get('/barometr', function () {
    return view('client.barometr.index');
});
Route::get('/bandlik',[\App\Http\Controllers\Client\BandlikController::class,'index']);

Route::prefix('statistic')->group(function (){
    Route::get('/index', function () {
        return view('client.statistika.bozorxolati');
    });
    Route::get('/andijan', function () {
        return view('client.statistika.bozorxolatiAndijon');
    });
    Route::get('/samarqand', function () {
        return view('client.statistika.bozorxolatiSamarqand');
    });
    Route::get('/buxoro', function () {
        return view('client.statistika.bozorxolatiBuxoro');
    });
    Route::get('/jizzah', function () {
        return view('client.statistika.bozorxolatiJizzax');
    });
    Route::get('/qashqadaryo', function () {
        return view('client.statistika.bozorxolatiQashqadaryo');
    });
    Route::get('/qoraqolpoqiston', function () {
        return view('client.statistika.bozorxolatiQoraqolpoq');
    });
    Route::get('/navoiy', function () {
        return view('client.statistika.bozorxolatiNavoiy');
    });
    Route::get('/namangan', function () {
        return view('client.statistika.bozorxolatiNamangan');
    });
    Route::get('/surxandaryo', function () {
        return view('client.statistika.bozorxolatiSurxondaryo');
    });
    Route::get('/sirdaryo', function () {
        return view('client.statistika.bozorxolatiSirdaryo');
    });
    Route::get('/toshkent', function () {
        return view('client.statistika.bozorxolatiToshkent');
    });
    Route::get('/fargona', function () {
        return view('client.statistika.bozorxolatiFargona');
    });
    Route::get('/xorazm', function () {
        return view('client.statistika.bozorxolatiXorazm');
    });
    Route::get('/toshkentsh', function () {
        return view('client.statistika.bozorxolatiToshkentsh');
    });
});
Route::prefix('tarmoq')->group(function (){
    Route::get('/index', function () {
        return view('client.iqtisodtarmoqi.bozorxolati');
    });
    // Route::get('/chart-data',[StatisticController::class,'chartData']);
    Route::get('/andijan', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiAndijon');
    });
    Route::get('/samarqand', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiSamarqand');
    });
    Route::get('/buxoro', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiBuxoro');
    });
    Route::get('/jizzah', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiJizzax');
    });
    Route::get('/qashqadaryo', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiQashqadaryo');
    });
    Route::get('/qoraqolpoqiston', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiQoraqolpoq');
    });
    Route::get('/navoiy', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiNavoiy');
    });
    Route::get('/namangan', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiNamangan');
    });
    Route::get('/surxandaryo', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiSurxondaryo');
    });
    Route::get('/sirdaryo', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiSirdaryo');
    });
    Route::get('/toshkent', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiToshkent');
    });
    Route::get('/fargona', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiFargona');
    });
    Route::get('/xorazm', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiXorazm');
    });
    Route::get('/toshkentsh', function () {
        return view('client.iqtisodtarmoqi.bozorxolatiToshkentsh');
    });
});
Route::get('/fetch-data', [StatisticController::class, 'getJsonData']);
Route::get('/fetch-data-andijan', [StatisticController::class, 'getJsonDataAndijan']);
Route::get('/fetch-data-buxoro', [StatisticController::class, 'getJsonDataBuxoro']);
Route::get('/fetch-data-jizzah', [StatisticController::class, 'getJsonDataJizzah']);
Route::get('/fetch-data-qashqadaryo', [StatisticController::class, 'getJsonDataQashqadaryo']);
Route::get('/fetch-data-navoiy', [StatisticController::class, 'getJsonDataNavoiy']);
Route::get('/fetch-data-namangan', [StatisticController::class, 'getJsonDataNamangan']);
Route::get('/fetch-data-samarqand', [StatisticController::class, 'getJsonDataSamarqand']);
Route::get('/fetch-data-surxandaryo', [StatisticController::class, 'getJsonDataSurxandaryo']);
Route::get('/fetch-data-sirdaryo', [StatisticController::class, 'getJsonDataSirdaryo']);
Route::get('/fetch-data-toshkent', [StatisticController::class, 'getJsonDataToshkent']);
Route::get('/fetch-data-fargona', [StatisticController::class, 'getJsonDataFargona']);
Route::get('/fetch-data-xorazm', [StatisticController::class, 'getJsonDataXorazm']);
Route::get('/fetch-data-toshkentsh', [StatisticController::class, 'getJsonDataToshkentsh']);

Route::get('/maqola', function () {
    return view('client.maqolalar.maqola');
});
Route::get('/maqola_2', function () {
    return view('client.maqolalar.maqola2');
});
Route::get('/maqola_3', function () {
    return view('client.maqolalar.maqola3');
});
Route::get('/maqola_4', function () {
    return view('client.maqolalar.maqola4');
});
Route::get('/maqola_5', function () {
    return view('client.maqolalar.maqola5');
});
Route::get('/maqola_6', function () {
    return view('client.maqolalar.maqola6');
});
Route::get('/maqola_7', function () {
    return view('client.maqolalar.maqola7');
});
Route::get('/maqola_8', function () {
    return view('client.maqolalar.maqola8');
});
Route::prefix('admin')->group(function (){
    Route::resource('news', NewsController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
