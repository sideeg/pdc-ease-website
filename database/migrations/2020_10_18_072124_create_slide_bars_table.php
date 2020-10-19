<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_bars', function (Blueprint $table) {
            $table->id();
            $table->string("tilte_en")->nullable();
            $table->string("tilte_ar")->nullable();

            $table->text("desc_en")->nullable();
            $table->text("desc_ar")->nullable();

            $table->string("sourse");
            $table->string("type");
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
        Schema::dropIfExists('slide_bars');
    }
}
