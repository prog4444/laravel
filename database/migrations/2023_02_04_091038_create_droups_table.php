<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('expire_hours')->comment('через какое количество часов пользователь после добавления в группу должен быть исключен из группы');
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
        Schema::dropIfExists('droups');
    }
};
