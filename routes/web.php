<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\iconController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\footerController;
use App\Http\Controllers\modernController;
use App\Http\Controllers\reveuseController;
use App\Http\Controllers\forntenddController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\messgeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\increaseController;
use App\Http\Controllers\customermsegeController;
use App\Http\Controllers\CartSessionController;
use App\Http\Middleware\RedirectIfAuthenticatedAndNotLoggedIn;

Route::middleware([RedirectIfAuthenticatedAndNotLoggedIn::class])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
    
    Route::get('/pages-register', function () {
        return view('pages-register');
    });
    Route::get('/pages-login', function () {
        return view('pages-login');
    });
    Route::get('/pages-error-404', function () {
        return view('pages-error-404');
    });
    Route::get('/crud', function () {
        return view('crud');
    });
    Route::get('/aboutt', function () {
        return view('aboutt');
    });   
});

 Route::get('/login', function () {
    return view('frontend.partials.login');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/services', function () {
    return view('frontend.pages.services');
});
Route::get('/cart', function () {
    return view('frontend.pages.cart');
});
Route::get('/checkout', function () {
    return view('frontend.pages.checkout');
});

Route::get('/logoutt', function () {
    Session::forget('user');
    return redirect('login');
});

// Route::get('/myorders', function () {
//     return 1;
//     // return view('frontend.pages.myorders');
// });
Route::get('/myorders', [FrontendController::class, 'myordersNew']);

Route::view('/Register','frontend.partials.Register');

 Route::post("/login", [loginController::class, 'add']);
 Route::post("/Register", [loginController::class, 'Register']);
 Route::get('/', [FrontendController::class, 'Homepage']);
 Route::get("/shop", [FrontendController::class, 'indexpage']);
 Route::get('/about', [FrontendController::class, 'aboutPage']);
 Route::get('/services', [FrontendController::class, 'servicepage']);
 Route::get('/blog', [FrontendController::class, 'blogpage']);
 Route::get('/contact', [FrontendController::class, 'contenpage']);
 Route::get('/Customer', [ordersController::class, 'ordersall']);
 Route::get('/customer_masge', [customermsegeController::class, 'messgeall']);
 
 //Route::get('/frontend.partials.footer', [FrontendController::class, 'footer2']);
 
 Route::post('/add_to_cart', [FrontendController::class, 'addToCart'])->name('add_to_cart');
 Route::get('/cart', [FrontendController::class, 'cartlist']);
 //Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.update.quantity');

 Route::post('/cart/increase', [CartSessionController::class, 'increase'])->name('update.increase_ses');
Route::post('/cart/decrease', [CartSessionController::class, 'decrease'])->name('update.decrease_ses');
 // In routes/web.php
 Route::post('/update-increase', [CartController::class, 'increase'])->name('update.increase');
 Route::post('/update-decrease', [CartController::class, 'decrease'])->name('update.decrease');

//  Route::post('/update-increase', [increaseController::class, 'increase'])->name('update.increase');
//  Route::post('/update-decrease', [increaseController::class, 'decrease'])->name('update.decrease');

 
 Route::get('/removecart/{id}', [FrontendController::class, 'remove'])->name('remove.cart');
 
 Route::post('/checkout', [FrontendController::class, 'orderplace'])->name('checkout');
 Route::post('/contact', [messgeController::class, 'messge']);

 //Route::get('logout', [FrontendController::class, 'logout'])->name('logout');






Route::get('/ordernow', [FrontendController::class, 'ordernow']);
// Route::get('/myorders', [FrontendController::class, 'myorders']);


// register

Route::view('pages-register', 'pages-register');
Route::post('pages-register', [UsersController::class, 'add']);
Route::get('pages-register', [UsersController::class, 'addd']);
Route::get('logout', [UsersController::class, 'logout'])->name('logout');


// login

Route::view('/pages-login', 'pages-login')->name('login');
Route::post('pages-login', [UsersController::class, 'login'])->name('login.post');

//home add
Route::post('/homee', [homeController::class, 'home']);
Route::get('/homee', [homeController::class, 'home2']);
// add data
Route::post('/crud', [iconController::class, 'icon']);
Route::get('/crud', [iconController::class, 'icon2']);
// about add
Route::post('/aboutt', [AboutController::class, 'about']);
Route::get('/aboutt', [AboutController::class, 'about2']);
// team add
Route::post('/Team', [TeamController::class, 'team']);
Route::get('/Team', [TeamController::class, 'team2']);
// service add
Route::post('/service', [serviceController::class, 'service']);
Route::get('/service', [serviceController::class, 'service2']);
// blog add
Route::post('/blogg', [blogController::class, 'blog']);
Route::get('/blogg', [blogController::class, 'blog2']);

// footer add
Route::post('/footerr', [footerController::class, 'footer']);
Route::get('/footerr', [footerController::class, 'footer2']);
// mordern
Route::post('/modern', [modernController::class, 'modern']);
Route::get('/modern', [modernController::class, 'modern2']);
//reveuse add
Route::post('/reveuse', [reveuseController::class, 'reveuse']);
Route::get('/reveuse', [reveuseController::class, 'reveuse2']);
// content add
Route::post('/Contact', [ContactController::class, 'Contact']);
Route::get('/Contact', [ContactController::class, 'Contact2']);



// home update delete
Route::get('deletee/{id}', [homeController::class,'deletee'])->name('delete.home');
Route::get('editt/{id}', [homeController::class, 'editt']);
Route::put('editt-student/{id}', [homeController::class,'editstudentt']);

// edit delete

Route::get('productdelete/{u_id}', [iconController::class,'productdelete'])->name('delete.crud');
Route::get('productedit/{u_id}', [iconController::class,'productedit']);
Route::put('edit-product/{u_id}', [iconController::class,'editproduct']);

// about delte update

Route::get('aboutdelete/{id}', [AboutController::class,'aboutdelete'])->name('delete.about');
Route::get('aboutedit/{id}', [AboutController::class, 'aboutedit']);
Route::put('edit-about/{id}', [AboutController::class,'editabout']);

//team update delete
Route::get('teamdelete/{id}', [TeamController::class,'teamdelete'])->name('delete.team');
Route::get('teamedit/{id}', [TeamController::class, 'teamedit']);
Route::put('edit-team/{id}', [TeamController::class,'editteam']);

// service update delete
Route::get('servicedelete/{id}', [serviceController::class,'servicedelete'])->name('delete.service');
Route::get('serviceedit/{id}', [serviceController::class, 'serviceedit']);
Route::put('edit-service/{id}', [serviceController::class,'editservice']);

// blog update delete
Route::get('blogdelete/{id}', [blogController::class,'blogdelete'])->name('delete.blog');
Route::get('blogedit/{id}', [blogController::class, 'blogedit']);
Route::put('edit-blog/{id}', [blogController::class,'editblog']);



//footer update delete
Route::get('footerdelete/{id}', [footerController::class,'footerdelete'])->name('delete.footer');
Route::get('footeredit/{id}', [footerController::class, 'footeredit']);
Route::put('edit-footer/{id}', [footerController::class,'editfooter']);


// mordern update delete
Route::get('morderndelete/{id}', [modernController::class,'morderndelete'])->name('delete.mordern');
Route::get('mordernedit/{id}', [modernController::class, 'mordernedit']);
Route::put('edit-mordern/{id}', [modernController::class,'editmordern']);

// reveus delte update
Route::get('reveusedelete/{id}', [reveuseController::class,'reveusendelete'])->name('delete.reveuse');
Route::get('reveuseedit/{id}', [reveuseController::class, 'reveusernedit']);
Route::put('edit-reveuse/{id}', [reveuseController::class,'editreveuse']);

// ordes delte update
Route::get('orderdelete/{id}', [ordersController::class,'orderdelete'])->name('delete.order');
Route::get('orderedit/{id}', [ordersController::class, 'orderedit']);
Route::put('edit-order/{id}', [ordersController::class,'editorder']);

// contact delete update
Route::get('Contactdelete/{id}', [ContactController::class,'Contactdelete'])->name('delete.Contact');
Route::get('Contactedit/{id}', [ContactController::class, 'Contactedit']);
Route::put('edit-Contact/{id}', [ContactController::class,'editContact']);

// custome update delete
Route::get('massgedelete/{id}', [customermsegeController::class,'massgedelete'])->name('delete.massge');
Route::get('massgeedit/{id}', [customermsegeController::class, 'massgeedit']);
Route::put('edit-massge/{id}', [customermsegeController::class,'editmssage']);

