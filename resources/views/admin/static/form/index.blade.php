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
                {{ Form::label('title_'.$lang, 'Скрытый текст (2 слова)') }}
                {{ Form::text('title_'.$lang, NULL ,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('longtitle_'.$lang,'Текст ответа') }}
                {{ Form::text('longtitle_'.$lang,NULL, ['class'=>'form-control']) }}
                <small class="form-text text-muted">/ - символ разделения строк</small>
            </div>
            <div class="form-group">
                {{ Form::label('description_'.$lang,'Текст подсказки') }}
                {{ Form::text('description_'.$lang,NULL, ['class'=>'form-control']) }}
            </div>
        </div>
    @endforeach
</div>
<div class="form-row">
    <div class="form-group col">
        {{ Form::checkbox('isMusicOn',1,NULL, ['class'=>'form-check-input','id'=>'isMusicOn']) }}
        {{ Form::label('isMusicOn','Проигрывать мелодию на сайте') }}
    </div>

    <div class="form-group">
        <div class="input-group">
        <span class="input-group-btn">
          <a id="lfmmainMusic" data-input="thumbmainMusic" data-preview="holdermainMusic" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> Музыка для сайта
          </a>
        </span>
            <input id="thumbmainMusic" class="form-control" type="text" name="mainMusic" value="{{ $model->mainMusic }}">
        </div>
    </div>

</div>

@section('scripts')
    @parent
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('#lfmmainMusic').filemanager('music');
    </script>
@endsection
