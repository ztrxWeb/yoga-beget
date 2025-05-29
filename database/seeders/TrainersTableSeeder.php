<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;

class TrainersTableSeeder extends Seeder
{
    public function run(): void
    {
        $trainers = [
            [
                'name' => 'Валерик007',
                'bio' => 'Сертифицированный инструктор хатха-йоги с 10-летним опытом. Специализируется на йоге для начинающих и восстановительной йоге.',
                'specialization' => 'Йога, йога для начинающих',
            ],
            [
                'name' => 'Димас пи..',
                'bio' => 'Мастер аштанга-йоги, обучался в Индии. Проводит интенсивные занятия для продвинутых практиков.',
                'specialization' => 'Йога, йога для профессиАНАЛОВ',
            ],
            [
                'name' => 'Светлана',
                'bio' => 'Эксперт по йогатерапии и йоге для беременных. Помогает восстановиться после травм.',
                'specialization' => 'Йога, йога для средничков',
            ],
        ];

        foreach ($trainers as $trainer) {
            Trainer::create($trainer);
        }
    }
}