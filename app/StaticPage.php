<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StaticPage
 *
 * @package App
 * @property string      title
 * @property string      longtitle
 * @property string      description
 * @property int         page_index
 * @property string      menutitle
 * @property boolean     published
 * @property string      alias
 * @property Seo         seo
 * @property FaqAnswer[] questions
 */
class StaticPage extends Model
{
    public static function saved($callback)
    {
        parent::saved($callback);
    }


    protected $fillable = ['title', 'longtitle', 'description', 'menutitle'];

    public function getQuestions()
    {
        return FaqAnswer::orderBy('index')->get();
    }

    public function getSeo()
    {
        return $this->hasOne(Seo::class);
    }

    public function getNext()
    {
        $obj = [
            'title' => ' ',
            'alias' => ' ',
        ];
        $mod = self::where(['page_index' => $this->page_index + 1])->first();
        if ($mod) {
            $obj['title'] = $this->clearTitle($mod);
            $obj['alias'] = $mod->alias;
        }

        return $obj;
    }

    public function getPrev()
    {
        $obj = [
            'title' => ' ',
            'alias' => ' ',
        ];

        $model = self::where(['page_index' => $this->page_index - 1])->first();
        if ($model) {
            $obj['title'] = $this->clearTitle($model);
            $obj['alias'] = $model->alias == 'index' ? '/' : $model->alias;
        }

        return $obj;
    }

    public function clearTitle($model)
    {
        return preg_replace('/[\/-:]/', '', $model->title);
    }

    public function getTitle()
    {
        return $this->seo->seo_title ?? $this->clearTitle($this).' | '.config('app.name');
    }

    public function merge($odj)
    {
        foreach ($odj as $key => $val) {
            $this->$key = $val;
        }
        return $this;
    }
}
