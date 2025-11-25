<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreatePelangganDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        // Data nama Indonesia yang lebih realistis
        $maleNames = ['Budi', 'Agus', 'Joko', 'Slamet', 'Rudi', 'Hendra', 'Ahmad', 'Rizki', 'Fajar', 'Dimas'];
        $femaleNames = ['Sari', 'Dewi', 'Rini', 'Maya', 'Linda', 'Ani', 'Rina', 'Siti', 'Nina', 'Diana'];
        $lastNames = ['Santoso', 'Wijaya', 'Pratama', 'Setiawan', 'Kurniawan', 'Hidayat', 'Saputra', 'Gunawan', 'Ramadan', 'Nugroho'];

        $pelangganData = [];

        foreach (range(1, 20) as $index) {
            $gender = $faker->randomElement(['Male', 'Female']);
            
            if ($gender === 'Male') {
                $firstName = $faker->randomElement($maleNames);
            } else {
                $firstName = $faker->randomElement($femaleNames);
            }
            
            $lastName = $faker->randomElement($lastNames);
            $email = strtolower($firstName) . '.' . strtolower($lastName) . $index . '@gmail.com';

            $pelangganData[] = [
                'first_name' => $firstName,
                'last_name'  => $lastName,
                'birthday'   => $faker->dateTimeBetween('-45 years', '-20 years')->format('Y-m-d'),
                'gender'     => $gender,
                'email'      => $email,
                'phone'      => '08' . $faker->numerify('##########'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('pelanggan')->insert($pelangganData);
    }
}