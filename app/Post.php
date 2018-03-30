<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 20.03.2018
 * Time: 15:51
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

/**
 * Class Post
 *
 * @package App
 * @property int     $id
 * @property string  $title
 * @property bool    $published
 * @property string  $publishedOn
 * @property string  $mainImage
 * @property string  $mainVideo
 * @property boolean $isVideo
 * @property boolean $isBlackTitle
 * @property boolean $isVioletPostStyle
 * @property boolean $isBig
 * @property string  $content
 * @property string  $description
 * @property string  $slider
 * @property int     $viewers
 * @property int     $followers
 * @property string  $author
 * @property string  $authorImage
 * @property int     $index
 * @property string  $slug
 * @property int     $category_id
 * @property int     $seo_id
 * @property Carbon  $deleted_at
 */
class Post extends Model
{
    use SoftDeletes;

    protected $casts
        = [
            'published'         => 'boolean',
            'isVideo'           => 'boolean',
            'isBlackTitle'      => 'boolean',
            'isVioletPostStyle' => 'boolean',
            'isBig'             => 'boolean',
        ];

    protected $dates = ['deleted_at'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->Slider = $this->slider ? json_decode($this->slider) : collect();
    }

    public function getModTitleAttribute()
    {
        return strstr( $this->title,'~') ? '<span>'.implode('</span> <span>', explode('~', $this->title)).'</span>' : $this->title;
    }

    public function getSliderAttribute($value)
    {
        return collect(json_decode($value));
    }

    protected $fillable
        = [
            'title',
            'mainImage',
            'isBlackTitle',
            'isVioletPostStyle',
            'isBig',
            'isVideo',
            'mainVideo',
            'content',
            'description',
            'author',
            'category_id',
            'authorImage',
            'published',
            'publishedOn',
        ];

    public function seo()
    {
        return $this->hasOne(Seo::class, 'id', 'seo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(BlogCategory::class, 'id', 'category_id');
    }

    public function saveSeo($request)
    {
        if ($Request_seo = $request->get('Seo')) {
            if (!$seo = $this->seo) {
                $seo = new Seo();
            }
            $seo->fill($Request_seo)->save();
            $this->seo_id = $seo->id;
            $this->save();
        }
    }

    public function getUrlAttribute()
    {
        return route('blogArticle', [$this->category->slug, $this->slug]);
    }

    public function getFormatDataAttribute()
    {
        /** @var Carbon $data */
        $data = $this->publishedOn;
        if (is_null($data)) {
            return '-';
        }

        $date = Carbon::parse($data);

        return $date->diffInHours(Carbon::now()) == 0
            ? $date->diffForHumans()
            :
            $date->day.' '.Lang::get('month.m'.$date->month).' '.$date->year.' '.$date->hour.':'.$date->minute;
    }

    public function getFullDataAttribute()
    {
        $date = Carbon::parse($this->publishedOn);

        return $date->day
            .' '
            .Lang::get('month.m'.$date->month)
            .' '
            .$date->year
            .' '
            .Lang::get('site.year');
    }

}