<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\StaticPage;

/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 14.03.2018
 * Time: 11:30
 */
class SiteController extends Controller
{
    protected $prefix = 'site.';


    public function index()
    {
        /** @var StaticPage $model */
        $model = StaticPage::find(2);
        $model->title = preg_replace('/(\w+)\s(\w+)/u', '$1 <div> $2 </div>', $model->title);
        $model->longtitle = '<span>'.join('</span><span>', explode('/', $model->longtitle)).'</span>';

        return view($this->prefix.'index')->with(compact('model'));
    }

    public function aids()
    {
        $model = StaticPage::find(3);
        $next = $model->getNext();
        $prev = $model->getPrev();

        $modal = json_decode($model->description);

        $model->title = join('<br>', explode('/', $model->title));
        $model->modal_text = '<p>'.join('</p><p>', explode('/', $modal->modal_text)).'</p>';
        $model->modal_btn = $modal->modal_btn;
        $model->modal_bottom = '<p>'.join('<br>', explode('/', $modal->modal_bottom)).'</p>';

        return view($this->prefix.'aids')->with(compact('model', 'next', 'prev'));
    }

    public function slideBubles()
    {
        $model = StaticPage::find(4);
        $next = $model->getNext();
        $prev = $model->getPrev();

        $modal = json_decode($model->description);
        $model->merge($modal);

        return view($this->prefix.'slide-bubles')->with(compact('model', 'next', 'prev'));
    }

    public function slideRocket()
    {
        $model = StaticPage::find(5);
        $next = $model->getNext();
        $prev = $model->getPrev();

        $model->title = join('<br>', explode('/', $model->title));
        $modal = json_decode($model->description);
        $model->modal_text = '<p>'.join('</p><p>', explode('/', $modal->modal_text)).'</p>';
        $model->modal_btn = $modal->modal_btn;
        $model->text_bottom = explode('/', $modal->text_bottom);
        $model->wrong = join('<br>', explode('/', $modal->wrong));

        return view($this->prefix.'slide-rocket')->with(compact('model', 'next', 'prev'));
    }

    public function withWho()
    {
        /** @var StaticPage $model */
        $model = StaticPage::find(6);
        $next = $model->getNext();
        $prev = $model->getPrev();

        $model->title = join('<br>', explode('/', $model->title));
        $modal = json_decode($model->description);
        $model->merge($modal);
        $model->modal_text = '<p>'.join('</p><p>', explode('/', $modal->modal_text)).'</p>';

        $humans = json_decode($model->longtitle)??[];


        return view($this->prefix.'with-who')->with(compact('model', 'humans', 'next', 'prev'));
    }

    public function bandit()
    {
        return view($this->prefix.'bandit')->with(compact('title'));
    }

    public function condomsWhite()
    {
        return view($this->prefix.'condoms-white')->with(compact('title'));
    }

    public function consultants()
    {
        return view($this->prefix.'consultants')->with(compact('title'));
    }

    public function testPage()
    {
        return view($this->prefix.'test-page')->with(compact('title'));
    }

    public function faq()
    {
        $model = StaticPage::find(1);

        return view($this->prefix.'faq')->with(compact('model'));
    }
}