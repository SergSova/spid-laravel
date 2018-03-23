<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 20.03.2018
 * Time: 15:51
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use stdClass;

/**
 * Class Post
 *
 * @package App
 * @property int     $id
 * @property string  $title
 * @property bool    $published
 * @property string  $publishedOn
 * @property string  $mainImage
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
 */
class Post extends Model
{
    protected $fillable
        = [
            'title',
            'mainImage',
            'isBlackTitle',
            'isVioletPostStyle',
            'isBig',
            'content',
            'description',
            'author',
            'category_id',
            'authorImage',
            'published',
            'publishedOn',
        ];

    public function nav($direction)
    {
        $obj = new stdClass();
        $obj->title = '';
        $obj->alias = '';
        $index = $this->index + ($direction == 'next' ? 1 : -1);
        $mod = self::where(['page_index' => $index])->first();
        if ($mod) {
            $obj->title = $this->clearTitle($mod);
            $obj->alias = $mod->alias;
        }

        return $obj;
    }

    public function prev()
    {
        return $this->nav('prev');
    }

    public function next()
    {
        return $this->nav('next');
    }

    public function seo()
    {
        return $this->hasOne(Seo::class, 'id', 'seo_id');
    }

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

}