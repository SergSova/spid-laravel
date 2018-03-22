<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 22.03.2018
 * Time: 12:55
 */

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\StaticPage;

class BaseController extends Controller
{

    public $menu = null;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        StaticPage::find([1, 2, 7, 8, 9, 10, 11])->each(
            function ($item) {
                $this->menu[$item->alias] = [
                    'title'  => $item->clearTitle($item),
                    'active' => false,
                ];
            }
        );
    }
}