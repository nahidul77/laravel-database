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


    // dump(Comment::factory(3)->make());
    // dump(Comment::factory(3)->create());

    // $users = DB::table('users')->get();
    // $users = DB::table('users')->pluck('email');
    // $user = DB::table('users')->find(1);
    // $user = DB::table('users')->where('id', 1)->value('email');

    // $comments = DB::table('comments')->select('content as comment_content')->get();

    // $comments = DB::table('comments')->select('user_id')->distinct()->get();

    // $result = DB::table('comments')->count();
    // $result = DB::table('comments')->sum('user_id');
    // $result = DB::table('comments')->max('user_id');
    // $result = DB::table('comments')->avg('user_id');

    // $result = DB::table('comments')->where('content', 'content')->exists();

    // $result = DB::table('comments')->where('content', 'content')->doesntExist();


    // $results = DB::table('rooms')->where('price', '<', 200)->get(); // >, =, like etc

    // $results = DB::table('rooms')->where([
    //     ['room_size', 2],
    //     ['price', '<', 200],
    // ])->get();

    // $results = DB::table('rooms')
    //     ->where('room_size', 2)
    //     ->orWhere('price', '<', 400)
    //     ->get();

    // $results = DB::table('rooms')
    //     ->where('price', '<', 400)
    //     ->orWhere(function ($query) {
    //         $query->where('room_size', '>', 2)
    //             ->where('room_size', '<', 5);
    //     })
    //     ->get();


    // $results = DB::table('rooms')
    //     ->whereBetween('room_size', [1, 3]) //whereNotBetween
    //     ->get();

    // $results = DB::table('rooms')
    //     ->whereNotIn('room_size', [1, 2, 3]) //whereIn
    //     ->get();

    // whereNull('column')

    // whereNotNull('column')

    // whereDate('created_at', '2024-03-13')

    // whereTime('created_at', '01:30:10')

    // whereMonth('created_at', '5')

    // whereDay('created_at', '15')

    // whereYear('created_at', '2020')

    // whereColumn('column1', '>', 'column2') // column1 values greater than column2

    // whereColumn([
    //     ['first_name' = 'last_name'],
    //     ['updated_at' , '>', 'created_at']
    // ])


    // $results = DB::table('users')
    //     ->whereExists(function ($query) {
    //         $query->select('id')
    //             ->from('reservations')
    //             ->whereRaw('reservations.user_id = users.id')
    //             ->where('check_in', '2024-02-23')
    //             ->limit(1);
    //     })
    //     ->get();


    // $results = DB::table('users')
    //     ->whereJsonContains('meta->skills', 'laravel')
    //     ->whereJsonContains('meta->settings->site_language', 'en')
    //     ->get();


    // $results = DB::table('comments')->paginate(3);

    // $results = DB::table('comments')->simplePaginate(3);

    // return $results;


    //Full text Search===========================================

    // $results = DB::table('comments')->where('content', 'like', '%Dolor%')->get();

    // $results = DB::statement('ALTER TABLE comments ADD FULLTEXT fulltext_index(content)');

    // $results = DB::table('comments')
    //     ->whereRaw("MATCH(content) AGAINST(? BOOLEAN MODE)", ['Dolor'])
    //     ->get();


    //RAW SQL==============================

    // $results = DB::table('comments')
    //     // ->select(DB::raw('count(user_id) as number_of_comments, users.name'))
    //     ->selectRaw('count(user_id) as number_of_comments, users.name')
    //     ->join('users', 'users.id', '=', 'comments.user_id')
    //     ->groupBy('users.id', 'users.name')
    //     ->get();

    // whereRaw / orWhereRaw
    // havingRaw / orHavingRaw
    // orderByRaw
    // groupByRaw

    // $results = DB::table('comments')
    //     ->orderByRaw('updated_at - created_at DESC')
    //     ->get();

    $results = DB::table('users')
        ->selectRaw('LENGTH(name) as name_length, name')
        ->orderByRaw('name_length DESC')
        ->get();

    dump($results);

    return view('welcome');
});
