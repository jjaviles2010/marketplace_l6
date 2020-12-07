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

    return \App\User::all();
});