<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('video_category_id')->default(0);
			$table->string('title');
			$table->string('type');
			$table->string('access', 20)->default('guest');
			$table->text('details', 65535);
			$table->text('description', 65535);
			$table->boolean('active')->default(1);
			$table->boolean('featured')->default(0);
			$table->integer('duration')->nullable();
			$table->integer('views')->default(0);
			$table->string('image')->nullable();
			$table->text('embed_code', 65535)->nullable();
			$table->string('mp4_url')->nullable();
			$table->string('webm_url')->nullable();
			$table->string('ogg_url')->nullable();
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
		Schema::drop('videos');
	}

}
