<?php

namespace Database\Seeders;

use App\Models\EventType;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{

    public function run(): void
    {
        EventType::create([
            'name_uz' => "Hokimlik ishtirokidagi tadbirlar",
            'name_eng' => "Events with the governor",
            'name_ru' => "Mероприятия с мэром"
        ]);
        EventType::create([
            'name_uz' => "Rasmiy maruzalar",
            'name_eng' => "Official lectures",
            'name_ru' => "Oфициальные лекции"
        ]);
        EventType::create([
            'name_uz' => "Tenderlar va elonlar",
            'name_eng' => "Tenders and adverts",
            'name_ru' => "Tендеры и объявления"
        ]);
        EventType::create([
            'name_uz' => "Ishlab chiqilgan chora tadbirlar",
            'name_eng' => "Planned remedy and enterprises",
            'name_ru' => "Планируемые меры"
        ]);
    }
}
