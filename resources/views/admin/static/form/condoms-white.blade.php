<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
    <small class="form-text text-muted">/ - символ разделения строк</small>
</div>

@for($i=1;$i<=3;$i++)
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingForms_{{$i}}">
                <h5 class="mb-0">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseForms_{{$i}}" role="button" aria-expanded="false" aria-controls="collapseForms_{{$i}}">
                        Таб {{$i}}
                    </a>
                </h5>
            </div>
            <div id="collapseForms_{{$i}}" class="collapse" aria-labelledby="headingForms_{{$i}}" data-parent="#accordion">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            {{ Form::label("Tab[$i][title]",'Заголовок 1 таба') }}
                            {{ Form::text("Tab[$i][title]",$model->Tabs->{$i}->title??null, ['class'=>'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label("Tab[$i][menu_title]",'Заголовок меню') }}
                            {{ Form::text("Tab[$i][menu_title]",$model->Tabs->{$i}->menu_title??null, ['class'=>'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label("Tab[$i][add_box1]",'Подсказака 1') }}
                            {{ Form::text("Tab[$i][add_box1]",$model->Tabs->{$i}->add_box1??null, ['class'=>'form-control']) }}
                            {{ Form::textarea("Tab[$i][add_box1_text]",$model->Tabs->{$i}->add_box1_text??null, ['class'=>'form-control','rows'=>2]) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label("Tab[$i][add_box2]",'Подсказака 2') }}
                            {{ Form::text("Tab[$i][add_box2]",$model->Tabs->{$i}->add_box2??null, ['class'=>'form-control']) }}
                            {{ Form::textarea("Tab[$i][add_box2_text]",$model->Tabs->{$i}->add_box2_text??null, ['class'=>'form-control','rows'=>2]) }}
                        </div>
                        @for($j=1;$j<=6;$j++)
                            <div class="form-group">
                                {{ Form::hidden("Tab[$i][texts][$j][index]",$j) }}
                            </div>
                            <div class="col form-group">
                                {{ Form::label("Tab[$i][texts][$j][title]","Заголовок $j") }}
                                {{ Form::text("Tab[$i][texts][$j][title]",$model->Tabs->{$i}->texts->{$j}->title??null, ['class'=>'form-control']) }}
                            </div>
                            <div class="col form-group">
                                {{ Form::label("Tab[$i][texts][$j][text]","Текст $j") }}
                                {{ Form::textarea("Tab[$i][texts][$j][text]",$model->Tabs->{$i}->texts->{$j}->text??null, ['class'=>'form-control','rows'=>2]) }}
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endfor

