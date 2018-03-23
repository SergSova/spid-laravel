<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Blog::find(10);

        return view('admin.blog.index')->with(compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Post();
        $title = 'Создание статьи';
        $route = 'blog.store';
        $method = 'post';
        $model->slider = [];

        return view('admin.blog.form.form_create')->with(compact('model', 'title', 'route', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Post();
        if ($model->fill($request->all()) && $model->save()) {
            $model->slider = json_encode($request->get('Photo'));
            if ($model->save()) {
                return redirect(route('blog.index'));
            }
        }

        return redirect(route('blog.create'))->withInput($request->input());

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /** @var Post $model */
        $model = Post::find($id);
        $title = 'Редактирование статьи "'.$model->title.'"';
        $route = 'blog.update';
        $method = 'PUT';
        $model->slider = json_decode($model->slider) ?? [];

        return view('admin.blog.form.form_create')->with(compact('model', 'title', 'route', 'method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** @var Post $model */
        $model = Post::find($id);
        if ($model->fill($request->all()) && $model->save()) {
            $model->slider = json_encode($request->get('Photo'));
            if ($model->save()) {
                return redirect(route('blog.index'));
            }
        }

        return redirect(route('blog.edit', $id))->withInput($request->input());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Post::destroy($id);
    }
}
