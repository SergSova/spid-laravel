<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        @foreach(\App\Http\Middleware\Locale::$languages as $lang)
            <a class="nav-item nav-link {{$loop->first?'active':''}}" id="nav-{{$lang}}-tab" data-toggle="tab"
               role="tab" aria-controls="nav-{{$lang}}" aria-selected="true"
               href="#nav-{{$lang}}">{{$lang=='uk'?'ua':$lang}}</a>
        @endforeach
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
    @foreach(\App\Http\Middleware\Locale::$languages as $lang)
        <div class="tab-pane fade {{$loop->first?'show active':''}}" id="nav-{{$lang}}" role="tabpanel"
             aria-labelledby="nav-{{$lang}}-tab">
            <div class="form-group">
                {{ Form::label('title_'.$lang, 'Заголовок') }}
                {{ Form::text('title_'.$lang, null ,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('modal_text_'.$lang,'Текст подсказки') }}
                {{ Form::text('modal_text_'.$lang,null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('modal_btn_'.$lang,'Текст кнопки') }}
                {{ Form::text('modal_btn_'.$lang,null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('wrong_'.$lang,'Текст ошибки') }}
                {{ Form::text('wrong_'.$lang,null, ['class'=>'form-control']) }}
            </div>
        </div>
    @endforeach
</div>
