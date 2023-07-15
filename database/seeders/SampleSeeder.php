<?php

namespace Database\Seeders;

use App\Models\Sample;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sample::create([
            'name' => '시드 작업',
            'description' => '시드 작업을 실행해 보았습니다.',
            'votes' => 5,
        ]);
    }
}
