<?php

namespace Database\Seeders;

use App\Models\Clase;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clases=Clase::factory(5)->create();
        $ids=User::pluck('id')->toArray();
        foreach($clases as $clase){
            shuffle($ids);
            $clase->clientes()->attach($this->getRandomArrayIdTags($ids));
        }
    }
    private function getRandomArrayIdTags(array $ids):array{
       return array_slice($ids, 0, random_int(1, count($ids)-1));
    }
}
