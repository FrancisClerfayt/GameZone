<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('avatars', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('image');
			$table->timestamps();
		});
		
		Schema::table('users', function (Blueprint $table) {
			$table->foreignId('avatar_id')->references('id')->on('avatars');
		});
	}
	
	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::table('users', function (Blueprint $table) {
			$table->dropForeign(['avatar_id']);
		});
		
		Schema::dropIfExists('avatars');
	}
}
