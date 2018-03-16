<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
    <small class="form-text text-muted">Символ / для переноса строки</small>
</div>
<div class="form-group">
    {{ Form::label('modal_text','Текст подсказки') }}
    {{ Form::text('modal_text',null, ['class'=>'form-control']) }}
    <small class="form-text text-muted">Символ / для переноса строки</small>
</div>
<div class="form-group">
    {{ Form::label('modal_btn','Текст кнопки') }}
    {{ Form::text('modal_btn',null, ['class'=>'form-control']) }}
</div>


<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingForms">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseForms" role="button" aria-expanded="false" aria-controls="collapseForms">
                    Форма
                </a>
            </h5>
        </div>
        <div id="collapseForms" class="collapse" aria-labelledby="headingForms" data-parent="#accordion">
            <div class="card-body">
                <div class="form-group">
                    {{ Form::label('pop_title','Заголовок всплывающих окон') }}
                    {{ Form::text('pop_title',null, ['class'=>'form-control']) }}
                    <small class="form-text text-muted">А чего <span class="text-danger text-uppercase">*ты*</span> не знаешь о себе? (** -звездочки для выделения слова)</small>
                </div>
                @for($i=1;$i<=6;$i++)
                    <div class="form-group">
                        {{ Form::label('chk_'.$i,'Текст '.$i) }}
                        {{ Form::text('chk_'.$i,null, ['class'=>'form-control']) }}
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>


<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingHuman">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseHuman" role="button" aria-expanded="false" aria-controls="collapseHuman">
                    Люди
                </a>
            </h5>
        </div>
        <div id="collapseHuman" class="collapse" aria-labelledby="headingHuman" data-parent="#accordion">
            <div class="card-body">
                @forelse($model->humans as $key=>$human)
                    <div class="form-row human-wrap">
                        <div class="col form-group ">
                            {{ Form::label("Human[$key][title]",'Имя') }}
                            {{ Form::text("Human[$key][title]", $human->title,['class'=>'form-control']) }}
                        </div>
                        <div class="col form-group">
                            {{ Form::label("Human[$key][illness]",'Заболевание') }}
                            {{ Form::text("Human[$key][illness]",$human->illness,['class'=>'form-control']) }}
                        </div>
                        <div class="col-lg-7 form-group">
                            {{ Form::label("Human[$key][images]",'Картинка') }}
                            {{ Form::text("Human[$key][images]",$human->images,['class'=>'form-control']) }}
                        </div>
                    </div>
                @empty
                    <div class="form-row human-wrap">
                        <div class="col form-group">
                            {{ Form::text('Human[0][title]',null,['class'=>'form-control','placeholder'=>'Имя']) }}
                        </div>
                        <div class="col form-group ">
                            {{ Form::text('Human[0][illness]',null,['class'=>'form-control','placeholder'=>'Заболевание']) }}
                        </div>
                        <div class="col form-group">
                            {{ Form::text("Human[0][images]",null,['class'=>'form-control','placeholder'=>'Картинка']) }}
                        </div>
                    </div>
                @endforelse
                {{--<div class="form-group add-human btn btn-success">Добавить человека</div>--}}
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $(function () {
            $('.add-human').on('click', function () {
                var human = $('.human-wrap').first().clone();
                var count = $('.human-wrap').length;
                if (count >= 8) return;
                human.find('input,textarea').each(function () {
                    var name = $(this).attr('name').replace(/\d+/, count);
                    $(this).attr('name', name);
                    $(this).val(null);
                });
                human.insertBefore($(this));
            });
        });
    </script>
@endsection