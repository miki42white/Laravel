<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return
     */
    public function run()
    {
        $param = [
            'content' => 'プログラミング学習'
        ];
        DB::table('todo')->insert($param);
        $param = [
            'content' => 'おやつ食べる'
        ];
        DB::table('todo')->insert($param);
        $param = [
            'content' => 'そうじ'
        ];
        DB::table('todo')->insert($param);
        $param = [
            'content' => '買い出し'
        ];
        DB::table('todo')->insert($param);
    }
}