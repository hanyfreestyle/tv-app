<?php

namespace Database\Seeders\admin\faq;;


use App\Models\admin\faq\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FaqSeeder extends Seeder
{

    public function run(): void
    {
        Faq::unguard();
        $tablePath = public_path('db/faqs.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
