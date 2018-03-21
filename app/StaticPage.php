<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StaticPage
 *
 * @package App
 * @property string title
 * @property string longtitle
 * @property string description
 * @property int page_index
 * @property string menutitle
 * @property boolean published
 * @property string alias
 * @property int seo_id
 * @property Seo getSeo
 * @property FaqAnswer[] questions
 */
class StaticPage extends Model {
	protected $fillable = [ 'title', 'longtitle', 'description', 'menutitle' ];

	public static function saved( $callback ) {
		parent::saved( $callback );
	}

	public function getQuestions() {
		return FaqAnswer::orderBy( 'index' )->get();
	}

	public function getSeo() {
		return $this->hasOne( Seo::class );
	}

	public function getNext() {
		$obj = [
			'title' => ' ',
			'alias' => ' ',
		];
		$mod = self::where( [ 'page_index' => $this->page_index + 1 ] )->first();
		if ( $mod ) {
			$obj['title'] = $this->clearTitle( $mod );
			$obj['alias'] = $mod->alias;
		}

		return $obj;
	}

	public function clearTitle( $model ) {
		return $this->my_mb_ucfirst( preg_replace( '/[\/-:]/', '', strip_tags( $model->title ) ) );
	}

	protected function my_mb_ucfirst( $str ) {
		$fc = mb_strtoupper( mb_substr( $str, 0, 1 ) );

		return $fc . mb_substr( $str, 1 );
	}

	public function getPrev() {
		$obj = [
			'title' => ' ',
			'alias' => ' ',
		];

		$model = self::where( [ 'page_index' => $this->page_index - 1 ] )->first();
		if ( $model ) {
			$obj['title'] = $this->clearTitle( $model );
			$obj['alias'] = $model->alias == 'index' ? '/' : $model->alias;
		}

		return $obj;
	}

	public function getTitle() {
		return $this->seo->seo_title ?? $this->clearTitle( $this ) . ' | ' . config( 'app.name' );
	}

	public function merge( $obj ) {
		if ( ! is_null( $obj ) ) {
			foreach ( $obj as $key => $val ) {
				$this->$key = $val;
			}
		}

		return $this;
	}
}
