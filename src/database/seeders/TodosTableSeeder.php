<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 1
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 2
        ];
        DB::table('todos')->insert($param);
    }
}
