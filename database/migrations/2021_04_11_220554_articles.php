<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            //$table->integer('category_id')->default(0);//ilişkisel tablolarda ilişki kurulacak veri unsigned
            //olması lazım. unsigned anlamı integer degeri min 1 almak zorunda eksi değer alınmaması için.
            $table->string('title');
            $table->longText('content');
            $table->integer('hit')->default(0);
            $table->string('image');
            //$table->string('slug');
            $table->timestamps();
            /*$table->foreign('category_id')
                ->references('id')
                ->on('categories'); categories tablosundaki(diğer veritabanı tablomuz) id sütununun
 verisiyle buuradaki tablonun category_id kısmını birbirine bağla dedik burada. */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
