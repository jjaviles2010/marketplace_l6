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

Route::get('/', function () {
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
    // return view('welcome', ['x' => $helloWorld]);
});

Route::get('/user', function () {
//    $users = \App\User::all();

//    Active record for inserting data
//    $user = new \App\User();
//    $user->name = 'Jose Javier';
//    $user->email = 'jjaviles@teste.com';
//    $user->password = bcrypt('12345678');
//    $user->save();

// Active record for updating data

//     $user = \App\User::find(1);
//     $user->name = 'Jose Javier Aviles';
//     $user->save();

//     \App\User::all() - returns all users
//     \App\User::find(3) - returns user by id
//     \App\User::where('name', 'Diamond Bins')->get() - returns collection of users matching condition
//     \App\User::where('name', 'Diamond Bins')->first() - returns first row matching condition
//     \App\User::paginate(10) - returns result paginated, including links to all paginated pages

    // Mass Assignment

    // $user = \App\User::create([
    //     'name' => 'Lilian Remon',
    //     'email' => 'lily@teste.com',
    //     'password' => bcrypt('122334455')
    // ]);

    // dd($user); - (dump die) print the object in browser and stop execution

    //Mass Update

    // $user = \App\User::find(42);
    // $user->update([
    //     'name' => 'Lilian Remon Reitor'
    // ]);

    
    // $user = \App\User::find(4);
    //return $user->store; //returns a store object

    //dd($user->store()); // returns an instance of hasOne relationship. 
    //dd($user->store()->count()); //I can make a count to know how many stores the user has

    // $store = \App\Store::find(1);
    //return $store->products; //returns store's products
    // return $store->products()->where('id', 9)->get(); // I can make a query with a condition

    // $category = \App\Category::find(1);
    // $category->products;


    //Create store for an user
    // $user = \App\User::find(10);
    // $store = $user->store()->create([
    //     'name' => 'Store test',
    //     'description' => 'Store test for informatic products',
    //     'mobile_phone' => 'XX-XXXXX-XXXX',
    //     'phone' => 'XX-XXXXX-XXXX',
    //     'slug' => 'loja-teste'
    // ]);

    //Create product for a store
    // $store = \App\Store::find(41);
    // $product = $store->products()->create([
    //     'name' => 'Notebook Dell',
    //     'description' => 'Core I5 10GB',
    //     'body' => 'Qualquer coisa...',
    //     'price' => 2999.90,
    //     'slug' => 'notebook-dell',
    // ]);

    // dd($product);

    //Creata Categories

    // \App\Category::create([
    //     'name' => 'Games',
    //     'description' => null,
    //     'slug' => 'games'
    // ]);

    // \App\Category::create([
    //     'name' => 'Notebooks',
    //     'description' => null,
    //     'slug' => 'notebooks'
    // ]);

    //return \App\Category::all();

    // $product = \App\Product::find(41);
    // $product->categories()->attach([2]);// Associates Product to Category with id 2

    // dd($product->categories()->detach([2]));// Dissociate Product to Category with id 2

    // $product->categories()->sync([1,2]); // Syncronized the relationship, if doesn't exist creates it, if has other relation 
                                        // in the database and it isn't passed as parameter to sync will be deleted

    return \App\User::all();
});