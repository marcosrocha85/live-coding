<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'business_name' => 'Fornecedor Ltda',
            'commercial_name' => 'Fornecedor',
            'person_type' => Person::COMPANY
        ]);
    }
}
