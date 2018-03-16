<?php

namespace App\Http\Controllers\Admin;

use App\FaqAnswer;
use App\Http\Requests\StaticPageRequest;
use App\StaticPage;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    protected $prefix = 'admin.static.';

    public function index()
    {
        $models = StaticPage::orderBy('page_index')->get();
        $title = 'Статические страницы';

        return view($this->prefix.'index')->with(compact('models', 'title'));
    }

    /**
     * @param StaticPageRequest $request
     * @param  StaticPage       $model
     * @param                   $name
     *
     * @return $this
     */
    public function edit(StaticPageRequest $request, $model, $name)
    {
        if ($request->isMethod('post') && $model->fill($request->all())->save()) {
            //region FAQ
            foreach ($request->only('Question') as $question) {
                foreach ($question as $q_el) {
                    if (!empty($q_el['id'])) {
                        /** @var FaqAnswer $answer */
                        $answer = FaqAnswer::find($q_el['id']);
                        $answer->fill($q_el);
                    } else {
                        $answer = new FaqAnswer($q_el);
                    }
                    $answer->save();
                }
            }
            //endregion
            //region AIDS save
            if ($name == 'aids') {
                $model->description = json_encode(
                    [
                        'modal_text'   => $_POST['modal_text'],
                        'modal_btn'    => $_POST['modal_btn'],
                        'modal_bottom' => $_POST['modal_bottom'],
                    ]
                );
                $model->save();

            }
            //endregion

            //region Bublies
            if ($name == 'slide-bubles') {
                $model->description = json_encode(
                    [
                        'modal_text' => $_POST['modal_text'],
                        'modal_btn'  => $_POST['modal_btn'],
                        'wrong'      => $_POST['wrong'],
                    ]
                );
                $model->save();
            }
            //endregion

            //region Rocket
            if ($name == 'slide-rocket') {
                $model->description = json_encode(
                    [
                        'modal_text' => $_POST['modal_text'],
                        'modal_btn'  => $_POST['modal_btn'],
                        'text_bottom'  => $_POST['text_bottom'],
                        'wrong'      => $_POST['wrong'],
                    ]
                );
                $model->save();
            }

            //endregion


            return redirect()->route('staticPage');
        }

        $modal = json_decode($model->description);
        switch ($name){
            case 'aids':
                $model->modal_text = $modal->modal_text;
                $model->modal_btn = $modal->modal_btn;
                $model->modal_bottom = $modal->modal_bottom;
                break;
            case 'slide-bubles':
                $model->modal_text = $modal->modal_text;
                $model->modal_btn = $modal->modal_btn;
                $model->wrong = $modal->wrong;
                break;
            case'slide-rocket':
                $model->modal_text = $modal->modal_text;
                $model->modal_btn = $modal->modal_btn;
                $model->text_bottom = $modal->text_bottom;
                $model->wrong = $modal->wrong;
                break;
        }


        $title = 'Редактирование '.ucfirst($name);

        $view = $this->prefix.'form.'.strtolower($name);

        return view($view)->with(
            compact('model', 'title')
        );
    }
}
