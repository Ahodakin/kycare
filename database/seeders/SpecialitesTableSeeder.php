<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Specialite;

class SpecialitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialites = [
            'Anesthésiologie',
            'Cardiologie',
            'Dermatologie',
            'Endocrinologie',
            'Gastro-entérologie',
            'Gynécologie',
            'Hématologie',
            'Infectiologie',
            'Médecine Générale',
            'Médecine Interne',
            'Néphrologie',
            'Neurologie',
            'Oncologie',
            'Ophtalmologie',
            'Oto-rhino-laryngologie (ORL)',
            'Pédiatrie',
            'Psychiatrie',
            'Radiologie',
            'Rhumatologie',
            'Urologie',
        ];

        foreach ($specialites as $specialite) {
            DB::table('specialites')->insert([
                'name' => $specialite,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
