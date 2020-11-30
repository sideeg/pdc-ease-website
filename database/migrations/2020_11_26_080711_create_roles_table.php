<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name');
            $table->timestamps();
        });
        $mytime = Carbon\Carbon::now();

        DB::table('roles')->insert(
            array(
                array("id"=>'1',"role_name"=>"super-admin" , "created_at" => $mytime->toDateTimeString()),
                array("id"=>'2',"role_name"=>"content mannger" , "created_at" => $mytime->toDateTimeString()),
                array("id"=>'3',"role_name"=>"bloger supervisor" , "created_at" => $mytime->toDateTimeString()),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
