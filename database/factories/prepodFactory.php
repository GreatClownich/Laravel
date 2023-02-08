<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\prepod>
 */
class prepodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Имя' => randomName(0),
            'Фамилия' => randomFam(0),
            'Классный_руководитель' => randomKR(1),
            'Предмет' => randomPredmet(0),
            'Зарплата' => randomZP(0),
            'Дата_рождения' => randomBirthday(),
            'Стаж' => randomStaj(1)
            
            ];
            
            }
            }
            
            function randomName(){
            $names = array("Дмитрий", "Тимур","Антон","Михаил","Александр","Алексей","Максим","Ян");
            return $names[array_rand($names)];
            }
            
            function randomFam(){
            $fam = array("Шебулатов", "Ефимов","Фрицлер","Штурм","Бирюлин","Макаров","Скоркин","Рудаков");
            return $fam[array_rand($fam)];
            }
            
            function randomKR(){
            return $randomBoolean = (bool) mt_rand(0,1);
            }
            
            function randomPredmet(){
            $group = array("Математика", "Русский язык","Английский язык","Программирование","История","География","Биология","Обществознания");
            return $group[array_rand($group)];
            }
            
            function randomZP(){
            $zarplata = array(25000, 30000, 35000, 45000, 40000, 50000, 20000);
            return $zarplata[array_rand($zarplata)];
            }
            
            function randomBirthday() {
            $min = strtotime("1960-01-01");
            $max = strtotime("2000-01-01");
            $randomTimestamp = mt_rand($min, $max);
            return date("Y-m-d", $randomTimestamp);
            }
            
            function randomStaj(){
            return rand(5, 35);
            }