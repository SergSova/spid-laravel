<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 23.04.2018
 * Time: 12:19
 */

namespace App\Http\Controllers;

use App\FaqAnswer;
use App\Post;
use App\StaticPage;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{

    public function getPosts($date = 0)
    {

        return json_encode(
            Post::where('toApi', 1)->where('updated_at', '>=', $date)->get()->map(
                function ($el) {
                    /**
                     * @var $el Post
                     *
                     *
                     *
                     * title_ru         заголовок
                     * title_uk         заголовок
                     * description_ru   краткое описание
                     * description_uk   краткое описание
                     * content_ru       содержимое
                     * content_uk       содержимое
                     * published        опубликован
                     * publishedOn      дата публикации
                     * mainImage        основоная картинка
                     * mainVideo        видео для превью
                     * slider           слайдер (объект)
                     * viewers          количество просмотров
                     * author           имя автора
                     * authorImage      картинка автора
                     * slug             алиас
                     * created_at       дата создания
                     * updated_at       последняя дата обновления
                     * url              ссылка
                     * category         категория (объект)
                     *
                     */
                    $el->url = $el->url;
                    unset($el->index);
                    unset($el->followers);
                    unset($el->isBig);
                    unset($el->isVioletPostStyle);
                    unset($el->isBlackTitle);
                    unset($el->isVideo);
                    unset($el->toApi);
                    unset($el->seo_id_ru);
                    unset($el->seo_id_uk);
                    unset($el->deleted_at);
                    unset($el->category_id);
                    $el->mainImage = asset($el->mainImage);
                    $el->authorImage = asset($el->authorImage);
                    $el->slider = collect(json_decode($el->slider))->map(
                        function ($el) {
                            $el->path = asset($el->path);

                            return $el;
                        }
                    );
                    $el->category->icon = asset($el->category->icon);

                    return $el;
                }
            ),
            JSON_UNESCAPED_UNICODE
        );
    }

    public function getFaq($date = 0)
    {
        /**
         * question_ru вопрос на русском
         * question_uk вопрос на украинском
         * answer_ru ответ на русском
         * answer_uk ответ на украинском
         * index положение вопроса в списке
         */
        return json_encode(FaqAnswer::where('updated_at', '>=', $date)->get(), JSON_UNESCAPED_UNICODE);
    }

    public function getMetaSeo()
    {
        $static = StaticPage::all()->map(
            function ($el) {
                /** @var StaticPage $el */
                return [
                    'URL'         => route($el->alias),
                    'Title'       => $el->seo ? $el->seo->seo_title : '',
                    'Description' => $el->seo ? $el->seo->seo_description : '',
                ];
            }
        );
        $post = Post::where('published', 1)->orderBy('publishedOn', 'desc')->get()->map(
            function ($el) {
                /** @var Post $el */
                return [
                    'URL'         => $el->url,
                    'Title'       => $el->seo ? $el->seo->seo_title : '',
                    'Description' => $el->seo ? $el->seo->seo_description : '',
                ];
            }
        );

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=file.csv",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
        );

        $reviews = $static->merge($post);
        $columns = array('URL', 'Title', 'Description');

        $callback = function () use ($reviews, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($reviews as $review) {
                fputcsv(
                    $file,
                    $review
                );
            }
            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }

}
