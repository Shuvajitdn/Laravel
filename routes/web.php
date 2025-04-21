<?php

use App\Http\Controllers\Firstcontroller;
use App\Http\Controllers\Produtcontroller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RequestformController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CookieformController;
use App\Http\Controllers\CookieformController1;
use App\Http\Controllers\loginController;
use App\Http\Controllers\validationController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;





use App\Http\Middleware\TestMiddleware;
use App\Http\Middleware\TestMiddleware2;


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetTemperatureController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/myfirst', 'myfirst');

// Route::get('about/{name}', function ($name) {
//     echo $name;
//     return view('about',['name' => $name]);
// });

// Route::get('/about', function() {

//     return view('about'); 
// });

// Route::redirect("/myfirst","/");
// Route::redirect("/myfirst","/welcome");


// Route::get('login/{num1}/{mum2}', function ($num1,$num2) 
// {
//     return "Sum of two numbers: ". $num1+$num2;
// }) 
//     ->where('num1','[0-9]+');

// Route::get('myfirst/{name}', function ($name) {
//         return view('myfirst',['name' => $name]);
//     });


// Route::get('myfirst', function () {
//     $name = 'Shuvajit';
//     return view('myfirst', ['name' => $name]);
// });



// Route::get('myfirst/{name}', function ($name) {
//     return view('myfirst', compact ('name'));
// });


// Route::get('myfirst/{name}', function ($name) {
//     return view('myfirst')->with('name', $name);
// });

// Route::get('/contact', function () {
//     return view('contact');
//     });


// Route::get('/', function () {
//     return ('Welcome to Laravel');
//     });


// Route::get('/contact', function () {
//     return ['name' => 'Laptop', 'price' => 1000000];
//     });


// Route::get('home/{name}', function ($name) {
//     return view('home', ['name' => $name]);
// });

// Route::get('home/{name?}', function ($name = 'Shuvajit') {
//     return view('home', ['name' => $name]);
// });


// Route::get('page/home', function () {
//     return "<h1>Home Page</h1>";
// });


//sub routing
// Route::get('page/home', function () {
//     return view('page.header');
// });


// Route::get("home/{id}", function ($id) {
//     return "ID: ".$id;
// });


// Route::get("home/{id?}", function ($id=null) {
//         return "ID: ".$id;
//     });


//Print table of 2
// Route::get('/table', function () 

// {
//     echo "the table of 2 is: ". "<br>";
//     for ($i=1; $i<=10; $i++)

//         echo "2 * $i = ". 2*$i . "<br>";
// });


//create a dynamic route with parameter
// Route::get('/table/{num}', function ($num) {
//     echo "the table of a number is: ". "<br>";
//     for ($i=1; $i<=10; $i++)

//         echo $num. " * $i = ". $num*$i . "<br>";
// });


//make a parameter optional
// Route::get('/table/{num?}', function ($num=2) {
//         echo "the table of a number is: ". "<br>";
//         for ($i=1; $i<=10; $i++)

//             echo $num. " * $i = ". $num*$i . "<br>";
//     });



// Route::get('/table/{num?}', function ($num=2) {
//     echo "the table of a number is: ". "<br>";
//     for ($i=1; $i<=10; $i++)

//         echo $num. " * $i = ". $num*$i . "<br>";
// })
// ->where('$num','[0-9]+');


//name your routefor specific route
// Route::get('/table/{num?}', function ($num=2) {
//     echo "the table of a number is: ". "<br>";
//     for ($i=1; $i<=10; $i++)

//         echo $num. " * $i = ". $num*$i . "<br>";
// }) ->where('$num','[0-9]+')->name('table');


//using a basic call to a view
// Route::get('/table/{num}', function ($num=2) {
//     return view('table', ['num' => $num]);
// }) ->where('$num','[0-9]+')->name('table');


// Route::get('home', function () {
//     return "<script>alert('Hello world')</script>";
// });


//adding headers via routes

// Route::get('/', function () {
//     return response('Welcome to Laravel')->header('Content-Type', 'text/html')
//     ->header("X-header-one", "Header Value")
//     ->header("X-header-two", "Header Value");
// });


 /*Controller*/

// Route::get('first', [Firstcontroller::class, 'index']);
// Route::get('first1', [Firstcontroller::class, 'index1']);
// Route::get('first2/{name}', [Firstcontroller::class,'index2']);
// Route::get('first3/{name}/{score}', [Firstcontroller::class,'index3']);

// Route::get('products/{name?}', [Produtcontroller::class,'products']);


// Redirection using controller

// Route::get('testController/{name?}', [TestController::class, 'index'])->name('tc');
// Route::get('redirectcontroller', function () {
//     return redirect('testController');
// });

// Route::get('redirectcontroller1/{name?}', function () {
//     return redirect()->route('tc');
// });

// Route::get('redirectcontroller2/{name?}', function ($name) {
//     return redirect()->action([TestController::class, 'index'],['name' => $name]);
// });


/*Route Parameter constraints*/
// Route::get('users/{id}', function ($id) {
//     return "Welcome User,$id";
// })->where('id','[0-9]+');

// Route::get('users1/{name}', function ($name) {
//     return "Welcome User,$name";
// })->where('name','[a-zA-Z \s]+');

// Route::get('users2/{name}/{id}', function ( $name, $id) {
//     return "Welcome User- $name($id)";
// })->where('id','[0-9]+')->where('name','[a-zA-Z \s]+');

// Route::get('users3/{id}', function ($id) {
//     return "Welcome User,$id";
// })->whereNumber('id');

// Route::get('users4/{name}', function ($name) {
//     return "Welcome User,$name";
// })->whereAlpha('name');

// Route::get('users5/{id}', function ($id) {
//     return "Welcome User- $id";
// })->whereAlphaNumeric("id");


// /*Simple redirect*/
// Route::get("foo", function () {
//     return "This is a simple foo";
// })->name('f');
// Route::redirect('redirectfoo','foo');

// Route::get('redirection', function () {
//     return redirect()->route('f');
// });

// Route::get('redirection2/{name}', function ($name) {
//     return redirect()->route('f',['name'=>$name]);
// });


// /*Blade Template*/
// Route::get('blade/{username}', function ($username) {
//     return view('first', ['username' => $username]);
// });

// Route::get('customers', [CustomerController::class, 'index']);

// // rouute for switch case
// Route::get('switch/{i}', function ($i) {
//     return view('switchCase', ['i' => $i]);
// });


// Route::get('performance/{marks}', function ($marks) {
//     return view('marks', ['marks' => $marks]);
// });


/*Template inheritance*/
// Route::get('/layout', function () {
//     return view('layout');
// });
// Route::get('myhome', function () {
//     return view('home2');
// });
// Route::get('ourproducts', function () {
//     return view('products');
// });
// Route::get('aboutus', function () {
//     return view('about2');
// });
// Route::get('contactus', function () {
//     return view('contact2');
// });
// Route::get('ourproducts', function () {
//     $products = [
//         ['type' => 'electronics', 'name' => 'Laptop', 'brand' => 'Dell', 'image' => 'https://images.jdmagicbox.com/quickquotes/images_main/dell-laptops-11-06-2021-002-227393979-p9c7w.jpg'],
//         ['type' => 'electronics', 'name' => 'Desktop', 'brand' => 'HP', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNPkIzbCliA21Ho9XE-gmP2mHiHwubtJjlww&s'],
//         ['type' => 'electronics', 'name' => 'Smart phone', 'brand' => 'Samsung', 'image' => 'https://rukminim2.flixcart.com/image/850/1000/xif0q/smartwatch/w/x/h/-original-imahfa7xspmxemvj.jpeg?q=90&crop=false'],
//         ['type' => 'electronics', 'name' => 'Smart TV', 'brand' => 'Sony', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx39TsSLTurApwhfrvbiJIrcQI8uJmIHkw2Q&s'],
//         // ['type' => 'gadgets', 'name' => 'Smart watch', 'brand' => 'Apple'],
//         // ['type' => 'gadgets', 'name' => 'Smart phone', 'brand' => 'Apple'],
//         // ['type' => 'gadgets', 'name' => 'Smart TV', 'brand' => 'Apple'],
//         // ['type' => 'gadgets', 'name' => 'Smart watch', 'brand' => 'Samsung'],
//         // ['type' => 'gadgets', 'name' => 'Smart phone', 'brand' => 'Samsung'], 
//         // ['type' => 'gadgets', 'name' => 'Smart TV', 'brand' => 'Samsung']
//     ];
//     return view('products', ['products' => $products]);
// });

// Route::get('ourproducts1', function () {
//     $products = [
//         ['type' => 'gadgets', 'name' => 'smart watch', 'brand' => 'samsung', 'image' => asset('images/1.jpg')],
//         ['type' => 'kids', 'name' => 'plushies', 'brand' => 'abc', 'image' => asset('images/1.jpg')],
//         ['type' => 'electronics', 'name' => 'TV', 'brand' => 'HTC', 'image' => asset('images/1.jpg')],
//     ];
//     return view("products", ['products' => $products]);
// });

// Route::get('image', function () {
//     return view('image');
// });

// /*Adavanced routing(grouping routes according to route prefix)*/
// Route::prefix('cafehideout')->group(function () {
//     Route::get('register', function () {
//         return "Welcome to Register page";
//     });
//     Route::get('login', function () {
//         return "Welcome to login page";
//     });
//     Route::get('items', function () {
//         return "Welcome to items page";
//     });
// });

// /*Adavanced routing(grouping routes according to route prefix)*/
// Route::name('cafehideout.')->group(
//     function () // . is used to concatenate the name of the route
//     {
//         Route::get('register', function () {
//             return "This is register page";
//         })->name('reg');

//         Route::get('login', function () {
//             return "This is login page";
//         })->name('log');

//         Route::get('items', function () {
//             return "This is items page";
//         })->name('items');
//     }
// );

// Route::get('redirection', function () {
//     return redirect()->route('cafehideout.reg');
// });
// Route::get('redirection2', function () {
//     return redirect()->route('cafehideout.log');
// });
// Route::get('redirection3', function () {
//     return redirect()->route('cafehideout.items');
// });


// Route::controller(OrderController::class)->group(function(){
//     Route::get('delivered', 'delivered');
//     Route::get('pending', 'pending');
//     Route::get('totalorders', 'totalorders');
// });

// Route::controller(OrderController::class)->group(function(){
//     Route::prefix('cafehideout')->group(function(){
//     Route::get('delivered', 'delivered');
//     Route::get('pending', 'pending');
//     Route::get('totalorders', 'totalorders');
//     });
// });


// Route::get("/users",[UserController::class,'index']);


// Route::get('/planet-temperatures/{unit?}', [PlanetController::class, 'index'])->name('planet.index');

// Route::get('/planet-temperatures/{unit?}', [PlanetController::class, 'index'])->name('planet.index');



// Route::get('/planet-temperatures', [PlanetController::class, 'index']);
// Route::get('/planet-temperatures/{unit}', [PlanetController::class, 'convert']);


// Route::get('/planet-temperatures/{unit?}', [PlanetTemperatureController::class, 'index'])
//     ->where('unit', 'celsius|fahrenheit')
//     ->name('planet.temperatures');


// Middlewares

// Route::get("testmiddleware", function () {
//     return "Hello middleware";
// })->middleware(TestMiddleware::class)->middleware(TestMiddleware2::class);

// Route::get("testmiddleware1", function () {
//     return "Hello middleware";
// })->middleware('test1','test2');

// /*Middleware groups*/
// Route::middleware('test1')->group(function (){
//     Route::get('profile', function (){
//         return "This is my profile";
//     });
//     Route::get('signup', function(){
//         return "This is sign up page";
//     });
//     Route::get('home', function (){
//         return "This is home page";
//     });
// });


// Route::get('query', function(Request $request)
// {
// if ($request->query('status') == 'active') {
//     return "The status is active";
// } else {
//     return "The status is not active";
// }
// });


/*Accessing private functions in controller*/
// Route::get('calculate-discount/{price}/{discount}', [DiscountController::class, 'calculatedDiscount']);

/*Request controller*/
// Route::get('request/input', [RequestController::class, 'index']);


/*Request class*/


/*Request class methods with the help of form*/

// Route::get('requestform', function () {
//     return view('requestform');
// });
// Route::post('requestform', [RequestformController::class, 'index']);


/*Cookies*/
// Route::get('setcookie', [CookieController::class, 'setcookie']);
// Route::get('getcookie', [CookieController::class, 'getcookie']);
// Route::get('deletecookie', [CookieController::class, 'deletecookie']);

/*Form handling*/
// Route::get('cookieform', function(){
//     return view('form');
// });
// Route::post('cookieform', [FormController::class, 'setcookiethroughform']);


// Route::get('setcookie1', [CookieController::class, 'setcookie1']);
// Route::get('getcookie1', [CookieController::class, 'getcookie1']);



// Route::get('set-multiple-cookies', [CookieFormController::class, 'setCookies']);
// Route::get('get-multiple-cookies', [CookieFormController::class, 'getCookies']);


/*Working with session*/ 
// Route::get('store-session', [SessionController::class, 'storeSession']);
// Route::get('get-session', [SessionController::class, 'getSession']);
// Route::get('delete-session', [SessionController::class, 'deleteSession']);



// Route::get('/form', [CookieformController1::class, 'cookieform']);
// Route::post('/submit-form', [CookieformController1::class, 'submitForm']);



/*loginsession*/
// Route::get('viewloginpage', [loginController::class, 'viewloginpage']);
// Route::post('loginsession', [loginController::class, 'loginsession']);
// Route::get('profile', [loginController::class, 'profile']);
// Route::get('logout', [loginController::class, 'logout']);


/*form validation*/
// Route::get('validation', function () {
//     return view('validation');
// });
// Route::post('validation', [validationController::class, 'validation']);



//Working with ORM
/*GET /prods (index) -- display all the records
GET /prods/create (create) -- display the form to enter the data from the user
GET /prods/1 (show) -- display a particular prod
POST /prods (store) -- store the data into table
GET /prods/1/edit (edit) -- open the form to update the data
PATCH /prods/1 (update) -- update the record with ID 1
DELETE /prods/1 (destroy) -- to delete specific product
*/

// Route::resource('prods', ProdController::class);

Route::resource('posts',PostController::class);

Route::resource('students', StudentController::class);