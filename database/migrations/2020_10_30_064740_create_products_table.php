<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100);
			$table->integer('unit_id')->index('unit_id');
			$table->integer('size_id')->index('size_id');
			$table->integer('color_id')->index('color_id');
			$table->float('price', 10, 0);
			$table->string('img', 100);
			$table->text('descriptions', 65535);
			$table->date('created_at')->nullable();
			$table->date('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
