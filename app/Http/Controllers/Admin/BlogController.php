<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 14.03.2018
 * Time: 12:00
 */

namespace App\Http\Controllers\Admin;


use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\StaticPageRequest;
use App\Seo;
use App\StaticPage;
use http\Env\Request;

class BlogController extends Controller
{

    public function editStatic(StaticPageRequest $request)
    {
        /** @var Blog $model */
        $model = Blog::find(10);
        if ($request->isMethod('post') && $model->fill($request->all())->save()) {
            return redirect()->route('adminBlog');
        }
        $title = 'Редактирование Блога';

        return view('admin.blog.form.blog_edit')->with(compact('model', 'title'));
    }

    public function index()
    {
        $model = Blog::find(10);

        return view('admin.blog.index')->with(compact('model'));
    }

    /**
     * @param \http\Env\Request $request
     * @param \App\Post         $post
     *
     * @return mixed
     */
    public function editPost(Request $request, $post)
    {

        if ($request->isMethod('post') && $post->fill($request->all())->save()) {
            return redirect()->route('adminBlog');
        }

        $model = $post;

        return view('admin.blog.form.form_layout')->with(compact('model'));
    }
}