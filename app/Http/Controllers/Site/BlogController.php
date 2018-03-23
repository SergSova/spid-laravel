<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 14.03.2018
 * Time: 12:00
 */

namespace App\Http\Controllers\Site;


use App\Blog;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $model = Blog::find(10);
        $allPosts = Post::where('published', 1)->orderBy('publishedOn', 'desc')->get();
        $big = $allPosts->filter(
            function ($post, $key) {
                return $post->isBig;
            }
        );
        $violets = $allPosts->filter(
            function ($post, $key) {
                return $post->isVioletPostStyle;
            }
        );
        $otherPosts = $allPosts->filter(
            function ($post, $key) {
                return !$post->isVioletPostStyle&&!$post->isBig;
            }
        );

        $posts = collect();
        $count = count($allPosts);
        for ($i = 1; $i <= $count; $i++) {
            if (count($violets)) {
                if ($i == 3) {
                    $posts->push($violets->shift());
                } elseif (($i - 3) % 5 == 0) {
                    $posts->push($violets->shift());
                } elseif (($i == 1 || ($i-1) % 3 == 0) && count($big)) {
                    $posts->push($big->shift());
                } else {
                    $posts->push($otherPosts->shift());
                }
            } else {
                if (($i == 1 || ($i-1) % 3 == 0) && count($big)) {
                    $posts->push($big->shift());
                } else {
                    $posts->push($otherPosts->shift());
                }
            }
        }

//        dd($big, $otherPosts,$posts);

//        return view('blog.index')->with(compact('model','posts'));
        return view('blog.test')->with(compact('model', 'posts'));
    }
}