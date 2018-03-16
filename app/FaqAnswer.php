<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqAnswer
 *
 * @package App
 * @property string question
 * @property string answer
 * @property int    index
 */
class FaqAnswer extends Model
{
    protected $fillable = ['question', 'answer', 'index'];
    //
}
