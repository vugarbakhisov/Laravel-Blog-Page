<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeqalelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meqalelers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('muellif');
            $table->string('basliq');
            $table->string('adres');
            $table->date('vaxt');
            $table->text('mezmun');
            $table->string('sekil');
        $table->boolean('status')->default(1);
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
        Schema::dropIfExists('meqalelers');
    }
}
