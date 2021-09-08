<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemusermanagedepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('systemusermanagedepartment')==false)
        Schema::create('systemusermanagedepartment', function (Blueprint $table) {
            $table->id();
            $table->integer("userid")->nullable();
            $table->string("name")->nullable();
            $table->integer("d_id")->nullable();
            $table->text('permissions')->nullable();
            $table->timestamps();
            //$table->string('g_path')->default('remote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('systemusermanagedepartment');
    }
}
