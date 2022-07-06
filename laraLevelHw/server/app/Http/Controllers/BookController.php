<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Mockery\Generator\Generator;
use Psy\Util\Str;

class BookController extends Controller
{
    public function books()
    {
//        $q3=DB::table('users')->where('name', '=', 'Andress')->where(function($query){
//            $query->where('votes', '>', '100')->orWhere(function ($query){
//                $query->where('name', 'Test')->where('votes', '<', '50');
//            });
//        })->get();
//        dd(Str::replaceArray('?', $q3->getBindings(), $q3));
       $books = DB::table('books')->
           select('books.*', 'users.name as user_name')->
       join('users', 'users.id', '=', 'books.user_id')->get();

        return view('books.list', ['books' => $books] );
    }

    public function view($id)
    {
        $books = $this->booksList();
//         $id=1;
        if (!$book = $books[$id] ?? null) {
            abort(404);
        }

        return $book['title'] . ' ' . $book['author'];
    }

    private function booksList()
    {
        return [
            1 => ['id' => 1, 'title' => 'Title 1', 'author' => 'Author 1'],
            2 => ['id' => 2, 'title' => 'Title 2', 'author' => 'Author 2'],
            3 => ['id' => 3, 'title' => 'Title 3', 'author' => 'Author 3'],
        ];
    }
        public function add(Generator $faker){
            $user = DB::table('users')->first();
        DB::table('books')->insert([
            'user_id'=> $user->id,
            'title' => $faker->sentence(2),
            'description' =>$faker->text(20),
        ]);
        }

}
