<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('title');
                        $table->string('author');
                        $table->string('cover');
                        $table->text('resume');
                        $table->string('format');   
                        $table->integer('page_count');
                        $table->date('publish_date');                        
                        $table->string('isbn'); 
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
		Schema::drop('books');
	}

}
