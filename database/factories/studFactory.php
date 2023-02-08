<?php

namespace Database\Factories;
use Database\seeders\studTablesSeeder;

use Illuminate\Database\Eloquent\Factories\Factory;
{
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=stud>
 */
class studFactory extends Factory
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
                'Рост' => randomNumber(1),
                'Группа' => 'И-20',
                'Средний_балл' => '3.99',
                'Дата_рождения' => '06.04.2004'
        ];
                }
            }
            function randomNumber(){
            return rand(145, 210);
            }
            
            function randomName(){
            $names = array("Дмитрий", "Тимур","Антон","Михаил","Александр","Алексей","Максим","Ян");
            return $names[array_rand($names)];
            }
            
            function randomFam(){
            $fam = array("Шебулатов", "Ефимов","Фрицлер","Штурм","Бирюлин","Макаров","Скоркин","Рудаков");
            return $fam[array_rand($fam)];
            function randomBall ($min,$max){
                $ball = $min + mt_rand() / mt_getrandmax() * ($max - $min);
                return $ball;  
            }
            function randomGrupa(){
                $grup = array("И-20-1", "Э-20-1","Н-20-1","И-21-1","М-20-1","Б-20-1","Б-19-1","Н-18-1");
                return $grup[array_rand($grup)];
                }
            }
        }
    