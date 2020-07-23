<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_roles', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('role_id');
            $table->primary(['account_id', 'role_id']);
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts_roles', function (Blueprint $table) {
            //
        });
    }
}
