<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBackgroundToUsersApplyUserinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('users_apply_userinfo', 'background')==false) {
            Schema::table('users_apply_userinfo', function (Blueprint $table) {
                $table->string("background", 512)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_apply_userinfo', function (Blueprint $table) {
            //
        });
    }
}
