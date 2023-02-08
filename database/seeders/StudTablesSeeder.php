<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\stud;
use App\Http\Controllers\StudController;

class studTablesSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
    {  
    stud::factory(100)->create();
    }
}
