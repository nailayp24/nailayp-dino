<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin PCR',
                'email' => 'admin@pcr.ac.id',
                'password' => Hash::make('admin123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Naila Farhana',
                'email' => 'naila@pcr.ac.id', 
                'password' => Hash::make('naila123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@pcr.ac.id',
                'password' => Hash::make('manager123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Staff IT',
                'email' => 'staff.it@pcr.ac.id',
                'password' => Hash::make('staff123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@pcr.ac.id',
                'password' => Hash::make('budi123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Sari Dewi',
                'email' => 'sari.dewi@pcr.ac.id',
                'password' => Hash::make('sari123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Agus Wijaya',
                'email' => 'agus.wijaya@pcr.ac.id',
                'password' => Hash::make('agus123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Rina Setiawan',
                'email' => 'rina.setiawan@pcr.ac.id',
                'password' => Hash::make('rina123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Joko Pratama',
                'email' => 'joko.pratama@pcr.ac.id',
                'password' => Hash::make('joko123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Maya Kurniawan',
                'email' => 'maya.kurniawan@pcr.ac.id',
                'password' => Hash::make('maya123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Rudi Hidayat',
                'email' => 'rudi.hidayat@pcr.ac.id',
                'password' => Hash::make('rudi123'),
                'profile_picture' => null,
            ],
            [
                'name' => 'Linda Saputra',
                'email' => 'linda.saputra@pcr.ac.id',
                'password' => Hash::make('linda123'),
                'profile_picture' => null,
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}