<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price' => 280,
                'created_at' => Date('Y-m-d H:i:s', time()),
                'updated_at' => Date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru mulai',
                'slug' => 'baru-mulai',
                'price' => 140,
                'created_at' => Date('Y-m-d H:i:s', time()),
                'updated_at' => Date('Y-m-d H:i:s', time()),
            ],
        ];

        // 1st method
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method
        Camp::insert($camps);
    }
}