<?php

namespace App\Models\admin\faq;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FaqPhoto extends Model
{
    use HasFactory;
    protected $table = "faq_photos";
    protected $primaryKey = 'id';

    public function faqName(): BelongsTo
    {
        return $this->belongsTo(Faq::class,'faq_id','id');
    }


}
