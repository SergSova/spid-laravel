<?php

namespace App;

use App\Http\Middleware\Locale;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BlogCategory
 *
 * @package App
 * @property int     id
 * @property string  title_ru
 * @property string  title_uk
 * @property string  icon
 * @property string  slug
 * @property boolean isMain
 * @property int     seo_id_ru
 * @property int     seo_id_uk
 */
class BlogCategory extends Model
{
    protected $fillable = ['title_ru', 'title_uk', 'icon', 'isMain'];

    protected $casts
        = [
            'isMain' => 'boolean',
        ];

    public function getTitleAttribute()
    {
        return $this->{'title_'.app()->getLocale()} ?? $this->{'title_'.Locale::$mainLanguage}.'*';
    }


    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function getSeoAttribute($key)
    {
        return $this->{'seo'.app()->getLocale()};
    }

    public function seoru()
    {
        return $this->hasOne(Seo::class, 'id', 'seo_id_ru');
    }

    public function seouk()
    {
        return $this->hasOne(Seo::class, 'id', 'seo_id_uk');
    }

}
