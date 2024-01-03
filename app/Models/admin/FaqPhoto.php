<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqPhoto extends Model
{
    use HasFactory;
    protected $table = "faq_photos";
    protected $primaryKey = 'id';


}
