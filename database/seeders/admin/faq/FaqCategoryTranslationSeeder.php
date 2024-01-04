<?php

namespace Database\Seeders\admin\faq;


use App\Models\admin\faq\FaqCategoryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FaqCategoryTranslationSeeder extends Seeder
{

    public function run(): void
    {
        FaqCategoryTranslation::unguard();
        $tablePath = public_path('db/faq_category_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
