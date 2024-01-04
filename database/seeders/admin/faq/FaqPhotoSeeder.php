<?php

namespace Database\Seeders\admin\faq;


use App\Models\admin\faq\FaqPhoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FaqPhotoSeeder extends Seeder
{
    public function run(): void
    {
        FaqPhoto::unguard();
        $tablePath = public_path('db/faq_photos.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
