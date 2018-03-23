<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 14.03.2018
 * Time: 12:00
 */

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\StaticPage;

class BlogController extends Controller
{
    public function index()
    {
        $model = StaticPage::find(10);

        return view('blog.index')->with(compact('model'));
    }
}