<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer'];
        $count=0;
        foreach ($pages as $page){
            $count++;
            DB::table('pages')->insert([

                'title'=>$page,
                'slug'=>$page,
                'image'=>'https://www.availableideas.com/wp-content/uploads/2021/05/Business.jpg',
                'content'=>'Totam itaque rerum omnis et deserunt vitae.
                            Mollitia ullam cum vel eius doloremque illo. Voluptatem
                            est rerum similique nobis ea. Perferendis a voluptatem
                            maiores aut recusandae est.',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()


            ]);
    }
}}
