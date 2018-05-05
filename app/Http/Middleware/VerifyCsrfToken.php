<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    public function __construct(Application $app, Encrypter $encrypter)
    {
        parent::__construct($app, $encrypter);
        array_push($this->except,route('search'));
        array_push($this->except,route('search-faq'));
        array_push($this->except,route('search-blog'));
    }


}
