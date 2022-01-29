<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListToTypeProdServTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_to_type_prod_serv', function (Blueprint $table) {
            $table->id();
            $table
                ->integer('disp')
                ->nullable();
            $table->unsignedBigInteger('id_list');
            $table->unsignedBigInteger('id_type_prod_serv');
            $table->timestamps();
        });

        Schema::table('list_to_type_prod_serv', function (Blueprint $table) {
            $table
                ->foreign('id_list')
                ->references('id')
                ->on('list')
                ->onDelete('cascade');

            $table
                ->foreign('id_type_prod_serv')
                ->references('id')
                ->on('type_prod_serv')
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
        Schema::dropIfExists('list_to_type_prod_serv');
    }
}
