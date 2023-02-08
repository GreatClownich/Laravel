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
Schema::create('stud', function (Blueprint $table) {
$table->id();
$table->string('Имя');
$table->string('Фамилия');
$table->string('Рост');
$table->string('Группа');
$table->float('Средний_балл');
$table->date('Дата_рождения');
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
Schema::dropIfExists('stud');
}
};