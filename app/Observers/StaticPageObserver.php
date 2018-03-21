<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 21.03.2018
 * Time: 16:01
 */

namespace App\Observers;

use App\StaticPage;

class StaticPageObserver
{
    public function saved(StaticPage $model)
    {
        if ($Request_seo = $_POST['Seo']) {
            if (!$seo = $model->seo) {
                $seo = new Seo();
            }
            $seo->fill($Request_seo)->save();
            $model->seo_id = $seo->id;
            $model->save();
        }
    }
}