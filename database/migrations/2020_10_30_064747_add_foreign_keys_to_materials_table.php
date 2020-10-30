<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('materials', function(Blueprint $table)
		{
			$table->foreign('material_size_id', 'materials_ibfk_1')->references('id')->on('material_sizes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('material_type_id', 'materials_ibfk_2')->references('id')->on('material_types')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('material_unit_id', 'materials_ibfk_3')->references('id')->on('material_units')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('materials', function(Blueprint $table)
		{
			$table->dropForeign('materials_ibfk_1');
			$table->dropForeign('materials_ibfk_2');
			$table->dropForeign('materials_ibfk_3');
		});
	}

}
