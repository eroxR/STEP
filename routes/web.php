<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\PermitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatatableController;
use App\Http\Livewire\Body;
use App\Http\Livewire\Cambiocontraseña;
use App\Http\Livewire\Contracts\ManageContracts;
use App\Http\Livewire\List\ListContracts;
use App\Http\Livewire\List\ListDrivers;
use App\Http\Livewire\List\ListFuec;
use App\Http\Livewire\List\ListLinked;
use App\Http\Livewire\List\ListVehicles;
use App\Http\Livewire\Mantenimientocontrato;
use App\Http\Livewire\Mantenimientofuec;
use App\Http\Livewire\Mantenimientousuario;
use App\Http\Livewire\Mantenimientovehiculos;
use App\Http\Livewire\Manual;
use App\Http\Livewire\Otraactividad;
use App\Http\Livewire\Permissions\ManagePermissions;
use App\Http\Livewire\Pesv;
use App\Http\Livewire\Totals;
use App\Http\Livewire\Users\ManageUsers;
use App\Http\Livewire\Vehicles\ManageVehicles;
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
    return view('auth.login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {Route::get('manual', Manual::class)->name('manual');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('vehicles/manage-vehicles', ManageVehicles::class)->name('manage-vehicles');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('contracts/manage-contracts', ManageContracts::class)->name('manage-contracts');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {Route::get('/pdfs/pdf_contracts', [ContractController::class, 'pdf'])->name('pdfs.pdf_contracts');
// });

Route::get('pdfs/pdf-contracts/{id}', [ContractController::class, 'pdf'])->name('pdfs.pdf-contracts');

Route::get('pdfs/pdf-fuec/{id}', [PermitController::class, 'pdf'])->name('pdfs.pdf-fuec');

Route::get('pdfs/permit-public/{id}', [PermitController::class, 'publicfuec'])->name('pdfs.permit-public');

Route::get('pdfs/index/{id}', [PermitController::class, 'index'])->name('pdfs.index');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('permissions/manage-permissions', ManagePermissions::class)->middleware('can:manage-permissions')->name('manage-permissions');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('users/manage-users', ManageUsers::class)->name('manage-users');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pesv', Pesv::class)->name('pesv');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/totals', Totals::class)->name('totals');
});

Route::get('datatable/users', [DatatableController::class,'user'])->name('datatable.user');

Route::get('datatable/contracts', [DatatableController::class,'contract'])->name('datatable.contract');

Route::get('datatable/permits', [DatatableController::class,'permit'])->name('datatable.permit');

Route::get('datatable/vehicles', [DatatableController::class,'vehicle'])->name('datatable.vehicle');

// pruebas


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/cambiocontraseña', Cambiocontraseña::class)->name('cambiocontraseña');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('List/ListContracts', ListContracts::class)->name('list-contracts');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('List/ListFuec', ListFuec::class)->name('list-fuec');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('List/ListDrivers', ListDrivers::class)->name('list-drivers');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('List/ListLinked', ListLinked::class)->name('list-linked');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('List/ListVehicles', ListVehicles::class)->name('list-vehicles');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/list.ListContracts', function () {return view('list.ListContracts');
    })->name('list.ListContracts');
});

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.listafuec', function () {return view('pruebas.listafuec');
//     })->name('pruebas.listafuec');
// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.listaconductores', function () {return view('pruebas.listaconductores');
//     })->name('pruebas.listaconductores');
// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.listavinculados', function () {return view('pruebas.listavinculados');
//     })->name('pruebas.listavinculados');
// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.listavehiculos', function () {return view('pruebas.listavehiculos');
//     })->name('pruebas.listavehiculos');
// });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.listapendiente', function () {return view('pruebas.listapendiente');
    })->name('pruebas.listapendiente');
});

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.mantenimientocontrato', Mantenimientocontrato::class)->name('pruebas.mantenimientocontrato');
// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.mantenimientofuec', Mantenimientofuec::class)->name('pruebas.mantenimientofuec');
// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.mantenimientousuario', Mantenimientousuario::class)->name('pruebas.mantenimientousuario');
// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.mantenimientovehiculos', Mantenimientovehiculos::class)->name('pruebas.mantenimientovehiculos');
// });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.otraactividad', Otraactividad::class)->name('pruebas.otraactividad');
});

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/pruebas.listacontratos', function () {return view('pruebas.listacontratos');
//     })->name('pruebas.listacontratos');
// });