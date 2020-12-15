<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('xp_gain');
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('attractions', function (Blueprint $table) {
            $table->foreignId('restriction_id')->references('id')->on('restrictions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('attractions', function (Blueprint $table) {
            $table->dropForeign(['restriction_id']);
        });

        Schema::dropIfExists('attractions');
    }
}
