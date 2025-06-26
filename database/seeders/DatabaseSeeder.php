<?php

namespace Database\Seeders;

use App\Models\QuartTravail;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vacance;
use Database\Factories\QuartTravailFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'telephone' => '1234567890',
            'numero_employe' => 1,
            'travail' => 'Job',
            'departement' => 'Département',
            'departement_surveillance' => 'Departement de surveillance',
        ]);

        //Quart de travail
        QuartTravail::factory(2)->create();
        $this->call([
            QuartTravailSeeder::class
        ]);

        //Vacance
        Vacance::factory(2)->create();
        $this->call([
            VacanceSeeder::class
        ]);
    }
}
