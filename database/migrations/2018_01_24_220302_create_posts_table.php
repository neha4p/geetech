<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('post_category_id')->default(0);
			$table->integer('user_id')->default(0);
			$table->string('title')->default('');
			$table->string('slug')->default('');
			$table->string('image')->default('');
			$table->text('body', 16777215);
			$table->text('body_guest', 16777215)->nullable();
			$table->string('access', 20)->default('guest');
			$table->boolean('active')->default(1);
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
		Schema::drop('posts');
	}

}
