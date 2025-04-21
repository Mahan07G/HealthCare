<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        DB::table('doctors')->insert([
            [
                'name' => 'Walter White',
                'position' => 'Chief Medical Officer',
                'description' => 'Explicabo voluptatem mollitia et repellat qui dolorum quasi.',
                'image' => 'assets/img/doctors/doctors-1.jpg',
                'social_links' => json_encode([
                    'twitter' => '#',
                    'facebook' => '#',
                    'instagram' => '#',
                    'linkedin' => '#',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Jhonson',
                'position' => 'Anesthesiologist',
                'description' => 'Aut maiores voluptates amet et quis praesentium qui senda para.',
                'image' => 'assets/img/doctors/doctors-2.jpg',
                'social_links' => json_encode([
                    'twitter' => '#',
                    'facebook' => '#',
                    'instagram' => '#',
                    'linkedin' => '#',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'William Anderson',
                'position' => 'Cardiology',
                'description' => 'Quisquam facilis cum velit laborum corrupti fuga rerum quia.',
                'image' => 'assets/img/doctors/doctors-3.jpg',
                'social_links' => json_encode([
                    'twitter' => '#',
                    'facebook' => '#',
                    'instagram' => '#',
                    'linkedin' => '#',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amanda Jepson',
                'position' => 'Neurosurgeon',
                'description' => 'Dolorum tempora officiis odit laborum officiis et et accusamus.',
                'image' => 'assets/img/doctors/doctors-4.jpg',
                'social_links' => json_encode([
                    'twitter' => '#',
                    'facebook' => '#',
                    'instagram' => '#',
                    'linkedin' => '#',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
