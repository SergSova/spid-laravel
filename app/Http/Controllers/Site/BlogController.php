<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 14.03.2018
 * Time: 12:00
 */

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
}