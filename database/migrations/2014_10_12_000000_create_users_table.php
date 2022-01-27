<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->unsignedBigInteger('id_type_users');
            $table
                ->rememberToken();
            $table
                ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
