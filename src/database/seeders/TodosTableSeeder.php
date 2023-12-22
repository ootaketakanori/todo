<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create(['name' => 'カテゴリ']);
        $category2 = Category::create(['name' => 'category1']);
        $category3 = Category::create(['name' => 'category2']);

        $todos = [
            ['category_id' => $category1->id,  'content' => 'Todo', 'code' => 1, 'name' => 'カテゴリ'],
            ['category_id' => $category2->id, 'content' => 'Todo1', 'code' => 2, 'name' => 'category1'],
            ['category_id' => $category3->id, 'content' => 'Todo2', 'code' => 3, 'name' => 'category2'],
        ];
        DB::table('todos')->insert($todos);
    }
}
