<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPanelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_panel', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->unsignedBigInteger('id_type_user');
            $table
                ->string('company_name');
            $table
                ->string('email')->unique();
            $table
                ->string('password', 60);
            $table
                ->timestamp('email_verified_at')
                ->nullable();
            $table
                ->string('representative_name')
                ->nullable();
            $table
                ->string('phone_number')
                ->nullable();
            $table
                ->string('address');
            $table
                ->rememberToken();
            $table
                ->timestamps();
        });

        Schema::table('users_panel', function (Blueprint $table) {
            $table
                ->foreign('id_type_user')
                ->references('id')
                ->on('type_users')
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
        Schema::dropIfExists('user_panel');
    }
}
