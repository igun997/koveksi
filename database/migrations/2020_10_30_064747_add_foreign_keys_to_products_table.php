<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function(Blueprint $table)
		{
			$table->foreign('unit_id', 'products_ibfk_1')->references('id')->on('units')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('size_id', 'products_ibfk_2')->references('id')->on('sizes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('color_id', 'products_ibfk_3')->references('id')->on('colors')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function(Blueprint $table)
		{
			$table->dropForeign('products_ibfk_1');
			$table->dropForeign('products_ibfk_2');
			$table->dropForeign('products_ibfk_3');
		});
	}

}
