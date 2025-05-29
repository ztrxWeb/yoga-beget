<?php

namespace Database\Seeders;

use App\Models\Trainer;
use App\Models\YogaClass;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class YogaClassesTableSeeder extends Seeder
{
    public function run(): void
    {
        $trainers = Trainer::all();

        $classes = [
            [
                'title' => 'Утренняя йога',
                'description' => 'Описание занаятия',
                'start_time' => Carbon::today()->addDays(1)->setHour(8)->setMinute(0),
                'end_time' => Carbon::today()->addDays(1)->setHour(9)->setMinute(30),
                'max_participants' => 15,
                'price' => 1000,
                'difficulty_level' => 'beginner',
            ],
            [
                'title' => 'Разминка таза',
                'description' => 'Описание занаятия',
                'start_time' => Carbon::today()->addDays(1)->setHour(8)->setMinute(0),
                'end_time' => Carbon::today()->addDays(1)->setHour(9)->setMinute(30),
                'max_participants' => 10,
                'price' => 1000,
                'difficulty_level' => 'advanced',
            ],
            [
                'title' => 'Йога для спины',
                'description' => 'Описание занаятия',
                'start_time' => Carbon::today()->addDays(1)->setHour(8)->setMinute(0),
                'end_time' => Carbon::today()->addDays(1)->setHour(9)->setMinute(30),
                'max_participants' => 12,
                'price' => 1000,
                'difficulty_level' => 'intermediate',
            ],
        ];

        foreach ($classes as $classData) {
            YogaClass::create([
                ...$classData,
                'trainer_id' => $trainers->random()->id,
            ]);
        }
    }
}