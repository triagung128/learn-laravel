<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     * Method ini digunakan untuk menuliskan perintah pembuatan atau pengubahan struktur database.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * Method ini digunakan untuk menuliskan kode yang membatalkan apa yang telah dieksekusi di method up().
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
