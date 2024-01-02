<?php

namespace App\Models\admin;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class FaqCategory extends Model implements TranslatableContract , LocalizedUrlRoutable
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;


    public $translatedAttributes = ['slug','name','des','g_title','g_des'];
    protected $fillable = [''];
    protected $table = "faq_categories";
    protected $primaryKey = 'id';
    protected $translationForeignKey = 'category_id';

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function faqs()
    {
        return $this->belongsToMany(Faq::class,'faqcategory_faq','category_id','faq_id')
            ->withPivot('postion')->orderBy('postion');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function scopeDefquery(Builder $query): Builder
    {
        return $query->with('translations');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #

    public function scopeDefWeb(Builder $query): Builder
    {
        return $query->where('is_active',true)
            ->with('translation')
            ->with('faqs')
            ->withCount('faqs')
            ->orderBy('faqs_count','DESC')
            ;
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function slugs(): HasMany
    {
        return $this->hasMany(FaqCategoryTranslation::class,'category_id','id');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #
    public function getLocalizedRouteKey($locale)
    {
        return $this->slugs()->where('locale',$locale)->first()->slug;
    }
}
