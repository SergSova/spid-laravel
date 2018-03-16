<?php
/**
 * @var \App\Seo $seo_model
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
                    {{ Form::label('seo_title','SEO Title') }}
                    {{ Form::text('seo_title', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('seo_keywords','SEO Keywords') }}
                    {{ Form::text('seo_keywords', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('seo_description','SEO Description') }}
                    {{ Form::textarea('seo_description', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('seo_text','SEO Text') }}
                    {{ Form::textarea('seo_text', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('og_title','OG Title') }}
                    {{ Form::text('og_title', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('og_description','OG Description') }}
                    {{ Form::textarea('og_description', null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('og_image','OG Image') }}
                    {{ Form::text('og_image',null,['class'=>'form-control']) }}
                </div>
            </div>
        </div>
    </div>
</div>
