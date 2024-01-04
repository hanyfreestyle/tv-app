<?php

namespace Database\Seeders\admin\faq;;

use App\Models\admin\faq\FaqTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FaqTranslationSeeder extends Seeder
{

    public function run(): void
    {
        FaqTranslation::unguard();
        $tablePath = public_path('db/faq_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
