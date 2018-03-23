<?php

namespace App;

/**
 * Class Blog
 *
 * @package App
 * @property string      title
 * @property string      longtitle
 * @property string      description
 * @property int         page_index
 * @property string      menutitle
 * @property boolean     published
 * @property string      alias
 * @property int         seo_id
 * @property Seo         getSeo
 * @property FaqAnswer[] questions
 */
class Blog extends StaticPage
{


    protected $table = 'static_pages';

    /**
     * @return Post[]
     */
    public function posts()
    {
        return Post::where(['published' => 1])->orderBy('index')->get();
    }

    protected $fillable = ['title', 'longtitle', 'description', 'menutitle'];

    public function seo()
    {
        return $this->hasOne(Seo::class, 'id', 'seo_id');
    }

}
