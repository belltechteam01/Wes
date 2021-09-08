<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemuseraccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('systemuseraccount')==false)
        Schema::create('systemuseraccount', function (Blueprint $table) {
            $table->id();
            $table->integer("userid")->nullable();
            $table->text("general")->nullable();
            $table->text("general_add")->nullable();
            $table->text("information")->nullable();
            $table->text("information_add")->nullable();
            $table->text("senior")->nullable();
            $table->text("senior_add")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systemuseraccount');
    }
}
