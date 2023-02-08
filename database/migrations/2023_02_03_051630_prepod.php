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
        Schema::create('prepods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Имя');
            $table->string('Фамилия');
            $table->string('Классный_руководитель');
            $table->string('Предмет');
            $table->string('Зарплата');
            $table->string('Дата_рождения');
            $table->string('Стаж');
            });
            }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prepod');
    }
};
