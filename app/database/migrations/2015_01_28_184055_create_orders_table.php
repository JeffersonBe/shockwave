<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('members_id')->unsigned;
			$table->integer('menus_id')->unsigned;
			$table->string('address_delivery');
			$table->string('date_delivery');
			$table->string('comment');
			$table->boolean('delivered')->default(false);
			$table->timestamps();

			$table->foreign('members_id')
			->references('id')->on('members')
			->onDelete('cascade');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
