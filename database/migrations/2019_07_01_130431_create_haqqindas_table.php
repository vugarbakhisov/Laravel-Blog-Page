<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaqqindasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haqqindas', function (Blueprint $table) {
            $table->bigIncrements('id');
               $table->string('basliq');
            $table->text('mezmun');
            $table->string('video');
            $table->string('sekil');
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
        Schema::dropIfExists('haqqindas');
    }
}
