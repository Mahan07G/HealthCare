<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'title' => 'Cardiology',
                'description' => 'Comprehensive care for heart-related conditions.',
                'icon' => 'fas fa-heartbeat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Neurology',
                'description' => 'Expert treatment for brain and nervous system disorders.',
                'icon' => 'fas fa-brain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pediatrics',
                'description' => 'Specialized care for infants, children, and adolescents.',
                'icon' => 'fas fa-baby',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Orthopedics',
                'description' => 'Advanced treatment for bone and joint issues.',
                'icon' => 'fas fa-bone',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dermatology',
                'description' => 'Comprehensive skin care and treatment.',
                'icon' => 'fas fa-sun',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Radiology',
                'description' => 'State-of-the-art imaging and diagnostic services.',
                'icon' => 'fas fa-x-ray',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
