<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;//database bağlantısı sağladık
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Spor','Siyaset','Teknoloji'];
        foreach ($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>$category

            ]);
        }

        //
    }
}
