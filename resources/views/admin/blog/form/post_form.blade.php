<?php

/**
 * @var \App\Post $model
 */

?>

<div class="form-group">
    {{ Form::label('category_id', 'Категория') }}
    {{ Form::select('category_id', $model->allCategory, $model->category_id,['class'=>'custom-select','placeholder'=>'Выберете категорию']) }}
</div>

<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
    <small class="form-text text-muted">~ - символ разделения строк</small>
</div>

@include('admin.chanks.img_lfm',['id'=>'2','name'=>'mainImage','title'=>'Основная картинка'])

<div class="form-row">
    <div class="form-check col">
        {{ Form::checkbox('isBig',1,false,['class'=>'form-check-input']) }}
        {{ Form::label('isBig','Важная статья',['class'=>'form-check-label']) }}
    </div>
    <div class="form-check col">
        {{ Form::checkbox('isBlackTitle',1,false,['class'=>'form-check-input']) }}
        {{ Form::label('isBlackTitle','Цвет заголовка черный',['class'=>'form-check-label']) }}
    </div>
    <div class="form-check col">
        {{ Form::checkbox('isVioletPostStyle',1,false,['class'=>'form-check-input']) }}
        {{ Form::label('isVioletPostStyle','Фиолетовая статья',['class'=>'form-check-label']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('content','Содержимое') }}
    {{ Form::textarea('content',null, ['class'=>'form-control my-editor']) }}
</div>
<div class="form-group">
    {{ Form::label('description','Краткое описание') }}
    {{ Form::textarea('description',null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('author','Автор') }}
    {{ Form::text('author',null, ['class'=>'form-control']) }}
</div>

@include('admin.chanks.img_lfm',['id'=>'1','name'=>'authorImage','title'=>'Картинка автора'])

<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                    Слайдер
                </a>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                @forelse($model->slider as $key=>$photo)
                    <div class="row photo-wrap">
                        <div class="form-group col-lg-1">
                            {{ Form::text("Photo[$key][index]", $key,['class'=>'index-text form-control-plaintext','readonly'=>1]) }}
                        </div>
                        <div class="col">
                            @include('admin.chanks.img_lfm',['id'=>'photo'.$key,'name'=>"Photo[$key][path]",'title'=>'Фото '.$key])

                            <div class="form-row">
                                <div class="form-group col">
                                    {{ Form::label("Photo[$key][title]",'Title') }}
                                    {{ Form::textarea("Photo[$key][title]",$photo->title,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group col">
                                    {{ Form::label("Photo[$key][alt]",'Alt') }}
                                    {{ Form::textarea("Photo[$key][alt]",$photo->alt,['class'=>'form-control']) }}
                                </div>
                            </div>
                        </div>
                        <div class="index-change col-lg-1">
                            <span class="btn btn-sm btn-info btn-upp">&uarr;</span>
                            <span class="btn btn-sm btn-info btn-down">&darr;</span>
                        </div>
                    </div>
                @empty
                    <div class="row photo-wrap">
                        <div class="form-group col-lg-1">
                            {{ Form::text('Photo[0][index]',null,['class'=>'index-text form-control-plaintext','readonly'=>1]) }}
                        </div>
                        <div class="col">
                            @include('admin.chanks.img_lfm',['id'=>'photo0','name'=>"Photo[0][path]",'title'=>'Фото 0'])

                            <div class="form-row">
                                <div class="form-group col">
                                    {{ Form::label("Photo[0][title]",'Title') }}
                                    {{ Form::text("Photo[0][title]",null,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group col">
                                    {{ Form::label("Photo[0][alt]",'Alt') }}
                                    {{ Form::text("Photo[0][alt]",null,['class'=>'form-control']) }}
                                </div>
                            </div>
                        </div>
                        <div class="index-change col-lg-1">
                            <span class="btn btn-sm btn-info btn-upp">&uarr;</span>
                            <span class="btn btn-sm btn-info btn-down">&darr;</span>
                        </div>
                    </div>
                @endforelse
                <div class="form-group add-photo btn btn-success">Добавить фото</div>
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-check col">
        {{ Form::checkbox('published',1,true,['class'=>'form-check-input']) }}
        {{ Form::label('published','Опубликовано',['class'=>'form-check-label']) }}
    </div>
    <div class="form-check col">
        {{ Form::datetime('publishedOn',$model->publishedOn?? date('Y-m-d H:i:s'),['class'=>'form-control']) }}
    </div>
</div>

@section('scripts')
    <script type="text/javascript" src="{{ asset('/assets/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $(function () {
            function changeAttr(count, att) {
                if ($(this).attr(att)) {
                    var name = $(this).attr(att).replace(/\d+/, count);
                    $(this).attr(att, name);
                }
            }

            $('.add-photo').on('click', function () {
                var photo = $('.photo-wrap').first().clone();
                var count = $('.photo-wrap').length;
                photo.find('input,img').each(function () {
                    changeAttr(count, 'name');
                    changeAttr(count, 'id');

                    $(this).removeAttr('src');
                    $(this).val(null);
                });
                photo.find('a').each(function () {
                    changeAttr(count, 'id');
                    changeAttr(count, 'data-input');
                    changeAttr(count, 'data-preview');
                    $(this).html($(this).html().replace(/\d+/, count));

                });
                photo.insertBefore($(this));
            });
        });

    </script>
@endsection