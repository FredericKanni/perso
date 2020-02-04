<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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

        Schema::table('role_user', function (Blueprint $table) {
            // Schema::disableForeignKeyConstraints();
            // $table->dropForeign(['role_id']);
            // $table->dropIfExists('role_id');

            // $table->dropForeign(['user_id']);
            // $table->dropIfExists('user_id');
            // Schema::enableForeignKeyConstraints();
        });

        Schema::dropIfExists('role_user');
    }
}
