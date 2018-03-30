<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BlogCategory
 *
 * @package App
 * @property int     id
 * @property string  title
 * @property string  icon
 * @property string  slug
 * @property boolean isMain
 */
class BlogCategory extends Model
{
    protected $fillable = ['title', 'icon', 'isMain'];

    protected $casts
        = [
            'isMain' => 'boolean',
        ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

}
