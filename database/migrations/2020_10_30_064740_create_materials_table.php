<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materials', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100);
			$table->text('descriptions', 65535);
			$table->float('stock', 10, 0);
			$table->float('notify_stock', 10, 0);
			$table->integer('material_size_id')->nullable()->index('material_size_id');
			$table->integer('material_type_id')->index('material_type_id');
			$table->integer('material_unit_id')->index('material_unit_id');
			$table->float('price', 10, 0);
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
		Schema::drop('materials');
	}

}
