<?php

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    // $pdo = DB::connection()->getPdo();

    // $users = $pdo->query('select * from users')->fetchAll();

    // $result = DB::select('select * from users where id =? and name = ?', [1, 'vilma o\'Keefe']);

    // $result = DB::select('select * from users where id = :id', ['id' => 1]);

    // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Dayle', 'mail@app.com', 'password']);

    // DB::update('update users set email = "test@app.com" where email = ?', ['mail@app.com']);

    // DB::delete('delete from users where id = ?', [4]);

    // DB::statement('truncate table users');

    // DB::select('select * from users');

    // DB::table('users')->select()->get();

    // User::all();


    // DB::transaction(function () {

    //     try {
    //         DB::table('users')->delete();

    //         $result = DB::table('users')->where('id', 4)->update(['email' => 'none']);

    //         if (!$result) {
    //             throw new \Exception;
    //         }
    //     } catch (\Exception $e) {

    //         DB::rollBack();
    //     }
    // }, 5); //optional argument how many times, transaction should be reattemted.


    dump(Comment::factory(3)->make());
    dump(Comment::factory(3)->create());



    return view('welcome');
});
