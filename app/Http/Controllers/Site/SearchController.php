<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 03.04.2018
 * Time: 15:27
 */

namespace App\Http\Controllers\Site;


use App\FaqAnswer;
use App\Http\Controllers\Controller;
use App\Post;

class SearchController extends Controller
{

    public function search($search)
    {
        $lang = app()->getLocale();
        $static = FaqAnswer::where('question_'.$lang, 'like', '%'.$search.'%')
            ->orWhere('answer_'.$lang, 'like', '%'.$search.'%')
            ->get();
//        $posts = Post::where();
        dd($static);
        return $search;
    }
}