<?php
/**
 * @var \App\StaticPage $model
 */
?>
<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingSEO">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseSEO" role="button" aria-expanded="false" aria-controls="collapseSEO">
                    SEO
                </a>
            </h5>
        </div>
        <div id="collapseSEO" class="collapse" aria-labelledby="headingSEO" data-parent="#accordion">
            <div class="card-body">
                <div class="form-group">
                    {{ Form::label('Seo[seo_title]','SEO Title') }}
                    {{ Form::text('Seo[seo_title]', $model->seo->seo_title ??null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Seo[seo_keywords]','SEO Keywords') }}
                    {{ Form::text('Seo[seo_keywords]', $model->seo->seo_keywords ??null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Seo[seo_description]','SEO Description') }}
                    {{ Form::textarea('Seo[seo_description]', $model->seo->seo_description ??null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Seo[seo_text]','SEO Text') }}
                    {{ Form::textarea('Seo[seo_text]', $model->seo->seo_text ??null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Seo[og_title]','OG Title') }}
                    {{ Form::text('Seo[og_title]', $model->seo->og_title ??null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Seo[og_description]','OG Description') }}
                    {{ Form::textarea('Seo[og_description]', $model->seo->og_description ??null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('Seo[og_image]','OG Image') }}
                    {{ Form::text('Seo[og_image]',$model->seo->og_image ??null,['class'=>'form-control']) }}
                </div>
            </div>
        </div>
    </div>
</div>
