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
 * @property int         seo_id
 * @property Seo         seo
 * @property FaqAnswer[] questions
 */
class StaticPage extends Model
{
    protected $fillable = ['title', 'longtitle', 'description', 'menutitle'];


    public function saveSeo($request)
    {
        if ($Request_seo = $request->get('Seo')) {
            if (!$seo = $this->seo) {
                $seo = new Seo();
            }
            $seo->fill($Request_seo)->save();
            $this->seo_id = $seo->id;
            $this->save();
        }
    }

    public function getQuestions()
    {
        return FaqAnswer::orderBy('index')->get();
    }

    public function seo()
    {
        return $this->hasOne(Seo::class, 'id', 'seo_id');
    }

    public function getNext()
    {
        $obj = [
            'title' => ' ',
            'alias' => '',
        ];
        $mod = self::where(['page_index' => $this->page_index + 1])->first();
        if ($mod) {
            $obj['title'] = $this->clearTitle($mod);
            $obj['alias'] = $mod->alias;
        }

        return $obj;
    }

    public function clearTitle($model)
    {
        return $this->my_mb_ucfirst(preg_replace('/[\/-:]/', '', strip_tags($model->title)));
    }

    protected function my_mb_ucfirst($str)
    {
        $fc = mb_strtoupper(mb_substr($str, 0, 1));

        return $fc.mb_substr($str, 1);
    }

    public function getPrev()
    {
        $obj = [
            'title' => ' ',
            'alias' => '',
        ];

        $model = self::where(['page_index' => $this->page_index - 1])->first();
        if ($model) {
            $obj['title'] = $this->clearTitle($model);
            $obj['alias'] = $model->alias == 'index' ? '/' : $model->alias;
        }

        return $obj;
    }

    public function getTitle()
    {
        return $this->seo->seo_title ?? $this->clearTitle($this).' | '.config('app.name');
    }

    public function merge($obj)
    {
        if (!is_null($obj)) {
            foreach ($obj as $key => $val) {
                $this->$key = $val;
            }
        }

        return $this;
    }

    public function saveCustomField($request, $name)
    {
        switch ($name) {
            case 'faq':
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
                break;
            case 'aids':
                $this->description = json_encode(
                    [
                        'modal_text'   => $_POST['modal_text'],
                        'modal_btn'    => $_POST['modal_btn'],
                        'modal_bottom' => $_POST['modal_bottom'],
                    ]
                );
                break;
            case 'slide-bubles':
                $this->description = json_encode(
                    [
                        'modal_text' => $_POST['modal_text'],
                        'modal_btn'  => $_POST['modal_btn'],
                        'wrong'      => $_POST['wrong'],
                    ]
                );
                break;
            case 'slide-rocket':
                $this->description = json_encode(
                    [
                        'modal_text'  => $_POST['modal_text'],
                        'modal_btn'   => $_POST['modal_btn'],
                        'text_bottom' => $_POST['text_bottom'],
                        'wrong'       => $_POST['wrong'],
                    ]
                );
                break;
            case 'with-who':
                $this->description = json_encode(
                    [
                        'modal_text' => $_POST['modal_text'],
                        'modal_btn'  => $_POST['modal_btn'],
                        'pop_title'  => $_POST['pop_title'],
                        'chk_1'      => $_POST['chk_1'],
                        'chk_2'      => $_POST['chk_2'],
                        'chk_3'      => $_POST['chk_3'],
                        'chk_4'      => $_POST['chk_4'],
                        'chk_5'      => $_POST['chk_5'],
                        'chk_6'      => $_POST['chk_6'],
                    ]
                );
                $humans = $request->only('Human')['Human'];
                $this->longtitle = json_encode($humans);
                break;
            case 'bandit':
                $this->description = json_encode(
                    [
                        'modal_text'  => $_POST['modal_text'],
                        'modal_btn'   => $_POST['modal_btn'],
                        'tumb_on_off' => $_POST['tumb_on_off'],
                        'rocket_btn'  => $_POST['rocket_btn'],
                        'rotator1'    => $_POST['rotator1'],
                        'rotator2'    => $_POST['rotator2'],
                        'rotator3'    => $_POST['rotator3'],
                        'rotator4'    => $_POST['rotator4'],
                    ]
                );
                break;
            case 'condoms-white':
                $this->description = json_encode(
                    [
                        'Tabs' => $_POST['Tab'],
                    ]
                );
                break;
            case 'consultants':
                $this->description = json_encode(
                    [
                        'description'  => $_POST['description'],
                        'consultants'  => $_POST['Consultant'],
                        'consHeader_1' => $_POST['consHeader_1'],
                        'consHeader_2' => $_POST['consHeader_2'],
                        'consHeader_3' => $_POST['consHeader_3'],
                        'consHeader_4' => $_POST['consHeader_4'],
                        'consHeader_5' => $_POST['consHeader_5'],
                        'consHeader_6' => $_POST['consHeader_6'],
                        'consHeader_7' => $_POST['consHeader_7'],
                        'list'         => $_POST['list'],
                    ]
                );
                break;
            case 'aids-test':
                $this->description = json_encode(
                    [
                        'description'   => $_POST['description'],
                        'test_btn'      => $_POST['test_btn'],
                        'test_btn_next' => $_POST['test_btn_next'],
                    ]
                );
                break;
        }
        $this->save();

    }

    public function loadCustomField($name)
    {
        $modal = json_decode($this->description);
        $this->merge($modal);

        switch ($name) {
            case 'aids':
                break;
            case 'slide-bubles':
                break;
            case'slide-rocket':
                break;
            case 'with-who':
                $this->humans = json_decode($this->longtitle) ?? [];
                break;
            case 'condoms-white':
                break;
            case 'consultants':
                $this->consultants = $model->consultants ?? [];
                break;
        }
    }
}
