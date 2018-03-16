<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seo
 *
 * @package App
 * @property string seo_title
 * @property string seo_keywords
 * @property string seo_description
 * @property string seo_text
 * @property string og_title
 * @property string og_description
 * @property string og_image
 */
class Seo extends Model
{
    protected $fillable = ['sd'];
}
