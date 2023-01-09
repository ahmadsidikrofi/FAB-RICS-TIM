<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajuWanita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baju_wanita', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->nullable();
            $table->string("nama");
            $table->string("brand");
            $table->integer("harga");
            $table->enum("ukuran", ["S", "M", "L", "XL"]);
            $table->text("deskripsi");
            $table->string("image");
            $table->string("image2")->nullable();
            $table->string("image3")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baju_wanita');
    }
}
