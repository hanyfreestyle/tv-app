<?php

namespace Database\Seeders\admin\faq;


use App\Models\admin\faq\FaqCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FaqCategorySeeder extends Seeder
{

    public function run(): void
    {
        FaqCategory::unguard();
        $tablePath = public_path('db/faq_categories.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
