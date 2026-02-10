<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- MAIN PAGES ---
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/users', function () {
    return view('users');
})->name('users');
Route::get('/settings', function () {
    return view('settings');
})->name('settings');


// --- COMPONENT SHOWCASE ROUTES ---
Route::prefix('components')->name('components.')->group(function () {

    // 1. Actions
    Route::prefix('actions')->name('actions.')->group(function () {
        Route::get('/button', function () {
            return view('components.actions.button');
        })->name('button');
        Route::get('/dropdown', function () {
            return view('components.actions.dropdown');
        })->name('dropdown');
        Route::get('/modal', function () {
            return view('components.actions.modal');
        })->name('modal');
        Route::get('/swap', function () {
            return view('components.actions.swap');
        })->name('swap');
        Route::get('/theme-controller', function () {
            return view('components.actions.themecontroller');
        })->name('theme-controller');
        Route::get('/fab', function () {
            return view('components.actions.fab');
        })->name('fab');
        Route::get('/tooltip', function () {
            return view('components.actions.tooltip');
        })->name('tooltip');
        Route::get('/validator', function () {
            return view('components.actions.validator');
        })->name('validator');
    });

    // 2. Forms
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('/text-input', function () {
            return view('components.forms.textinput');
        })->name('text-input');
        Route::get('/textarea', function () {
            return view('components.forms.textarea');
        })->name('textarea');
        Route::get('/checkbox', function () {
            return view('components.forms.checkbox');
        })->name('checkbox');
        Route::get('/radio', function () {
            return view('components.forms.radio');
        })->name('radio');
        Route::get('/toggle', function () {
            return view('components.forms.toggle');
        })->name('toggle');
        Route::get('/select', function () {
            return view('components.forms.select');
        })->name('select');
        Route::get('/file-input', function () {
            return view('components.forms.fileinput');
        })->name('file-input');
        Route::get('/range-slider', function () {
            return view('components.forms.rangeslider');
        })->name('range-slider');
        Route::get('/rating', function () {
            return view('components.forms.rating');
        })->name('rating');
        Route::get('/label', function () {
            return view('components.forms.label');
        })->name('label');
        Route::get('/fieldset', function () {
            return view('components.forms.fieldset');
        })->name('fieldset');
        Route::get('/filter', function () {
            return view('components.forms.filter');
        })->name('filter');
    });

    // 3. Data Display
    Route::prefix('datadisplay')->name('datadisplay.')->group(function () {
        Route::get('/card', function () {
            return view('components.datadisplay.card');
        })->name('card');
        Route::get('/badge', function () {
            return view('components.datadisplay.badge');
        })->name('badge');
        Route::get('/avatar', function () {
            return view('components.datadisplay.avatar');
        })->name('avatar');
        Route::get('/table', function () {
            return view('components.datadisplay.table');
        })->name('table');
        Route::get('/stat', function () {
            return view('components.datadisplay.stat');
        })->name('stat');
        Route::get('/list', function () {
            return view('components.datadisplay.list');
        })->name('list');
        Route::get('/timeline', function () {
            return view('components.datadisplay.timeline');
        })->name('timeline');
        Route::get('/steps', function () {
            return view('components.datadisplay.steps');
        })->name('steps');
        Route::get('/stack', function () {
            return view('components.datadisplay.stack');
        })->name('stack');
        Route::get('/diff', function () {
            return view('components.datadisplay.diff');
        })->name('diff');
        Route::get('/textrotate', function () {
            return view('components.datadisplay.textrotate');
        })->name('textrotate');
    });

    // 4. Feedback
    Route::prefix('feedback')->name('feedback.')->group(function () {
        Route::get('/alert', function () {
            return view('components.feedback.alert');
        })->name('alert');
        Route::get('/progress', function () {
            return view('components.feedback.progress');
        })->name('progress');
        Route::get('/radialprogress', function () {
            return view('components.feedback.radialprogress');
        })->name('radialprogress');
        Route::get('/toast', function () {
            return view('components.feedback.toast');
        })->name('toast');
        Route::get('/skeleton', function () {
            return view('components.feedback.skeleton');
        })->name('skeleton');
        Route::get('/loading', function () {
            return view('components.feedback.loading');
        })->name('loading');
        Route::get('/status', function () {
            return view('components.feedback.status');
        })->name('status');
    });

    // 5. Navigation
    Route::prefix('navigation')->name('navigation.')->group(function () {
        Route::get('/breadcrumbs', function () {
            return view('components.navigation.breadcrumbs');
        })->name('breadcrumbs');
        Route::get('/navbar', function () {
            return view('components.navigation.navbar');
        })->name('navbar');
        Route::get('/tabs', function () {
            return view('components.navigation.tabs');
        })->name('tabs');
        Route::get('/drawersidebar', function () {
            return view('components.navigation.drawersidebar');
        })->name('drawersidebar');
        Route::get('/dock', function () {
            return view('components.navigation.dock');
        })->name('dock');
        Route::get('/pagination', function () {
            return view('components.navigation.pagination');
        })->name('pagination');
        Route::get('/menu', function () {
            return view('components.navigation.menu');
        })->name('menu');
    });

    // 6. Layout
    Route::prefix('layout')->name('layout.')->group(function () {
        Route::get('/divider', function () {
            return view('components.layout.divider');
        })->name('divider');
        Route::get('/hero', function () {
            return view('components.layout.hero');
        })->name('hero');
        Route::get('/footer', function () {
            return view('components.layout.footer');
        })->name('footer');
        Route::get('/join', function () {
            return view('components.layout.join');
        })->name('join');
        Route::get('/indicator', function () {
            return view('components.layout.indicator');
        })->name('indicator');
    });

    // 7. Content
    Route::prefix('content')->name('content.')->group(function () {
        Route::get('/accordion', function () {
            return view('components.content.accordion');
        })->name('accordion');
        Route::get('/collapse', function () {
            return view('components.content.collapse');
        })->name('collapse');
        Route::get('/carousel', function () {
            return view('components.content.carousel');
        })->name('carousel');
        Route::get('/chatbubble', function () {
            return view('components.content.chatbubble');
        })->name('chatbubble');
        Route::get('/mask', function () {
            return view('components.content.mask');
        })->name('mask');
        Route::get('/kbd', function () {
            return view('components.content.kbd');
        })->name('kbd');
    });

    // 8. Effects
    Route::prefix('effects')->name('effects.')->group(function () {
        Route::get('/hover3d', function () {
            return view('components.effects.hover3d');
        })->name('hover3d');
        Route::get('/hovergallery', function () {
            return view('components.effects.hovergallery');
        })->name('hovergallery');
        Route::get('/countdown', function () {
            return view('components.effects.countdown');
        })->name('countdown');
    });

    // 9. Mockups
    Route::prefix('mockups')->name('mockups.')->group(function () {
        Route::get('/browser', function () {
            return view('components.mockups.browser');
        })->name('browser');
        Route::get('/code', function () {
            return view('components.mockups.code');
        })->name('code');
        Route::get('/phone', function () {
            return view('components.mockups.phone');
        })->name('phone');
        Route::get('/window', function () {
            return view('components.mockups.window');
        })->name('window');
    });

    // 10. Utilities
    Route::prefix('utilities')->name('utilities.')->group(function () {
        Route::get('/link', function () {
            return view('components.utilities.link');
        })->name('link');
        Route::get('/calendar', function () {
            return view('components.utilities.calendar');
        })->name('calendar');
    });

});
