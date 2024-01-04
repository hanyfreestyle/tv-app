<?php

namespace App\Models\admin\faq;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqPivot extends Model
{
    use HasFactory;
    protected $table = "faqcategory_faq";
}
