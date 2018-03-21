<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 20.03.2018
 * Time: 15:51
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 * @property int id
 * @property string title
 * @property string longtitle
 * @property string description
 * @property string main_image
 * @property string icon
 * @property int viewers
 * @property int page_index
 * @property string menutitle
 * @property int seo_id
 */
class Post extends Model {
	protected $fillable = [
		'id',
		'title',
		'longtitle',
		'description',
		'main_image',
		'icon',
		'viewers',
		'page_index',
		'menutitle',
		'seo_id',
	];
}